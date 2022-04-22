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

/* themes/contrib/gin/templates/misc/status-messages.html.twig */
class __TwigTemplate_0a37e8007137e034126c8f88c6af6c2885c1168b8232512a37a2cca530814adf extends \Twig\Template
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
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("gin/gin_messages"), "html", null, true);
        echo "
<div data-drupal-messages class=\"messages-list\">
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 28
            echo "  ";
            // line 29
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 32
$context["type"]))];
            // line 35
            echo "  ";
            // line 36
            $context["is_message_with_title"] = $this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array");
            // line 38
            echo "  ";
            // line 39
            $context["is_message_with_icon"] = twig_in_filter($context["type"], [0 => "error", 1 => "status", 2 => "warning"]);
            // line 41
            echo "
  <div role=\"contentinfo\" aria-labelledby=\"";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_ids"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label"), "html", null, true);
            echo ">
    ";
            // line 43
            if (($context["type"] == "error")) {
                // line 44
                echo "      <div role=\"alert\">
    ";
            }
            // line 46
            echo "      ";
            if ((($context["is_message_with_title"] ?? null) || ($context["is_message_with_icon"] ?? null))) {
                // line 47
                echo "        <div class=\"messages__header\">
          ";
                // line 48
                if (($context["is_message_with_title"] ?? null)) {
                    // line 49
                    echo "            <h2 id=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_ids"] ?? null), $context["type"], [], "array")), "html", null, true);
                    echo "\" class=\"messages__title\">
              ";
                    // line 50
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                    echo "
            </h2>
          ";
                }
                // line 53
                echo "        </div>
      ";
            }
            // line 55
            echo "      <button type=\"button\" class=\"button button--dismiss\" title=\"Dismiss\"><span class=\"icon-close\"></span>Close</button>
      <div class=\"messages__content\">
        ";
            // line 57
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 58
                echo "          <ul class=\"messages__list\">
            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 60
                    echo "              <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "          </ul>
        ";
            } else {
                // line 64
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
        ";
            }
            // line 66
            echo "      </div>
    ";
            // line 67
            if (($context["type"] == "error")) {
                // line 68
                echo "      </div>
    ";
            }
            // line 70
            echo "  </div>
  ";
            // line 72
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 74,  136 => 72,  133 => 70,  129 => 68,  127 => 67,  124 => 66,  118 => 64,  114 => 62,  105 => 60,  101 => 59,  98 => 58,  96 => 57,  92 => 55,  88 => 53,  82 => 50,  77 => 49,  75 => 48,  72 => 47,  69 => 46,  65 => 44,  63 => 43,  57 => 42,  54 => 41,  52 => 39,  50 => 38,  48 => 36,  46 => 35,  44 => 32,  43 => 29,  41 => 28,  37 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/misc/status-messages.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\gin\\templates\\misc\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 27, "set" => 29, "if" => 43];
        static $filters = ["escape" => 25, "without" => 42, "length" => 57, "first" => 64];
        static $functions = ["attach_library" => 25];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
