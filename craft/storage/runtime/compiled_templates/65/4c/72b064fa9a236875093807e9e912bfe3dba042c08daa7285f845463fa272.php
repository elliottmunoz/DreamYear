<?php

/* _components/widgets/GetHelp/body */
class __TwigTemplate_654c72b064fa9a236875093807e9e912bfe3dba042c08daa7285f845463fa272 extends Twig_Template
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
        return array (  80 => 48,  71 => 43,  65 => 39,  63 => 36,  58 => 34,  47 => 24,  68 => 19,  44 => 10,  31 => 5,  22 => 2,  52 => 15,  49 => 14,  45 => 18,  41 => 16,  36 => 8,  34 => 7,  100 => 27,  84 => 19,  66 => 26,  60 => 25,  57 => 24,  54 => 22,  51 => 26,  39 => 9,  35 => 7,  33 => 7,  23 => 3,  21 => 2,  19 => 1,  548 => 203,  542 => 201,  539 => 200,  536 => 199,  522 => 217,  514 => 215,  512 => 214,  506 => 213,  500 => 212,  494 => 208,  486 => 206,  484 => 205,  481 => 204,  479 => 199,  475 => 197,  469 => 194,  466 => 193,  464 => 192,  454 => 191,  449 => 188,  444 => 185,  430 => 184,  412 => 182,  409 => 180,  406 => 179,  404 => 178,  401 => 176,  398 => 175,  381 => 174,  377 => 172,  375 => 171,  370 => 168,  364 => 165,  361 => 164,  359 => 163,  356 => 162,  350 => 160,  348 => 159,  345 => 158,  340 => 155,  329 => 153,  325 => 152,  321 => 150,  319 => 149,  312 => 144,  301 => 142,  297 => 141,  287 => 133,  279 => 130,  274 => 128,  272 => 127,  270 => 126,  263 => 125,  258 => 124,  254 => 123,  243 => 119,  232 => 113,  226 => 112,  220 => 109,  216 => 107,  208 => 104,  205 => 103,  203 => 102,  200 => 101,  197 => 100,  194 => 99,  191 => 98,  188 => 97,  181 => 93,  175 => 92,  168 => 91,  165 => 90,  162 => 89,  159 => 88,  156 => 87,  153 => 86,  150 => 85,  147 => 84,  144 => 83,  142 => 82,  136 => 78,  133 => 77,  130 => 76,  127 => 75,  123 => 73,  114 => 71,  110 => 70,  107 => 69,  104 => 29,  101 => 67,  99 => 66,  96 => 26,  90 => 25,  87 => 24,  83 => 58,  81 => 18,  78 => 47,  27 => 5,  25 => 4,  91 => 28,  85 => 61,  82 => 26,  76 => 17,  72 => 21,  62 => 20,  59 => 15,  56 => 18,  53 => 31,  50 => 12,  46 => 17,  42 => 9,  40 => 12,  32 => 6,  30 => 6,  28 => 6,  26 => 3,  24 => 3,);
    }
}
