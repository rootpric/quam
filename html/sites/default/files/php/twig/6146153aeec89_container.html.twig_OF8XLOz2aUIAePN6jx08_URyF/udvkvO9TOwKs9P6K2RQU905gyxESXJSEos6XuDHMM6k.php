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

/* themes/contrib/socialbase/templates/system/container.html.twig */
class __TwigTemplate_2d03e84f35a19bc05bfc7ffb112ddb602b5617614386e73cafdbd0c3c3433ffe extends \Twig\Template
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
        // line 1
        echo "
";
        // line 21
        echo "
";
        // line 23
        $context["classes"] = [0 => (( !$this->getAttribute(        // line 24
($context["attributes"] ?? null), "hasClass", [0 => "toolbar-menu-administration"], "method")) ? ("form-group") : ("")), 1 => ((        // line 25
($context["has_parent"] ?? null)) ? ("js-form-wrapper form-wrapper") : ("")), 2 => ((        // line 26
($context["exposed_form"] ?? null)) ? ("views-exposed-form__actions") : ("")), 3 => (($this->getAttribute(        // line 27
($context["attributes"] ?? null), "hasClass", [0 => "field--name-field-comment-body"], "method")) ? ("media-body") : ("")), 4 => (($this->getAttribute(        // line 28
($context["attributes"] ?? null), "hasClass", [0 => "field--name-message"], "method")) ? ("media-body") : ("")), 5 => (($this->getAttribute(        // line 29
($context["attributes"] ?? null), "hasClass", [0 => "more-link"], "method")) ? ("btn btn-flat") : (""))];
        // line 32
        if (($context["bare"] ?? null)) {
            // line 33
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 35
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
   ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 36,  54 => 35,  48 => 33,  46 => 32,  44 => 29,  43 => 28,  42 => 27,  41 => 26,  40 => 25,  39 => 24,  38 => 23,  35 => 21,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/container.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\system\\container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 23, "if" => 32];
        static $filters = ["escape" => 33];
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
