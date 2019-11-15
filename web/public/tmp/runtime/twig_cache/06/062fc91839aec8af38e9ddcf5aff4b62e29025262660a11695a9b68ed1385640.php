<?php

/* /survey/questions/answer/arrays/multiflexi/rows/answer_row.twig */
class __TwigTemplate_4b998eb4b88eafc3d3d8b2e9e228f83ea51f7cb3d7344c4b32c626876dcd3346 extends Twig_Template
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
        $tags = array("if" => 19);
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

        // line 17
        echo "
<!-- answer_row -->
<tr id=\"javatbd";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreRowClass"] ?? null));
        echo " ";
        if (($context["odd"] ?? null)) {
            echo "ls-odd";
        } else {
            echo "ls-even";
        }
        if (($context["error"] ?? null)) {
            echo " ls-error-mandatory";
        }
        echo " ";
        if ((($context["error"] ?? null) && (($context["layout"] ?? null) == "checkbox"))) {
            echo " has-error";
        }
        echo "\" role=\"group\" aria-labelledby=\"answertext";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\">
    <th id=\"answertext";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname"] ?? null));
        echo "\" class=\"answertext control-label";
        if ((($context["error"] ?? null) && (($context["layout"] ?? null) != "checkbox"))) {
            echo " text-danger\" ";
        }
        if ((($context["answerwidth"] ?? null) == 0)) {
            echo " sr-only";
        }
        echo "\">
        ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertext"] ?? null));
        echo "
        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["myfname"] ?? null)), 1 => ($context["row_value"] ?? null), 2 => array("id" => ("java" .         // line 24
($context["myfname"] ?? null)), "disabled" => true)), "method"));
        // line 27
        echo "
    </th>

        ";
        // line 31
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answer_tds"] ?? null));
        echo "
    
    <!-- right -->
    ";
        // line 34
        if (($context["rightTd"] ?? null)) {
            // line 35
            echo "        <td class=\"answertextright\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertextright"] ?? null));
            echo "</td>
    ";
        }
        // line 37
        echo "</tr>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  101 => 35,  99 => 34,  92 => 31,  87 => 27,  85 => 24,  83 => 23,  79 => 21,  68 => 20,  47 => 19,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/multiflexi/rows/answer_row.twig", "/opt/lampp/htdocs/crowdsource-app/application/views/survey/questions/answer/arrays/multiflexi/rows/answer_row.twig");
    }
}
