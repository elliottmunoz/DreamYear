<?php

/* _includes/forms/field */
class __TwigTemplate_c8d7a979b4e626c781108fe5c061cb4694d6db9f27a87d42e5dadc59b5c0c08c extends Twig_Template
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
        $context["id"] = ((array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : null)) : (null));
        // line 2
        $context["label"] = ((array_key_exists("label", $context)) ? ((isset($context["label"]) ? $context["label"] : null)) : (null));
        // line 3
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? ((isset($context["instructions"]) ? $context["instructions"] : null)) : (null));
        // line 4
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) ? $context["errors"] : null)) : (null));
        // line 6
        echo "<div class=\"field";
        if ((array_key_exists("first", $context) && (isset($context["first"]) ? $context["first"] : null))) {
            echo " first";
        }
        echo "\"";
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "-field\"";
        }
        echo ">
\t";
        // line 7
        if (((isset($context["label"]) ? $context["label"] : null) || (isset($context["instructions"]) ? $context["instructions"] : null))) {
            // line 8
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 9
            if ((isset($context["label"]) ? $context["label"] : null)) {
                // line 10
                echo "\t\t\t\t<label";
                if ((array_key_exists("required", $context) && (isset($context["required"]) ? $context["required"] : null))) {
                    echo " class=\"required\"";
                }
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
\t\t\t\t\t";
                // line 11
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "
\t\t\t\t</label>
\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            if ((isset($context["instructions"]) ? $context["instructions"] : null)) {
                // line 15
                echo "\t\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : null)), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 17
            echo "\t\t</div>
\t";
        }
        // line 19
        echo "\t<div class=\"input";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 20
        echo (isset($context["input"]) ? $context["input"] : null);
        echo "
\t</div>
\t";
        // line 22
        $this->env->loadTemplate("_includes/forms/errorList")->display(array_merge($context, array("errors" => (isset($context["errors"]) ? $context["errors"] : null))));
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  78 => 19,  68 => 15,  65 => 14,  42 => 8,  40 => 7,  86 => 24,  57 => 18,  45 => 9,  21 => 2,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 87,  83 => 82,  79 => 23,  75 => 22,  67 => 20,  63 => 19,  55 => 47,  43 => 32,  23 => 3,  19 => 1,  60 => 18,  51 => 17,  49 => 18,  22 => 3,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  97 => 34,  93 => 33,  89 => 32,  85 => 20,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  59 => 11,  50 => 15,  47 => 10,  35 => 22,  33 => 14,  31 => 17,  29 => 8,  27 => 6,  25 => 4,  140 => 60,  136 => 59,  122 => 49,  116 => 47,  114 => 46,  105 => 36,  101 => 35,  96 => 36,  90 => 22,  88 => 33,  84 => 32,  80 => 31,  74 => 17,  71 => 21,  58 => 26,  56 => 25,  54 => 24,  52 => 23,  41 => 14,  39 => 15,  37 => 9,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,);
    }
}