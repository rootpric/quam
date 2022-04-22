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

/* themes/contrib/socialbase/templates/system/details--plain.html.twig */
class __TwigTemplate_e9e537f31fe5a3911b3a2ab5ee936525458fcc90aa312a69ab66fc778931c8f3 extends \Twig\Template
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
        // line 17
        $context["heading"] = ($context["title"] ?? null);
        // line 18
        $context["body"] = ($context["children"] ?? null);
        // line 19
        echo "
";
        // line 21
        $context["classes"] = [0 => "panel", 1 => ((        // line 23
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null))))))];
        // line 26
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "removeClass", [0 => "form-wrapper"], "method")), "html", null, true);
        echo ">
  ";
        // line 28
        echo "
  ";
        // line 29
        if (($context["heading"] ?? null)) {
            // line 30
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 46
            echo "  ";
        }
        // line 47
        echo "
  ";
        // line 49
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
  ";
        // line 78
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 79
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 87
            echo "  ";
        }
        // line 88
        echo "
</div>
";
    }

    // line 30
    public function block_heading($context, array $blocks = [])
    {
        // line 31
        echo "      <div class=\"panel-heading\">
        <header>
          ";
        // line 34
        $context["heading_classes"] = [0 => "panel-title"];
        // line 38
        echo "          ";
        if (($context["collapsible"] ?? null)) {
            // line 39
            echo "            <a";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method")), "html", null, true);
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 41
            echo "            <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "</div>
          ";
        }
        // line 43
        echo "        </header>
      </div>
    ";
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        // line 50
        echo "    ";
        // line 51
        $context["body_classes"] = [0 => "panel-body", 1 => ((        // line 53
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 54
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 55
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 56
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 59
        echo "    ";
        // line 60
        $context["description_classes"] = [0 => "help-block", 1 => (((        // line 62
($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) ? ("sr-only") : (""))];
        // line 65
        echo "
    <div";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["body_attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
      ";
        // line 67
        if ((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "before"))) {
            // line 68
            echo "        <p";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</p>
      ";
        }
        // line 70
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
      ";
        // line 71
        if (((($context["description"] ?? null) && ($this->getAttribute(($context["description"] ?? null), "position", []) == "after")) || ($this->getAttribute(($context["description"] ?? null), "position", []) == "invisible"))) {
            // line 72
            echo "        <p";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
            echo "</p>
      ";
        }
        // line 74
        echo "    </div>
  ";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        // line 80
        echo "      ";
        // line 81
        $context["footer_classes"] = [0 => "panel-footer"];
        // line 85
        echo "      <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/details--plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 85,  179 => 81,  177 => 80,  174 => 79,  169 => 74,  161 => 72,  159 => 71,  154 => 70,  146 => 68,  144 => 67,  140 => 66,  137 => 65,  135 => 62,  134 => 60,  132 => 59,  130 => 56,  129 => 55,  128 => 54,  127 => 53,  126 => 51,  124 => 50,  121 => 49,  115 => 43,  107 => 41,  97 => 39,  94 => 38,  92 => 34,  88 => 31,  85 => 30,  79 => 88,  76 => 87,  73 => 79,  70 => 78,  67 => 76,  64 => 49,  61 => 47,  58 => 46,  55 => 30,  53 => 29,  50 => 28,  45 => 26,  43 => 23,  42 => 21,  39 => 19,  37 => 18,  35 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/details--plain.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\system\\details--plain.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 17, "if" => 29, "block" => 30];
        static $filters = ["clean_class" => 23, "escape" => 26];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
