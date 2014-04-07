<?php

/* _includes/forms/checkbox */
class __TwigTemplate_be6db88153c313eae6c5feb4435c03bf9e64dfa3ae532a1a368a48c315ec5d2b extends Twig_Template
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
        return array (  74 => 21,  64 => 19,  38 => 14,  80 => 22,  71 => 43,  65 => 39,  63 => 36,  58 => 34,  47 => 24,  68 => 20,  44 => 15,  31 => 5,  22 => 2,  52 => 15,  49 => 15,  45 => 14,  41 => 16,  36 => 8,  34 => 13,  100 => 27,  84 => 23,  66 => 26,  60 => 18,  57 => 24,  54 => 22,  51 => 26,  39 => 13,  35 => 7,  33 => 12,  23 => 8,  21 => 6,  19 => 1,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 29,  101 => 67,  99 => 66,  96 => 26,  90 => 25,  87 => 24,  83 => 58,  81 => 18,  78 => 47,  27 => 5,  25 => 11,  91 => 28,  85 => 61,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 17,  53 => 16,  50 => 16,  46 => 17,  42 => 9,  40 => 12,  32 => 6,  30 => 6,  28 => 10,  26 => 9,  24 => 3,);
    }
}
