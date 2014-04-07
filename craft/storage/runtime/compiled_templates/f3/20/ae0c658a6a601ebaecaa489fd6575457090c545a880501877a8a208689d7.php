<?php

/* settings/assets/transforms/index */
class __TwigTemplate_f320ae0c658a6a601ebaecaa489fd6575457090c545a880501877a8a208689d7 extends Twig_Template
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
        $context["selectedTab"] = "transforms";
        // line 4
        $context["docsUrl"] = "http://buildwithcraft.com/docs/image-transforms";
        // line 7
        ob_start();
        // line 8
        echo "<p id=\"notransforms\"";
        if (twig_length_filter($this->env, (isset($context["transforms"]) ? $context["transforms"] : null))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("No Asset transforms exist yet."), "html", null, true);
        echo "
</p>

";
        // line 12
        if (twig_length_filter($this->env, (isset($context["transforms"]) ? $context["transforms"] : null))) {
            // line 13
            echo "\t<table id=\"transforms\" class=\"data collapsible\">
\t\t<thead>
\t\t\t<th scope=\"col\">";
            // line 15
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t<th scope=\"col\">";
            // line 16
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t<th scope=\"col\">";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Mode"), "html", null, true);
            echo "</th>
\t\t\t<th scope=\"col\">";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Dimensions"), "html", null, true);
            echo "</th>
\t\t\t<td class=\"thin\"></td>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transforms"]) ? $context["transforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transform"]) {
                // line 23
                echo "\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "name")), "html", null, true);
                echo "\">
\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 24
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/assets/transforms/" . $this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "handle"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "name")), "html", null, true);
                echo "</a></th>
                <td data-title=\"";
                // line 25
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t<td data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, \Craft\Craft::t("Mode"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 27
                if ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode")) {
                    // line 28
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transformModes"]) ? $context["transformModes"] : null), $this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode"), array(), "array"), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t</td>
\t\t\t\t<td data-title=\"";
                // line 31
                echo twig_escape_filter($this->env, \Craft\Craft::t("Dimensions"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "width")) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "width")) : (\Craft\Craft::t("Auto"))), "html", null, true);
                echo " &times; ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "height")) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "height")) : (\Craft\Craft::t("Auto"))), "html", null, true);
                echo "</td>
\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t</tbody>
\t</table>
";
        }
        // line 38
        echo "
<div class=\"buttons\">
\t<a class=\"btn submit add icon\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/assets/transforms/new"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Transform"), "html", null, true);
        echo "</a>
</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 44
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#transforms',
\t\tnoObjectsSelector: '#notransforms',
\t\tsortable: false,
\t\tdeleteAction: 'assetTransforms/deleteTransform'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/assets/transforms/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 52,  142 => 44,  134 => 40,  130 => 38,  125 => 35,  116 => 32,  108 => 31,  105 => 30,  99 => 28,  97 => 27,  93 => 26,  87 => 25,  79 => 24,  72 => 23,  68 => 22,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 13,  43 => 12,  37 => 9,  30 => 8,  28 => 7,  26 => 4,  24 => 2,);
    }
}
