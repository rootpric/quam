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

/* themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig */
class __TwigTemplate_7e06d61da9edc9d553abef18e90b176f9c2a23510b2f81fdc044517e94d0fcbd extends \Twig\Template
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "toolbar", 1 => "toolbar-meta"], "method")), "html", null, true);
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
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 28
            echo "      ";
            $context["tray"] = $this->getAttribute(($context["trays"] ?? null), $context["key"], [], "array");
            // line 29
            echo "      ";
            $context["user_menu"] = (($this->getAttribute($this->getAttribute(($context["tray"] ?? null), "links", []), "user_links", [], "array")) ? ("user-menu") : (false));
            // line 30
            echo "      ";
            $context["item_id"] = [];
            // line 31
            echo "
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#attributes", [], "array"), "class", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 33
                echo "        ";
                if (twig_in_filter("icon-", $context["item"])) {
                    // line 34
                    echo "          ";
                    $context["item_id"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null)), [0 => ("toolbar-id--" . $this->sandbox->ensureToStringAllowed($context["item"]))]);
                    // line 35
                    echo "        ";
                }
                // line 36
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
      ";
            // line 38
            $context["tab_id"] = (($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#id", [], "array")) ? (("toolbar-tab--" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "link", []), "#id", [], "array")))) : (""));
            // line 39
            echo "      ";
            $context["tab_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null)), [0 => "toolbar-tab", 1 => ($context["user_menu"] ?? null), 2 => ($context["tab_id"] ?? null)]);
            // line 40
            echo "
      ";
            // line 41
            $context["denylist_items"] = [0 => "toolbar-id--toolbar-icon-menu", 1 => "toolbar-id--toolbar-icon-edit"];
            // line 45
            echo "
      ";
            // line 47
            echo "      ";
            if (!twig_in_filter($this->getAttribute(($context["item_id"] ?? null), 0, [], "array"), ($context["denylist_items"] ?? null))) {
                // line 48
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["tab"], "attributes", []), "addClass", [0 => ($context["tab_classes"] ?? null)], "method")), "html", null, true);
                echo ">
          ";
                // line 49
                if ((($this->getAttribute(($context["item_id"] ?? null), 0, [], "array") == "toolbar-id--toolbar-icon-user") && ($context["user_picture"] ?? null))) {
                    // line 50
                    echo "            <a href=\"/user/";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "id", [])), "html", null, true);
                    echo "\" class=\"toolbar-item icon-user\" role=\"button\" id=\"toolbar-item-user\">
              <img src=\"";
                    // line 51
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null)), "html", null, true);
                    echo "\" alt=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["user"] ?? null), "account", []), "name", [])), "html", null, true);
                    echo "\" class=\"icon-user__image\" />
            </a>
          ";
                } else {
                    // line 54
                    echo "            ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tab"], "link", [])), "html", null, true);
                    echo "
          ";
                }
                // line 56
                echo "          <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "attributes", [])), "html", null, true);
                echo ">
            ";
                // line 57
                if ($this->getAttribute(($context["tray"] ?? null), "label", [])) {
                    // line 58
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true);
                    echo "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 59
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "label", [])), "html", null, true);
                    echo "</h3>
            ";
                } else {
                    // line 61
                    echo "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 63
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tray"] ?? null), "links", [])), "html", null, true);
                echo "
            </nav>
          </div>
        </div>
      ";
            }
            // line 68
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "  </nav>
  ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remainder"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  162 => 69,  156 => 68,  147 => 63,  143 => 61,  138 => 59,  133 => 58,  131 => 57,  126 => 56,  120 => 54,  112 => 51,  107 => 50,  105 => 49,  100 => 48,  97 => 47,  94 => 45,  92 => 41,  89 => 40,  86 => 39,  84 => 38,  81 => 37,  75 => 36,  72 => 35,  69 => 34,  66 => 33,  62 => 32,  59 => 31,  56 => 30,  53 => 29,  50 => 28,  46 => 27,  41 => 25,  37 => 24,  32 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/gin/templates/navigation/toolbar--gin--secondary.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\gin\\templates\\navigation\\toolbar--gin--secondary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 27, "set" => 28, "if" => 33];
        static $filters = ["escape" => 23, "merge" => 34];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'merge'],
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
