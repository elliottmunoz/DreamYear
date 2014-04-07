<?php

/* _components/widgets/Feed/body */
class __TwigTemplate_2f2dfac9b4bfb0bf68b2fe341b700d9c04df2b2949f38490229da74a44793051 extends Twig_Template
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
        echo "<table class=\"data\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limit"]) ? $context["limit"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "\t\t<tr>
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  37 => 5,  80 => 48,  71 => 43,  65 => 39,  63 => 36,  58 => 34,  47 => 11,  25 => 11,  78 => 47,  68 => 19,  44 => 10,  31 => 5,  22 => 2,  52 => 12,  49 => 15,  45 => 14,  41 => 16,  36 => 8,  34 => 7,  27 => 3,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 26,  39 => 13,  35 => 7,  33 => 4,  23 => 9,  21 => 2,  19 => 1,  91 => 28,  85 => 27,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 18,  53 => 16,  50 => 12,  46 => 17,  42 => 9,  40 => 12,  32 => 6,  30 => 6,  28 => 6,  26 => 3,  24 => 3,);
    }
}
