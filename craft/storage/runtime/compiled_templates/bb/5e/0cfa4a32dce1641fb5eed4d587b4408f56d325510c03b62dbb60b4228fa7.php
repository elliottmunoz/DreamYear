<?php

/* _elements/element */
class __TwigTemplate_bb5e0cfa4a32dce1641fb5eed4d587b4408f56d325510c03b62dbb60b4228fa7 extends Twig_Template
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
        echo \Craft\craft()->templates->invokeHook("cp.elements.element", $context);

    }

    public function getTemplateName()
    {
        return "_elements/element";
    }

    public function getDebugInfo()
    {
        return array (  102 => 12,  88 => 11,  80 => 9,  76 => 7,  74 => 6,  69 => 5,  66 => 4,  49 => 3,  36 => 2,  54 => 11,  52 => 10,  48 => 8,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
