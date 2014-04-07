<?php

/* 500 */
class __TwigTemplate_47e7b94f5eef6de7647cb1e96ada70229063c55797c1cbca376a6fddd35e3161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/message");

        $this->blocks = array(
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
        // line 4
        ob_start();
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<p>";
        // line 6
        echo twig_escape_filter($this->env, \Craft\Craft::t("An error occurred while processing your request."), "html", null, true);
        echo "</p>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
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
        return array (  33 => 6,  26 => 4,  24 => 2,  105 => 42,  94 => 40,  90 => 39,  85 => 36,  72 => 34,  68 => 33,  63 => 31,  59 => 30,  55 => 29,  52 => 28,  41 => 26,  37 => 25,  31 => 23,  28 => 5,);
    }
}
