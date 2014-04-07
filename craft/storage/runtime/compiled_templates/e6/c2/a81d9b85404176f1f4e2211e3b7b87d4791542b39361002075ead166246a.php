<?php

/* _includes/forms/text */
class __TwigTemplate_e6c2a81d9b85404176f1f4e2211e3b7b87d4791542b39361002075ead166246a extends Twig_Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)), 2 => (((array_key_exists("placeholder", $context) && (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) ? ("nicetext") : (null)), 3 => (((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password"))) ? ("password") : (null)), 4 => (((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) ? ("disabled") : (null)), 5 => (((array_key_exists("size", $context) && (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")))) ? (null) : ("fullwidth")))), " ");
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 13
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\"";
        // line 14
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 15
        if (array_key_exists("size", $context)) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
            echo "\"";
        }
        // line 16
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 17
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        // line 18
        if (array_key_exists("maxlength", $context)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")), "html", null, true);
            echo "\"";
        }
        // line 19
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 20
        if (((!array_key_exists("autocomplete", $context)) || (!(isset($context["autocomplete"]) ? $context["autocomplete"] : $this->getContext($context, "autocomplete"))))) {
            echo " autocomplete=\"off\"";
        }
        // line 21
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled ";
        }
        // line 22
        if ((array_key_exists("readonly", $context) && (isset($context["readonly"]) ? $context["readonly"] : $this->getContext($context, "readonly")))) {
            echo " readonly ";
        }
        // line 23
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 24
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  45 => 16,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 87,  83 => 82,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  43 => 32,  23 => 12,  57 => 18,  55 => 47,  46 => 13,  40 => 10,  36 => 9,  32 => 8,  21 => 3,  19 => 1,  60 => 18,  51 => 17,  22 => 3,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  59 => 52,  50 => 15,  39 => 15,  33 => 14,  31 => 17,  29 => 8,  27 => 13,  25 => 3,  52 => 19,  49 => 18,  47 => 37,  41 => 14,  37 => 9,  35 => 22,  30 => 6,  28 => 4,  26 => 5,  24 => 2,);
    }
}
