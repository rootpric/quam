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

/* themes/contrib/socialbase/templates/form/form-element-label.html.twig */
class __TwigTemplate_0c85dad4ef03c4cb181e108eb442177de3763daf4c26133d6c65a48b7e2c0917 extends \Twig\Template
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
        // line 21
        $context["classes"] = [0 => "control-label", 1 => (((        // line 23
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 2 => (((        // line 24
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : ("")), 3 => (((        // line 25
($context["title_display"] ?? null) == "above")) ? ("control-label--above") : ("")), 4 => ((        // line 26
($context["required"] ?? null)) ? ("js-form-required") : ("")), 5 => ((        // line 27
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null)), "html", null, true);
        // line 32
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 33
            echo "<label";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            // line 34
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                // line 35
                echo "<svg class=\"icon-small\">
        <use xlink:href=\"#icon-";
                // line 36
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
                echo "\"></use>
      </svg>
      <span>";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</span>";
            } else {
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            }
            // line 43
            if ((($context["required"] ?? null) && (($context["title_display"] ?? null) != "invisible"))) {
                // line 44
                echo "<span class=\"form-required\" title=\"";
                echo t("This field is required", array());
                echo "\">*</span>";
            }
            // line 46
            if (($context["description"] ?? null)) {
                // line 47
                echo "<p class=\"help-block\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
                echo "</p>";
            }
            // line 49
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 49,  73 => 47,  71 => 46,  66 => 44,  64 => 43,  61 => 40,  57 => 38,  52 => 36,  49 => 35,  47 => 34,  43 => 33,  41 => 32,  39 => 31,  37 => 27,  36 => 26,  35 => 25,  34 => 24,  33 => 23,  32 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form-element-label.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\form\\form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 21, "if" => 32, "trans" => 44];
        static $filters = ["escape" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape'],
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
