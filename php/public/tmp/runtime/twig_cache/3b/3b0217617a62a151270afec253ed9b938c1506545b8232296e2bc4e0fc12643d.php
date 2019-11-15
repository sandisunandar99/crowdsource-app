<?php

/* ./subviews/navigation/language_changer_form.twig */
class __TwigTemplate_a30d97f64a9462ec9d2fb8a974204eead96eae5d387019c0d0f3bc5215f39ea9 extends Twig_Template
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
        $tags = array("if" => 7);
        $filters = array();
        $functions = array("include" => 12);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('include')
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

        // line 7
        if ($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyUrl", array())) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => $this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyUrl", array()), 1 => "get"), "method"));
            echo " ";
        } else {
            // line 10
            echo "    <form method=\"get\">
";
        }
        // line 12
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer.twig"));
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/language_changer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  50 => 10,  45 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/navigation/language_changer_form.twig", "/opt/lampp/htdocs/jdssurvey/themes/survey/vanilla/views/subviews/navigation/language_changer_form.twig");
    }
}
