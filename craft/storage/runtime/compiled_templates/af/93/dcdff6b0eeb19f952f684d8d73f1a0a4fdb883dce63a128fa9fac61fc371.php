<?php

/* _special/install/account */
class __TwigTemplate_af93dcdff6b0eeb19f952f684d8d73f1a0a4fdb883dce63a128fa9fac61fc371 extends Twig_Template
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

<div id=\"account\" class=\"modal\">
\t<h1>";
        // line 5
        echo twig_escape_filter($this->env, \Craft\Craft::t("Create your account"), "html", null, true);
        echo "</h1>

\t<form id=\"accountform\" accept-charset=\"UTF-8\">
\t\t";
        // line 8
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "username", "maxlength" => 255));
        echo "
\t\t";
        // line 9
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Email"), "id" => "email", "maxlength" => 255));
        echo "
\t\t";
        // line 10
        echo $context["forms"]->getpasswordField(array("label" => \Craft\Craft::t("Password"), "id" => "password"));
        echo "

\t\t<div class=\"buttons\">
\t\t\t<div id=\"accountsubmit\" class=\"btn big submit\">";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("Next"), "html", null, true);
        echo "
\t\t\t\t<input type=\"submit\" tabindex=\"-1\">
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 19
        $this->env->loadTemplate("_special/install/dots")->display(array_merge($context, array("dot" => 1)));
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/account";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  55 => 19,  46 => 13,  40 => 10,  36 => 9,  32 => 8,  21 => 2,  19 => 1,  60 => 18,  51 => 19,  22 => 3,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  59 => 20,  50 => 15,  39 => 12,  33 => 8,  31 => 7,  29 => 8,  27 => 5,  25 => 3,  52 => 19,  49 => 18,  47 => 14,  41 => 14,  37 => 9,  35 => 9,  30 => 6,  28 => 4,  26 => 5,  24 => 2,);
    }
}
