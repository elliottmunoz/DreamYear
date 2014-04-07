<?php

/* settings/assets/transforms/_settings */
class __TwigTemplate_8422c92a8e78da8a98a75e643761fc3fe1d53b8326b9fea604bab979c747ef0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["docsUrl"] = "http://buildwithcraft.com/docs/image-transforms";
        // line 5
        \Craft\craft()->templates->includeCssResource("css/transforms.css");
        // line 6
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 8
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Assets"), "url" => \Craft\UrlHelper::getUrl("settings/assets")), 2 => array("label" => \Craft\Craft::t("Transforms"), "url" => \Craft\UrlHelper::getUrl("settings/assets/transforms")));
        // line 14
        $context["isNewTransform"] = ((!array_key_exists("transform", $context)) || (!$this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "id")));
        // line 17
        if ((isset($context["isNewTransform"]) ? $context["isNewTransform"] : null)) {
            // line 18
            $context["title"] = \Craft\Craft::t("Create a new image transform");
        } else {
            // line 20
            $context["title"] = \Craft\Craft::t($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "name"));
        }
        // line 24
        ob_start();
        // line 25
        echo "\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"assetTransforms/saveTransform\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/assets/transforms\">

\t\t";
        // line 29
        if ((!(isset($context["isNewTransform"]) ? $context["isNewTransform"] : null))) {
            echo "<input type=\"hidden\" name=\"transformId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "id"), "html", null, true);
            echo "\">";
        }
        // line 30
        echo "
\t\t";
        // line 31
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "id" => "name", "name" => "name", "value" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "name")) : (null)), "errors" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "name"), "method")) : (null)), "autofocus" => true, "required" => true, "translatable" => true));
        // line 41
        echo "

        ";
        // line 43
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "id" => "handle", "name" => "handle", "value" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "handle")) : (null)), "errors" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true, "translatable" => true));
        // line 51
        echo "

        ";
        // line 53
        ob_start();
        // line 54
        echo "        \t<div id=\"mode\">
        \t\t<label id=\"mode-crop\">
        \t\t\t<input type=\"radio\" name=\"mode\" value=\"crop\"";
        // line 56
        if (((!array_key_exists("transform", $context)) || ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode") == "crop"))) {
            echo " checked";
        }
        echo ">
        \t\t\t";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("Crop"), "html", null, true);
        echo "
        \t\t</label>

        \t\t<label id=\"mode-fit\">
        \t\t\t<input type=\"radio\" name=\"mode\" value=\"fit\"";
        // line 61
        if ((array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode") == "fit"))) {
            echo " checked";
        }
        echo ">
        \t\t\t";
        // line 62
        echo twig_escape_filter($this->env, \Craft\Craft::t("Fit"), "html", null, true);
        echo "
        \t\t</label>

        \t\t<label id=\"mode-stretch\">
        \t\t\t<input type=\"radio\" name=\"mode\" value=\"stretch\"";
        // line 66
        if ((array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode") == "stretch"))) {
            echo " checked";
        }
        echo ">
        \t\t\t";
        // line 67
        echo twig_escape_filter($this->env, \Craft\Craft::t("Stretch"), "html", null, true);
        echo "
        \t\t</label>
        \t</div>
        ";
        $context["modeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        echo "
\t\t";
        // line 72
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Mode")), (isset($context["modeInput"]) ? $context["modeInput"] : null));
        // line 74
        echo "

\t\t<div id=\"position-container\"";
        // line 76
        if ((array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode") != "crop"))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t";
        // line 77
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Crop Position"), "id" => "position", "name" => "position", "options" => array("top-left" => \Craft\Craft::t("Top-Left"), "top-center" => \Craft\Craft::t("Top-Center"), "top-right" => \Craft\Craft::t("Top-Right"), "center-left" => \Craft\Craft::t("Center-Left"), "center-center" => \Craft\Craft::t("Center-Center"), "center-right" => \Craft\Craft::t("Center-Right"), "bottom-left" => \Craft\Craft::t("Bottom-Left"), "bottom-center" => \Craft\Craft::t("Bottom-Center"), "bottom-right" => \Craft\Craft::t("Bottom-Right")), "value" => (((array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode") == "crop"))) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "position")) : ("center-center"))));
        // line 93
        echo "
\t\t</div>

\t\t";
        // line 96
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Width"), "id" => "width", "name" => "width", "size" => 5, "value" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "width")) : (null)), "errors" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "width"), "method")) : (null)), "translatable" => true));
        // line 104
        echo "

\t\t";
        // line 106
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Height"), "id" => "height", "name" => "height", "size" => 5, "value" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "height")) : (null)), "errors" => ((array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "height"), "method")) : (null)), "translatable" => true));
        // line 114
        echo "

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 123
        ob_start();
        // line 124
        echo "\t";
        if (((!array_key_exists("transform", $context)) || (!$this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "handle")))) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 125
        echo "
\t\$('#mode input').change(function()
\t{
\t\tif (\$(this).val() == 'crop')
\t\t{
\t\t\t\$('#position-container').removeClass('hidden');
\t\t}
\t\telse
\t\t{
\t\t\t\$('#position-container').addClass('hidden');
\t\t}
\t})
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 138
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/transforms/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 138,  165 => 125,  160 => 124,  158 => 123,  151 => 117,  146 => 114,  144 => 106,  140 => 104,  138 => 96,  133 => 93,  131 => 77,  125 => 76,  121 => 74,  119 => 72,  116 => 71,  109 => 67,  103 => 66,  96 => 62,  90 => 61,  83 => 57,  77 => 56,  73 => 54,  71 => 53,  67 => 51,  65 => 43,  61 => 41,  59 => 31,  56 => 30,  50 => 29,  44 => 25,  42 => 24,  39 => 20,  36 => 18,  34 => 17,  32 => 14,  30 => 8,  28 => 6,  26 => 5,  24 => 3,);
    }
}
