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

/* themes/contrib/socialbase/templates/form/input--form-control.html.twig */
class __TwigTemplate_e3df6533e30762c83a0c843713d9c6bff3fa6d6de8e6693062a9ab2a6aebe889 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 24
        $context["classes"] = [0 => "form-control"];
        // line 28
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--input-groups"), "html", null, true);
        echo "

";
        // line 31
        ob_start(function () { return ''; });
        // line 32
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 33
            echo "
    <div class=\"input-group\">
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        if (($context["prefix"] ?? null)) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('input', $context, $blocks);
        // line 44
        echo "
  ";
        // line 45
        if (($context["suffix"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if (($context["input_group"] ?? null)) {
            // line 50
            echo "    </div>
  ";
        }
        // line 52
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_input($context, array $blocks = [])
    {
        // line 42
        echo "    <input";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  98 => 41,  92 => 52,  88 => 50,  86 => 49,  83 => 48,  77 => 46,  75 => 45,  72 => 44,  70 => 41,  67 => 40,  61 => 38,  59 => 37,  56 => 36,  51 => 33,  48 => 32,  46 => 31,  41 => 29,  38 => 28,  36 => 24,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/input--form-control.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\form\\input--form-control.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 24, "spaceless" => 31, "if" => 32, "block" => 41];
        static $filters = ["escape" => 29];
        static $functions = ["attach_library" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'spaceless', 'if', 'block'],
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
