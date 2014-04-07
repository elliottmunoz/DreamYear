<?php

/* _special/install */
class __TwigTemplate_cce8e08f5e65f9e4408f8e51dcfe212a09e14ccd475ddf72b684b7aa21c9a6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Install Craft");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/install.css");
        // line 4
        \Craft\craft()->templates->includeJsResource("js/install.js");
        // line 6
        \Craft\craft()->templates->includeTranslations(
        	"All done!",
        	"Go to {app}"
        );
        // line 11
        ob_start();
        // line 12
        echo "\t<div id=\"bg\"></div>
\t<div class=\"beginbtncontainer\">
\t\t<div id=\"beginbtn\" class=\"btn big submit\">";
        // line 14
        echo twig_escape_filter($this->env, \Craft\Craft::t("Begin"), "html", null, true);
        echo "</div>
\t</div>

\t";
        // line 17
        $this->env->loadTemplate("_special/install/account")->display($context);
        // line 18
        echo "\t";
        $this->env->loadTemplate("_special/install/site")->display($context);
        // line 19
        echo "\t";
        $this->env->loadTemplate("_special/install/installing")->display($context);
        $context["body"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "_special/install";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 19,  49 => 18,  47 => 17,  41 => 14,  37 => 12,  35 => 11,  30 => 6,  28 => 4,  26 => 3,  24 => 2,);
    }
}
