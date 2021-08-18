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

/* themes/contrib/socialbase/templates/form/select.html.twig */
class __TwigTemplate_23c12c74c3124af8f142cd0278e647cbdeae9bf7564a0a308419a0c6779e2da5 extends \Twig\Template
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
        // line 16
        ob_start(function () { return ''; });
        // line 17
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 18
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/form--input-groups"), "html", null, true);
            echo "
    <div class=\"input-group\">
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if (($context["prefix"] ?? null)) {
            // line 23
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($context["multiselect"] ?? null)) {
            // line 27
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("socialbase/select2"), "html", null, true);
            echo "
  ";
        } else {
            // line 29
            echo "    ";
            // line 33
            echo "    <div class=\"select-wrapper\">
  ";
        }
        // line 35
        echo "
    ";
        // line 36
        $context["classes"] = [0 => "form-control"];
        // line 37
        echo "    <select";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 39
            echo "        ";
            if (($this->getAttribute($context["option"], "type", []) == "optgroup")) {
                // line 40
                echo "          <optgroup label=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["option"], "label", [])), "html", null, true);
                echo "\">
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "options", []));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 42
                    echo "              <option
                value=\"";
                    // line 43
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["sub_option"], "value", [])), "html", null, true);
                    echo "\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["sub_option"], "selected", [])) ? (" selected=\"selected\"") : ("")));
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["sub_option"], "label", [])), "html", null, true);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </optgroup>
        ";
            } elseif (($this->getAttribute(            // line 46
$context["option"], "type", []) == "option")) {
                // line 47
                echo "          <option
            value=\"";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["option"], "value", [])), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["option"], "selected", [])) ? (" selected=\"selected\"") : ("")));
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["option"], "label", [])), "html", null, true);
                echo "</option>
        ";
            }
            // line 50
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </select>

  ";
        // line 53
        if ( !($context["multiselect"] ?? null)) {
            // line 54
            echo "    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if (($context["suffix"] ?? null)) {
            // line 58
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (($context["input_group"] ?? null)) {
            // line 62
            echo "    </div>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 62,  160 => 61,  157 => 60,  151 => 58,  149 => 57,  146 => 56,  142 => 54,  140 => 53,  136 => 51,  130 => 50,  121 => 48,  118 => 47,  116 => 46,  113 => 45,  101 => 43,  98 => 42,  94 => 41,  89 => 40,  86 => 39,  82 => 38,  77 => 37,  75 => 36,  72 => 35,  68 => 33,  66 => 29,  60 => 27,  58 => 26,  55 => 25,  49 => 23,  47 => 22,  44 => 21,  37 => 18,  34 => 17,  32 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/select.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\form\\select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["spaceless" => 16, "if" => 17, "set" => 36, "for" => 38];
        static $filters = ["escape" => 18];
        static $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set', 'for'],
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
