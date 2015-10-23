<?php

/**
 * @file
 * Contains \Drupal\views\Tests\Plugin\DisplayPageTest.
 */

namespace Drupal\views\Tests\Plugin;

use Drupal\Core\Menu\MenuTreeParameters;
use Drupal\Core\Session\AnonymousUserSession;
use Drupal\views\Views;
use Drupal\views\Tests\ViewKernelTestBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Tests the page display plugin.
 *
 * @group views
 * @see \Drupal\views\Plugin\display\Page
 */
class DisplayPageTest extends ViewKernelTestBase {

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = array('test_page_display', 'test_page_display_route', 'test_page_display_menu');

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('system', 'user', 'field');

  /**
   * The router dumper to get all routes.
   *
   * @var \Drupal\Core\Routing\MatcherDumper
   */
  protected $routerDumper;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Setup the needed tables in order to make the drupal router working.
    $this->installSchema('system', array('url_alias'));
  }

  /**
   * Checks the behavior of the page for access denied/not found behaviors.
   */
  public function testPageResponses() {
    \Drupal::currentUser()->setAccount(new AnonymousUserSession());
    $subrequest = Request::create('/test_page_display_403', 'GET');
    $response = $this->container->get('http_kernel')->handle($subrequest, HttpKernelInterface::SUB_REQUEST);
    $this->assertEqual($response->getStatusCode(), 403);

    $subrequest = Request::create('/test_page_display_404', 'GET');
    $response = $this->container->get('http_kernel')->handle($subrequest, HttpKernelInterface::SUB_REQUEST);
    $this->assertEqual($response->getStatusCode(), 404);

    $subrequest = Request::create('/test_page_display_200', 'GET');
    $response = $this->container->get('http_kernel')->handle($subrequest, HttpKernelInterface::SUB_REQUEST);
    $this->assertEqual($response->getStatusCode(), 200);

    $subrequest = Request::create('/test_page_display_200', 'GET');
    \Drupal::getContainer()->get('request_stack')->push($subrequest);

    // Test accessing a disabled page for a view.
    $view = Views::getView('test_page_display');
    // Disable the view, rebuild menu, and request the page again.
    $view->storage->disable()->save();
    // Router rebuild would occur in a kernel terminate event so we need to
    // simulate that here.
    \Drupal::service('router.builder')->rebuild();

    $response = $this->container->get('http_kernel')->handle($subrequest, HttpKernelInterface::SUB_REQUEST);
    $this->assertEqual($response->getStatusCode(), 404);
  }

  /**
   * Checks that the router items are properly registered
   */
  public function testPageRouterItems() {
    $collection = \Drupal::service('views.route_subscriber')->routes();

    // Check the controller defaults.
    foreach ($collection as $id => $route) {
      $this->assertEqual($route->getDefault('_controller'), 'Drupal\views\Routing\ViewPageController::handle');
      $id_parts = explode('.', $id);
      $this->assertEqual($route->getDefault('view_id'), $id_parts[1]);
      $this->assertEqual($route->getDefault('display_id'), $id_parts[2]);
    }

    // Check the generated patterns and default values.
    $route = $collection->get('view.test_page_display_route.page_1');
    $this->assertEqual($route->getPath(), '/test_route_without_arguments');

    $route = $collection->get('view.test_page_display_route.page_2');
    $this->assertEqual($route->getPath(), '/test_route_with_argument/{arg_0}');
    $this->assertTrue($route->hasDefault('arg_0'), 'A default value is set for the optional argument id.');

    $route = $collection->get('view.test_page_display_route.page_3');
    $this->assertEqual($route->getPath(), '/test_route_with_argument/{arg_0}/suffix');
    $this->assertFalse($route->hasDefault('arg_0'), 'No default value is set for the required argument id.');

    $route = $collection->get('view.test_page_display_route.page_4');
    $this->assertEqual($route->getPath(), '/test_route_with_argument/{arg_0}/suffix/{arg_1}');
    $this->assertFalse($route->hasDefault('arg_0'), 'No default value is set for the required argument id.');
    $this->assertTrue($route->hasDefault('arg_1'), 'A default value is set for the optional argument id_2.');

    $route = $collection->get('view.test_page_display_route.page_5');
    $this->assertEqual($route->getPath(), '/test_route_with_argument/{arg_0}/{arg_1}');
    $this->assertTrue($route->hasDefault('arg_0'), 'A default value is set for the optional argument id.');
    $this->assertTrue($route->hasDefault('arg_1'), 'A default value is set for the optional argument id_2.');

    $route = $collection->get('view.test_page_display_route.page_6');
    $this->assertEqual($route->getPath(), '/test_route_with_argument/{arg_0}/{arg_1}');
    $this->assertFalse($route->hasDefault('arg_0'), 'No default value is set for the required argument id.');
    $this->assertFalse($route->hasDefault('arg_1'), 'No default value is set for the required argument id_2.');
  }

  /**
   * Tests the generated menu links of views.
   */
  public function testMenuLinks() {
    \Drupal::service('plugin.manager.menu.link')->rebuild();
    $tree = \Drupal::menuTree()->load('admin', new MenuTreeParameters());
    $this->assertTrue(isset($tree['system.admin']->subtree['views_view:views.test_page_display_menu.page_4']));
    $menu_link = $tree['system.admin']->subtree['views_view:views.test_page_display_menu.page_4']->link;
    $this->assertEqual($menu_link->getTitle(), 'Test child (with parent)');
  }

  /**
   * Tests the calculated dependencies for various views using Page displays.
   */
  public function testDependencies() {
    $view = Views::getView('test_page_display');
    $this->assertIdentical([], $view->getDependencies());

    $view = Views::getView('test_page_display_route');
    $expected = [
      'content' => ['StaticTest'],
      'module' => ['views_test_data'],
    ];
    $this->assertIdentical($expected, $view->getDependencies());

    $view = Views::getView('test_page_display_menu');
    $expected = [
      'config' => [
        'system.menu.admin',
        'system.menu.tools',
      ],
    ];
    $this->assertIdentical($expected, $view->getDependencies());
  }

}
