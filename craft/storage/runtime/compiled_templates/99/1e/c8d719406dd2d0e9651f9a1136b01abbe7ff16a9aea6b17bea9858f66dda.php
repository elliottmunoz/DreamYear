<?php

/* _includes/field */
class __TwigTemplate_991ec8d719406dd2d0e9651f9a1136b01abbe7ff16a9aea6b17bea9858f66dda extends Twig_Template
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
        $context["field"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "getFieldById", array(0 => (isset($context["fieldId"]) ? $context["fieldId"] : null)), "method");
        // line 3
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 4
        echo "
";
        // line 5
        $context["value"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"))) : (null));
        // line 6
        $context["errors"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getErrors", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle")), "method")) : (null));
        // line 7
        $context["fieldtype"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "populateFieldType", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => (isset($context["element"]) ? $context["element"] : null)), "method");
        // line 8
        echo "
";
        // line 9
        if ((isset($context["fieldtype"]) ? $context["fieldtype"] : null)) {
            // line 10
            echo "\t";
            $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "getInputHtml", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), 1 => (isset($context["value"]) ? $context["value"] : null)), "method");
        } else {
            // line 12
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type")))) . "</p>");
        }
        // line 14
        echo "
";
        // line 15
        echo $context["forms"]->getfield(array("label" => twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name")), "required" => (isset($context["required"]) ? $context["required"] : null), "translatable" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "translatable"), "instructions" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "instructions"), "id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), "errors" => (isset($context["errors"]) ? $context["errors"] : null)), (isset($context["input"]) ? $context["input"] : null));
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  49 => 14,  45 => 12,  41 => 10,  36 => 8,  34 => 7,  27 => 4,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 18,  39 => 9,  35 => 14,  33 => 8,  23 => 3,  21 => 2,  19 => 1,  91 => 28,  85 => 27,  82 => 26,  76 => 17,  72 => 22,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  50 => 16,  46 => 17,  42 => 13,  40 => 12,  32 => 6,  30 => 5,  28 => 6,  26 => 3,  24 => 2,);
    }
}
