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

/* themes/contrib/socialbase/templates/form/form-element.html.twig */
class __TwigTemplate_e7986fc945aaa7354da7f7830b11456b3c05271b6f2c4f188a0c073d5b3b9c66 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 49
        $context["classes"] = [0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null)))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null)))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null)))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null)))), 6 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 58
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), 9 => (((        // line 59
($context["type"] ?? null) == "textarea")) ? ("form-group") : ("")), 10 => ((        // line 60
($context["is_radio"] ?? null)) ? ("radio form-group") : ("")), 11 => ((        // line 61
($context["is_checkbox"] ?? null)) ? ("checkbox form-group") : ("")), 12 => ((        // line 62
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), 13 => ((        // line 63
($context["errors"] ?? null)) ? ("error has-error") : ("")), 14 => ((((        // line 64
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("section-password") : ("")), 15 => (((        // line 65
($context["name"] ?? null) == "pass[pass1]")) ? ("form-group--password") : ("")), 16 => (((        // line 66
($context["name"] ?? null) == "pass[pass2]")) ? ("form-group--password form-group--confirm-password") : (""))];
        // line 69
        $context["description_classes"] = [0 => "help-block", 1 => ((((        // line 71
($context["name"] ?? null) == "pass") && ($context["logged_in"] ?? null))) ? ("form-group--password__help-block") : ("")), 2 => (((        // line 72
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 75
        echo "
";
        // line 77
        if ((($context["name"] ?? null) == "pass")) {
            // line 78
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--password"), "html", null, true);
            echo "
";
        }
        // line 80
        echo "
<div";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "removeClass", [0 => "form-inline"], "method")), "html", null, true);
        echo ">
  ";
        // line 82
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 83
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 85
        echo "
  ";
        // line 86
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 87
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "attributes", [])), "html", null, true);
            echo ">
      ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "

  ";
        // line 94
        if ((($context["label_display"] ?? null) == "after")) {
            // line 95
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        if (($context["errors"] ?? null)) {
            // line 99
            echo "    <div class=\"form-item--error-message alert alert-danger alert-sm alert-dismissible form-control-radius\">
      ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
            echo "\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  ";
        }
        // line 106
        echo "
  ";
        // line 107
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
            // line 108
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">
      ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 112
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 112,  141 => 109,  136 => 108,  134 => 107,  131 => 106,  123 => 101,  119 => 100,  116 => 99,  114 => 98,  111 => 97,  105 => 95,  103 => 94,  98 => 92,  95 => 91,  89 => 88,  84 => 87,  82 => 86,  79 => 85,  73 => 83,  71 => 82,  67 => 81,  64 => 80,  58 => 78,  56 => 77,  53 => 75,  51 => 72,  50 => 71,  49 => 69,  47 => 66,  46 => 65,  45 => 64,  44 => 63,  43 => 62,  42 => 61,  41 => 60,  40 => 59,  39 => 58,  38 => 57,  37 => 56,  36 => 55,  35 => 54,  34 => 53,  33 => 52,  32 => 49,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form-element.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\form\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 49, "if" => 77];
        static $filters = ["clean_class" => 52, "escape" => 78, "t" => 101];
        static $functions = ["attach_library" => 78];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
                ['attach_library']
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
