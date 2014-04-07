<?php

/* _components/widgets/Feed/body */
class __TwigTemplate_906f67762bba2602c3a88b19081d1b461d89131ddf818da8a70301329fd7129a extends Twig_Template
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
        return array (  37 => 5,  80 => 48,  71 => 43,  65 => 39,  63 => 36,  58 => 34,  47 => 24,  68 => 19,  44 => 10,  31 => 5,  22 => 2,  52 => 15,  49 => 15,  45 => 14,  41 => 16,  36 => 8,  34 => 7,  100 => 27,  84 => 19,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 26,  39 => 13,  35 => 7,  33 => 4,  23 => 9,  21 => 2,  19 => 1,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 29,  101 => 67,  99 => 66,  96 => 26,  90 => 25,  87 => 24,  83 => 58,  81 => 18,  78 => 47,  27 => 3,  25 => 11,  91 => 28,  85 => 61,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 18,  53 => 16,  50 => 12,  46 => 17,  42 => 9,  40 => 12,  32 => 6,  30 => 6,  28 => 6,  26 => 3,  24 => 3,);
    }
}
