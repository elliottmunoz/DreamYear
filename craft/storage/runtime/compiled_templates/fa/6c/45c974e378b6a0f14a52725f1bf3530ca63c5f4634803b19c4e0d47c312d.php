<?php

/* 404 */
class __TwigTemplate_fa6c45c974e378b6a0f14a52725f1bf3530ca63c5f4634803b19c4e0d47c312d extends Twig_Template
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
        $context["title"] = \Craft\Craft::t("Page Not Found");
        // line 4
        ob_start();
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<p>";
        // line 6
        echo twig_escape_filter($this->env, \Craft\Craft::t("The requested URL was not found on this server."), "html", null, true);
        echo "</p>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "404";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 5,  26 => 4,  24 => 2,);
    }
}