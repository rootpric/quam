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

/* core/themes/claro/templates/fieldset.html.twig */
class __TwigTemplate_eff5ac04f508762b25915217d41ae6a0e189dd53bf9c143875e931df5bfed2dd extends \Twig\Template
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
        // line 11
        $context["classes"] = [0 => "fieldset", 1 => (($this->getAttribute(        // line 13
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method")) ? ("fieldset--group") : ("")), 2 => "js-form-item", 3 => "form-item", 4 => "js-form-wrapper", 5 => "form-wrapper"];
        // line 21
        $context["wrapper_classes"] = [0 => "fieldset__wrapper", 1 => (($this->getAttribute(        // line 23
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method")) ? ("fieldset__wrapper--group") : (""))];
        // line 27
        $context["legend_span_classes"] = [0 => "fieldset__label", 1 => (($this->getAttribute(        // line 29
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method")) ? ("fieldset__label--group") : ("")), 2 => ((        // line 30
($context["required"] ?? null)) ? ("js-form-required") : ("")), 3 => ((        // line 31
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 35
        $context["legend_classes"] = [0 => "fieldset__legend", 1 => ((($this->getAttribute(        // line 37
($context["attributes"] ?? null), "hasClass", [0 => "fieldgroup"], "method") &&  !$this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method"))) ? ("fieldset__legend--group") : ("")), 2 => (($this->getAttribute(        // line 38
($context["attributes"] ?? null), "hasClass", [0 => "form-composite"], "method")) ? ("fieldset__legend--composite") : ("")), 3 => (((        // line 39
($context["title_display"] ?? null) == "invisible")) ? ("fieldset__legend--invisible") : ("fieldset__legend--visible"))];
        // line 43
        $context["description_classes"] = [0 => "fieldset__description"];
        // line 47
        echo "
<fieldset";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 50
        echo "  ";
        if ($this->getAttribute(($context["legend"] ?? null), "title", [])) {
            // line 51
            echo "  <legend";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["legend"] ?? null), "attributes", []), "addClass", [0 => ($context["legend_classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <span";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["legend_span"] ?? null), "attributes", []), "addClass", [0 => ($context["legend_span_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["legend"] ?? null), "title", [])), "html", null, true);
            echo "</span>
  </legend>
  ";
        }
        // line 55
        echo "
  <div";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 57
        if (($context["inline_items"] ?? null)) {
            // line 58
            echo "      <div class=\"container-inline\">
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (($context["prefix"] ?? null)) {
            // line 62
            echo "      <span class=\"fieldset__prefix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "</span>
    ";
        }
        // line 64
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
        echo "
    ";
        // line 65
        if (($context["suffix"] ?? null)) {
            // line 66
            echo "      <span class=\"fieldset__suffix\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "</span>
    ";
        }
        // line 68
        echo "    ";
        if (($context["errors"] ?? null)) {
            // line 69
            echo "      <div class=\"fieldset__error-message\">
        ";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 73
        echo "    ";
        if ($this->getAttribute(($context["description"] ?? null), "content", [])) {
            // line 74
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if (($context["inline_items"] ?? null)) {
            // line 78
            echo "      </div>
    ";
        }
        // line 80
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 80,  138 => 78,  136 => 77,  133 => 76,  125 => 74,  122 => 73,  116 => 70,  113 => 69,  110 => 68,  104 => 66,  102 => 65,  97 => 64,  91 => 62,  89 => 61,  86 => 60,  82 => 58,  80 => 57,  76 => 56,  73 => 55,  65 => 52,  60 => 51,  57 => 50,  53 => 48,  50 => 47,  48 => 43,  46 => 39,  45 => 38,  44 => 37,  43 => 35,  41 => 31,  40 => 30,  39 => 29,  38 => 27,  36 => 23,  35 => 21,  33 => 13,  32 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/fieldset.html.twig", "C:\\wamp64\\www\\social\\social\\html\\core\\themes\\claro\\templates\\fieldset.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 11, "if" => 50];
        static $filters = ["escape" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
