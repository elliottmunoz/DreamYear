<?php

/*  */
class __TwigTemplate_c85f568d1e75ef06a27b13fc2a48c8b6eb9da6298d85110571b9fe7576b9b757 extends Twig_Template
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
        \Craft\HeaderHelper::setHeader(array('Location' => \Craft\UrlHelper::getUrl("dashboard")));
    }

    public function getTemplateName()
    {
        return "";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
