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

/* themes/contrib/socialbase/templates/system/image.html.twig */
class __TwigTemplate_5b21d94d29d2ef8f8e6a8a1ad3be8fe54b30caa6063aa32f2a2d10b96df16821 extends \Twig\Template
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
        // line 15
        echo "
";
        // line 16
        if ((($context["style_name"] ?? null) == "social_large")) {
            // line 17
            echo "
  ";
            // line 18
            $context["classes"] = [0 => "hero-avatar"];
            // line 21
            echo "
";
        } else {
            // line 23
            echo "
  ";
            // line 24
            $context["classes"] = [0 => (($this->getAttribute($this->getAttribute(            // line 25
($context["theme"] ?? null), "settings", []), "image_shape", [])) ? ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "image_shape", [])) : ("")), 1 => (($this->getAttribute($this->getAttribute(            // line 26
($context["theme"] ?? null), "settings", []), "image_responsive", [])) ? ("img-responsive") : (""))];
            // line 28
            echo "
";
        }
        // line 30
        echo "
  <img";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " />
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  57 => 30,  53 => 28,  51 => 26,  50 => 25,  49 => 24,  46 => 23,  42 => 21,  40 => 18,  37 => 17,  35 => 16,  32 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/image.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\system\\image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 16, "set" => 18];
        static $filters = ["escape" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
