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

/* modules/contrib/gin_toolbar/templates/menu--toolbar.html.twig */
class __TwigTemplate_21bb5ab7e85704ef7139b2a9c70d22a5c3e90e5a5753ffeb90b492f1a20fa5d0 extends \Twig\Template
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
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, false, ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null)));
        echo "

";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__parent__ = null, $__menu_name__ = null, $__icon_default__ = null, $__icon_path__ = null, $__toolbar_variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "parent" => $__parent__,
            "menu_name" => $__menu_name__,
            "icon_default" => $__icon_default__,
            "icon_path" => $__icon_path__,
            "toolbar_variant" => $__toolbar_variant__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "toolbar-menu"], "method")), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"toolbar-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = [0 => "menu-item", 1 => (($this->getAttribute(                    // line 43
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 45
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 46
$context["item"], "gin_id", [])) ? (("menu-item__" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "gin_id", [])))) : (""))];
                    // line 49
                    echo "
      ";
                    // line 51
                    echo "      ";
                    if ((((($context["menu_level"] ?? null) == 0) && ($this->getAttribute($context["loop"], "index", []) == 1)) && ($this->getAttribute($context["item"], "gin_id", []) != "admin_toolbar_tools-help"))) {
                        // line 52
                        echo "        <li class=\"menu-item menu-item--expanded menu-item__tools\">
          ";
                        // line 53
                        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
                            // line 54
                            echo "            <a href=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                            echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
              <img src=\"";
                            // line 55
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null))]), "html", null, true);
                            echo "\" class=\"toolbar-icon-home\" />
            </a>
          ";
                        } else {
                            // line 58
                            echo "            <a href=\"";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                            echo "\" class=\"toolbar-icon toolbar-icon-admin-toolbar-tools-help toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
              ";
                            // line 59
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                            echo "
            </a>
          ";
                        }
                        // line 62
                        echo "        </li>
      ";
                    }
                    // line 64
                    echo "
      ";
                    // line 65
                    if (((($context["menu_level"] ?? null) == 0) && ($this->getAttribute($context["item"], "gin_id", []) == "system-admin_reports"))) {
                        // line 66
                        echo "        <li class=\"menu-item menu-item__spacer menu-item--no-link\"></li>
      ";
                    }
                    // line 68
                    echo "
      ";
                    // line 70
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 1) && ($this->getAttribute($context["loop"], "index", []) == 1))) {
                        // line 71
                        echo "        <li class=\"menu-item-title\">
          <h2 class=\"toolbar-menu__title\">
            <a href=\"";
                        // line 73
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "title", [])), "html", null, true);
                        echo "</a>
          </h2>
        </li>
        ";
                        // line 76
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 77
                            echo "          <li class=\"menu-item\">
            <a href=\"";
                            // line 78
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                            echo "\" class=\"toolbar-icon\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overview"));
                            echo "</a>
          </li>
        ";
                        }
                        // line 81
                        echo "      ";
                    } elseif (((($context["menu_level"] ?? null) > 1) && ($this->getAttribute($context["loop"], "index", []) == 1))) {
                        // line 82
                        echo "        <li class=\"menu-item-title\">
          <h3 class=\"toolbar-menu__sub-title\">
            <a href=\"";
                        // line 84
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "title", [])), "html", null, true);
                        echo "</a>
          </h3>
        </li>
        ";
                        // line 87
                        if ((($context["toolbar_variant"] ?? null) == "vertical")) {
                            // line 88
                            echo "          <li class=\"menu-item\">
            <a href=\"";
                            // line 89
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["parent"] ?? null), "url", [])), "html", null, true);
                            echo "\" class=\"toolbar-icon\">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overview"));
                            echo "</a>
          </li>
        ";
                        }
                        // line 92
                        echo "      ";
                    }
                    // line 93
                    echo "
      <li";
                    // line 94
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 95
                    if (((($this->getAttribute($context["item"], "gin_id", []) == "admin_toolbar_tools-help") && (($context["icon_default"] ?? null) == false)) && (($context["icon_path"] ?? null) != ""))) {
                        // line 96
                        echo "          <a href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                        echo "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
                        // line 97
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(($context["icon_path"] ?? null))]), "html", null, true);
                        echo "\" class=\"toolbar-icon-home\" />
          </a>
        ";
                    } elseif (($this->getAttribute(                    // line 99
$context["item"], "gin_id", []) == "admin_toolbar_tools-help")) {
                        // line 100
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => "toolbar-icon-default"]]), "html", null, true);
                        echo "
        ";
                    } else {
                        // line 102
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("is-active") : (""))]]), "html", null, true);
                        echo "
        ";
                    }
                    // line 104
                    echo "        ";
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 105
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1), $context["item"], ($context["menu_name"] ?? null), ($context["icon_default"] ?? null), ($context["icon_path"] ?? null), ($context["toolbar_variant"] ?? null)));
                        echo "
        ";
                    }
                    // line 107
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "    </ul>
  ";
            }
            // line 111
            echo "
  ";
            // line 112
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 113
                echo "    ";
                // line 114
                echo "    <a href=\"#\" class=\"toolbar-menu__trigger trigger\" role=\"button\" aria-pressed=\"false\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
                echo "</a>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/contrib/gin_toolbar/templates/menu--toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 114,  282 => 113,  280 => 112,  277 => 111,  273 => 109,  258 => 107,  252 => 105,  249 => 104,  243 => 102,  237 => 100,  235 => 99,  230 => 97,  225 => 96,  223 => 95,  219 => 94,  216 => 93,  213 => 92,  205 => 89,  202 => 88,  200 => 87,  192 => 84,  188 => 82,  185 => 81,  177 => 78,  174 => 77,  172 => 76,  164 => 73,  160 => 71,  157 => 70,  154 => 68,  150 => 66,  148 => 65,  145 => 64,  141 => 62,  135 => 59,  130 => 58,  124 => 55,  119 => 54,  117 => 53,  114 => 52,  111 => 51,  108 => 49,  106 => 46,  105 => 45,  104 => 44,  103 => 43,  102 => 41,  100 => 40,  82 => 39,  78 => 37,  72 => 35,  69 => 34,  66 => 33,  63 => 32,  44 => 31,  37 => 29,  34 => 24,  32 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/gin_toolbar/templates/menu--toolbar.html.twig", "C:\\wamp64\\www\\social\\social\\html\\modules\\contrib\\gin_toolbar\\templates\\menu--toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 41];
        static $filters = ["escape" => 35, "t" => 59];
        static $functions = ["path" => 54, "file_url" => 55, "link" => 100];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 't'],
                ['path', 'file_url', 'link']
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
