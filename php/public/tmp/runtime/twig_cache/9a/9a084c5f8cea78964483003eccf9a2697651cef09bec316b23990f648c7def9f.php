<?php

/* __string_template__f5af5533e87be7f1f276a894953784da3f46cd18f7d8508d7181e480b07712e7 */
class __TwigTemplate_accfb7109088cb4c48c601c463256791de986a4a7f2311ab87f47c96da62518f extends Twig_Template
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
        echo "<strong>LimeSurvey Fruity Theme</strong><br>A fruity theme for a flexible use. This theme offers monochromes variations and many options for easy customizations.";
    }

    public function getTemplateName()
    {
        return "__string_template__f5af5533e87be7f1f276a894953784da3f46cd18f7d8508d7181e480b07712e7";
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
        return new Twig_Source("", "__string_template__f5af5533e87be7f1f276a894953784da3f46cd18f7d8508d7181e480b07712e7", "");
    }
}
