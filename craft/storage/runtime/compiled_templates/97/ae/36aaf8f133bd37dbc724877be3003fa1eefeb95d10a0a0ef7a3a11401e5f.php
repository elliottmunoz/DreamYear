<?php

/* _includes/field */
class __TwigTemplate_97ae36aaf8f133bd37dbc724877be3003fa1eefeb95d10a0a0ef7a3a11401e5f extends Twig_Template
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
        return array (  52 => 15,  49 => 14,  45 => 12,  41 => 10,  36 => 8,  34 => 7,  100 => 27,  84 => 19,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 18,  39 => 9,  35 => 14,  33 => 8,  23 => 3,  21 => 2,  19 => 1,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 29,  101 => 67,  99 => 66,  96 => 26,  90 => 25,  87 => 24,  83 => 58,  81 => 18,  78 => 54,  27 => 4,  25 => 3,  91 => 28,  85 => 61,  82 => 26,  76 => 17,  72 => 22,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  50 => 16,  46 => 17,  42 => 13,  40 => 12,  32 => 6,  30 => 5,  28 => 6,  26 => 3,  24 => 2,);
    }
}
