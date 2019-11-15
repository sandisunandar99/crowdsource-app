<?php

/* __string_template__b199fb0df49cff95bd122b4a6ffc059af066d3f395a4c0056182742386d3cecd */
class __TwigTemplate_6902e31e84dbc4c492db947968c44cf5e37d7720d9ad4d93282bfb14e92119aa extends Twig_Template
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
        $tags = array("set" => 17, "if" => 32, "for" => 726);
        $filters = array("capitalize" => 1056);
        $functions = array("json_decode" => 17, "registerPackage" => 19, "registerScriptFile" => 26, "registerCssFile" => 27, "gT" => 262, "sprintf" => 1056, "createUrl" => 1107);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('capitalize'),
                array('json_decode', 'registerPackage', 'registerScriptFile', 'registerCssFile', 'gT', 'sprintf', 'createUrl')
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
        $context["aOptions"] = LS_Twig_Extension::json_decode($this->getAttribute(($context["templateConfiguration"] ?? null), "options", array()));
        // line 18
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-roboto"));
        echo "
";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-noto"));
        echo "
";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-news_cycle"));
        echo "
";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-ubuntu"));
        echo "
";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-lato"));
        echo "
";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerPackage("font-websafe"));
        echo "

";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerScriptFile((($context["optionsPath"] ?? null) . "/spectrum.js")));
        echo "
";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(LS_Twig_Extension::registerCssFile((($context["optionsPath"] ?? null) . "/spectrum.css")));
        echo "

";
        // line 30
        $context["animationOptions"] = "";
        // line 32
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 33
            echo "    ";
            $context["animationOptions"] = (($context["animationOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 36
        ob_start();
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
<optgroup label=\"Attention Seekers\">
    <option value=\"bounce\">bounce</option>
    <option value=\"flash\">
        flash</option>
    <option value=\"pulse\">
        pulse</option>
    <option value=\"rubberBand\">
        rubberBand</option>
    <option value=\"shake\">
        shake</option>
    <option value=\"swing\">
        swing</option>
    <option value=\"tada\">
        tada</option>
    <option value=\"wobble\">
        wobble</option>
    <option value=\"jello\">
        jello</option>
</optgroup>

<optgroup label=\"Bouncing Entrances\">
    <option value=\"bounceIn\">bounceIn</option >
    <option value=\"bounceInDown\">bounceInDown</option>
    <option value=\"bounceInLeft\">
        bounceInLeft</option>
    <option value=\"bounceInRight\">
        bounceInRight</option>
    <option value=\"bounceInUp\">
        bounceInUp</option>
</optgroup>

<optgroup label=\"Bouncing Exits\">
    <option value=\"bounceOut\">bounceOut</option >
    <option value=\"bounceOutDown\">bounceOutDown</option>
    <option value=\"bounceOutLeft\">
        bounceOutLeft</option>
    <option value=\"bounceOutRight\">
        bounceOutRight</option>
    <option value=\"bounceOutUp\">
        bounceOutUp</option>
</optgroup>

<optgroup label=\"Fading Entrances\">
    <option value=\"fadeIn\">fadeIn</option >
    <option value=\"fadeInDown\">fadeInDown</option>
    <option value=\"fadeInDownBig\">
        fadeInDownBig</option>
    <option value=\"fadeInLeft\">
        fadeInLeft</option>
    <option value=\"fadeInLeftBig\">
        fadeInLeftBig</option>
    <option value=\"fadeInRight\">
        fadeInRight</option>
    <option value=\"fadeInRightBig\">
        fadeInRightBig</option>
    <option value=\"fadeInUp\">
        fadeInUp</option>
    <option value=\"fadeInUpBig\">
        fadeInUpBig</option>
</optgroup>

<optgroup label=\"Fading Exits\">
    <option value=\"fadeOut\">fadeOut</option >
    <option value=\"fadeOutDown\">fadeOutDown</option>
    <option value=\"fadeOutDownBig\">
        fadeOutDownBig</option>
    <option value=\"fadeOutLeft\">
        fadeOutLeft</option>
    <option value=\"fadeOutLeftBig\">
        fadeOutLeftBig</option>
    <option value=\"fadeOutRight\">
        fadeOutRight</option>
    <option value=\"fadeOutRightBig\">
        fadeOutRightBig</option>
    <option value=\"fadeOutUp\">
        fadeOutUp</option>
    <option value=\"fadeOutUpBig\">
        fadeOutUpBig</option>
</optgroup>

<optgroup label=\"Flippers\">
    <option value=\"flip\">flip</option >
    <option value=\"flipInX\">flipInX</option>
    <option value=\"flipInY\">
        flipInY</option>
    <option value=\"flipOutX\">
        flipOutX</option>
    <option value=\"flipOutY\">
        flipOutY</option>
</optgroup>

<optgroup label=\"Lightspeed\">
    <option value=\"lightSpeedIn\">lightSpeedIn</option >
    <option value=\"lightSpeedOut\">lightSpeedOut</option>
</optgroup>

<optgroup label=\"Rotating Entrances\">
    <option value=\"rotateIn\">rotateIn</option >
    <option value=\"rotateInDownLeft\">rotateInDownLeft</option>
    <option value=\"rotateInDownRight\">
        rotateInDownRight</option>
    <option value=\"rotateInUpLeft\">
        rotateInUpLeft</option>
    <option value=\"rotateInUpRight\">
        rotateInUpRight</option>
</optgroup>

<optgroup label=\"Rotating Exits\">
    <option value=\"rotateOut\">rotateOut</option >
    <option value=\"rotateOutDownLeft\">rotateOutDownLeft</option>
    <option value=\"rotateOutDownRight\">
        rotateOutDownRight</option>
    <option value=\"rotateOutUpLeft\">
        rotateOutUpLeft</option>
    <option value=\"rotateOutUpRight\">
        rotateOutUpRight</option>
</optgroup>

<optgroup label=\"Sliding Entrances\">
    <option value=\"slideInUp\">slideInUp</option >
    <option value=\"slideInDown\">slideInDown</option>
    <option value=\"slideInLeft\">
        slideInLeft</option>
    <option value=\"slideInRight\">
        slideInRight</option>
</optgroup>

<optgroup label=\"Sliding Exits\">
    <option value=\"slideOutUp\">slideOutUp</option >
    <option value=\"slideOutDown\">slideOutDown</option>
    <option value=\"slideOutLeft\">
        slideOutLeft</option>
    <option value=\"slideOutRight\">
        slideOutRight</option>
</optgroup>

<optgroup label=\"Zoom Entrances\">
    <option value=\"zoomIn\">zoomIn</option >
    <option value=\"zoomInDown\">zoomInDown</option>
    <option value=\"zoomInLeft\">
        zoomInLeft</option>
    <option value=\"zoomInRight\">
        zoomInRight</option>
    <option value=\"zoomInUp\">
        zoomInUp</option>
</optgroup>

<optgroup label=\"Zoom Exits\">
    <option value=\"zoomOut\">zoomOut</option >
    <option value=\"zoomOutDown\">zoomOutDown</option>
    <option value=\"zoomOutLeft\">
        zoomOutLeft</option>
    <option value=\"zoomOutRight\">
        zoomOutRight</option>
    <option value=\"zoomOutUp\">
        zoomOutUp</option>
</optgroup>

<optgroup label=\"Specials\">
    <option value=\"hinge\">hinge</option >
    <option value=\"jackInTheBox\">jackInTheBox</option>
    <option value=\"rollIn\">
        rollIn</option>
    <option value=\"rollOut\">
        rollOut</option>
</optgroup>
";
        $context["animationOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 205
        echo "
";
        // line 207
        $context["fruityOptions"] = "";
        // line 208
        echo "
";
        // line 210
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 211
            echo "    ";
            $context["fruityOptions"] = (($context["fruityOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 213
        echo "
";
        // line 215
        ob_start();
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
<option value=\"css/variations/sea_green.css\">Sea Green</option>
<option value=\"css/variations/apple_blossom.css\">Apple Blossom</option>
<option value=\"css/variations/bay_of_many.css\">Bay of Many</option>
<option value=\"css/variations/black_pearl.css\">Black Pearl</option>
<option value=\"css/variations/free_magenta.css\">Free Magenta</option>
<option value=\"css/variations/purple_tentacle.css\">Purple Tentacle</option>
<option value=\"css/variations/sunset_orange.css\">Sunset Orange</option>
<option value=\"css/variations/skyline_blue.css\">Skyline Blue</option>
";
        $context["fruityOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 226
        echo "
";
        // line 227
        $context["checkIconOptions"] = "";
        // line 228
        echo "
";
        // line 230
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 231
            echo "    ";
            $context["checkIconOptions"] = (($context["checkIconOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 233
        echo "
";
        // line 234
        ob_start();
        // line 235
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
<option value=\"f00c\"> <i class=\"fa fa-check\"></i> Check </option>
<option value=\"f058\"> <i class=\"fa fa-check-circle\"></i> Check circle </option>
<option value=\"f14a\"> <i class=\"fa fa-check-square\"></i> Check square </option>
<option value=\"f111\"> <i class=\"fa fa-circle\"></i> Circle </option>
<option value=\"f067\"> <i class=\"fa fa-plus\"></i> Plus </option>
<option value=\"f0c8\"> <i class=\"fa fa-square\"></i> Square </option>
<option value=\"f005\"> <i class=\"fa fa-star\"></i> Star </option>
<option value=\"f00d\"> <i class=\"fa fa-times\"></i> Times </option>
<option value=\"f069\"> <i class=\"fa fa-asterisk\"></i> Asterisk </option>
<option value=\"f061\"> <i class=\"fa fa-arrow-right\"></i> Arrow right </option>
<option value=\"f138\"> <i class=\"fa fa-chevron-circle-right\"></i> Chevron circle right </option>
<option value=\"f1d0\"> <i class=\"fa fa-resistance\"></i> Resistance </option>
";
        $context["checkIconOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 249
        echo "
";
        // line 251
        $context["fontOptions"] = "";
        // line 252
        echo "

";
        // line 255
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 256
            echo "    ";
            $context["fontOptions"] = (($context["fontOptions"] ?? null) . "<option value = \"inherit\" > Inherit</option>");
        }
        // line 258
        echo "

";
        // line 260
        ob_start();
        // line 261
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
    <optgroup  label=\"";
        // line 262
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Local Server"));
        echo "\">
            <option class=\"font-roboto\"     value=\"roboto\"     data-font-package=\"roboto\"      >Roboto</option>
            <option class=\"font-news_cycle\" value=\"news_cycle\" data-font-package=\"news_cycle\"  >News Cycle</option>
            <option class=\"font-lato\"       value=\"lato\"       data-font-package=\"lato\"        >Lato</option>
            <option class=\"font-noto\"       value=\"noto\"       data-font-package=\"noto\"        >Noto Sans</option>
            <option class=\"font-ubuntu\"     value=\"ubuntu\"     data-font-package=\"ubuntu\"       >Ubuntu</option>
    </optgroup>

    <optgroup  label=\"";
        // line 270
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("User browser"));
        echo "\">

      <option class=\"font-georgia         \" value=\"georgia\"         data-font-package=\"websafe\" >Georgia</option>
      <option class=\"font-palatino        \" value=\"palatino\"        data-font-package=\"websafe\" >Palatino Linotype</option>
      <option class=\"font-times_new_roman \" value=\"times_new_roman\" data-font-package=\"websafe\" >Times New Roman</option>
      <option class=\"font-arial           \" value=\"arial\"           data-font-package=\"websafe\" >Arial</option>
      <option class=\"font-arial_black     \" value=\"arial_black\"     data-font-package=\"websafe\" >Arial Black</option>
      <option class=\"font-comic_sans      \" value=\"comic_sans\"      data-font-package=\"websafe\" >Comic Sans</option>
      <option class=\"font-impact          \" value=\"impact\"          data-font-package=\"websafe\" >Impact</option>
      <option class=\"font-lucida_sans     \" value=\"lucida_sans\"     data-font-package=\"websafe\" >Lucida Sans</option>
      <option class=\"font-trebuchet       \" value=\"trebuchet\"       data-font-package=\"websafe\" >Trebuchet</option>
      <option class=\"font-courier         \" value=\"courier\"         data-font-package=\"websafe\" >Courier New</option>
      <option class=\"font-lucida_console  \" value=\"lucida_console\"  data-font-package=\"websafe\" >Lucida Console</option>
    </optgroup>
";
        $context["fontOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 285
        echo "
<div class=\"container-fluid\" style=\"position:relative\">
    ";
        // line 288
        echo "    <div class=\"\" style=\"display:none;height:100%;width:100%;position:absolute;left:0;top:0;background:rgb(255,255,255);background:rgba(235,235,235,0.8);z-index:2000;\">
        <div style=\"position:absolute; left:49%;top:35%;\" class=\"text-center\">
            <i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 295
        echo "        <form class='form action_update_options_string_form' action=''>

            ";
        // line 298
        echo "            ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 299
            echo "                <div class='row' id=\"general_inherit_active\">
                    <div class='form-group row'>
                        <label for='simple_edit_options_general_inherit' class='control-label'>";
            // line 301
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit everything"));
            echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_on\" name='general_inherit' type='radio' value='on' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 306
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
            echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input id=\"general_inherit_off\" name='general_inherit' type='radio' value='off' class='selector_option_general_inherit ' data-id='simple_edit_options_general_inherit'/>
                                    ";
            // line 310
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
            echo "
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row action_hide_on_inherit\">
                    <hr/>
                </div>
            ";
        }
        // line 320
        echo "
            ";
        // line 322
        echo "            <div class='row action_hide_on_inherit'>

                ";
        // line 325
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_container' class='control-label'> ";
        // line 327
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Survey container"));
        echo " </label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='on' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 332
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='container' value='off' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                    ";
        // line 336
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 339
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 340
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='container' value='inherit' class='selector_option_radio_field simple_edit_options_container ' data-id='container'/>
                                        ";
            // line 342
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 345
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 351
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionborder' class='control-label'>";
        // line 353
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question borders"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='on' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 358
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questionborder' value='off' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                    ";
        // line 362
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>

                                ";
        // line 366
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 367
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questionborder' value='inherit' class='selector_option_radio_field simple_edit_options_questionborder ' data-id='questionborder'/>
                                        ";
            // line 369
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 372
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 378
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questioncontainershadow' class='control-label'>";
        // line 380
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question shadow"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='on' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 385
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='questioncontainershadow' value='off' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                    ";
        // line 389
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 392
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 393
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='questioncontainershadow' value='inherit' class='selector_option_radio_field simple_edit_options_questioncontainershadow ' data-id='questioncontainershadow'/>
                                        ";
            // line 395
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 398
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 405
        echo "            <div class='row action_hide_on_inherit'>
                ";
        // line 407
        echo "                <div class='col-sm-12 col-md-4 col-lg-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_showpopups' class='control-label' ";
        // line 409
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled_qtip"] ?? null));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Show popups"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default control-label\" ";
        // line 412
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='1' ";
        // line 413
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 414
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Popup"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 416
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='0' ";
        // line 417
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 418
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("On page"));
        echo "
                                    </label>
                                    <label class=\"btn btn-default\" ";
        // line 420
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo ">
                                        <input type='radio' name='showpopups' value='-1' ";
        // line 421
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
        echo " class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                        ";
        // line 422
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Off"));
        echo "
                                    </label>
                                    ";
        // line 425
        echo "                                    ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 426
            echo "                                        <label class=\"btn btn-default\" ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["showpopups_disabled"] ?? null));
            echo ">
                                            <input type='radio' name='showpopups' value='inherit' class='selector_option_radio_field simple_edit_options_showpopups ' data-id='showpopups'/>
                                            ";
            // line 428
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                        </label>
                                    ";
        }
        // line 431
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 437
        echo "                <div class='col-sm-12 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fixnumauto' class='control-label'>";
        // line 439
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Fix automatically numeric value"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    ";
        // line 444
        echo "                                    <input type='radio' name='fixnumauto' value='enable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 445
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 449
        echo "                                    <input type='radio' name='fixnumauto' value='partial' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 450
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("For expression"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    ";
        // line 454
        echo "                                    <input type='radio' name='fixnumauto' value='disable' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                    ";
        // line 455
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 457
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 458
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='inherit' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 460
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        } else {
            // line 463
            echo "                                    ";
            // line 464
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='fixnumauto' value='off' class='selector_option_radio_field simple_edit_options_fixnumauto' data-id='fixnumauto'/>
                                        ";
            // line 466
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Default"));
            echo "
                                    </label>
                                ";
        }
        // line 469
        echo "                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            ";
        // line 477
        echo "            <div class='row action_hide_on_inherit'>
                ";
        // line 479
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_zebrastriping' class='control-label'>";
        // line 481
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Zebra-striped questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='on' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 486
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='zebrastriping' value='off' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                    ";
        // line 490
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 493
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 494
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='zebrastriping' value='inherit' class='selector_option_radio_field simple_edit_options_zebrastriping ' data-id='zebrastriping'/>
                                        ";
            // line 496
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 499
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 504
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_stickymatrixheaders' class='control-label'>";
        // line 506
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Sticky array headers"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='on' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 511
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='stickymatrixheaders' value='off' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                    ";
        // line 515
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 518
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 519
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='stickymatrixheaders' value='inherit' class='selector_option_radio_field simple_edit_options_stickymatrixheaders ' data-id='stickymatrixheaders'/>
                                        ";
            // line 521
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 524
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 529
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_greyoutselected' class='control-label'>";
        // line 531
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Dim answered array rows"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='on' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 536
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='greyoutselected' value='off' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                    ";
        // line 540
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 543
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 544
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='greyoutselected' value='inherit' class='selector_option_radio_field simple_edit_options_greyoutselected ' data-id='greyoutselected'/>
                                        ";
            // line 546
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 549
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 554
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_hideprivacyinfo' class='control-label'>";
        // line 556
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Hide privacy info"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='on' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 561
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='hideprivacyinfo' value='off' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                    ";
        // line 565
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 568
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 569
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='hideprivacyinfo' value='inherit' class='selector_option_radio_field simple_edit_options_hideprivacyinfo ' data-id='hideprivacyinfo'/>
                                        ";
            // line 571
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 574
        echo "                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 579
        echo "                <div class='col-sm-12 col-md-4 col-lg-2'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_crosshover' class='control-label'>";
        // line 581
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Cross-hover in matrix questions"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='on' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 586
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='crosshover' value='off' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                    ";
        // line 590
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 593
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 594
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='crosshover' value='inherit' class='selector_option_radio_field simple_edit_options_crosshover ' data-id='crosshover'/>
                                        ";
            // line 596
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 599
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

            <div class='row action_hide_on_inherit'>

                ";
        // line 612
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_bodybackgroundcolor' class='control-label'>";
        // line 614
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"bodybackgroundcolor_picker\" data-value=\"";
        // line 617
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"bodybackgroundcolor\" data-inheritvalue=\"";
        // line 619
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "bodybackgroundcolor", array()));
        echo "\" value=\"inherit\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_bodybackgroundcolor\" data-id=\"bodybackgroundcolor\" />
                            ";
        // line 620
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 621
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 625
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 631
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_fontcolor' class='control-label'>";
        // line 633
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Font color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"fontcolor_picker\" data-value=\"";
        // line 636
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"fontcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 638
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "fontcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_fontcolor\" data-id=\"fontcolor\" />
                            ";
        // line 639
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 640
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 644
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 649
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_questionbackgroundcolor' class='control-label'>";
        // line 651
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question background color"));
        echo "</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-addon style__colorpicker\">
                                <input type=\"color\" name=\"questionbackgroundcolor_picker\" data-value=\"";
        // line 654
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector__colorpicker-inherit-value\"/>
                            </div>
                            <input type=\"text\" name=\"questionbackgroundcolor\" value=\"inherit\" data-inheritvalue=\"";
        // line 656
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "questionbackgroundcolor", array()));
        echo "\" class=\"selector_option_value_field selector__color-picker form-control simple_edit_options_questionbackgroundcolor\" data-id=\"questionbackgroundcolor\" />
                            ";
        // line 657
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 658
            echo "                                <div class=\"input-group-addon\">
                                    <button class=\"btn btn-default btn-xs selector__reset-colorfield-to-inherit\"><i class=\"fa fa-refresh\"></i></button>
                                </div>
                            ";
        }
        // line 662
        echo "                        </div>
                    </div>
                </div>

                ";
        // line 667
        echo "                <div class='col-sm-6 col-md-3'>
                    <div class='form-group row'>
                        <label for='simple_edit_options_checkicon' class='control-label'>";
        // line 669
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Check icon"));
        echo "</label>
                        <div class=\"input-group\">
                            <select name=\"checkicon\" value=\"\" class=\"selector_option_value_field form-control simple_edit_options_checkicon\" data-id=\"checkicon\" >
                                ";
        // line 672
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["checkIconOptions"] ?? null));
        echo "
                            </select>
                            <div class=\"input-group-addon selector__checkicon-preview\">
                                ( <i class=\"fa\" data-inheritvalue=\"";
        // line 675
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo "\" style=\" background-color: #328637; color: white; width: 16px; height: 16px;  padding: 3px; font-size: 11px; \">
                                    &#x";
        // line 676
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "checkicon", array()));
        echo ";
                                </i> )
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>

             <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 691
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimage' class='control-label'>";
        // line 692
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='on' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 697
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='backgroundimage' value='off' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                    ";
        // line 701
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 704
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 705
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='backgroundimage' value='inherit' class='selector_option_radio_field simple_edit_options_backgroundimage ' data-id='backgroundimage'/>
                                        ";
            // line 707
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 710
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class='col-sm-8 col-md-6'>
                    ";
        // line 717
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_backgroundimagefile' class='control-label'>";
        // line 718
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Background image file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"backgroundimage\" id='simple_edit_options_backgroundimagefile' name='backgroundimagefile'>
                                ";
        // line 721
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 722
            echo "                                    <option value=\"inherit\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "</option>
                                ";
        }
        // line 724
        echo "
                                ";
        // line 725
        $context["optgroup"] = "";
        // line 726
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 727
            echo "                                ";
            if (($this->getAttribute($context["image"], "group", array()) != ($context["optgroup"] ?? null))) {
                // line 728
                echo "                                ";
                if ((($context["optgroup"] ?? null) != "")) {
                    // line 729
                    echo "                                    </optgroup>
                                ";
                }
                // line 731
                echo "                                    <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "group", array()));
                echo "\">
                                ";
                // line 732
                $context["optgroup"] = $this->getAttribute($context["image"], "group", array());
                // line 733
                echo "                                ";
            }
            // line 734
            echo "                                        <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "preview", array()));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        echo "                                    </optgroup>

                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_backgroundimagefile\"> ";
        // line 744
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 750
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogo' class='control-label'> ";
        // line 751
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 756
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' name='brandlogo' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                    ";
        // line 760
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 763
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 764
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' name='brandlogo' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_brandlogo'/>
                                        ";
            // line 766
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 769
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8 col-md-6'>
                    ";
        // line 775
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_brandlogofile' class='control-label'>";
        // line 776
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Logo file"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield selector_image_selector' data-parent=\"brandlogo\" id='simple_edit_options_brandlogofile' name='brandlogofile'>
                                ";
        // line 779
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 780
            echo "                                    <option value=\"inherit\">Inherit</option>
                                ";
        }
        // line 782
        echo "                                ";
        $context["optgroup"] = "";
        // line 783
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templateConfiguration"] ?? null), "imageFileList", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 784
            echo "                                ";
            if (($this->getAttribute($context["image"], "group", array()) != ($context["optgroup"] ?? null))) {
                // line 785
                echo "                                ";
                if ((($context["optgroup"] ?? null) != "")) {
                    // line 786
                    echo "                                    </optgroup>
                                ";
                }
                // line 788
                echo "                                    <optgroup label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "group", array()));
                echo "\">
                                ";
                // line 789
                $context["optgroup"] = $this->getAttribute($context["image"], "group", array());
                // line 790
                echo "                                ";
            }
            // line 791
            echo "                                        <option data-lightbox-src=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "preview", array()));
            echo "\" value=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filepath", array()));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($context["image"], "filename", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 793
        echo "                                    </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-4 col-md-2'>
                    <br/>
                    <button class=\"btn btn-default selector__open_lightbox\" data-target=\"#simple_edit_options_brandlogofile\"> ";
        // line 800
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Preview image"));
        echo "</button>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    <div class='form-group row'>
                        ";
        // line 810
        echo "                        <label for='simple_edit_options_animatebody' class='control-label'>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate body"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 815
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                    ";
        // line 819
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 822
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 823
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field  ' data-id='simple_edit_options_animatebody' name='animatebody'/>
                                        ";
            // line 825
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 828
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 834
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimation' class='control-label'>";
        // line 835
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Body animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimation' name='bodyanimation'>
                                ";
        // line 838
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 845
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_bodyanimationduration' class='control-label'>";
        // line 846
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatebody\" id='simple_edit_options_bodyanimationduration' name='bodyanimationduration' />
                        </div>
                    </div>
                </div>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 856
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatequestion' class='control-label'>";
        // line 857
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate question"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 862
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                    ";
        // line 866
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 869
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 870
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatequestion' name='animatequestion'/>
                                        ";
            // line 872
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 875
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 881
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimation' class='control-label'>";
        // line 882
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Question animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimation' name='questionanimation'>
                                ";
        // line 885
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 892
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_questionanimationduration' class='control-label'>";
        // line 893
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatequestion\" id='simple_edit_options_questionanimationduration' name='questionanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 902
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 905
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatealert' class='control-label'>";
        // line 906
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate alert"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 911
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                    ";
        // line 915
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 918
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 919
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatealert' name='animatealert'/>
                                        ";
            // line 921
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 924
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 930
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimation' class='control-label'>";
        // line 931
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimation' name='alertanimation'>
                                ";
        // line 934
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 941
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_alertanimationduration' class='control-label'>";
        // line 942
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatealert\" id='simple_edit_options_alertanimationduration' name='alertanimationduration'/>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 951
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 954
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animatecheckbox' class='control-label'>";
        // line 955
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate checkbox"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 960
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                    ";
        // line 964
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 967
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 968
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animatecheckbox' name='animatecheckbox'/>
                                        ";
            // line 970
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 973
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-10 col-md-6'>
                    ";
        // line 979
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimation' class='control-label'>";
        // line 980
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Alert animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimation' name='checkboxanimation'>
                                ";
        // line 983
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                <div class='col-sm-2'>
                    ";
        // line 990
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_checkboxanimationduration' class='control-label'>";
        // line 991
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animatecheckbox\" id='simple_edit_options_checkboxanimationduration' name='checkboxanimationduration' />
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 1000
        echo "            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12 col-md-4'>
                    ";
        // line 1003
        echo "                    <div class='form-group row'>
                        <label for='simple_edit_options_animateradio' class='control-label'>";
        // line 1004
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Animate radio buttons"));
        echo "</label>
                        <div class='col-sm-12'>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='on' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 1009
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Yes"));
        echo "
                                </label>
                                <label class=\"btn btn-default\">
                                    <input type='radio' value='off' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                    ";
        // line 1013
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("No"));
        echo "
                                </label>
                                ";
        // line 1016
        echo "                                ";
        if (( !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "sid", array())) ||  !twig_test_empty($this->getAttribute(($context["templateConfiguration"] ?? null), "gsid", array())))) {
            // line 1017
            echo "                                    <label class=\"btn btn-default\">
                                        <input type='radio' value='inherit' class='selector_option_radio_field ' data-id='simple_edit_options_animateradio' name='animateradio'/>
                                        ";
            // line 1019
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Inherit"));
            echo "
                                    </label>
                                ";
        }
        // line 1022
        echo "                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 1028
        echo "                <div class='col-sm-10 col-md-6'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimation' class='control-label'>";
        // line 1031
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Radio button animation"));
        echo "</label>
                        <div class='col-sm-12'>
                            <select class='form-control selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimation' name='radioanimation'>
                                ";
        // line 1034
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["animationOptions"] ?? null));
        echo "
                            </select>
                        </div>
                    </div>
                </div>
                ";
        // line 1040
        echo "                <div class='col-sm-2'>

                    <div class='form-group row'>
                        <label for='simple_edit_options_radioanimationduration' class='control-label'>";
        // line 1043
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Duration"));
        echo "</label>
                        <div class='col-sm-12'>
                            <input type=\"text\" class='form-control selector-numerical-input selector_option_value_field selector_radio_childfield' data-parent=\"animateradio\" id='simple_edit_options_radioanimationduration' name='radioanimationduration' />
                        </div>
                    </div>
                </div>
            </div>            
            <div class='row ls-space margin top-15 bottom-15 action_hide_on_inherit'>
                <hr/>
            </div>
            <div class='row action_hide_on_inherit'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 1056
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s fonts"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo "</div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_font' class='control-label'>";
        // line 1059
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select font:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_option_value_field' id='simple_edit_font' name='font' data-inheritvalue='";
        // line 1061
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "packages_to_load", array()));
        echo "'>
                                        ";
        // line 1062
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fontOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='row ls-space margin top-15 bottom-15 '>
                <hr/>
            </div>
            ";
        // line 1075
        echo "            <div class='row'>
                <div class='col-sm-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>";
        // line 1078
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(twig_capitalize_string_filter($this->env, sprintf(gT("%s variations"), $this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()))));
        echo " </div>
                        <div class='panel-body'>
                            <div class='form-group row'>
                                <label for='simple_edit_add_css' class='control-label'>";
        // line 1081
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Select variation:"));
        echo "</label>
                                <div class='col-sm-12'>
                                    <select class='form-control selector_cssframework_value_field' id='simple_edit_add_css' name='cssframework' data-inheritvalue='";
        // line 1083
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["oParentOptions"] ?? null), "files_css", array()));
        echo "'>
                                        ";
        // line 1084
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(($context["fruityOptions"] ?? null));
        echo "
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='row hidden'>
                <div class='col-sm-12'>
                    <button class='btn btn-success col-md-2 col-sm-4 col-xs-6 action_update_options_string_button'>";
        // line 1094
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Save"));
        echo " </button>
                </div>
            </div>
        </form>
    </div>
    <div class='row action_hide_on_inherit'>
        ";
        // line 1101
        echo "        <div class=\"container-fluid ls-space margin bottom-15\">
            <div class=\"row ls-space margin bottom-15\">
                <div class=\"col-sm-6\">
                    ";
        // line 1104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(sprintf(gT("Upload an image (maximum size: %d MB):"), (($this->getAttribute(($context["templateConfiguration"] ?? null), "maxFileSize", array()) / 1024) / 1024)));
        echo "
                </div>
                <div class=\"col-sm-6\">
                ";
        // line 1107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["C"] ?? null), "Html", array()), "form", array(0 => LS_Twig_Extension::createUrl("/admin/themes/sa/upload"), 1 => "post", 2 => array("id" => "upload_frontend", "name" => "upload_frontend", "enctype" => "multipart/form-data")), "method"));
        echo "
                    <span id=\"fileselector_frontend\">
                        <label class=\"btn btn-default col-xs-8\" for=\"upload_image_frontend\">
                            <input class=\"hidden\" id=\"upload_image_frontend\" name=\"upload_image_frontend\" type=\"file\">
                            <i class=\"fa fa-upload ls-space margin right-10\"></i>
                            ";
        // line 1112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed(gT("Upload"));
        echo "
                        </label>
                    </span>

                        <input type='hidden' name='templatename' value='";
        // line 1116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "template_name", array()));
        echo "' />
                        <input type='hidden' name='templateconfig' value='";
        // line 1117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->getAttribute(($context["templateConfiguration"] ?? null), "id", array()));
        echo "' />
                        <input type='hidden' name='action' value='templateuploadimagefile' />
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"progress\">
                    <div id=\"upload_progress_frontend\" class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                        <span class=\"sr-only\">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"lightbox-modal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title selector__title\"> </h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <img class=\"selector__image img-responsive\" src=\"\" alt=\"title\"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__b199fb0df49cff95bd122b4a6ffc059af066d3f395a4c0056182742386d3cecd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1825 => 1117,  1821 => 1116,  1814 => 1112,  1806 => 1107,  1800 => 1104,  1795 => 1101,  1786 => 1094,  1773 => 1084,  1769 => 1083,  1764 => 1081,  1758 => 1078,  1753 => 1075,  1738 => 1062,  1734 => 1061,  1729 => 1059,  1723 => 1056,  1707 => 1043,  1702 => 1040,  1694 => 1034,  1688 => 1031,  1683 => 1028,  1676 => 1022,  1670 => 1019,  1666 => 1017,  1663 => 1016,  1658 => 1013,  1651 => 1009,  1643 => 1004,  1640 => 1003,  1636 => 1000,  1625 => 991,  1622 => 990,  1613 => 983,  1607 => 980,  1604 => 979,  1597 => 973,  1591 => 970,  1587 => 968,  1584 => 967,  1579 => 964,  1572 => 960,  1564 => 955,  1561 => 954,  1557 => 951,  1546 => 942,  1543 => 941,  1534 => 934,  1528 => 931,  1525 => 930,  1518 => 924,  1512 => 921,  1508 => 919,  1505 => 918,  1500 => 915,  1493 => 911,  1485 => 906,  1482 => 905,  1478 => 902,  1467 => 893,  1464 => 892,  1455 => 885,  1449 => 882,  1446 => 881,  1439 => 875,  1433 => 872,  1429 => 870,  1426 => 869,  1421 => 866,  1414 => 862,  1406 => 857,  1403 => 856,  1391 => 846,  1388 => 845,  1379 => 838,  1373 => 835,  1370 => 834,  1363 => 828,  1357 => 825,  1353 => 823,  1350 => 822,  1345 => 819,  1338 => 815,  1329 => 810,  1317 => 800,  1308 => 793,  1295 => 791,  1292 => 790,  1290 => 789,  1285 => 788,  1281 => 786,  1278 => 785,  1275 => 784,  1270 => 783,  1267 => 782,  1263 => 780,  1261 => 779,  1255 => 776,  1252 => 775,  1245 => 769,  1239 => 766,  1235 => 764,  1232 => 763,  1227 => 760,  1220 => 756,  1212 => 751,  1209 => 750,  1201 => 744,  1191 => 736,  1178 => 734,  1175 => 733,  1173 => 732,  1168 => 731,  1164 => 729,  1161 => 728,  1158 => 727,  1153 => 726,  1151 => 725,  1148 => 724,  1142 => 722,  1140 => 721,  1134 => 718,  1131 => 717,  1123 => 710,  1117 => 707,  1113 => 705,  1110 => 704,  1105 => 701,  1098 => 697,  1090 => 692,  1087 => 691,  1070 => 676,  1066 => 675,  1060 => 672,  1054 => 669,  1050 => 667,  1044 => 662,  1038 => 658,  1036 => 657,  1032 => 656,  1027 => 654,  1021 => 651,  1017 => 649,  1011 => 644,  1005 => 640,  1003 => 639,  999 => 638,  994 => 636,  988 => 633,  984 => 631,  977 => 625,  971 => 621,  969 => 620,  965 => 619,  960 => 617,  954 => 614,  950 => 612,  936 => 599,  930 => 596,  926 => 594,  923 => 593,  918 => 590,  911 => 586,  903 => 581,  899 => 579,  893 => 574,  887 => 571,  883 => 569,  880 => 568,  875 => 565,  868 => 561,  860 => 556,  856 => 554,  850 => 549,  844 => 546,  840 => 544,  837 => 543,  832 => 540,  825 => 536,  817 => 531,  813 => 529,  807 => 524,  801 => 521,  797 => 519,  794 => 518,  789 => 515,  782 => 511,  774 => 506,  770 => 504,  764 => 499,  758 => 496,  754 => 494,  751 => 493,  746 => 490,  739 => 486,  731 => 481,  727 => 479,  724 => 477,  715 => 469,  709 => 466,  705 => 464,  703 => 463,  697 => 460,  693 => 458,  691 => 457,  686 => 455,  683 => 454,  677 => 450,  674 => 449,  668 => 445,  665 => 444,  658 => 439,  654 => 437,  647 => 431,  641 => 428,  635 => 426,  632 => 425,  627 => 422,  623 => 421,  619 => 420,  614 => 418,  610 => 417,  606 => 416,  601 => 414,  597 => 413,  593 => 412,  585 => 409,  581 => 407,  578 => 405,  570 => 398,  564 => 395,  560 => 393,  557 => 392,  552 => 389,  545 => 385,  537 => 380,  533 => 378,  526 => 372,  520 => 369,  516 => 367,  513 => 366,  507 => 362,  500 => 358,  492 => 353,  488 => 351,  481 => 345,  475 => 342,  471 => 340,  468 => 339,  463 => 336,  456 => 332,  448 => 327,  444 => 325,  440 => 322,  437 => 320,  424 => 310,  417 => 306,  409 => 301,  405 => 299,  402 => 298,  398 => 295,  390 => 288,  386 => 285,  368 => 270,  357 => 262,  352 => 261,  350 => 260,  346 => 258,  342 => 256,  340 => 255,  336 => 252,  334 => 251,  331 => 249,  314 => 235,  312 => 234,  309 => 233,  305 => 231,  303 => 230,  300 => 228,  298 => 227,  295 => 226,  282 => 216,  280 => 215,  277 => 213,  273 => 211,  271 => 210,  268 => 208,  266 => 207,  263 => 205,  92 => 37,  90 => 36,  86 => 33,  84 => 32,  82 => 30,  77 => 27,  73 => 26,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  45 => 18,  43 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__b199fb0df49cff95bd122b4a6ffc059af066d3f395a4c0056182742386d3cecd", "");
    }
}
