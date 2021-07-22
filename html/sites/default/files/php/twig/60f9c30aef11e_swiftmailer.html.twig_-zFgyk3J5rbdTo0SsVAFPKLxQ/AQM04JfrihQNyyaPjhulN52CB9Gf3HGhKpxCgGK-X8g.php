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

/* themes/contrib/socialbase/templates/email/swiftmailer.html.twig */
class __TwigTemplate_3f63ba4c4d7c21e41ad3c46d6b69f41364b1bc03b901ce551d69c6a6bf949031 extends \Twig\Template
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
        // line 33
        echo "<!doctype html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title>Open Social</title>
    <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; }

        body {
            background-color: #f6f6f6;
            color: #4a4a4a;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top; }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%; }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px; }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px; }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .header {
            padding-top: 30px;
            padding-bottom: 30px;
            text-align: center;
        }

        .postheader {
            padding-bottom: 30px;
            text-align: center;
            font-size: 18px;
        }

        .main {
            background: #fff;
            width: 100%;
            box-shadow: 0 -1px 0 #e0e0e0, 0 0 2px rgba(0,0,0,0.12), 0 2px 4px rgba(0,0,0,0.24); }

        .wrapper {
            box-sizing: border-box;
            padding: 50px 35px 15px; }

        .footer {
            clear: both;
            padding-top: 10px;
            text-align: center;
            width: 100%; }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center; }

        .content-block {
            padding-top: 10px;
        }
        .content-block img {
            margin: 10px 0;
        }
        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px; }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize; }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px; }
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px; }

        ul {
            padding-left: 1em;
        }

        a {
            color: ";
        // line 177
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
        echo ";
            text-decoration: none;
            font-weight: 700; }

        .first-paragraph {
            font-size: 16px;
            margin-bottom: 20px; }

        .bottom-space {
            margin-bottom: 40px; }

        .notification {
            font-size: 18px;
            margin-bottom: 20px; }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%; }
        .btn > tbody > tr > td {
            padding-bottom: 15px; }
        .btn table {
            width: auto; }
        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center; }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #784288;
            border-radius: 5px;
            box-sizing: border-box;
            color: #784288;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize; }

        .btn-primary table td {
            background-color: #784288; }

        .btn-primary a {
            background-color: #784288;
            border-color: #784288;
            color: #ffffff; }

        .btn-wrapp {
            margin-bottom: 30px; }

        .btn-wrapp td {
            padding: 0 10px; }

        .btn-wrapp td:nth-child(odd) {
            padding-left: 0; }

        .btn-wrapp td:nth-child(even) {
            padding-right: 0; }

        .btn-link {
            display: block;
            position: relative;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid ";
        // line 246
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
        echo ";
            color: ";
        // line 247
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
        echo ";
            padding: 9px 25px 7px;
            text-align: center; }

        .btn-link-one {
            display: inline-block;
            min-width: 230px; }

        .btn-link img {
            position: absolute;
            top: 10px;
            left: 11px; }

        .btn-link-bg {
            background-color: ";
        // line 261
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
        echo ";
            color: #ffffff !important; }

        /* -------------------------------------
            COMMENTS, POST, MESSAGE STYLES
        ------------------------------------- */
        .comments {
            padding: 5px 0 0;
            border-radius: 5px;
            border: 2px solid #e0e0e0;
            margin-bottom: 20px; }

        .comment {
            padding: 15px 20px 0;
            border-radius: 5px; }

        .reply {
            padding-bottom: 20px;
            margin: 20px 15px;
            background: #f3f3f3; }

        .post {
            padding: 15px 20px 20px; }

        .message {
            padding: 5px 20px; }

        .author-msg {
            margin-bottom: 10px; }

        .post p,
        .comment p {
            margin: 10px 0; }

        .post-answer {
            background-color: #f3f3f3; }

        .middle-block {
            padding: 45px 0 0;
            margin-bottom: 30px;
            border-bottom: 2px solid #e0e0e0;
            border-top: 2px solid #e0e0e0; }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0; }

        .first {
            margin-top: 0; }

        .align-center {
            text-align: center; }

        .align-right {
            text-align: right; }

        .align-left {
            text-align: left; }

        .clear {
            clear: both; }

        .mt0 {
            margin-top: 0; }

        .mb0 {
            margin-bottom: 0; }

        .logo {
            max-height: 80px;
            max-width: 160px; }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; }

        .powered-by a {
            text-decoration: none; }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0; }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important; }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important; }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important; }
            table[class=body] .content {
                padding: 0 !important; }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important; }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important; }
            table[class=body] .btn table {
                width: 100% !important; }
            table[class=body] .btn a {
                width: 100% !important; }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important; }}

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
                width: 100%; }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%; }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important; }
            .btn-primary table td:hover {
                background-color: #34495e !important; }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important; } }

    </style>
</head>
<body class=\"\">

<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"body\">
    <tr>
        <td>&nbsp;</td>
        <td class=\"container\">
            <div class=\"content\">

                <!-- START CENTERED WHITE CONTAINER -->
                <span class=\"preheader\"></span>

                <div class=\"header\">
                    <img src=\"";
        // line 430
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
        echo "\" alt=\"Logo\" class=\"logo\" />
                </div>

                <div class=\"postheader\">
                    ";
        // line 434
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
        echo "
                </div>

                <table class=\"main\">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class=\"wrapper\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                                ";
        // line 443
        if (($context["header"] ?? null)) {
            // line 444
            echo "                                <tr>
                                    <td>
                                       ";
            // line 446
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
                                    </td>
                                </tr>
                                ";
        }
        // line 450
        echo "                                <tr>
                                    <td>
                                        ";
        // line 452
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
                                    </td>
                                </tr>
                                ";
        // line 455
        if (($context["footer"] ?? null)) {
            // line 456
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 458
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
                                        </td>
                                    </tr>
                                ";
        }
        // line 462
        echo "
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class=\"footer\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                        <tr>
                            <td class=\"content-block\">
                                <strong class=\"brand\">
                                    ";
        // line 476
        if (($context["site_link"] ?? null)) {
            // line 477
            echo "                                        <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "</a>
                                    ";
        } else {
            // line 479
            echo "                                        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "
                                    ";
        }
        // line 481
        echo "                                </strong>
                                ";
        // line 482
        if (($context["site_slogan"] ?? null)) {
            // line 483
            echo "                                    <br />
                                    <span class=\"tagline\">";
            // line 484
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "</span>
                                ";
        }
        // line 486
        echo "                                ";
        if (($context["site_sub_slogan"] ?? null)) {
            // line 487
            echo "                                    <br />
                                    <span class=\"tagline\">";
            // line 488
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_sub_slogan"] ?? null)), "html", null, true);
            echo "</span>
                                ";
        }
        // line 490
        echo "                            </td>
                        </tr>
                        <tr>
                            <td class=\"content-block powered-by\">
                                Copyright &copy; ";
        // line 494
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/email/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 494,  554 => 490,  549 => 488,  546 => 487,  543 => 486,  538 => 484,  535 => 483,  533 => 482,  530 => 481,  524 => 479,  516 => 477,  514 => 476,  498 => 462,  491 => 458,  487 => 456,  485 => 455,  479 => 452,  475 => 450,  468 => 446,  464 => 444,  462 => 443,  450 => 434,  443 => 430,  271 => 261,  254 => 247,  250 => 246,  178 => 177,  32 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/email/swiftmailer.html.twig", "C:\\wamp64\\www\\social\\social\\html\\themes\\contrib\\socialbase\\templates\\email\\swiftmailer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 443];
        static $filters = ["escape" => 177, "date" => 494];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
