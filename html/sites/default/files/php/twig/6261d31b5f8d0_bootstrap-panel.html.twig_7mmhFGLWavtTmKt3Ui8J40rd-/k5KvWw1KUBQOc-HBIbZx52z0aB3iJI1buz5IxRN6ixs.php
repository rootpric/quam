<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig */
class __TwigTemplate_51e1bc6b68d16da752e4fc842ad452c8d58f62fcd504f20d30a5283ca787fa70 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 45
        echo "
";
        // line 47
        $context["classes"] = [0 => "card", 1 => ((        // line 49
($context["collapsible"] ?? null)) ? ("panel") : ("")), 2 => (((        // line 50
($context["collapsible"] ?? null) && ($context["errors"] ?? null))) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null))))))];
        // line 53
        echo "
";
        // line 54
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["body"] ?? null))) {
            // line 55
            echo "  <fieldset ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">

    ";
            // line 58
            echo "    ";
            if (($context["heading"] ?? null)) {
                // line 59
                echo "      ";
                $this->displayBlock('heading', $context, $blocks);
                // line 68
                echo "    ";
            }
            // line 69
            echo "
    ";
            // line 71
            echo "    ";
            $this->displayBlock('body', $context, $blocks);
            // line 104
            echo "
    ";
            // line 106
            echo "    ";
            if (($context["footer"] ?? null)) {
                // line 107
                echo "      ";
                $this->displayBlock('footer', $context, $blocks);
                // line 115
                echo "    ";
            }
            // line 116
            echo "
  </fieldset>
";
        }
    }

    // line 59
    public function block_heading($context, array $blocks = [])
    {
        // line 60
        echo "        <legend class=\"card__title card__title--underline\">
          ";
        // line 61
        if (($context["collapsible"] ?? null)) {
            // line 62
            echo "            <a";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_attributes"] ?? null)), "html", null, true);
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 64
            echo "            <span";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_attributes"] ?? null)), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "</span>
          ";
        }
        // line 66
        echo "        </legend>
      ";
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        // line 72
        echo "      ";
        // line 73
        $context["body_classes"] = [0 => "card__block", 1 => ((        // line 75
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 76
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 77
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 78
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 81
        echo "      ";
        // line 82
        $context["description_classes"] = [0 => "help-block", 1 => (((        // line 84
($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) ? ("sr-only") : (""))];
        // line 87
        echo "
      ";
        // line 88
        if (($context["errors"] ?? null)) {
            // line 89
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
          <strong>";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "</strong>
        </div>
      ";
        }
        // line 93
        echo "
      <div";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["body_attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 95
        if ((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "before"))) {
            // line 96
            echo "          <p";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</p>
        ";
        }
        // line 98
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
        ";
        // line 99
        if (((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "after")) || ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) {
            // line 100
            echo "          <p";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</p>
        ";
        }
        // line 102
        echo "      </div>
    ";
    }

    // line 107
    public function block_footer($context, array $blocks = [])
    {
        // line 108
        echo "        ";
        // line 109
        $context["footer_classes"] = [0 => "card__actionbar"];
        // line 113
        echo "        <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
        echo "</div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 113,  193 => 109,  191 => 108,  188 => 107,  183 => 102,  175 => 100,  173 => 99,  168 => 98,  160 => 96,  158 => 95,  154 => 94,  151 => 93,  145 => 90,  142 => 89,  140 => 88,  137 => 87,  135 => 84,  134 => 82,  132 => 81,  130 => 78,  129 => 77,  128 => 76,  127 => 75,  126 => 73,  124 => 72,  121 => 71,  116 => 66,  108 => 64,  98 => 62,  96 => 61,  93 => 60,  90 => 59,  83 => 116,  80 => 115,  77 => 107,  74 => 106,  71 => 104,  68 => 71,  65 => 69,  62 => 68,  59 => 59,  56 => 58,  50 => 55,  48 => 54,  45 => 53,  43 => 50,  42 => 49,  41 => 47,  38 => 45,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/card/bootstrap-panel.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\card\\bootstrap-panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 47, "if" => 54, "block" => 59];
        static $filters = ["clean_class" => 50, "render" => 54, "escape" => 55];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'render', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
