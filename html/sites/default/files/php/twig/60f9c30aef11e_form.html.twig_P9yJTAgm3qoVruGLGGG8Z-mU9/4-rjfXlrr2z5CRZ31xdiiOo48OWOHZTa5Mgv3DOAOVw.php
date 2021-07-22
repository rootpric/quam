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

/* themes/contrib/socialbase/templates/form/form.html.twig */
class __TwigTemplate_f0221a0ed393dd0fb5c8adb5b70454aa263a32a3eec8e9eada86b500bc7a9256 extends \Twig\Template
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
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "form--default"], "method")) {
            // line 17
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form-default"), "html", null, true);
            echo "
";
        }
        // line 19
        echo "
";
        // line 20
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "card"], "method")) {
            // line 21
            echo "  <form";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => "card"], "method")), "html", null, true);
            echo ">
    <div class=\"card\">
      <div class=\"card__block\">
        ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
    </form>

    ";
            // line 30
            echo "
";
        } elseif (        // line 31
($context["is_search_form"] ?? null)) {
            // line 32
            echo "
  ";
            // line 33
            if (($context["in_hero_region"] ?? null)) {
                // line 34
                echo "
    <form";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                echo ">
      <div class=\"form-group\">
        ";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
                echo "
      </div>
    </form>

  ";
            } elseif (            // line 41
($context["in_content_top_region"] ?? null)) {
                // line 42
                echo "
    <form";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "search-take-over"], "method")), "html", null, true);
                echo ">
      <div class=\"form-group\">
        <button class=\"btn--close-search-take-over\" type=\"button\">
          <svg class=\"icon-search-form-close\">
            <title>";
                // line 47
                echo t("Close", array());
                echo "</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </button>
        ";
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
                echo "
      </div>
    </form>

  ";
            } else {
                // line 56
                echo "
    <form";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                echo ">
      <div class=\"form-group form--navbar-search\" id=\"navbar-search\">
        ";
                // line 59
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
                echo "
      </div>
    </form>

  ";
            }
            // line 64
            echo "
";
        } else {
            // line 66
            echo "
  <form";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
    ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 68,  136 => 67,  133 => 66,  129 => 64,  121 => 59,  116 => 57,  113 => 56,  105 => 51,  98 => 47,  91 => 43,  88 => 42,  86 => 41,  79 => 37,  74 => 35,  71 => 34,  69 => 33,  66 => 32,  64 => 31,  61 => 30,  55 => 24,  48 => 21,  46 => 20,  43 => 19,  37 => 17,  35 => 16,  32 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\form\\form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 16, "trans" => 47];
        static $filters = ["escape" => 17];
        static $functions = ["attach_library" => 17];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
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
