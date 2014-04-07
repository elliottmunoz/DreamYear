<?php

/*  */
class __TwigTemplate_8eaa2ee002540d5564be41b830f20294dfecf96d695cd3f4b497b23c1bae1fac extends Twig_Template
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
