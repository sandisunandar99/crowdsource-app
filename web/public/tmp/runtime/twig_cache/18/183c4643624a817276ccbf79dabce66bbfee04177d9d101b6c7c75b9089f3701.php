<?php

/* __string_template__e2a447ea81bd2d810909fa89af7efa554871a5e8b5afbf0e8f0cc24a06726e68 */
class __TwigTemplate_43d29c07ba73d894ea5f703e2e9307ac19e06ba7fcfc81602bb4494fdbc66012 extends Twig_Template
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
        echo "<strong>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("LimeSurvey Fruity Theme"));
        echo "</strong><br>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("A fruity theme for a flexible use. This theme offers monochromes variations and many options for easy customizations."));
    }

    public function getTemplateName()
    {
        return "__string_template__e2a447ea81bd2d810909fa89af7efa554871a5e8b5afbf0e8f0cc24a06726e68";
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
        return new Twig_Source("", "__string_template__e2a447ea81bd2d810909fa89af7efa554871a5e8b5afbf0e8f0cc24a06726e68", "");
    }
}
