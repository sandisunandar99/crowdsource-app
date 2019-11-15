<?php

/* ./subviews/privacy/privacy.twig */
class __TwigTemplate_ffd3d7a1746e5e2ead7951c47b799688ab2f3799bcdc6240189f82d0ef2cc8a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'anonymous' => array($this, 'block_anonymous'),
            'datasecurity' => array($this, 'block_datasecurity'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 23, "block" => 24);
        $filters = array();
        $functions = array("gT" => 27, "include" => 46);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array(),
                array('gT', 'include')
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

        // line 18
        echo "
<!-- Privacy message -->

<div class=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacycontainer", array()));
        echo " row\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacycontainer", array()));
        echo ">
    <div class=\"";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacycol", array()));
        echo "  col-sm-12 col-centered\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacycol", array()));
        echo ">
        ";
        // line 23
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "hideprivacyinfo", array()) == "off")) {
            // line 24
            echo "            ";
            $this->displayBlock('anonymous', $context, $blocks);
            // line 43
            echo "        ";
        }
        // line 44
        echo "        ";
        $this->displayBlock('datasecurity', $context, $blocks);
        // line 51
        echo "    </div>
</div>
";
    }

    // line 24
    public function block_anonymous($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "anonymized", array()) == "Y")) {
            // line 26
            echo "                <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacyhead", array()));
            echo " h4 text-primary \" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacyhead", array()));
            echo ">
                    ";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("This survey is anonymous."));
            echo "
                </div>
                <div>
                    <p class=\"";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacybody", array()));
            echo "\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "privacybody", array()));
            echo ">
                        ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("The record of your survey responses does not contain any identifying information about you, unless a specific survey question explicitly asked for it."));
            // line 33
            echo "
                    </p>
                    <p class=\"";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacybody", array()));
            echo "\">
                        ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("If you used an identifying token to access this survey, please rest assured that this token will not be stored together with your responses. It is managed in a separate database and will only be updated to indicate whether you did (or did not) complete this survey. There is no way of matching identification tokens with survey responses."));
            // line 38
            echo "
                    </p>
                </div>
                ";
        }
        // line 42
        echo "            ";
    }

    // line 44
    public function block_datasecurity($context, array $blocks = array())
    {
        // line 45
        echo "            ";
        if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", array()) == 1)) {
            // line 46
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/privacy/privacy_text.twig"));
            echo "
            ";
        } elseif (($this->getAttribute(        // line 47
($context["aSurveyInfo"] ?? null), "showsurveypolicynotice", array()) == 2)) {
            // line 48
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/privacy/privacy_modal.twig"));
            echo "
            ";
        }
        // line 50
        echo "        ";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 50,  139 => 48,  137 => 47,  132 => 46,  129 => 45,  126 => 44,  122 => 42,  116 => 38,  114 => 36,  110 => 35,  106 => 33,  104 => 31,  98 => 30,  92 => 27,  85 => 26,  82 => 25,  79 => 24,  73 => 51,  70 => 44,  67 => 43,  64 => 24,  62 => 23,  56 => 22,  50 => 21,  45 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/privacy/privacy.twig", "/opt/lampp/htdocs/jdssurvey/themes/survey/vanilla/views/subviews/privacy/privacy.twig");
    }
}
