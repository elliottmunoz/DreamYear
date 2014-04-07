<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_ff218b851239899ca629e9de450edfea44d89bc2732a6b5ed97e84dbabc73122 extends Twig_Template
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
        $context["onLabel"] = ((array_key_exists("onLabel", $context)) ? ((isset($context["onLabel"]) ? $context["onLabel"] : null)) : (\Craft\Craft::t("Yes")));
        // line 2
        $context["offLabel"] = ((array_key_exists("offLabel", $context)) ? ((isset($context["offLabel"]) ? $context["offLabel"] : null)) : (\Craft\Craft::t("No")));
        // line 3
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) ? $context["on"] : null)) : (false));
        // line 4
        echo "
<div class=\"lightswitch";
        // line 5
        if ((isset($context["on"]) ? $context["on"] : null)) {
            echo " on";
        }
        echo "\"";
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        echo " tabindex=\"0\">
\t<div class=\"container\">
\t\t<div class=\"label on\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["onLabel"]) ? $context["onLabel"] : null), "html", null, true);
        echo "</div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["offLabel"]) ? $context["offLabel"] : null), "html", null, true);
        echo "</div>
\t</div>
\t<input type=\"hidden\"";
        // line 12
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
        }
        // line 13
        echo "value=\"";
        echo (((isset($context["on"]) ? $context["on"] : null)) ? ("on") : (null));
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  51 => 12,  41 => 7,  23 => 3,  21 => 2,  19 => 1,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  107 => 69,  104 => 68,  101 => 67,  96 => 65,  90 => 63,  87 => 62,  81 => 56,  78 => 54,  27 => 4,  25 => 4,  116 => 79,  110 => 70,  108 => 73,  105 => 72,  102 => 71,  99 => 66,  97 => 69,  94 => 68,  91 => 67,  88 => 66,  85 => 61,  83 => 58,  80 => 63,  76 => 53,  72 => 58,  70 => 57,  63 => 53,  58 => 50,  56 => 44,  52 => 42,  50 => 35,  46 => 9,  44 => 25,  40 => 23,  38 => 15,  32 => 11,  30 => 10,  28 => 5,  26 => 3,  24 => 2,);
    }
}
