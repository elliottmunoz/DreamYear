<?php

/* _components/widgets/Updates/body */
class __TwigTemplate_de880f61ee477623f80a3e47892eeeb61f61d4093e9f7f7490faab8484271eb8 extends Twig_Template
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
        if ((isset($context["total"]) ? $context["total"] : null)) {
            // line 2
            echo "\t<p class=\"centeralign\">
\t\t";
            // line 3
            if (((isset($context["total"]) ? $context["total"] : null) == 1)) {
                // line 4
                echo "\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("One update available!"), "html", null, true);
                echo "
\t\t";
            } else {
                // line 6
                echo "\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("{total} updates available!", array("total" => (isset($context["total"]) ? $context["total"] : null))), "html", null, true);
                echo "
\t\t";
            }
            // line 8
            echo "\t\t<a class=\"go\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Go to Updates"), "html", null, true);
            echo "</a>
\t</p>
";
        } else {
            // line 11
            echo "\t<p class=\"centeralign\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Congrats! You’re up-to-date."), "html", null, true);
            echo "</p>
\t<p class=\"centeralign\"><a class=\"btn\" data-icon=\"refresh\">";
            // line 12
            echo twig_escape_filter($this->env, \Craft\Craft::t("Check again"), "html", null, true);
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/Updates/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  37 => 5,  80 => 48,  71 => 43,  65 => 39,  63 => 36,  58 => 34,  47 => 11,  25 => 11,  78 => 47,  68 => 19,  44 => 10,  31 => 5,  22 => 2,  52 => 12,  49 => 15,  45 => 14,  41 => 16,  36 => 8,  34 => 7,  27 => 3,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 26,  39 => 13,  35 => 7,  33 => 4,  23 => 9,  21 => 2,  19 => 1,  91 => 28,  85 => 27,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 18,  53 => 16,  50 => 12,  46 => 17,  42 => 9,  40 => 12,  32 => 6,  30 => 6,  28 => 6,  26 => 4,  24 => 3,);
    }
}
