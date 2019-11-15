<?php

/* __string_template__d10168fc4518573fa87dd44c40ceef32fa4a4b4d54acb222c8322ac2c323039c */
class __TwigTemplate_78cf118a84f50a05a7f022bf1511e539f86866c9dbde89f79504ec29b10a9304 extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 1
        echo "<strong>LimeSurvey Bootstrap Vanilla Survey Theme</strong><br>A clean and simple base that can be used by developers to create their own Bootstrap based theme.";
    }

    public function getTemplateName()
    {
        return "__string_template__d10168fc4518573fa87dd44c40ceef32fa4a4b4d54acb222c8322ac2c323039c";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__d10168fc4518573fa87dd44c40ceef32fa4a4b4d54acb222c8322ac2c323039c", "");
    }
}
