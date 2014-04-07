<?php

/* _components/fieldtypes/Tags/input */
class __TwigTemplate_feeda35ecd8c4b413709829cd9af24e7d9aae4acdd7d6798d0aaeb5288068b8e extends Twig_Template
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = ((array_key_exists("elements", $context)) ? ((isset($context["elements"]) ? $context["elements"] : null)) : (array()));
        // line 6
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) ? $context["criteria"] : null))) ? ((isset($context["criteria"]) ? $context["criteria"] : null)) : (null));
        // line 7
        $context["__internal_82b7d2c09c353b43e36ab587d50309b8332e3331ba1e9f64b38946b7c785aeff"] = $this->env->loadTemplate("_includes/forms");
        // line 8
        echo "
<div id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"elementselect tagselect\">
\t<div class=\"elements\">
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 12
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 13
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</div>

\t<div class=\"texticon add icon\">
\t\t";
        // line 17
        echo $context["__internal_82b7d2c09c353b43e36ab587d50309b8332e3331ba1e9f64b38946b7c785aeff"]->gettext(array("width" => "auto", "placeholder" => \Craft\Craft::t("Add a tag")));
        // line 20
        echo "
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</div>

";
        // line 25
        ob_start();
        // line 26
        echo "\tnew Craft.TagSelectInput(
\t\t\"";
        // line 27
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 28
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["tagSetId"]) ? $context["tagSetId"] : null), "html", null, true);
        echo ",
\t\t";
        // line 30
        echo twig_escape_filter($this->env, (((isset($context["elementId"]) ? $context["elementId"] : null)) ? ((isset($context["elementId"]) ? $context["elementId"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 31
        echo (((isset($context["hasFields"]) ? $context["hasFields"] : null)) ? ("true") : ("false"));
        echo "
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Tags/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  116 => 34,  110 => 31,  106 => 30,  94 => 27,  91 => 26,  89 => 25,  82 => 20,  80 => 17,  75 => 14,  61 => 13,  58 => 12,  41 => 11,  36 => 9,  33 => 8,  29 => 6,  67 => 11,  45 => 11,  37 => 5,  27 => 5,  23 => 2,  59 => 5,  57 => 17,  48 => 16,  31 => 7,  21 => 2,  19 => 1,  422 => 203,  420 => 202,  415 => 197,  412 => 196,  409 => 195,  404 => 193,  400 => 192,  397 => 191,  394 => 190,  391 => 189,  383 => 187,  381 => 186,  375 => 182,  362 => 180,  360 => 179,  357 => 178,  354 => 177,  351 => 176,  348 => 175,  345 => 174,  342 => 173,  339 => 172,  337 => 171,  330 => 169,  322 => 164,  316 => 160,  314 => 159,  311 => 158,  306 => 155,  303 => 154,  298 => 152,  294 => 151,  289 => 150,  287 => 149,  284 => 148,  276 => 146,  274 => 145,  269 => 143,  265 => 142,  259 => 141,  255 => 139,  253 => 138,  247 => 134,  243 => 132,  237 => 129,  232 => 128,  230 => 127,  227 => 126,  223 => 124,  220 => 121,  216 => 119,  213 => 115,  210 => 114,  204 => 112,  201 => 111,  199 => 110,  195 => 108,  193 => 101,  189 => 99,  187 => 92,  184 => 91,  180 => 89,  177 => 83,  175 => 82,  172 => 81,  168 => 79,  165 => 73,  163 => 72,  159 => 70,  157 => 63,  150 => 62,  148 => 61,  144 => 59,  142 => 58,  138 => 56,  134 => 54,  131 => 47,  129 => 46,  126 => 45,  120 => 43,  118 => 42,  115 => 41,  109 => 39,  107 => 38,  102 => 29,  98 => 28,  95 => 34,  88 => 31,  85 => 30,  83 => 29,  81 => 26,  77 => 22,  74 => 23,  72 => 20,  69 => 19,  64 => 6,  49 => 14,  46 => 13,  42 => 6,  38 => 11,  35 => 10,  32 => 9,  30 => 4,  26 => 12,  24 => 3,);
    }
}
