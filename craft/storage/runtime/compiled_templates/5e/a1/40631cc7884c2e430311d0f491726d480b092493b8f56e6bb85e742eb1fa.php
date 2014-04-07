<?php

/* _includes/forms/textarea */
class __TwigTemplate_5ea140631cc7884c2e430311d0f491726d480b092493b8f56e6bb85e742eb1fa extends Twig_Template
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : null))) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 2 => (((array_key_exists("placeholder", $context) && (isset($context["placeholder"]) ? $context["placeholder"] : null))) ? ("nicetext") : (null)), 3 => (((array_key_exists("size", $context) && (isset($context["size"]) ? $context["size"] : null))) ? (null) : ("fullwidth")))), " ");
        // line 8
        $context["rows"] = ((array_key_exists("rows", $context)) ? ((isset($context["rows"]) ? $context["rows"] : null)) : (2));
        // line 9
        $context["cols"] = ((array_key_exists("cols", $context)) ? ((isset($context["cols"]) ? $context["cols"] : null)) : (50));
        // line 11
        echo "<textarea class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
        echo "\" cols=\"";
        echo twig_escape_filter($this->env, (isset($context["cols"]) ? $context["cols"] : null), "html", null, true);
        echo "\"";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 13
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 14
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 15
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 16
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (null)), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 48,  71 => 43,  65 => 39,  63 => 36,  58 => 34,  47 => 24,  25 => 11,  78 => 47,  68 => 19,  44 => 10,  31 => 5,  22 => 2,  52 => 15,  49 => 15,  45 => 14,  41 => 16,  36 => 8,  34 => 7,  27 => 5,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 26,  39 => 13,  35 => 7,  33 => 12,  23 => 9,  21 => 8,  19 => 1,  91 => 28,  85 => 27,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 18,  53 => 16,  50 => 12,  46 => 17,  42 => 9,  40 => 12,  32 => 6,  30 => 6,  28 => 6,  26 => 3,  24 => 3,);
    }
}
