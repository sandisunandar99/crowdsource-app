<?php

/* __string_template__b6309812893027b6c018ae890bb67cb657349fa5fc67870c5e58a50c423c04b5 */
class __TwigTemplate_1a3b7c56b4915d61c7baa35289f93a7cd9ea13aa21d261c03e850af3fe196d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav_bar' => array($this, 'block_nav_bar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'themescripts' => array($this, 'block_themescripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 93, "block" => 108, "for" => 143);
        $filters = array();
        $functions = array("include" => 91, "registerScript" => 191, "registerTemplateCssFile" => 118, "image" => 126, "gT" => 135, "sprintf" => 159);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'for'),
                array(),
                array('include', 'registerScript', 'registerTemplateCssFile', 'image', 'gT', 'sprintf')
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

        // line 15
        echo "


";
        // line 86
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo "\" dir=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " dir-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "html", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "html", array()));
        echo ">

    ";
        // line 91
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/head.twig"));
        echo "

    <body class=\" ";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "body", array()));
        echo " font-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "font", array()));
        echo " lang-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", array()));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", array()));
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "brandlogo", array()) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "body", array()));
        echo " >
        ";
        // line 94
        if ((($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", array()), "ajaxmode", array()) == "on") && ($this->getAttribute(($context["aSurveyInfo"] ?? null), "printPdf", array()) != 1))) {
            // line 95
            echo "            ";
            // line 96
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/ajax_indicator.twig"));
            echo "
        ";
        }
        // line 98
        echo "
        ";
        // line 100
        echo "        <div id=\"beginScripts\">
            <###begin###>
        </div>

        ";
        // line 105
        echo "        <article>

            <div id=\"";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "dynamicreload", array()));
        echo "\">
            ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 194
        echo "            </div>
        </article>
        ";
        // line 196
        $this->displayBlock('footer', $context, $blocks);
        // line 199
        echo "        <div id=\"bottomScripts\">
            <###end###>
        </div>
        ";
        // line 202
        $this->displayBlock('themescripts', $context, $blocks);
        // line 207
        echo "    </body>
</html>
";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        // line 109
        echo "                ";
        // line 110
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 113
        echo "

                ";
        // line 116
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 188
        echo "

            ";
        // line 191
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScript("BasicThemeScripts", " if(window.basicThemeScripts === undefined){ window.basicThemeScripts = new ThemeScripts(); } basicThemeScripts.initGlobal(); ", "POS_END"));
        echo "

            ";
    }

    // line 110
    public function block_nav_bar($context, array $blocks = array())
    {
        // line 111
        echo "                    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/header/nav_bar.twig"));
        echo "
                ";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "                    <div class=\"container-fluid\">
                    ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css"));
        echo "
                
                    <div class=\"";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrow", array()));
        echo " row\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistrow", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrow", array()));
        echo ">

                        ";
        // line 123
        echo "                        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig"));
        echo "

                        <div id=\"";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistrowjumbotron", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowjumbotron", array()));
        echo ">
                            ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::image("./files/survey_list_header.png", $this->getAttribute(($context["aSurveyInfo"] ?? null), "name", array()), array("class" => "img-responsive center-block")));
        echo "
                            ";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteName", array()));
        echo "
                            <div class=\"ls-js-hidden\">
                                ";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig"));
        echo "
                            </div>
                        </div>

                        <div class=\"";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdiva", array()));
        echo " col-xs-12\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdiva", array()));
        echo ">
                            <div class='";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivadiv", array()));
        echo " h3' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivadiv", array()));
        echo ">
                                ";
        // line 135
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("The following surveys are available:"));
        echo "
                            </div>
                        </div>

                        <div class=\"";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivb", array()));
        echo " col-xs-12\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivb", array()));
        echo ">
                            <div class='";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdiv", array()));
        echo "' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdiv", array()));
        echo ">
                                <ul class='";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivul", array()));
        echo " list-unstyled ' ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdivul", array()));
        echo ">

                                    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "publicSurveys", array()));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 144
            echo "                                    <li class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivulli", array()));
            echo " btn-group col-sm-6 col-xs-12\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivbdivulli", array()));
            echo ">
                                        <a
                                        href=\"";
            // line 146
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "sSurveyUrl", array()));
            echo "\"
                                        title=\"";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Start survey"));
            echo "\"
                                        lang=\"";
            // line 148
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "language", array()));
            echo "\"
                                        class=\"";
            // line 149
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivbdivullia", array()));
            echo " btn btn-primary col-xs-12\"  >
                                        ";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "localizedTitle", array()));
            echo "
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                            </ul>
                            </div>
                        </div>

                        <div class=\"";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistrowdivc", array()));
        echo " col-xs-12 \" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistrowdivc", array()));
        echo ">
                            ";
        // line 159
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminName", array()), $this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", array())));
        echo "
                        </div>

                    </div>

                    <div id=\"";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", array()), "surveylistfooter", array()));
        echo "\" class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistfooter", array()));
        echo "\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfooter", array()));
        echo ">
                        <div class=\"";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", array()), "surveylistfootercont", array()));
        echo " container\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercont", array()));
        echo ">
                            <div ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontp", array()));
        echo " class=\"row\">
                                <div class=\"col-xs-6 col-sm-12 text-center\">
                                    <a ";
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontpaa", array()));
        echo " class=\"center-block text-center\">
                                        ";
        // line 169
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::image("./files/poweredby.png", "LimeSurvey Survey Software", array("class" => "img-responsive center-block ")));
        echo "
                                    </a>
                                </div>
                                <div class=\"col-sm-12 hidden-xs text-center\">
                                    <a ";
        // line 173
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontpab", array()));
        echo ">
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                </div>
                                <div class=\"col-xs-6 visible-xs text-center\">
                                    <a ";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", array()), "surveylistfootercontpab", array()));
        echo ">
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
    }

    // line 196
    public function block_footer($context, array $blocks = array())
    {
        // line 197
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_include($this->env, $context, "./subviews/footer/footer.twig"));
        echo "
        ";
    }

    // line 202
    public function block_themescripts($context, array $blocks = array())
    {
        // line 203
        echo "        <script>
            window.basicThemeScripts.init();
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__b6309812893027b6c018ae890bb67cb657349fa5fc67870c5e58a50c423c04b5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 203,  385 => 202,  378 => 197,  375 => 196,  362 => 179,  353 => 173,  346 => 169,  342 => 168,  337 => 166,  331 => 165,  323 => 164,  315 => 159,  309 => 158,  303 => 154,  293 => 150,  289 => 149,  285 => 148,  281 => 147,  277 => 146,  269 => 144,  265 => 143,  258 => 141,  252 => 140,  246 => 139,  239 => 135,  233 => 134,  227 => 133,  220 => 129,  215 => 127,  211 => 126,  205 => 125,  199 => 123,  190 => 120,  185 => 118,  182 => 117,  179 => 116,  172 => 111,  169 => 110,  161 => 191,  157 => 188,  154 => 116,  150 => 113,  147 => 110,  145 => 109,  142 => 108,  136 => 207,  134 => 202,  129 => 199,  127 => 196,  123 => 194,  121 => 108,  117 => 107,  113 => 105,  107 => 100,  104 => 98,  98 => 96,  96 => 95,  94 => 94,  78 => 93,  72 => 91,  57 => 88,  53 => 86,  48 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.
    (¯`·._.·(¯`·._.· Survey List Layout  ·._.·´¯)·._.·´¯)
    This file renders the list of publicly listed surveys in your LimeSurvey home page.
    NOTE: see layout_main.twig for more infos
#}



{#
    LimeSurvey
    Copyright (C) 2007-2017 The LimeSurvey Project Team / Louis Gac
    All rights reserved.
    License: GNU/GPL License v2 or later, see LICENSE.php
    LimeSurvey is free software. This version may have been modified pursuant
    to the GNU General Public License, and as distributed it includes or
    is derivative of works licensed under the GNU General Public License or
    other free or open source software licenses.
    See COPYRIGHT.php for copyright notices and details.

    (¯`·._.·(¯`·._.· Global Layout  ·._.·´¯)·._.·´¯)

    This is the global layout that will be used to displayed most pages (less the error page)
    If you're creating your own template, remember there is no obligation to respect the current file flow of this template.
    This is different from the old LimeSurvey template engine, where you had to provide every one of the pstpl files.
    Here, you must have a file called main_layout.twig (called from SurveyRuntimeHelper::run() ).
    Other than that, you're free to organize your files and inclusions as you want.



    (¯`·._.·(¯`·._.· Bootstrap ·._.·´¯)·._.·´¯)

    LimeSurvey uses Bootstrap.
    See: https://getbootstrap.com

    This template is an instance of Bootswatch Theme Flatly.
    See: https://bootswatch.com/



    (¯`·._.·(¯`·._.· Twig Engine  ·._.·´¯)·._.·´¯)

    The template engine uses Twig.
    See: http://twig.sensiolabs.org/

    The main variable is aSurveyInfo. It's an array containing the main information about the survey.
    aSurveyInfo also contains other needed arrays, such as aNavigator, or aQuestionGroups (which contain aQuestions), etc.

    If you want to see what is availabe in aSurveyInfo, turn debug mode on in application/config.php, and copy the following line to the end of the <body> element below:
    {{ dump(aSurveyInfo) }}

    To echo a variable, just insert                      : {{ variable }}
    To translate a string, just insert                   : {{gT( string )}}

    NOTE: aSurveyInfo should be cleaned to remove the unnecessary data.


    (¯`·._.·(¯`·._.· Twig Engine: advanced  ·._.·´¯)·._.·´¯)

    For security reason, Twig is in a sandBox.
    About sandBox, see: http://twig.sensiolabs.org/doc/2.x/api.html#sandbox-extension

    Available functions/Object Methods are defined in internal.php: components => twigRenderer
    Eg:
         Functions : 'include', 'dump', 'flatEllipsizeText', 'getLanguageData', 'array_flip', 'array_intersect_key', 'registerPublicCssFile', 'getAllQuestionClasses', 'getShowqnumcode', 'intval'

         Methods   :
                    - CHtml::textfield() (and: form, link, emailField, beginForm, endForm, dropDownList,htmlButton)
                    - Survey::getAllLanguages()
                    - LSHttpRequest::getParam()

    If you need to add simple functions or static methods, just add them to internal.php.
    If you need to add complex process, use application/core/LS_Twig_Extension.php (more help/comments there)


    NOTE: Feel free to ask for functions, variables, etc, that you feel are missing - https://bugs.limesurvey.org/my_view_page.php
#}

<!DOCTYPE html>
<html lang=\"{{ aSurveyInfo.languagecode }}\" dir=\"{{ aSurveyInfo.dir }}\" class=\"{{ aSurveyInfo.languagecode }} dir-{{ aSurveyInfo.dir }} {{ aSurveyInfo.class.html }}\" {{ aSurveyInfo.attr.html }}>

    {# Headers, metadata, etc #}
    {{ include('./subviews/header/head.twig') }}

    <body class=\" {{ aSurveyInfo.class.body }} font-{{  aSurveyInfo.options.font }} lang-{{aSurveyInfo.languagecode}} {{aSurveyInfo.surveyformat}} {% if( aSurveyInfo.options.brandlogo == \"on\") %}brand-logo{%endif%}\" {{ aSurveyInfo.attr.body }} >
        {% if (aSurveyInfo.options.ajaxmode == \"on\" and aSurveyInfo.printPdf != 1) %}
            {# In vanilla, this file is empty, we keep it to have a common layout between all core themes #}
            {{ include('./subviews/navigation/ajax_indicator.twig') }}
        {% endif %}

        {# This used for the pjax system #}
        <div id=\"beginScripts\">
            <###begin###>
        </div>

        {# Ajaxify cannot handle an element that is a direct child of body, so => create simple wrapper section #}
        <article>

            <div id=\"{{ aSurveyInfo.id.dynamicreload }}\">
            {% block body %}
                {# Bootstrap Navigation Bar: the top menu #}
                {% block nav_bar %}
                    {{ include('./subviews/header/nav_bar.twig') }}
                {% endblock %}


                {# Replace the content block #}
                {% block content %}
                    <div class=\"container-fluid\">
                    {{  registerTemplateCssFile('./css/survey-list.css') }}
                
                    <div class=\"{{ aSurveyInfo.class.surveylistrow }} row\" id=\"{{ aSurveyInfo.id.surveylistrow }}\" {{ aSurveyInfo.attr.surveylistrow }}>

                        {# include the alert for no JavaScript #}
                        {{ include('./subviews/messages/no_js_alert.twig') }}

                        <div id=\"{{ aSurveyInfo.id.surveylistrowjumbotron }}\" {{ aSurveyInfo.attr.surveylistrowjumbotron }}>
                            {{ image('./files/survey_list_header.png', aSurveyInfo.name, {\"class\": \"img-responsive center-block\"}) }}
                            {{ aSurveyInfo.sSiteName }}
                            <div class=\"ls-js-hidden\">
                                {{ include('./subviews/navigation/language_changer_form.twig') }}
                            </div>
                        </div>

                        <div class=\"{{ aSurveyInfo.class.surveylistrowdiva }} col-xs-12\" {{ aSurveyInfo.attr.surveylistrowdiva }}>
                            <div class='{{ aSurveyInfo.class.surveylistrowdivadiv }} h3' {{ aSurveyInfo.attr.surveylistrowdivadiv }}>
                                {{ gT(\"The following surveys are available:\") }}
                            </div>
                        </div>

                        <div class=\"{{ aSurveyInfo.class.surveylistrowdivb }} col-xs-12\" {{ aSurveyInfo.attr.surveylistrowdivb }}>
                            <div class='{{ aSurveyInfo.class.surveylistrowdivbdiv }}' {{ aSurveyInfo.attr.surveylistrowdivbdiv }}>
                                <ul class='{{ aSurveyInfo.class.surveylistrowdivbdivul }} list-unstyled ' {{ aSurveyInfo.attr.surveylistrowdivbdivul }}>

                                    {% for key, oSurvey in aSurveyInfo.publicSurveys %}
                                    <li class=\"{{ aSurveyInfo.class.surveylistrowdivbdivulli }} btn-group col-sm-6 col-xs-12\" {{ aSurveyInfo.attr.surveylistrowdivbdivulli }}>
                                        <a
                                        href=\"{{ oSurvey.sSurveyUrl }}\"
                                        title=\"{{ gT(\"Start survey\") }}\"
                                        lang=\"{{ oSurvey.language }}\"
                                        class=\"{{ aSurveyInfo.class.surveylistrowdivbdivullia }} btn btn-primary col-xs-12\"  >
                                        {{ oSurvey.localizedTitle }}
                                    </a>
                                </li>
                                {% endfor %}
                            </ul>
                            </div>
                        </div>

                        <div class=\"{{ aSurveyInfo.class.surveylistrowdivc }} col-xs-12 \" {{ aSurveyInfo.attr.surveylistrowdivc }}>
                            {{ sprintf( gT(\"Please contact %s ( %s ) for further assistance.\"), aSurveyInfo.sSiteAdminName, aSurveyInfo.sSiteAdminEmail ) }}
                        </div>

                    </div>

                    <div id=\"{{ aSurveyInfo.id.surveylistfooter }}\" class=\"{{ aSurveyInfo.class.surveylistfooter }}\" {{ aSurveyInfo.attr.surveylistfooter }}>
                        <div class=\"{{ aSurveyInfo.class.surveylistfootercont }} container\" {{ aSurveyInfo.attr.surveylistfootercont }}>
                            <div {{ aSurveyInfo.attr.surveylistfootercontp }} class=\"row\">
                                <div class=\"col-xs-6 col-sm-12 text-center\">
                                    <a {{ aSurveyInfo.attr.surveylistfootercontpaa }} class=\"center-block text-center\">
                                        {{ image(\"./files/poweredby.png\", \"LimeSurvey Survey Software\", {class: 'img-responsive center-block '}) }}
                                    </a>
                                </div>
                                <div class=\"col-sm-12 hidden-xs text-center\">
                                    <a {{ aSurveyInfo.attr.surveylistfootercontpab }}>
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                </div>
                                <div class=\"col-xs-6 visible-xs text-center\">
                                    <a {{ aSurveyInfo.attr.surveylistfootercontpab }}>
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endblock %}


            {# Basic ThemeScript options  #}
            {{ registerScript(\"BasicThemeScripts\", \" if(window.basicThemeScripts === undefined){ window.basicThemeScripts = new ThemeScripts(); } basicThemeScripts.initGlobal(); \", \"POS_END\") }}

            {% endblock %}
            </div>
        </article>
        {% block footer %}
            {{ include('./subviews/footer/footer.twig') }}
        {% endblock %}
        <div id=\"bottomScripts\">
            <###end###>
        </div>
        {% block themescripts %}
        <script>
            window.basicThemeScripts.init();
        </script>
        {% endblock %}
    </body>
</html>
", "__string_template__b6309812893027b6c018ae890bb67cb657349fa5fc67870c5e58a50c423c04b5", "");
    }
}
