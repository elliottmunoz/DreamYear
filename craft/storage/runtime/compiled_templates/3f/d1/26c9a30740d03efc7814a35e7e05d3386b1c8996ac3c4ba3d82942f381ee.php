<?php

/* settings/routes */
class __TwigTemplate_3fd126c9a30740d03efc7814a35e7e05d3386b1c8996ac3c4ba3d82942f381ee extends Twig_Template
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
        $context["title"] = \Craft\Craft::t("Routes");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/routes.css");
        // line 4
        \Craft\craft()->templates->includeJsResource("js/routes.js");
        // line 6
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 10
        \Craft\craft()->templates->includeTranslations(
        	"New route order saved.",
        	"Couldn’t save new route order.",
        	"If the URI looks like this",
        	"Add a token",
        	"Load this template",
        	"Edit Route",
        	"Create a new route",
        	"Route Saved.",
        	"Couldn’t save route.",
        	"Are you sure you want to delete this route?",
        	"Route deleted."
        );
        // line 24
        $context["docsUrl"] = "http://buildwithcraft.com/docs/routing";
        // line 27
        $context["routes"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "routes"), "getAllRoutes", array(), "method");
        // line 30
        ob_start();
        // line 31
        echo "\t<p id=\"noroutes\"";
        if ((isset($context["routes"]) ? $context["routes"] : null)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 32
        echo twig_escape_filter($this->env, \Craft\Craft::t("No routes exist yet."), "html", null, true);
        echo "
\t</p>

\t<div id=\"routes\">
\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) ? $context["routes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 37
            echo "\t\t\t<div class=\"pane route\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"url\">";
            // line 40
            echo $this->getAttribute((isset($context["route"]) ? $context["route"] : null), "urlDisplayHtml");
            // line 42
            echo "</div>
\t\t\t\t<div class=\"template\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : null), "template"), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t</div>

\t<div class=\"buttons\">
\t\t<div id=\"add-route-btn\" class=\"btn submit add icon\">";
        // line 49
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Route"), "html", null, true);
        echo "</div>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        ob_start();
        // line 55
        echo "\tCraft.routes.tokens = {
\t\t";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["pattern"]) {
            // line 57
            echo "\t\t\t";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                echo ",";
            }
            // line 58
            echo "\t\t\t\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t((isset($context["name"]) ? $context["name"] : null), null, null, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "locale")), "js"), "html", null, true);
            echo "\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : null), "js"), "html", null, true);
            echo "\"
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['pattern'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t};
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/routes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 62,  146 => 60,  127 => 58,  122 => 57,  105 => 56,  102 => 55,  100 => 54,  94 => 49,  89 => 46,  80 => 43,  77 => 42,  75 => 40,  70 => 37,  66 => 36,  59 => 32,  52 => 31,  50 => 30,  48 => 27,  46 => 24,  32 => 10,  30 => 6,  28 => 4,  26 => 3,  24 => 2,);
    }
}
