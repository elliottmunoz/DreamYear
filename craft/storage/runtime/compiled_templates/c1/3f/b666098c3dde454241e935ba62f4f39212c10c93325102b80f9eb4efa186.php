<?php

/* _layouts/basecp */
class __TwigTemplate_c13fb666098c3dde454241e935ba62f4f39212c10c93325102b80f9eb4efa186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        \Craft\craft()->templates->includeJsResource("js/cp.js", true);
        // line 5
        \Craft\craft()->templates->includeJsResource("js/craft.js", true);
        // line 6
        \Craft\craft()->templates->includeJsResource((("lib/garnish-0.1" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 7
        \Craft\craft()->templates->includeJsResource((("lib/jquery.placeholder" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 8
        \Craft\craft()->templates->includeJsResource((("lib/jquery-ui-1.10.3.custom" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 9
        \Craft\craft()->templates->includeJsResource((("lib/jquery-2.0.3" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 10
        \Craft\craft()->templates->includeJsResource((("lib/xregexp-all" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? ("-min") : (""))) . ".js"));
        // line 12
        \Craft\craft()->templates->includeTranslations(
        	"Show",
        	"Hide"
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true);
        echo "

\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>";
        // line 20
        echo twig_escape_filter($this->env, \Craft\Craft::t("JavaScript must be enabled to access the Craft control panel."), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\twindow.Craft = {
\t\t\tsiteUid:              \"";
        // line 27
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getSiteUid", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tbaseUrl:              \"";
        // line 28
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseCpUrl:            \"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getCpUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseSiteUrl:          \"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getSiteUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tactionUrl:            \"";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tresourceUrl:          \"";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tscriptName:           \"";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getScriptName", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tomitScriptNameInUrls: ";
        // line 34
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "omitScriptNameInUrls", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tusePathInfo:          ";
        // line 35
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "usePathInfo", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tresourceTrigger:      \"";
        // line 36
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "resourceTrigger", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tactionTrigger:        \"";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "actionTrigger"), "js"), "html", null, true);
        echo "\",
\t\t\tpath:                 \"";
        // line 38
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getPath", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tlanguage:             \"";
        // line 39
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale"), "js"), "html", null, true);
        echo "\",
\t\t\tpackages:             ";
        // line 40
        echo twig_jsonencode_filter($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "getPackages"));
        echo ",
\t\t\ttranslations:         ";
        // line 41
        echo \Craft\craft()->templates->getTranslations();
        echo ",
\t\t\tmaxUploadSize:        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo "
\t\t};
\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  59 => 20,  50 => 15,  47 => 14,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 3,  140 => 60,  136 => 59,  122 => 49,  116 => 47,  114 => 46,  105 => 36,  101 => 35,  96 => 36,  90 => 34,  88 => 33,  84 => 32,  80 => 31,  74 => 28,  71 => 27,  58 => 26,  56 => 25,  54 => 24,  52 => 23,  41 => 14,  39 => 12,  37 => 10,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  24 => 2,);
    }
}
