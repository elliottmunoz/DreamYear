<?php

/* _special/install/site */
class __TwigTemplate_53eac1b0f94aebd72613da55685e7e3894e99ed66d7558fabcf7401b07b2625a extends Twig_Template
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "

<div id=\"site\" class=\"modal\">
\t<h1>";
        // line 5
        echo twig_escape_filter($this->env, \Craft\Craft::t("Setup your site"), "html", null, true);
        echo "</h1>

\t<form id=\"siteform\" accept-charset=\"UTF-8\">
\t\t";
        // line 8
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site Name"), "id" => "siteName", "value" => (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "maxlength" => 255));
        echo "
\t\t";
        // line 9
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site URL"), "id" => "siteUrl", "value" => (isset($context["siteUrl"]) ? $context["siteUrl"] : $this->getContext($context, "siteUrl")), "maxlength" => 255));
        echo "

\t\t";
        // line 11
        ob_start();
        // line 12
        echo "\t\t\t<div class=\"select\">
\t\t\t\t<select id=\"locale\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "i18n"), "getAllLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 15
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
            echo "\"";
            if (($this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id") == $this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "locale"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "id"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "name"), "html", null, true);
            echo ")</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
        $context["localeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "\t\t";
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Locale"), "id" => "locale"), (isset($context["localeInput"]) ? $context["localeInput"] : $this->getContext($context, "localeInput")));
        echo "

\t\t<div class=\"buttons\">
\t\t\t<div id=\"sitesubmit\" class=\"btn big submit\">";
        // line 23
        echo twig_escape_filter($this->env, \Craft\Craft::t("Finish up"), "html", null, true);
        echo "
\t\t\t\t<input type=\"submit\" tabindex=\"-1\">
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 29
        $this->env->loadTemplate("_special/install/dots")->display(array_merge($context, array("dot" => 2)));
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/site";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  34 => 4,  92 => 23,  90 => 22,  78 => 19,  74 => 17,  68 => 17,  65 => 14,  42 => 8,  86 => 24,  45 => 9,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 30,  87 => 87,  83 => 82,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  43 => 12,  23 => 3,  57 => 18,  55 => 47,  46 => 13,  40 => 7,  36 => 9,  32 => 8,  21 => 2,  19 => 1,  60 => 18,  51 => 15,  22 => 2,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 29,  85 => 20,  81 => 30,  77 => 29,  73 => 20,  69 => 27,  59 => 11,  50 => 15,  39 => 15,  33 => 14,  31 => 17,  29 => 8,  27 => 6,  25 => 4,  52 => 19,  49 => 18,  47 => 14,  41 => 11,  37 => 6,  35 => 22,  30 => 6,  28 => 3,  26 => 5,  24 => 3,);
    }
}
