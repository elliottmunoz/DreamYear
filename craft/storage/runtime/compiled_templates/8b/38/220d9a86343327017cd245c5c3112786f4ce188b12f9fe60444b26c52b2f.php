<?php

/*  */
class __TwigTemplate_8b38220d9a86343327017cd245c5c3112786f4ce188b12f9fe60444b26c52b2f extends Twig_Template
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
