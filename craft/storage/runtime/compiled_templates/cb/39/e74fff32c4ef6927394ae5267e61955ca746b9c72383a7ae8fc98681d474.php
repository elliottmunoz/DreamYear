<?php

/* _components/fieldtypes/RichText/settings */
class __TwigTemplate_cb39e74fff32c4ef6927394ae5267e61955ca746b9c72383a7ae8fc98681d474 extends Twig_Template
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "

";
        // line 4
        if ((twig_length_filter($this->env, (isset($context["configOptions"]) ? $context["configOptions"] : null)) > 1)) {
            // line 5
            echo "\t";
            ob_start();
            // line 6
            echo "\t\t";
            echo $context["forms"]->getselect(array("id" => "configFle", "name" => "configFile", "options" => (isset($context["configOptions"]) ? $context["configOptions"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "configFile")));
            // line 11
            echo "
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 14
            echo "\t";
            ob_start();
            // line 15
            echo "\t\t<p>";
            echo \Craft\Craft::t("You don’t have any <a href=\"http://buildwithcraft.com/docs/rich-text-fields#redactor-configs\" target=\"_blank\">Redactor configs</a> yet.");
            echo "</p>
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 18
        echo "
";
        // line 19
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Config"), "instructions" => (((\Craft\Craft::t("You can save custom Redactor configs as .json files in craft/config/redactor/.") . " <a href=\"http://imperavi.com/redactor/docs/settings/\">") . \Craft\Craft::t("View available settings")) . "</a>."), "id" => "configFile"), (isset($context["configInput"]) ? $context["configInput"] : null));
        // line 23
        echo "


";
        // line 26
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Clean up HTML?"), "instructions" => \Craft\Craft::t("Removes <code>&lt;span&gt;</code>’s, empty tags, and most <code>style</code> attributes on save."), "id" => "cleanupHtml", "name" => "cleanupHtml", "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cleanupHtml")));
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/RichText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 23,  48 => 18,  41 => 15,  52 => 40,  50 => 33,  37 => 24,  33 => 11,  31 => 14,  27 => 5,  25 => 4,  59 => 38,  56 => 30,  44 => 32,  39 => 29,  36 => 21,  29 => 5,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 129,  158 => 126,  154 => 124,  151 => 120,  149 => 119,  145 => 117,  143 => 108,  139 => 106,  137 => 96,  133 => 94,  131 => 84,  127 => 82,  124 => 74,  118 => 73,  115 => 72,  110 => 71,  108 => 70,  105 => 69,  99 => 67,  97 => 66,  92 => 63,  90 => 62,  87 => 58,  85 => 57,  82 => 54,  79 => 52,  77 => 51,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 41,  63 => 35,  60 => 32,  58 => 26,  54 => 29,  51 => 19,  49 => 23,  47 => 26,  45 => 20,  42 => 17,  40 => 16,  38 => 14,  34 => 10,  32 => 19,  30 => 6,  28 => 7,  26 => 10,  24 => 3,);
    }
}
