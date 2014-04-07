<?php

/* _includes/forms/time */
class __TwigTemplate_b1f75c649b9275ee0cb44ce3b61bd2d559f82e09cd412f41238c7386bff1963b extends Twig_Template
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
        // line 1
        if ((!array_key_exists("value", $context))) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "-time");
        // line 7
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 8
            $context["name"] = ((isset($context["name"]) ? $context["name"] : null) . "[time]");
        }
        // line 11
        \Craft\craft()->templates->includeJsResource((("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 13
        if ((!array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (((isset($context["value"]) ? $context["value"] : null)) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeTime", array(), "method")) : ("")))));
        // line 19
        echo "</div>";
        // line 21
        ob_start();
        // line 22
        echo "
\tvar \$timePicker = \$('#";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "timepickerJsFormat"), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 30,  54 => 25,  49 => 23,  46 => 22,  44 => 21,  40 => 18,  38 => 17,  71 => 27,  66 => 23,  62 => 22,  52 => 21,  48 => 20,  42 => 19,  39 => 16,  37 => 15,  35 => 14,  33 => 13,  31 => 11,  28 => 8,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
    }
}
