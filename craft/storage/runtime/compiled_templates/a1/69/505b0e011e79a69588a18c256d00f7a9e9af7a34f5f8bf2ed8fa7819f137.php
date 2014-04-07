<?php

/* _includes/edit_element */
class __TwigTemplate_a169505b0e011e79a69588a18c256d00f7a9e9af7a34f5f8bf2ed8fa7819f137 extends Twig_Template
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
        $context["__internal_537281a53fde7e6d2b33e668f0d0e333b90c1e057a6df8d973c5342b72627846"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        $context["fieldNamespace"] = ("fields" . twig_random($this->env));
        // line 3
        echo "
<div class=\"element-hud-form\">
\t<form id=\"element-fields\">
\t\t<input type=\"hidden\" name=\"elementId\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "id"), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"fieldNamespace\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null), "html", null, true);
        echo "\">
\t\t<div>
\t\t\t";
        // line 9
        if ((isset($context["hasTitle"]) ? $context["hasTitle"] : null)) {
            // line 10
            echo "\t\t\t\t";
            echo $context["__internal_537281a53fde7e6d2b33e668f0d0e333b90c1e057a6df8d973c5342b72627846"]->gettextField(array("label" => \Craft\Craft::t("Title"), "id" => "title", "name" => "title", "value" => $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "title"), "errors" => $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getErrors", array(0 => "title"), "method"), "first" => true, "autofocus" => true, "required" => true));
            // line 19
            echo "
\t\t\t";
        }
        // line 21
        echo "
\t\t\t";
        // line 22
        $this->env->loadTemplate("_includes/fields")->display(array("namespace" => (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null), "fields" => $this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getFields", array(), "method"), "element" => (isset($context["element"]) ? $context["element"] : null)));
        // line 27
        echo "\t\t</div>
\t\t<div class=\"buttons rightalign\">
\t\t\t<div class=\"btn cancel\">";
        // line 29
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cancel"), "html", null, true);
        echo "</div>
\t\t\t<input type=\"submit\" class=\"submit btn\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\" />
\t\t\t<div class=\"spinner hidden\"></div>
\t\t</div>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/edit_element";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 30,  55 => 29,  51 => 27,  49 => 22,  46 => 21,  42 => 19,  39 => 10,  37 => 9,  32 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
