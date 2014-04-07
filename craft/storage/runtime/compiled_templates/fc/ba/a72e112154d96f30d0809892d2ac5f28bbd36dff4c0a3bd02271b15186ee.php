<?php

/* _includes/forms/select */
class __TwigTemplate_fcbaa72e112154d96f30d0809892d2ac5f28bbd36dff4c0a3bd02271b15186ee extends Twig_Template
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)))), " ");
        // line 6
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : null)) : (array()));
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\">
\t<select";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 13
        if ((array_key_exists("toggle", $context) && (isset($context["toggle"]) ? $context["toggle"] : null))) {
            echo " class=\"fieldtoggle\"";
        }
        // line 14
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 15
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 16
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 17
        if (array_key_exists("targetPrefix", $context)) {
            echo " data-target-prefix=\"";
            echo twig_escape_filter($this->env, (isset($context["targetPrefix"]) ? $context["targetPrefix"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "optgroup", array(), "any", true, true)) {
                // line 20
                echo "\t\t\t\t";
                if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : null)) {
                    // line 21
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "optgroup"), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                $context["optionLabel"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label")) : ((isset($context["option"]) ? $context["option"] : null)));
                // line 28
                echo "\t\t\t\t";
                $context["optionValue"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value")) : ((isset($context["key"]) ? $context["key"] : null)));
                // line 29
                echo "\t\t\t\t";
                $context["optionDisabled"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "disabled", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "disabled")) : (false));
                // line 30
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["optionValue"]) ? $context["optionValue"] : null), "html", null, true);
                echo "\"";
                if (((isset($context["optionValue"]) ? $context["optionValue"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected";
                }
                if ((isset($context["optionDisabled"]) ? $context["optionDisabled"] : null)) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["optionLabel"]) ? $context["optionLabel"] : null), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        if ((isset($context["hasOptgroups"]) ? $context["hasOptgroups"] : null)) {
            // line 34
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  93 => 28,  84 => 25,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  48 => 15,  42 => 14,  57 => 13,  51 => 12,  41 => 7,  23 => 7,  21 => 6,  19 => 1,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 36,  123 => 34,  114 => 32,  107 => 69,  104 => 68,  101 => 67,  96 => 29,  90 => 27,  87 => 62,  81 => 24,  78 => 23,  27 => 10,  25 => 8,  116 => 79,  110 => 70,  108 => 73,  105 => 72,  102 => 71,  99 => 30,  97 => 69,  94 => 68,  91 => 67,  88 => 66,  85 => 61,  83 => 58,  80 => 63,  76 => 53,  72 => 58,  70 => 57,  63 => 53,  58 => 50,  56 => 17,  52 => 16,  50 => 35,  46 => 9,  44 => 25,  40 => 23,  38 => 13,  32 => 12,  30 => 10,  28 => 5,  26 => 3,  24 => 2,);
    }
}
