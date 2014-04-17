<?php

/* settings/plugins */
class __TwigTemplate_c843b84881764c59a6f8ad98e87977e58e0a6bb6c7708c8967462ddfb7b2c12b extends Craft\BaseTemplate
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
        // line 2
        $context["title"] = \Craft\Craft::t("Plugins");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["docsUrl"] = "http://buildwithcraft.com/docs/plugins/introduction";
        // line 11
        $context["plugins"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "plugins"), "getPlugins", array(0 => false), "method");
        // line 14
        ob_start();
        // line 15
        echo "\t";
        if (twig_length_filter($this->env, (isset($context["plugins"]) ? $context["plugins"] : null))) {
            // line 16
            echo "\t\t<table id=\"plugins\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Plugin"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Developer"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Status"), "html", null, true);
            echo "</th>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 25
                echo "\t\t\t\t\t<tr data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 27
                if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "isEnabled") && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "settingsHtml"))) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/plugins/" . twig_lower_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "classHandle")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t<span class=\"light\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "version"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<td data-title=\"";
                // line 34
                echo twig_escape_filter($this->env, \Craft\Craft::t("Developer"), "html", null, true);
                echo "\"><a";
                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "developerUrl")) {
                    echo " href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "developerUrl"), "html", null, true);
                    echo "\" target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "developer"), "html", null, true);
                echo "</a></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 35
                echo twig_escape_filter($this->env, \Craft\Craft::t("Status"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<form method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"pluginClass\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "classHandle"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 38
                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "isEnabled")) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"status on\"></span> ";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Enabled"), "html", null, true);
                    echo " 
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    // line 40
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/disablePlugin\">
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "isInstalled")) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"status off\"></span> ";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
                    echo " 
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    // line 43
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/enablePlugin\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"status\"></span> <span class=\"light\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Not installed"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"thin rightalign nowrap\">
\t\t\t\t\t\t\t<form method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"pluginClass\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "classHandle"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 52
                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "isInstalled")) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Uninstall"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/uninstallPlugin\" data-confirm=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to uninstall {plugin}? You will lose all of its associated data.", array("plugin" => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "name"))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Install"), "html", null, true);
                    echo "\" class=\"btn small formsubmit\" data-action=\"plugins/installPlugin\">
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 64
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("There are no available plugins."), "html", null, true);
            echo "
\t";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/plugins";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 64,  175 => 61,  166 => 57,  160 => 55,  152 => 53,  150 => 52,  146 => 51,  140 => 47,  134 => 45,  129 => 43,  124 => 42,  119 => 40,  114 => 39,  112 => 38,  108 => 37,  103 => 35,  91 => 34,  85 => 32,  79 => 30,  71 => 28,  69 => 27,  65 => 26,  60 => 25,  56 => 24,  49 => 20,  45 => 19,  41 => 18,  37 => 16,  34 => 15,  32 => 14,  30 => 11,  28 => 8,  26 => 4,  24 => 2,);
    }
}
