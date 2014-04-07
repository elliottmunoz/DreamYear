<?php

/* settings/email */
class __TwigTemplate_ee7c7897a9de52f9bf635eed5e878e12919e08e5c0331ddf7876c8f574912f49 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Rebrand"), "method")) ? ("settings/email/_layout") : ("_layouts/cp")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 7
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Rebrand"), "method")) {
            // line 8
            $context["selectedTab"] = "settings";
        } else {
            // line 10
            $context["title"] = \Craft\Craft::t("Email Settings");
        }
        // line 13
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 14
        \Craft\craft()->templates->includeJsResource("js/email_settings.js");
        // line 15
        \Craft\craft()->templates->includeTranslations(
        	"Email sent successfully! Check your inbox.",
        	"An unknown error occurred."
        );
        // line 21
        if ((!array_key_exists("settings", $context))) {
            // line 22
            $context["settings"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "systemSettings"), "email");
            // line 23
            $context["freshSettings"] = true;
        } else {
            // line 25
            $context["freshSettings"] = false;
        }
        // line 29
        ob_start();
        // line 30
        echo "\t<form id=\"settings-form\" method=\"post\" action=\"\" class=\"centered\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"systemSettings/saveEmailSettings\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">

\t\t";
        // line 34
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("System Email Address"), "instructions" => \Craft\Craft::t("The email address Craft will use when sending email."), "id" => "emailAddress", "name" => "emailAddress", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "emailAddress", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "emailAddress")) : (null)), "autofocus" => true, "required" => true, "errors" => (((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "emailAddress"), "method")))));
        // line 44
        echo "

\t\t";
        // line 46
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Sender Name"), "instructions" => \Craft\Craft::t("The “From” name Craft will use when sending email."), "id" => "senderName", "name" => "senderName", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "senderName", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "senderName")) : (null)), "required" => true, "errors" => (((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "senderName"), "method")))));
        // line 54
        echo "

\t\t";
        // line 56
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Rebrand"), "method")) {
            // line 57
            echo "\t\t\t";
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("HTML Email Template"), "instructions" => \Craft\Craft::t("The template Craft will use for HTML emails"), "id" => "template", "name" => "template", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "template", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "template")) : (null)), "errors" => (((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "template"), "method")))));
            // line 64
            echo "
\t\t";
        }
        // line 66
        echo "
\t\t<hr>

\t\t";
        // line 69
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Protocol"), "instructions" => \Craft\Craft::t("The protocol Craft will use to send email."), "id" => "protocol", "name" => "protocol", "options" => array("php" => \Craft\Craft::t("PHP Mail"), "sendmail" => \Craft\Craft::t("Sendmail"), "smtp" => \Craft\Craft::t("SMTP"), "pop" => \Craft\Craft::t("POP"), "gmail" => \Craft\Craft::t("Gmail")), "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol")) : (null))));
        // line 76
        echo "

\t\t<div id=\"hidden-fields\" class=\"hidden\">
\t\t\t";
        // line 79
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "username", "name" => "username", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "username", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "username")) : (null)), "errors" => ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "username", array(), "any", true, true) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol") != "Smtp"))) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "username"), "method")))) : (null))));
        // line 85
        echo "

\t\t\t";
        // line 87
        echo $context["forms"]->getpasswordField(array("label" => \Craft\Craft::t("Password"), "id" => "password", "name" => "password", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "password", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "password")) : (null)), "errors" => ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol", array(), "any", true, true) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol") != "Smtp"))) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "password"), "method")))) : (null))));
        // line 93
        echo "

\t\t\t";
        // line 95
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Port"), "id" => "port", "name" => "port", "value" => ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "port", array(), "any", true, true) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "port"))) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "port")) : (25)), "size" => 4, "errors" => (((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "port"), "method")))));
        // line 102
        echo "

\t\t\t";
        // line 104
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Host Name"), "id" => "host", "name" => "host", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "host", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "host")) : (null)), "errors" => (((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "host"), "method")))));
        // line 110
        echo "

\t\t\t";
        // line 112
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Timeout"), "id" => "timeout", "name" => "timeout", "value" => ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "timeout", array(), "any", true, true) && $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "timeout"))) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "timeout")) : (30)), "size" => 2, "errors" => (((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "timeout"), "method")))));
        // line 119
        echo "

\t\t\t";
        // line 121
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Use SMTP Keep Alive"), "id" => "smtpKeepAlive", "name" => "smtpKeepAlive", "checked" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpKeepAlive", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpKeepAlive")) : (false))));
        // line 126
        echo "

\t\t\t";
        // line 128
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Use SMTP authentication"), "id" => "smtpAuth", "name" => "smtpAuth", "checked" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpAuth", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpAuth")) : (false)), "toggle" => "smtpAuthCredentials-field"));
        // line 134
        echo "

\t\t\t<div id=\"smtpAuthCredentials-field\" class=\"nested-fields";
        // line 136
        if (((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpAuth", array(), "any", true, true)) || (!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpAuth")))) {
            echo " hidden";
        }
        echo "\">
\t\t\t\t";
        // line 137
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "smtp-username", "name" => "smtpUsername", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "username", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "username")) : (null)), "errors" => ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol", array(), "any", true, true) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol") == "Smtp"))) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "username"), "method")))) : (null))));
        // line 143
        echo "

\t\t\t\t";
        // line 145
        echo $context["forms"]->getpasswordField(array("label" => \Craft\Craft::t("Password"), "id" => "smtpPassword", "name" => "smtpPassword", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "password", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "password")) : (null)), "errors" => ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol", array(), "any", true, true) && ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "protocol") == "Smtp"))) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "password"), "method")))) : (null))));
        // line 151
        echo "
\t\t\t</div>

\t\t\t";
        // line 154
        echo $context["forms"]->getselectField(array("label" => "SMTP Secure Transport Type", "id" => "smtpSecureTransportType", "name" => "smtpSecureTransportType", "options" => array("none" => \Craft\Craft::t("None"), "ssl" => \Craft\Craft::t("SSL"), "tls" => \Craft\Craft::t("TLS")), "default" => "none", "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpSecureTransportType", array(), "any", true, true)) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpSecureTransportType")) : (null))));
        // line 161
        echo "
\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t\t<div id=\"test\" class=\"btn\">";
        // line 168
        echo twig_escape_filter($this->env, \Craft\Craft::t("Test"), "html", null, true);
        echo "</div>
\t\t\t<div id=\"test-spinner\" class=\"spinner hidden\"></div>
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/email";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 168,  155 => 167,  147 => 161,  145 => 154,  140 => 151,  138 => 145,  134 => 143,  132 => 137,  126 => 136,  122 => 134,  120 => 128,  116 => 126,  114 => 121,  110 => 119,  108 => 112,  104 => 110,  102 => 104,  98 => 102,  96 => 95,  92 => 93,  90 => 87,  86 => 85,  84 => 79,  79 => 76,  77 => 69,  72 => 66,  68 => 64,  65 => 57,  63 => 56,  59 => 54,  57 => 46,  53 => 44,  51 => 34,  45 => 30,  43 => 29,  40 => 25,  37 => 23,  35 => 22,  33 => 21,  28 => 15,  26 => 14,  24 => 13,  21 => 10,  18 => 8,  16 => 7,  14 => 3,);
    }
}
