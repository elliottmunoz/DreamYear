<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_53fd6fdde7823cedeaec77329fd273b2b7bcb3563fa396501d3fc32cb2e8bb7d extends Twig_Template
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        $context["config"] = array("id" => (isset($context["name"]) ? $context["name"] : null), "name" => (isset($context["name"]) ? $context["name"] : null), "value" => (isset($context["value"]) ? $context["value"] : null), "class" => "nicetext", "placeholder" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "placeholder"), "rows" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "initialRows"));
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline")) {
            // line 13
            echo "\t";
            echo $context["forms"]->gettextarea((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        } else {
            // line 15
            echo "\t";
            echo $context["forms"]->gettext((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,  31 => 13,  29 => 12,  26 => 11,  24 => 3,  21 => 2,  19 => 1,);
    }
}
