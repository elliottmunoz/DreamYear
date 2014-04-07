<?php

/* settings/assets/fields */
class __TwigTemplate_71ad7bffa04186da1b79e291e94fea0de57f79e70f2f52780a0afe8d433d940a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("settings/assets/_layout");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "settings/assets/_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["selectedTab"] = "fields";
        // line 4
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields#field-layouts";
        // line 7
        ob_start();
        // line 8
        echo "\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"assets/saveFieldLayout\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/assets/fields\">

\t\t";
        // line 12
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "getLayoutByType", array(0 => "Asset"), "method"), "customizableTabs" => false));
        // line 16
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  38 => 16,  36 => 12,  30 => 8,  28 => 7,  26 => 4,  24 => 2,);
    }
}
