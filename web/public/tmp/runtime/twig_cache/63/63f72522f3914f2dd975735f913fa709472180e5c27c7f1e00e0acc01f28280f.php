<?php

/* /survey/questions/answer/arrays/multiflexi/answer.twig */
class __TwigTemplate_e575046f9657d9ceb9fe5420abbc7b7d7b586e1f19da863589b0d8e21219b127 extends Twig_Template
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
        $tags = array("for" => 22, "if" => 26);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 16
        echo "<!-- answer -->
<table class=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["coreClass"] ?? null));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
        echo " table table-bordered table-hover\" role=\"group\" aria-labelledby=\"ls-question-text-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["basename"] ?? null));
        echo "\">

    <colgroup class=\"col-responses\">
        <col class=\"answertext\" style='width: ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answerwidth"] ?? null));
        echo "%;'/>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["ld"]) {
            // line 23
            echo "            <col class=\"";
            echo "\" style='width: ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["cellwidth"] ?? null));
            echo "%;'/> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        ";
        // line 26
        if (($context["right_exists"] ?? null)) {
            // line 27
            echo "            <col class=\"answertextright ";
            echo "\" style='width: ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answerwidth"] ?? null));
            echo "%;' />
        ";
        }
        // line 29
        echo "    </colgroup>

    <thead aria-hidden=\"true\">
        <tr class=\"ls-heading\">
            <td></td>

            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["labelans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ld"]) {
            // line 36
            echo "                <th>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($context["ld"]);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            ";
        // line 39
        if (($context["right_exists"] ?? null)) {
            // line 40
            echo "                <td></td>
            ";
        }
        // line 42
        echo "        </tr>
    </thead>

    <tbody>
            ";
        // line 47
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["sAnswerRows"] ?? null));
        echo "
    </tbody>
</table>
<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  117 => 42,  113 => 40,  111 => 39,  108 => 38,  99 => 36,  95 => 35,  87 => 29,  80 => 27,  78 => 26,  75 => 25,  65 => 23,  61 => 22,  56 => 20,  46 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/multiflexi/answer.twig", "/opt/lampp/htdocs/crowdsource-app/application/views/survey/questions/answer/arrays/multiflexi/answer.twig");
    }
}
