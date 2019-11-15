<?php

/* ./subviews/messages/justsaved.twig */
class __TwigTemplate_7b26251966779473e8a60d9385f270af5fc2aa252b61529bbd0989de75e3f0a2 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 2);
        $filters = array();
        $functions = array("intval" => 1, "gT" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
                array('intval', 'gT')
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
        if (((intval($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "showpopups", array())) >= 0) && $this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "saved", array()), "text", array()))) {
            // line 2
            echo "    ";
            $context["savedClass"] = "success";
            // line 3
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "saved", array()), "success", array())) {
                // line 4
                echo "        ";
                $context["savedClass"] = "error";
                // line 5
                echo "    ";
            }
            // line 6
            echo "    ";
            if (($this->getAttribute(($context["aSurveyInfo"] ?? null), "active", array()) != "Y")) {
                // line 7
                echo "        ";
                $context["savedClass"] = "info";
                // line 8
                echo "    ";
            }
            // line 9
            echo "    <div class=\"alert alert-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["savedClass"] ?? null));
            echo " alert-dismissible fade in";
            if ((intval($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "showpopups", array())) > 0)) {
                echo " ls-js-hidden";
            }
            echo " \" role=\"alert\">
        <button class=\"close ls-no-js-hidden\" data-dismiss=\"alert\"><span aria-hidden=\"true\">x</span><span class=\"sr-only\">";
            // line 10
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Close"));
            echo "</span></button>
        ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "saved", array()), "text", array()));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/messages/justsaved.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 11,  75 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/messages/justsaved.twig", "/opt/lampp/htdocs/jdssurvey/themes/survey/vanilla/views/subviews/messages/justsaved.twig");
    }
}
