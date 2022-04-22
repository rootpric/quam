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

/* themes/contrib/socialbase/templates/form/dropdown.html.twig */
class __TwigTemplate_9f25ef0e2abcc2158403845215ab22e71d7561d6f2397b97afef658c0ad3485d extends \Twig\Template
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
        // line 13
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "dropdown field--name-field-post-visibility"], "method")), "html", null, true);
        echo ">
    ";
        // line 15
        echo "        <button id=\"post-visibility\" type=\"button\" ";
        if (($context["edit_mode"] ?? null)) {
            echo "disabled";
        }
        echo " data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-default dropdown-toggle\">
          <svg class=\"icon-small\">
            <use class=\"btnicon\" xlink:href=\"#icon-";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["selected_icon"] ?? null)), "html", null, true);
        echo "\"></use>
          </svg>
          <span class=\"text\">";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["selected"] ?? null)), "html", null, true);
        echo " </span>
          ";
        // line 20
        if ( !($context["edit_mode"] ?? null)) {
            echo "<span class=\"caret\"></span>";
        }
        // line 21
        echo "        </button>
  ";
        // line 22
        if ( !($context["edit_mode"] ?? null)) {
            // line 23
            echo "    <ul role=\"menu\" aria-labelledby=\"post-visibility\" class=\"dropdown-menu dropdown-menu--visibility\">
      <li class=\"dropdown-header\">";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</li>
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["child"]) {
                // line 26
                echo "        <li class=\"list-item list-item--visibility ";
                if (($context["key"] == ($context["active"] ?? null))) {
                    echo "list-item--active";
                }
                echo "\">
          <a href=\"\" role=\"button\">
            ";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["child"]), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
    ";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  92 => 32,  82 => 28,  74 => 26,  70 => 25,  66 => 24,  63 => 23,  61 => 22,  58 => 21,  54 => 20,  50 => 19,  45 => 17,  37 => 15,  32 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/dropdown.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\form\\dropdown.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 15, "for" => 25];
        static $filters = ["escape" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
