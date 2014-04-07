<?php

/* entries/_fields */
class __TwigTemplate_10ce68fbd2acdf39c7931a1f00f220cb977f84ed110b18b8a4c4027ad75334d6 extends Twig_Template
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
        $context["__internal_08b85487a4ac52cf574aa01e2fa2c5160d352b4461ae5cfb1752d363a1ba72a7"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_08b85487a4ac52cf574aa01e2fa2c5160d352b4461ae5cfb1752d363a1ba72a7"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "titleLabel")), "id" => "title", "name" => "title", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "title"), "method"), "first" => (((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) ? (false) : (true)), "autofocus" => true, "required" => true));
        // line 12
        echo "

<div>
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getTabs", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 16
            echo "\t\t<div id=\"tab";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\"";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t";
            // line 17
            $this->env->loadTemplate("_includes/fields")->display(array("fields" => $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "getFields", array(), "method"), "element" => (isset($context["entry"]) ? $context["entry"] : null)));
            // line 21
            echo "\t\t</div>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "entries/_fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  48 => 16,  21 => 2,  140 => 38,  133 => 36,  127 => 34,  125 => 33,  121 => 32,  110 => 31,  106 => 30,  100 => 27,  97 => 26,  93 => 24,  86 => 22,  80 => 20,  78 => 19,  63 => 17,  59 => 21,  55 => 14,  53 => 13,  41 => 10,  34 => 6,  31 => 15,  29 => 4,  27 => 3,  19 => 1,  422 => 203,  420 => 202,  415 => 197,  412 => 196,  409 => 195,  404 => 193,  400 => 192,  397 => 191,  394 => 190,  391 => 189,  383 => 187,  381 => 186,  375 => 182,  362 => 180,  360 => 179,  357 => 178,  354 => 177,  351 => 176,  348 => 175,  345 => 174,  342 => 173,  339 => 172,  337 => 171,  330 => 169,  322 => 164,  316 => 160,  314 => 159,  311 => 158,  306 => 155,  303 => 154,  298 => 152,  294 => 151,  289 => 150,  287 => 149,  284 => 148,  276 => 146,  274 => 145,  269 => 143,  265 => 142,  259 => 141,  255 => 139,  253 => 138,  247 => 134,  243 => 132,  237 => 129,  232 => 128,  230 => 127,  227 => 126,  223 => 124,  220 => 121,  216 => 119,  213 => 115,  210 => 114,  204 => 112,  201 => 111,  199 => 110,  195 => 108,  193 => 101,  189 => 99,  187 => 92,  184 => 91,  180 => 89,  177 => 83,  175 => 82,  172 => 81,  168 => 79,  165 => 73,  163 => 72,  159 => 70,  157 => 63,  150 => 62,  148 => 61,  144 => 40,  142 => 58,  138 => 56,  134 => 54,  131 => 47,  129 => 46,  126 => 45,  120 => 43,  118 => 42,  115 => 41,  109 => 39,  107 => 38,  102 => 28,  98 => 35,  95 => 34,  88 => 31,  85 => 30,  83 => 29,  81 => 26,  77 => 22,  74 => 23,  72 => 20,  69 => 19,  64 => 16,  49 => 14,  46 => 13,  42 => 12,  38 => 11,  35 => 10,  32 => 9,  30 => 8,  26 => 12,  24 => 3,);
    }
}
