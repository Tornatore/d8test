<?php

/* core/themes/classy/templates/views/views-view.html.twig */
class __TwigTemplate_aa2f63ea9245fe5ae539f644e5577e2ed6b354dabb668951fcf5b4eb5cdc8560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 34
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
(isset($context["id"]) ? $context["id"] : null))), 2 => ("view-id-" .         // line 37
(isset($context["id"]) ? $context["id"] : null)), 3 => ("view-display-id-" .         // line 38
(isset($context["display_id"]) ? $context["display_id"] : null)), 4 => ((        // line 39
(isset($context["dom_id"]) ? $context["dom_id"] : null)) ? (("js-view-dom-id-" . (isset($context["dom_id"]) ? $context["dom_id"] : null))) : ("")));
        // line 42
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 43
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 44
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
  ";
        }
        // line 47
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 48
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 49
            echo "    <div class=\"view-header\">
      ";
            // line 50
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 53
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 54
            echo "    <div class=\"view-filters\">
      ";
            // line 55
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 58
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 59
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 60
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 63
        echo "
  ";
        // line 64
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 65
            echo "    <div class=\"view-content\">
      ";
            // line 66
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 68
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 69
            echo "    <div class=\"view-empty\">
      ";
            // line 70
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 75
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true);
            echo "
  ";
        }
        // line 77
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 78
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 79
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 82
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true);
            echo "
  ";
        }
        // line 85
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 86
            echo "    <div class=\"view-footer\">
      ";
            // line 87
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 90
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 91
            echo "    <div class=\"feed-icons\">
      ";
            // line 92
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 95
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 95,  156 => 92,  153 => 91,  150 => 90,  144 => 87,  141 => 86,  138 => 85,  132 => 83,  129 => 82,  123 => 79,  120 => 78,  117 => 77,  111 => 75,  109 => 74,  106 => 73,  100 => 70,  97 => 69,  95 => 68,  90 => 66,  87 => 65,  85 => 64,  82 => 63,  76 => 60,  73 => 59,  70 => 58,  64 => 55,  61 => 54,  58 => 53,  52 => 50,  49 => 49,  47 => 48,  42 => 47,  36 => 45,  34 => 44,  30 => 43,  25 => 42,  23 => 39,  22 => 38,  21 => 37,  20 => 36,  19 => 34,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a main view template.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element.*/
/*  * - css_name: A css-safe version of the view name.*/
/*  * - css_class: The user-specified classes names, if any.*/
/*  * - header: The optional header.*/
/*  * - footer: The optional footer.*/
/*  * - rows: The results of the view query, if any.*/
/*  * - empty: The content to display if there are no rows.*/
/*  * - pager: The optional pager next/prev links to display.*/
/*  * - exposed: Exposed widget form/info to display.*/
/*  * - feed_icons: Optional feed icons to display.*/
/*  * - more: An optional link to the next page of results.*/
/*  * - title: Title of the view, only used when displaying in the admin preview.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the view title.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the view title.*/
/*  * - attachment_before: An optional attachment view to be displayed before the*/
/*  *   view content.*/
/*  * - attachment_after: An optional attachment view to be displayed after the*/
/*  *   view content.*/
/*  * - dom_id: Unique id for every view being printed to give unique class for*/
/*  *   Javascript.*/
/*  **/
/*  * @see template_preprocess_views_view()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'view',*/
/*     'view-' ~ id|clean_class,*/
/*     'view-id-' ~ id,*/
/*     'view-display-id-' ~ display_id,*/
/*     dom_id ? 'js-view-dom-id-' ~ dom_id,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ title_prefix }}*/
/*   {% if title %}*/
/*     {{ title }}*/
/*   {% endif %}*/
/*   {{ title_suffix }}*/
/*   {% if header %}*/
/*     <div class="view-header">*/
/*       {{ header }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if exposed %}*/
/*     <div class="view-filters">*/
/*       {{ exposed }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if attachment_before %}*/
/*     <div class="attachment attachment-before">*/
/*       {{ attachment_before }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if rows %}*/
/*     <div class="view-content">*/
/*       {{ rows }}*/
/*     </div>*/
/*   {% elseif empty %}*/
/*     <div class="view-empty">*/
/*       {{ empty }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if pager %}*/
/*     {{ pager }}*/
/*   {% endif %}*/
/*   {% if attachment_after %}*/
/*     <div class="attachment attachment-after">*/
/*       {{ attachment_after }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if more %}*/
/*     {{ more }}*/
/*   {% endif %}*/
/*   {% if footer %}*/
/*     <div class="view-footer">*/
/*       {{ footer }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if feed_icons %}*/
/*     <div class="feed-icons">*/
/*       {{ feed_icons }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
