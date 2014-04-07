<?php

/* _elements/thumbsview/container */
class __TwigTemplate_edf58e4d85ad1bb20371c2613d1baad46f6ab3c55c4ba4cdfa142d55ccb0211c extends Twig_Template
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
        echo "<ul class=\"thumbsview\">
\t";
        // line 2
        $this->env->loadTemplate("_elements/thumbsview/elements")->display($context);
        // line 3
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/thumbsview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }
}
