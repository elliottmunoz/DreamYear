<?php

/* _elements/modalbody */
class __TwigTemplate_d25e5c9c091ec053b91459288bf5542fbd96dab1ec9443ff4956aaac1c5e0724 extends Twig_Template
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
        if ((array_key_exists("sources", $context) && (!twig_test_empty((isset($context["sources"]) ? $context["sources"] : null))))) {
            // line 2
            echo "\t<div class=\"sidebar\">
\t\t<nav>
\t\t\t";
            // line 4
            $this->env->loadTemplate("_elements/sources")->display($context);
            // line 5
            echo "\t\t</nav>
\t</div>
";
        }
        // line 8
        echo "
";
        // line 9
        $this->env->loadTemplate("_elements/indexcontainer")->display($context);
    }

    public function getTemplateName()
    {
        return "_elements/modalbody";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  32 => 8,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}