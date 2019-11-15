<?php

/* /survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig */
class __TwigTemplate_39cab7e5acbede5bbd53832d92e8723afb81a4824d7f973f09c96c9d4c3110e2 extends Twig_Template
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
        $tags = array("if" => 26, "for" => 45, "set" => 46);
        $filters = array("t" => 46, "replace" => 47);
        $functions = array("gT" => 43, "range" => 45);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t', 'replace'),
                array('gT', 'range')
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

        // line 24
        echo "
<!-- answer_td -->
<td class=\"answer_cell_";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["ld"] ?? null));
        echo " answer-item ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["answertypeclass"] ?? null));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["extraclass"] ?? null));
        if (($context["error"] ?? null)) {
            echo " has-error";
        }
        echo "\">
        ";
        // line 28
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "hiddenField", array(0 => ("java" . ($context["myfname2"] ?? null)), 1 => ($context["value"] ?? null), 2 => array("id" => ("java" .         // line 29
($context["myfname2"] ?? null)), "disabled" => true)), "method"));
        // line 32
        echo "
        <label for=\"answer";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname2"] ?? null));
        echo "\" class='ls-label-xs-visibility'>
            ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["dataTitle"] ?? null));
        echo "
        </label>
        ";
        // line 36
        if ((($context["inputboxlayout"] ?? null) == false)) {
            // line 37
            echo "            <!-- InputBox Layout False -->
            <select
                class=\"multiflexiselect form-control text-right\"
                name=\"";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname2"] ?? null));
            echo "\"
                id=\"answer";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["myfname2"] ?? null));
            echo "\">
                <option value=\"\">
                    ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("..."));
            echo "
                </option>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["minvalue"] ?? null), ($context["maxvalue"] ?? null), ($context["stepvalue"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 46
                echo "                    ";
                $context["selected"] = ((( !twig_test_empty(($context["value"] ?? null)) && (gT(($context["value"] ?? null)) == gT($context["i"])))) ? ("SELECTED") : (""));
                // line 47
                echo "                    <option value=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_replace_filter($context["i"], array("." => ($context["sSeparator"] ?? null))));
                echo "\" ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["selected"] ?? null));
                echo ">
                        ";
                // line 48
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_replace_filter($context["i"], array("." => ($context["sSeparator"] ?? null))));
                echo "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </select>
        ";
        } elseif ((        // line 52
($context["inputboxlayout"] ?? null) == true)) {
            // line 53
            echo "            <!-- InputBox Layout -->
            ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "textField", array(0 => ($context["myfname2"] ?? null), 1 => ($context["value"] ?? null), 2 => array("id" => ("answer" .             // line 55
($context["myfname2"] ?? null)), "class" => (("multiflexitext form-control " .             // line 56
($context["answertypeclass"] ?? null)) . " text-right "), "title" => gT("Only numbers may be entered in this field."), "size" => ((            // line 58
($context["inputsize"] ?? null)) ? (($context["inputsize"] ?? null)) : (null)), "maxlength" => ((            // line 59
($context["maxlength"] ?? null)) ? (($context["maxlength"] ?? null)) : (null)), "data-number" => 1)), "method"));
            // line 62
            echo "
        ";
        }
        // line 64
        echo "</td>
<!-- end of answer_td -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 64,  132 => 62,  130 => 59,  129 => 58,  128 => 56,  127 => 55,  126 => 54,  123 => 53,  121 => 52,  118 => 51,  109 => 48,  102 => 47,  99 => 46,  95 => 45,  90 => 43,  85 => 41,  81 => 40,  76 => 37,  74 => 36,  69 => 34,  65 => 33,  62 => 32,  60 => 29,  58 => 28,  47 => 26,  43 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig", "/opt/lampp/htdocs/crowdsource-app/application/views/survey/questions/answer/arrays/multiflexi/rows/cells/answer_td.twig");
    }
}
