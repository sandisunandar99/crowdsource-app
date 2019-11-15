<?php

/* __string_template__5efb71de0c61ec58ef013e7cea9f493d559fd1203367404d2b619ab6b351d71b */
class __TwigTemplate_1bdb65b01db65f5736a34c51c66acfbad7ada9f876e329f2c9f29b35bda6c24b extends Twig_Template
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
        $functions = array("gT" => 1);

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

        // line 1
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("How many roads must a man walk down?"));
        echo " ";
    }

    public function getTemplateName()
    {
        return "__string_template__5efb71de0c61ec58ef013e7cea9f493d559fd1203367404d2b619ab6b351d71b";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("", "__string_template__5efb71de0c61ec58ef013e7cea9f493d559fd1203367404d2b619ab6b351d71b", "");
    }
}
