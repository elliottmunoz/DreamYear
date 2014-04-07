<?php

/* _includes/forms/editableTable */
class __TwigTemplate_affa721cb372764311d6fd38926663181f761fdd882ff9ed9ee4967ebe64ffd0 extends Twig_Template
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
        return array (  166 => 52,  150 => 47,  147 => 46,  144 => 45,  142 => 44,  119 => 36,  112 => 34,  89 => 22,  62 => 17,  53 => 15,  43 => 10,  59 => 38,  44 => 24,  39 => 21,  36 => 14,  29 => 5,  123 => 34,  120 => 33,  114 => 32,  96 => 29,  93 => 28,  84 => 25,  81 => 24,  78 => 23,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  56 => 30,  52 => 16,  48 => 15,  27 => 10,  25 => 8,  23 => 4,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 120,  149 => 119,  145 => 117,  143 => 108,  139 => 106,  137 => 42,  133 => 40,  131 => 84,  127 => 36,  124 => 37,  118 => 73,  115 => 72,  110 => 71,  108 => 70,  105 => 32,  99 => 30,  97 => 30,  92 => 29,  90 => 27,  87 => 21,  85 => 57,  82 => 54,  79 => 52,  77 => 51,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 18,  63 => 35,  60 => 31,  58 => 16,  54 => 29,  51 => 28,  49 => 14,  47 => 26,  45 => 20,  42 => 14,  40 => 16,  38 => 13,  34 => 8,  32 => 12,  30 => 7,  28 => 7,  26 => 4,  24 => 3,);
    }
}
