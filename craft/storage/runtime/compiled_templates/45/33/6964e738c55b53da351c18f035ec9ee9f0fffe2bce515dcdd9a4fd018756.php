<?php

/* settings/plugins/_settings */
class __TwigTemplate_45336964e738c55b53da351c18f035ec9ee9f0fffe2bce515dcdd9a4fd018756 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((!array_key_exists("plugin", $context))) {
            // line 2
            $context["plugin"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "plugins"), "getPlugin", array(0 => (isset($context["pluginClass"]) ? $context["pluginClass"] : null)), "method");
            // line 3
            if ((!(isset($context["plugin"]) ? $context["plugin"] : null))) {
                throw new \Craft\HttpException(404);
            }
        }
        // line 6
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Plugins"), "url" => \Craft\UrlHelper::getUrl("settings/plugins")));
        // line 13
        $context["title"] = $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name");
        // line 16
        ob_start();
        // line 17
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"plugins/savePluginSettings\">
\t\t<input type=\"hidden\" name=\"pluginClass\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "classHandle"), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/plugins\">

\t\t";
        // line 22
        $_namespace = "settings";
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 23
                echo "\t\t\t";
                echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getSettingsHtml", array(), "method");
                echo "
\t\t";
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "getSettingsHtml", array(), "method");
            echo "
\t\t";
        }
        unset($_originalNamespace, $_namespace);
        // line 25
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"";
        // line 27
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
        return "settings/plugins/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  75 => 25,  56 => 23,  49 => 22,  43 => 19,  39 => 17,  37 => 16,  35 => 13,  33 => 6,  28 => 3,  26 => 2,  24 => 1,);
    }
}
