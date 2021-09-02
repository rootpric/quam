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

/* modules/contrib/gin_toolbar/templates/toolbar.html.twig */
class __TwigTemplate_22424af1676065a27e9b45a7dd2116ba9a75c73d81d494e0d703404850fe9803 extends \Twig\Template
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
        // line 23
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "toolbar"], "method")), "html", null, true);
        echo ">
  <nav";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["toolbar_attributes"] ?? null), "addClass", [0 => "toolbar-bar", 1 => "clearfix"], "method")), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolbar_heading"] ?? null)), "html", null, true);
        echo "</h2>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 27
            echo "      ";
            $context["tray"] = $this->getAttribute(($context["trays"] ?? null), $context["key"], [], "array");
            // line 28
            echo "      ";
            $context["user_menu"] = (($this->getAttribute($this->getAttribute(($context["tray"] ?? null), "links", []), "user_links", [], "array")) ? ("user-menu") : (false));
            // line 29
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "attributes", []), "addClass", [0 => "toolbar-tab", 1 => ($context["user_menu"] ?? null), 2 => ("toolbar-tab--" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#id", [], "array")))], "method")), "html", null, true);
            echo ">
        ";
            // line 30
            if (($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#id", [], "array") == "toolbar-item-administration")) {
                // line 31
                echo "          <a class=\"toolbar-menu__logo\" href=\"/admin/content\"></a>
          ";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "link", [])), "html", null, true);
                echo "
        ";
            } else {
                // line 34
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "link", [])), "html", null, true);
                echo "
        ";
            }
            // line 36
            echo "        <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "attributes", [])), "html", null, true);
            echo ">
          ";
            // line 37
            if ($this->getAttribute(($context["tray"] ?? null), "label", [])) {
                // line 38
                echo "            <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true);
                echo "\">
              <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true);
                echo "</h3>
          ";
            } else {
                // line 41
                echo "            <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
          ";
            }
            // line 43
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "links", [])), "html", null, true);
            echo "
          </nav>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </nav>
  ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/gin_toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 49,  109 => 48,  97 => 43,  93 => 41,  88 => 39,  83 => 38,  81 => 37,  76 => 36,  70 => 34,  65 => 32,  62 => 31,  60 => 30,  55 => 29,  52 => 28,  49 => 27,  45 => 26,  41 => 25,  37 => 24,  32 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gin_toolbar/templates/toolbar.html.twig", "C:\\wamp64\\www\\social\\social\\html\\modules\\contrib\\gin_toolbar\\templates\\toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 26, "set" => 27, "if" => 30];
        static $filters = ["escape" => 23];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
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
