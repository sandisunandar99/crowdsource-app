<?php

/* /survey/questions/answer/numerical/answer.twig */
class __TwigTemplate_14384d71f4e9be754a8196b6939b8ac94cd47a9a913163020a821288220c8a6e extends Twig_Template
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
        $tags = array("if" => 20);
        $filters = array();
        $functions = array("gT" => 39);

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

        // line 17
        echo "<!-- Numerical -->

<!-- answer -->
";
        // line 20
        if (($context["withColumn"] ?? null)) {
            // line 21
            echo "<div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " row'>
    <div class=\"";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "\">
";
        } else {
            // line 24
            echo "<div class='";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
            echo "'>
";
        }
        // line 26
        echo "    ";
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 27
            echo "        <div class=\"ls-input-group\">
    ";
        }
        // line 28
        echo " 
    <!-- Prefix -->
    ";
        // line 30
        if ((($context["prefix"] ?? null) != "")) {
            // line 31
            echo "        <div class='ls-input-group-extra prefix-text prefix'>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["prefix"] ?? null));
            echo "</div>
    ";
        }
        // line 32
        echo " 
    
    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => ($context["id"] ?? null), 1 => ($context["fValue"] ?? null), 2 => array("id" => ("answer" .         // line 37
($context["id"] ?? null)), "class" => ("form-control " .         // line 38
($context["answertypeclass"] ?? null)), "title" => gT("Only numbers may be entered in this field."), "size" => ((        // line 40
($context["inputsize"] ?? null)) ? (($context["inputsize"] ?? null)) : (null)), "maxlength" => ((        // line 41
($context["maxlength"] ?? null)) ? (($context["maxlength"] ?? null)) : (null)), "data-number" => 1, "data-integer" =>         // line 43
($context["integeronly"] ?? null), "aria-labelledby" => ("ls-question-text-" .         // line 44
($context["basename"] ?? null)))), "method"));
        // line 46
        echo "
    <!-- Suffix -->
    ";
        // line 48
        if ((($context["suffix"] ?? null) != "")) {
            // line 49
            echo "        <div class='ls-input-group-extra suffix-text suffix'>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["suffix"] ?? null));
            echo "</div>
    ";
        }
        // line 50
        echo " 
    ";
        // line 51
        if (((($context["prefix"] ?? null) != "") || (($context["suffix"] ?? null) != ""))) {
            // line 52
            echo "        </div>
    ";
        }
        // line 53
        echo " 
";
        // line 54
        if (($context["withColumn"] ?? null)) {
            // line 55
            echo "    </div>
</div>
";
        } else {
            // line 58
            echo "</div>
";
        }
        // line 59
        echo " 
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/numerical/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 59,  133 => 58,  128 => 55,  126 => 54,  123 => 53,  119 => 52,  117 => 51,  114 => 50,  108 => 49,  106 => 48,  102 => 46,  100 => 44,  99 => 43,  98 => 41,  97 => 40,  96 => 38,  95 => 37,  93 => 36,  91 => 35,  87 => 32,  81 => 31,  79 => 30,  75 => 28,  71 => 27,  68 => 26,  60 => 24,  55 => 22,  50 => 21,  48 => 20,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/numerical/answer.twig", "/opt/lampp/htdocs/crowdsource-app/application/views/survey/questions/answer/numerical/answer.twig");
    }
}
