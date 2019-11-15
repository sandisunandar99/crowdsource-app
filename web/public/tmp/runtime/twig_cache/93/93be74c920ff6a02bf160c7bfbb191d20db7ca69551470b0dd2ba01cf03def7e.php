<?php

/* __string_template__29272fb5d75428291149b1820ea3dfcf3cd7c76e75bf78008b8008798f34ad0d */
class __TwigTemplate_7b436b7928f9dc6a4860872fb3c0cf4fc8b538a58c85e2486125f26ef5c5b579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 28, "if" => 39, "block" => 77);
        $filters = array("format" => 68);
        $functions = array("registerTemplateCssFile" => 27, "gT" => 68, "include" => 78);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('format'),
                array('registerTemplateCssFile', 'gT', 'include')
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

        // line 25
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("css/errors.css"));
        echo "
";
        // line 28
        $context["aError"] = $this->getAttribute(($context["aSurveyInfo"] ?? null), "aError", array());
        // line 29
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo "\" dir=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " dir-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "html", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "html", array()));
        echo ">

    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

        <title>
            ";
        // line 39
        if ($this->getAttribute(($context["aError"] ?? null), "error", array())) {
            // line 40
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "error", array()));
            echo "
            ";
        } else {
            // line 42
            echo "                !ERROR ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyls_title", array()));
            echo "
            ";
        }
        // line 44
        echo "        </title>

        ";
        // line 50
        echo "        <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["templateurl"] ?? null));
        echo "favicon.ico\" />
    </head>

    <body  class=\"";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["surveyformat"] ?? null));
        echo "\" marginwidth=\"0\" marginheight=\"0\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo ">
        <article id=\"block_error\">
            <div>
                ";
        // line 57
        if ($this->getAttribute(($context["aError"] ?? null), "error", array())) {
            // line 58
            echo "                    <h1>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "error", array()));
            echo "</h1>
                ";
        }
        // line 60
        echo "                <h2>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "title", array()));
        echo "</h2>
                <p>
                    ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "message", array()));
        echo "
                </p>
                <p>
                    ";
        // line 65
        if ($this->getAttribute(($context["aError"] ?? null), "contact", array())) {
            // line 66
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aError"] ?? null), "contact", array()));
            echo "
                    ";
        } else {
            // line 68
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("For further information please contact %s:"), $this->getAttribute(($context["aSurveyInfo"] ?? null), "adminname", array())));
            echo "
                        ";
            // line 69
            if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array())) {
                // line 70
                echo "                            <br>
                            <a href='mailto:";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array()));
                echo "'>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "adminemail", array()));
                echo "</a>
                        ";
            }
            // line 73
            echo "                    ";
        }
        // line 74
        echo "                </p>
            </div>
        </article>
        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "    </body>
</html>
";
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__29272fb5d75428291149b1820ea3dfcf3cd7c76e75bf78008b8008798f34ad0d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 78,  178 => 77,  172 => 80,  170 => 77,  165 => 74,  162 => 73,  155 => 71,  152 => 70,  150 => 69,  145 => 68,  139 => 66,  137 => 65,  131 => 62,  125 => 60,  119 => 58,  117 => 57,  105 => 54,  99 => 51,  96 => 50,  92 => 44,  86 => 42,  80 => 40,  78 => 39,  57 => 31,  53 => 29,  51 => 28,  47 => 27,  44 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__29272fb5d75428291149b1820ea3dfcf3cd7c76e75bf78008b8008798f34ad0d", "");
    }
}
