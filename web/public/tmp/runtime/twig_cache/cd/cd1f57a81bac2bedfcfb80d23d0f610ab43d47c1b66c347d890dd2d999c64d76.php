<?php

/* /survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig */
class __TwigTemplate_bc5be0ca07c66e694cd4bc74fe4ad56f9176bf85faae2b78b681086b65f23ee8 extends Twig_Template
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
        $tags = array("if" => 21);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 19
        echo "
<!--answer_row_inputtext -->
<li id=\"javatbd";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"question-item answer-item text-item form-group";
        if (($context["alert"] ?? null)) {
            echo " ls-error-mandatory has-error";
        }
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sDisplayStyle"] ?? null));
        echo " >
    <label class=\"control-label col-xs-12 col-sm-";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sLabelWidth"] ?? null));
        if ((($context["sLabelWidth"] ?? null) == 0)) {
            echo " hidden";
        }
        echo "\" for=\"answer";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
        ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["question"] ?? null));
        echo "
    </label>
    <div class=\"col-xs-12 col-sm-";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sInputContainerWidth"] ?? null));
        echo "\">
        
        ";
        // line 27
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 28
            echo "            <div class=\"ls-input-group\">
        ";
        }
        // line 30
        echo "            ";
        if ((($context["prefix"] ?? null) != "")) {
            // line 31
            echo "                <div class=\"ls-input-group-extra prefix-text prefix\">
                    ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["prefix"] ?? null));
            echo "
                </div>
            ";
        }
        // line 35
        echo "            <input
                class=\"form-control ";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["kpclass"] ?? null));
        echo "\"
                type=\"text\"
                name=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
                id=\"answer";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\"
                value=\"";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["dispVal"] ?? null));
        echo "\"
                ";
        // line 41
        if (($context["inputsize"] ?? null)) {
            echo " size=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["inputsize"] ?? null));
            echo "\" ";
        }
        // line 42
        echo "                ";
        if (($context["maxlength"] ?? null)) {
            echo " maxlength=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["maxlength"] ?? null));
            echo "\" ";
        }
        // line 43
        echo "                ";
        if (($context["numbersonly"] ?? null)) {
            echo " data-number=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["numbersonly"] ?? null));
            echo "\" ";
        }
        // line 44
        echo "                />
            ";
        // line 45
        if ((($context["suffix"] ?? null) != "")) {
            // line 46
            echo "                <div class=\"ls-input-group-extra suffix-text suffix\">
                    ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["suffix"] ?? null));
            echo "
                </div>
            ";
        }
        // line 50
        echo "        ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 51
            echo "            </div>
        ";
        }
        // line 53
        echo "    </div>
</li>
<!-- end of answer_row_inputtext -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  152 => 51,  149 => 50,  143 => 47,  140 => 46,  138 => 45,  135 => 44,  128 => 43,  121 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  98 => 36,  95 => 35,  89 => 32,  86 => 31,  83 => 30,  79 => 28,  77 => 27,  72 => 25,  67 => 23,  58 => 22,  47 => 21,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig", "/opt/lampp/htdocs/jdssurvey/application/views/survey/questions/answer/multipleshorttext/rows/answer_row_inputtext.twig");
    }
}
