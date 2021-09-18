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

/* core/themes/claro/templates/status-report-page.html.twig */
class __TwigTemplate_614848ea08769d9f10922464fc13bfbf25098a983d74abf58b58ee1a4cad10b6 extends \Twig\Template
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
        // line 14
        if ((twig_length_filter($this->env, ($context["counters"] ?? null)) == 3)) {
            // line 15
            echo "  ";
            $context["element_width_class"] = " system-status-report-counters__item--third-width";
        } elseif ((twig_length_filter($this->env,         // line 16
($context["counters"] ?? null)) == 2)) {
            // line 17
            echo "  ";
            $context["element_width_class"] = " system-status-report-counters__item--half-width";
        }
        // line 19
        echo "<div class=\"system-status-report-counters\">
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["counters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["counter"]) {
            // line 21
            echo "    <div class=\"system-status-report-counters__item";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element_width_class"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["counter"]), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['counter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>

";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["general_info"] ?? null)), "html", null, true);
        echo "
";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["requirements"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/status-report-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  68 => 27,  64 => 25,  55 => 22,  50 => 21,  46 => 20,  43 => 19,  39 => 17,  37 => 16,  34 => 15,  32 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/status-report-page.html.twig", "C:\\wamp64\\www\\social\\social\\html\\core\\themes\\claro\\templates\\status-report-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 14, "set" => 15, "for" => 20];
        static $filters = ["length" => 14, "escape" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['length', 'escape'],
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
