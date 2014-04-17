<?php

/* 500 */
class __TwigTemplate_3203388d1146ba67ceebeb46c7a852cde21a930ca49c3972aebf60fbc08f2be6 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/message");

        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Internal Server Error");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<p>";
        // line 6
        echo twig_escape_filter($this->env, \Craft\Craft::t("An error occurred while processing your request."), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "500";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  33 => 5,  30 => 4,  25 => 2,  111 => 40,  108 => 39,  100 => 51,  90 => 46,  83 => 39,  70 => 31,  64 => 30,  52 => 28,  41 => 20,  36 => 18,  20 => 11,  416 => 135,  412 => 134,  405 => 129,  396 => 126,  392 => 125,  388 => 124,  383 => 123,  372 => 121,  368 => 120,  365 => 119,  361 => 118,  357 => 117,  349 => 111,  337 => 107,  332 => 105,  329 => 104,  325 => 103,  320 => 101,  315 => 99,  310 => 97,  300 => 89,  291 => 85,  282 => 84,  278 => 83,  275 => 82,  266 => 81,  262 => 80,  259 => 79,  255 => 78,  251 => 77,  245 => 76,  238 => 71,  228 => 69,  224 => 68,  219 => 67,  215 => 66,  212 => 65,  203 => 63,  199 => 62,  192 => 60,  181 => 52,  177 => 50,  166 => 48,  162 => 47,  154 => 44,  147 => 39,  144 => 38,  127 => 35,  123 => 34,  119 => 33,  116 => 32,  98 => 31,  96 => 30,  92 => 29,  85 => 43,  78 => 22,  67 => 20,  63 => 19,  58 => 29,  54 => 17,  50 => 16,  44 => 15,  31 => 4,  28 => 17,);
    }
}
