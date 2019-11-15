<?php

/* ./subviews/header/head.twig */
class __TwigTemplate_100a9d428e2a9cda4d12ae1379d616030cc00abcde53e562c52a5995bb112d98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 18);
        $filters = array();
        $functions = array("registerScript" => 19, "processString" => 33, "imageSrc" => 36, "include" => 57);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('registerScript', 'processString', 'imageSrc', 'include')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "jYesNo", array())) {
            // line 19
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("activateConfirmLanguage", (("\$.extend(LSvar.lang," . $this->getAttribute(($context["aSurveyInfo"] ?? null), "jYesNo", array())) . ")"), "POS_BEGIN"));
            echo "
";
        }
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("activateActionLink", "activateActionLink();", "POS_POSTSCRIPT"));
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("activateConfirmButton", "activateConfirmButton();", "POS_POSTSCRIPT"));
        echo "

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />

    ";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "metas", array()));
        echo "

    <title>
        ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::processString($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()), 1));
        echo "
    </title>

    <link rel=\"shortcut icon\" href=\"";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::imageSrc("./files/favicon.ico"));
        echo "\" />
    <script type=\"text/javascript\">
        if(window.basicThemeScripts === undefined){ 
            window.basicThemeScripts = new ThemeScripts(); 
        } 
    </script>
    ";
        // line 43
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on")) {
            // line 44
            echo "        <script type=\"text/javascript\">
            var ajaxHandler = new AjaxSubmitObject();
            \$(document).on('ready', function () {
                ajaxHandler.bindActions();
            });
        </script>
    ";
        }
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("LSvarTemplateInit", "LSvar= LSvar || {};", "POS_HEAD"));
        echo "
    ";
        // line 53
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) && ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) != "off"))) {
            // line 54
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("LSvarTemplateRealFixNumAuto", (("LSvar.bFixNumAuto = " . ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) == "enable")) ? (1) : (0))) . ";"), "POS_HEAD"));
            echo "
        ";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("LSvarTemplateRealNumRealValue", (("LSvar.bNumRealValue = " . ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "fixnumauto", array()) == "disable")) ? (1) : (0))) . ";"), "POS_HEAD"));
            echo "
    ";
        }
        // line 57
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/custom_header.twig"));
        echo "

    ";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/google_analytics.twig"));
        echo "
</head>
";
    }

    public function getTemplateName()
    {
        return "./subviews/header/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  121 => 57,  116 => 55,  111 => 54,  109 => 53,  104 => 52,  102 => 51,  93 => 44,  90 => 43,  81 => 36,  75 => 33,  69 => 30,  58 => 22,  54 => 21,  48 => 19,  46 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/header/head.twig", "/var/www/html/public/themes/survey/vanilla/views/subviews/header/head.twig");
    }
}
