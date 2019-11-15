<?php

/* ./subviews/navigation/question_index_groups_buttons.twig */
class __TwigTemplate_547fb38e65a870cde7e50d4d1832eac43b34081128d136f75b6d3dc62269c8b2 extends Twig_Template
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
        $tags = array("for" => 10, "set" => 11, "if" => 12);
        $filters = array();
        $functions = array("gT" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
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

        // line 6
        echo "<div class=\"list-group index-button-full\">
  <div class=\"list-group-item\">
      <div class=\"h4 list-group-item-heading\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question index"));
        echo "</div>
  </div>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "aQuestionIndex", array()), "items", array()));
        foreach ($context['_seq'] as $context["step"] => $context["indexItem"]) {
            // line 11
            echo "    ";
            $context["templateClass"] = "";
            // line 12
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-unanswered", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-unanswered") == true))) {
                // line 13
                echo "        ";
                $context["templateClass"] = (($context["templateClass"] ?? null) . " list-group-item-warning");
                // line 14
                echo "    ";
            }
            // line 15
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-error", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-error") == true))) {
                // line 16
                echo "        ";
                $context["templateClass"] = (($context["templateClass"] ?? null) . " list-group-item-danger");
                // line 17
                echo "    ";
            }
            // line 18
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array(), "any", false, true), "index-item-current", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["indexItem"], "stepStatus", array()), "index-item-current") == true))) {
                // line 19
                echo "        ";
                $context["templateClass"] = (($context["statusClass"] ?? null) . " disabled");
                // line 20
                echo "    ";
            }
            // line 21
            echo "    <button type=\"submit\" name=\"move\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "step", array()));
            echo "\" class=\"list-group-item ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "coreClass", array()));
            echo " ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["templateClass"] ?? null));
            echo "\" >";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["indexItem"], "text", array()));
            echo "</button>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['step'], $context['indexItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/navigation/question_index_groups_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  52 => 10,  47 => 8,  43 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "./subviews/navigation/question_index_groups_buttons.twig", "/opt/lampp/htdocs/crowdsource-app/themes/survey/vanilla/views/subviews/navigation/question_index_groups_buttons.twig");
    }
}
