<?php

/* ./subviews/privacy/privacy_modal.twig */
class __TwigTemplate_f1f2e6996d840d0d959145e97b5586bf74b68a93dad246b4b0650e9ee9cab0b9 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("gT" => 29);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 17
        echo "
<!-- Privacy message -->
<br/>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <label for=\"datasecurity_accepted\" class=\"control-label ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacydataseccheckboxlabel", array()));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_notice_label", array()));
        echo "</label>
        &nbsp;<input class=\"";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacydataseccheckbox", array()));
        echo "\" type=\"checkbox\" name=\"datasecurity_accepted\" id=\"datasecurity_accepted\" />
    </div>
</div>
<div class=\"collapse fade\" id=\"data-security-modal-";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sid", array()));
        echo "\">
    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h4 class=\"modal-title\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Survey data policy"));
        echo "</h4>
        </div>
        <div class=\"panel-body ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "privacydatasecmodalbody", array()));
        echo "\">
            ";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "datasecurity_notice", array()));
        echo "
        </div>
        <div class=\"panel-footer\">
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#datasecurity_accepted').prop('checked',true).trigger('change');\" data-dismiss=\"modal\">";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Accept"));
        echo "</button>
            <button type=\"button\" class=\"btn btn-default\" onclick=\"\$('#data-security-modal-";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sid", array()));
        echo "').collapse('hide');\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Close"));
        echo "</button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/privacy/privacy_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  83 => 35,  77 => 32,  73 => 31,  68 => 29,  62 => 26,  56 => 23,  50 => 22,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/privacy/privacy_modal.twig", "/opt/lampp/htdocs/crowdsource-app/themes/survey/vanilla/views/subviews/privacy/privacy_modal.twig");
    }
}
