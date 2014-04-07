<?php

/* _includes/forms/checkbox */
class __TwigTemplate_eb3e79ff9feb88001e829fe71f450ecc082cf86f6eb6cbb7f0ce72a3fe1545d9 extends Twig_Template
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
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 1 => (((array_key_exists("toggle", $context) && (isset($context["toggle"]) ? $context["toggle"] : null))) ? ("fieldtoggle") : (null)))), " ");
        // line 6
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (1));
        // line 8
        echo "<label>
\t";
        // line 9
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null)) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : null), (-2)) != "[]")))) {
            // line 10
            echo "\t\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
\t";
        }
        // line 13
        echo "<input type=\"checkbox\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"";
        // line 14
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 15
        if ((isset($context["class"]) ? $context["class"] : null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"";
        }
        // line 16
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 17
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : null))) {
            echo " checked";
        }
        // line 18
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 19
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 20
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        // line 21
        if ((array_key_exists("reverseToggle", $context) && (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null))) {
            echo " data-reverse-toggle=\"y\"";
        }
        echo ">
\t";
        // line 22
        if (array_key_exists("label", $context)) {
            echo (isset($context["label"]) ? $context["label"] : null);
        }
        // line 23
        echo "</label>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  60 => 18,  44 => 15,  38 => 14,  34 => 13,  92 => 23,  78 => 19,  68 => 20,  65 => 14,  42 => 8,  40 => 7,  86 => 24,  57 => 18,  45 => 9,  21 => 6,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 87,  83 => 82,  79 => 23,  75 => 22,  67 => 20,  63 => 19,  55 => 47,  51 => 17,  43 => 32,  23 => 8,  19 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  97 => 34,  93 => 33,  89 => 32,  85 => 20,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  59 => 11,  50 => 16,  47 => 10,  35 => 22,  33 => 14,  31 => 17,  29 => 6,  27 => 6,  25 => 4,  140 => 60,  136 => 59,  122 => 49,  116 => 47,  114 => 46,  105 => 36,  101 => 35,  96 => 36,  90 => 22,  88 => 33,  84 => 23,  80 => 22,  74 => 21,  71 => 21,  58 => 26,  56 => 17,  54 => 24,  52 => 23,  41 => 14,  39 => 15,  37 => 6,  32 => 6,  30 => 5,  28 => 10,  26 => 9,  24 => 3,);
    }
}
