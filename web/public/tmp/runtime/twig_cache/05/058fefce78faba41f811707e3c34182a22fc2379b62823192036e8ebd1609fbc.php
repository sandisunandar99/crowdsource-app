<?php

/* ./subviews/content/submit_preview.twig */
class __TwigTemplate_8c3dd6983a1f8abeccc6bb869f81cb91f8ecdc7e5938cb85dd6e97206a95be08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 20
        $this->parent = $this->loadTemplate("./subviews/content/submit.twig", "./subviews/content/submit_preview.twig", 20);
        $this->blocks = array(
            'endtext' => array($this, 'block_endtext'),
            'printanswer' => array($this, 'block_printanswer'),
            'publicstatistics' => array($this, 'block_publicstatistics'),
            'endurl' => array($this, 'block_endurl'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./subviews/content/submit.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 29);
        $filters = array();
        $functions = array("gT" => 22);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('gT')
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_endtext($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"alert alert-warning\"><strong class=\"h4 text-danger\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Did Not Save"));
        echo " </strong>
        ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Your survey responses have not been recorded. This survey is not yet active."));
        echo "
    </div>
    ";
        // line 25
        $this->displayParentBlock("endtext", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_printanswer($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPrintAnswers", array()), "show", array()) == true)) {
            // line 30
            echo "        <!--  Link to Print Answer Preview -->
        <div class=\"";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdiva", array()));
            echo " disabled\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdiv", array()));
            echo ">
            <a href=\"#\" title=\" ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Note: This link only works if the survey is activated."));
            echo "\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivaa", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivaa", array()));
            echo ">
                ";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Print your answers."));
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 38
    public function block_publicstatistics($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "aPublicStatistics", array()), "show", array()) == true)) {
            // line 41
            echo "        <!-- Link to Public statistics -->
        <div class=\"";
            // line 42
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivb", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivb", array()));
            echo ">
            <a href=\"#\" title=\" ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Note: This link only works if the survey is activated."));
            echo "\" class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "submitwrapperdivba", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "submitwrapperdivba", array()));
            echo ">
                ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("View the statistics for this survey."));
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 49
    public function block_endurl($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array())) {
            // line 51
            echo "        <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrl", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aCompleted", array()), "sSurveylsUrlDescription", array()));
            echo "
        ";
            // line 52
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "autoredirect", array()) == "Y")) {
                // line 53
                echo "            <small class=\"text-info\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Note: Automatically loading the end URL works only if the survey is activated."));
                echo "</small>
        ";
            }
            // line 55
            echo "        </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit_preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 55,  157 => 53,  155 => 52,  148 => 51,  145 => 50,  142 => 49,  133 => 44,  125 => 43,  119 => 42,  116 => 41,  113 => 40,  111 => 39,  108 => 38,  99 => 33,  91 => 32,  85 => 31,  82 => 30,  79 => 29,  77 => 28,  74 => 27,  68 => 25,  63 => 23,  58 => 22,  55 => 21,  11 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/content/submit_preview.twig", "/opt/lampp/htdocs/crowdsource-app/themes/survey/vanilla/views/subviews/content/submit_preview.twig");
    }
}
