<?php

/* _includes/forms/editableTable */
class __TwigTemplate_acf69d26317a94982f3f9508835917e645fa85d8981ba82ee1fc750962702123 extends Twig_Template
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
        $context["cols"] = ((array_key_exists("cols", $context)) ? ((isset($context["cols"]) ? $context["cols"] : null)) : (array()));
        // line 2
        $context["rows"] = ((array_key_exists("rows", $context)) ? ((isset($context["rows"]) ? $context["rows"] : null)) : (array()));
        // line 4
        echo "<table id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"shadow-box editable\">
\t<thead>
\t\t<tr>
\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 8
            echo "\t\t\t\t<th scope=\"col\" class=\"header\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "heading")) ? ($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "heading")) : (" ")), "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t<th class=\"header\" colspan=\"2\"></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
            // line 15
            echo "\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["rowId"]) ? $context["rowId"] : null), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cols"]) ? $context["cols"] : null));
            foreach ($context['_seq'] as $context["colId"] => $context["col"]) {
                // line 17
                echo "\t\t\t\t\t";
                $context["cellName"] = ((((((isset($context["name"]) ? $context["name"] : null) . "[") . (isset($context["rowId"]) ? $context["rowId"] : null)) . "][") . (isset($context["colId"]) ? $context["colId"] : null)) . "]");
                // line 18
                echo "\t\t\t\t\t";
                $context["value"] = (($this->getAttribute((isset($context["row"]) ? $context["row"] : null), (isset($context["colId"]) ? $context["colId"] : null), array(), "array", true, true)) ? ($this->getAttribute((isset($context["row"]) ? $context["row"] : null), (isset($context["colId"]) ? $context["colId"] : null), array(), "array")) : (null));
                // line 19
                echo "\t\t\t\t\t";
                $context["textual"] = twig_in_filter($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "type"), array(0 => "singleline", 1 => "multiline", 2 => "number"));
                // line 20
                echo "\t\t\t\t\t<td class=\"";
                if ((isset($context["textual"]) ? $context["textual"] : null)) {
                    echo "textual";
                }
                echo " ";
                if ($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : null), "class"), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "width", array(), "any", true, true)) {
                    echo " width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["col"]) ? $context["col"] : null), "width"), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 21
                if (($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "type") == "select")) {
                    // line 22
                    $this->env->loadTemplate("_includes/forms/select")->display(array("class" => "small", "name" => (isset($context["cellName"]) ? $context["cellName"] : null), "options" => $this->getAttribute((isset($context["col"]) ? $context["col"] : null), "options"), "value" => (isset($context["value"]) ? $context["value"] : null)));
                } elseif (($this->getAttribute((isset($context["col"]) ? $context["col"] : null), "type") == "checkbox")) {
                    // line 29
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["cellName"]) ? $context["cellName"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                    // line 30
                    echo twig_escape_filter($this->env, (isset($context["cellName"]) ? $context["cellName"] : null), "html", null, true);
                    echo "\" value=\"1\"";
                    if ((isset($context["value"]) ? $context["value"] : null)) {
                        echo " checked";
                    }
                    echo ">";
                } else {
                    // line 32
                    echo "<textarea name=\"";
                    echo twig_escape_filter($this->env, (isset($context["cellName"]) ? $context["cellName"] : null), "html", null, true);
                    echo "\" rows=\"1\">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "</textarea>";
                }
                // line 34
                echo "</td>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['colId'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t<td class=\"thin action\"><a class=\"move icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\"></a></td>
\t\t\t\t<td class=\"thin action\"><a class=\"delete icon\" title=\"";
            // line 37
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "\"></a></td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t</tbody>
</table>
<div class=\"btn add icon\">";
        // line 42
        echo twig_escape_filter($this->env, ((array_key_exists("addRowLabel", $context)) ? ((isset($context["addRowLabel"]) ? $context["addRowLabel"] : null)) : (\Craft\Craft::t("Add a row"))), "html", null, true);
        echo "</div>

";
        // line 44
        if (((!array_key_exists("initJs", $context)) || (isset($context["initJs"]) ? $context["initJs"] : null))) {
            // line 45
            echo "\t";
            ob_start();
            // line 46
            echo "\t\tnew Craft.EditableTable(
\t\t\t\"";
            // line 47
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
            echo "\",
\t\t\t\"";
            // line 48
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
            echo "\",
\t\t\t";
            // line 49
            echo twig_jsonencode_filter((isset($context["cols"]) ? $context["cols"] : null));
            echo ");
\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 51
            echo "
\t";
            // line 52
            \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/editableTable";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 51,  154 => 48,  150 => 47,  144 => 45,  142 => 44,  137 => 42,  119 => 36,  97 => 30,  92 => 29,  87 => 21,  71 => 20,  58 => 16,  49 => 14,  43 => 10,  34 => 8,  23 => 4,  252 => 62,  241 => 60,  237 => 59,  231 => 56,  227 => 54,  204 => 52,  187 => 51,  182 => 48,  166 => 52,  164 => 40,  158 => 49,  152 => 34,  147 => 46,  136 => 29,  132 => 28,  121 => 24,  113 => 23,  109 => 22,  105 => 32,  99 => 18,  95 => 17,  84 => 15,  76 => 14,  68 => 19,  59 => 10,  56 => 9,  53 => 15,  50 => 7,  32 => 6,  30 => 7,  25 => 3,  133 => 40,  130 => 34,  124 => 37,  120 => 30,  116 => 29,  112 => 34,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  91 => 23,  89 => 22,  83 => 19,  79 => 17,  65 => 18,  62 => 17,  45 => 14,  39 => 12,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
