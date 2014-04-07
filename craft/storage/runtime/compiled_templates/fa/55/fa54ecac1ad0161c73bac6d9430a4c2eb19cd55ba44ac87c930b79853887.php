<?php

/* _components/widgets/GetHelp/body */
class __TwigTemplate_fa55fa54ecac1ad0161c73bac6d9430a4c2eb19cd55ba44ac87c930b79853887 extends Twig_Template
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
<form method=\"post\" action=\"\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
\t";
        // line 4
        $context["fromEmail"] = ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "fromEmail")) : ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "email")));
        // line 5
        echo "\t";
        if (((isset($context["fromEmail"]) ? $context["fromEmail"] : null) == "support@pixelandtonic.com")) {
            // line 6
            echo "\t\t";
            $context["fromEmail"] = "";
            // line 7
            echo "\t";
        }
        // line 8
        echo "
\t";
        // line 9
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("From Email"), "name" => "fromEmail", "value" => (isset($context["fromEmail"]) ? $context["fromEmail"] : null), "class" => "fromEmail", "errors" => ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "getErrors", array(0 => "fromEmail"), "method")) : ("")), "required" => true));
        // line 16
        echo "

\t";
        // line 18
        echo $context["forms"]->gettextarea(array("label" => \Craft\Craft::t("Message"), "name" => "message", "class" => "message nicetext", "rows" => 10, "value" => (isset($context["message"]) ? $context["message"] : null)));
        // line 24
        echo "

\t";
        // line 26
        echo $context["forms"]->getcheckbox(array("name" => "attachDebugFiles", "checked" => true, "class" => "attachDebugFiles", "label" => \Craft\Craft::t("Include error logs and database backup?")));
        // line 31
        echo "

\t<p>
\t\t";
        // line 34
        echo twig_escape_filter($this->env, \Craft\Craft::t("Attach an additional file?"), "html", null, true);
        echo ":

\t\t";
        // line 36
        echo $context["forms"]->getfile(array("name" => "attachAdditionalFile", "id" => "attachAdditionalFile"));
        // line 39
        echo "
\t</p>

\t<div class=\"buttons last\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, \Craft\Craft::t("Send"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t";
        // line 47
        $context["email"] = ('' === $tmp = "<a href=\"mailto:support@buildwithcraft.com\">support@buildwithcraft.com</a>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "\t<p class=\"error hidden\">";
        echo \Craft\Craft::t("Couldn’t send your message. Please email it to {email} instead.", array("email" => (isset($context["email"]) ? $context["email"] : null)));
        echo "</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/GetHelp/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 48,  71 => 43,  65 => 39,  63 => 36,  58 => 34,  47 => 24,  25 => 4,  78 => 47,  68 => 19,  44 => 10,  31 => 5,  22 => 2,  52 => 15,  49 => 14,  45 => 18,  41 => 16,  36 => 8,  34 => 7,  27 => 5,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 26,  39 => 9,  35 => 7,  33 => 7,  23 => 3,  21 => 2,  19 => 1,  91 => 28,  85 => 27,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 18,  53 => 31,  50 => 12,  46 => 17,  42 => 9,  40 => 12,  32 => 6,  30 => 6,  28 => 6,  26 => 3,  24 => 3,);
    }
}
