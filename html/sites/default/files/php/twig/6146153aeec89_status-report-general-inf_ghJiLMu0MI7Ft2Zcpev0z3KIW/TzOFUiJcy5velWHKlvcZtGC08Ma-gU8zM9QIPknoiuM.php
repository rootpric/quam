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

/* core/themes/claro/templates/status-report-general-info.html.twig */
class __TwigTemplate_7c309d9c58c61f2f44dc60073656ed89b224c5bfff479ee587cdfc3f8b40276d extends \Twig\Template
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
        // line 32
        echo "<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("General System Information"));
        echo "</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--d8\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal Version"));
        echo "</h3>
        ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["drupal"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 40
        if ($this->getAttribute(($context["drupal"] ?? null), "description", [])) {
            // line 41
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["drupal"] ?? null), "description", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 43
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last Cron Run"));
        echo "</h3>
        ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["cron"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 50
        if ($this->getAttribute(($context["cron"] ?? null), "run_cron", [])) {
            // line 51
            echo "          <div class=\"system-status-general-info__run-cron\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["cron"] ?? null), "run_cron", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 53
        echo "        ";
        if ($this->getAttribute(($context["cron"] ?? null), "description", [])) {
            // line 54
            echo "          <div class=\"system-status-general-info__description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["cron"] ?? null), "description", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 56
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Web Server"));
        echo "</h3>
        ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["webserver"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 63
        if ($this->getAttribute(($context["webserver"] ?? null), "description", [])) {
            // line 64
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["webserver"] ?? null), "description", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 66
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP"));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version"));
        echo "</h4>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 73
        if ($this->getAttribute(($context["php"] ?? null), "description", [])) {
            // line 74
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php"] ?? null), "description", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 76
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Memory limit"));
        echo "</h4>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php_memory_limit"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 78
        if ($this->getAttribute(($context["php_memory_limit"] ?? null), "description", [])) {
            // line 79
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php_memory_limit"] ?? null), "description", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 81
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Database"));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version"));
        echo "</h4>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system_version"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 88
        if ($this->getAttribute(($context["database_system_version"] ?? null), "description", [])) {
            // line 89
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system_version"] ?? null), "description", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 91
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("System"));
        echo "</h4>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system"] ?? null), "value", [])), "html", null, true);
        echo "
        ";
        // line 93
        if ($this->getAttribute(($context["database_system"] ?? null), "description", [])) {
            // line 94
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system"] ?? null), "description", [])), "html", null, true);
            echo "</div>
        ";
        }
        // line 96
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 96,  192 => 94,  190 => 93,  184 => 92,  181 => 91,  175 => 89,  173 => 88,  167 => 87,  163 => 86,  156 => 81,  150 => 79,  148 => 78,  142 => 77,  139 => 76,  133 => 74,  131 => 73,  125 => 72,  121 => 71,  114 => 66,  108 => 64,  106 => 63,  102 => 62,  98 => 61,  91 => 56,  85 => 54,  82 => 53,  76 => 51,  74 => 50,  70 => 49,  66 => 48,  59 => 43,  53 => 41,  51 => 40,  47 => 39,  43 => 38,  35 => 33,  32 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/claro/templates/status-report-general-info.html.twig", "C:\\wamp64\\www\\social\\social\\html\\core\\themes\\claro\\templates\\status-report-general-info.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 40];
        static $filters = ["t" => 33, "escape" => 39];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
