<?php

/* users/_edit/account */
class __TwigTemplate_1bd8389cef64ca08307439cc17424623d14d38d3baede0f94d7d88a05f52493f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) ? ("users/_edit/layout") : ("_layouts/cp")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
            // line 4
            $context["selectedTab"] = "account";
        } else {
            // line 6
            $context["title"] = \Craft\Craft::t("My Account");
        }
        // line 9
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 11
        \Craft\craft()->templates->includeCssResource("css/account.css");
        // line 12
        \Craft\craft()->templates->includeJsResource("js/account.js");
        // line 14
        if (((!array_key_exists("account", $context)) && ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "segment", array(0 => 1), "method") == "myaccount"))) {
            // line 15
            $context["account"] = (isset($context["currentUser"]) ? $context["currentUser"] : null);
        }
        // line 19
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
            // line 20
            if (((!array_key_exists("account", $context)) && array_key_exists("userId", $context))) {
                // line 21
                $context["account"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "users"), "status", array(0 => null), "method"), "id", array(0 => (isset($context["userId"]) ? $context["userId"] : null)), "method"), "first");
                // line 22
                if ((!(isset($context["account"]) ? $context["account"] : null))) {
                    throw new \Craft\HttpException(404);
                }
            }
        }
        // line 27
        $context["isNewAccount"] = ((!array_key_exists("account", $context)) || (!$this->getAttribute((isset($context["account"]) ? $context["account"] : null), "id")));
        // line 30
        ob_start();
        // line 31
        echo "\t<form id=\"userform\" method=\"post\" action=\"\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"users/saveUser\">
\t\t";
        // line 33
        if ((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null)) {
            // line 34
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"users/{id}\">
\t\t";
        } else {
            // line 36
            echo "\t\t\t<input type=\"hidden\" name=\"userId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "id"), "html", null, true);
            echo "\">
\t\t";
        }
        // line 38
        echo "
\t\t";
        // line 39
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Username"), "id" => "username", "name" => "username", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "username")) : (null)), "autofocus" => true, "required" => ((((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null) || ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") || $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent")))) ? (true) : (false)), "disabled" => ((((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null) || ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") || $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent")))) ? (false) : (true)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "username"), "method")) : (null))));
        // line 49
        echo "

\t\t<div class=\"field\">
\t\t\t<div class=\"grid\">
\t\t\t\t<div class=\"col col50\"><div class=\"col-inner\">
\t\t\t\t\t";
        // line 54
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("First Name"), "id" => "firstName", "name" => "firstName", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "firstName")) : (null)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "firstName"), "method")) : (null))));
        // line 60
        echo "
\t\t\t\t</div></div>
\t\t\t\t<div class=\"col col50\"><div class=\"col-inner\">
\t\t\t\t\t";
        // line 63
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Last Name"), "id" => "lastName", "name" => "lastName", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastName")) : (null)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "lastName"), "method")) : (null))));
        // line 69
        echo "
\t\t\t\t</div></div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 74
        if ((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null)) {
            // line 75
            echo "
\t\t\t";
            // line 76
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Email"), "id" => "email", "name" => "email", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "email")) : (null)), "required" => true, "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "email"), "method")) : (null))));
            // line 83
            echo "

\t\t";
        } elseif (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin"))) {
            // line 86
            echo "
\t\t\t";
            // line 87
            ob_start();
            // line 88
            echo "\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 91
            echo $context["forms"]->gettext(array("id" => "email", "name" => "email", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "email")) : (null)), "required" => true, "disabled" => true));
            // line 97
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t<div id=\"emailLockBtn\" class=\"btn lock\" data-icon=\"secure\" title=\"";
            // line 100
            echo twig_escape_filter($this->env, \Craft\Craft::t("Click to change the email address."), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t";
            // line 105
            echo $context["forms"]->geterrorList($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "email"), "method"));
            echo "
\t\t\t";
            $context["emailInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 107
            echo "
\t\t\t";
            // line 108
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Email"), "id" => "email"), (isset($context["emailInput"]) ? $context["emailInput"] : null));
            // line 111
            echo "

\t\t\t";
            // line 113
            ob_start();
            // line 114
            echo "\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 117
            echo $context["forms"]->getpassword(array("id" => "newPassword", "name" => "newPassword", "disabled" => true));
            // line 121
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t<div id=\"newPasswordLockBtn\" class=\"btn lock\" data-icon=\"secure\" title=\"";
            // line 124
            echo twig_escape_filter($this->env, \Craft\Craft::t("Click to set a new password."), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t";
            // line 129
            echo $context["forms"]->geterrorList($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "newPassword"), "method"));
            echo "
\t\t\t";
            $context["newPasswordInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 131
            echo "
\t\t\t";
            // line 132
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("New Password"), "id" => "newPassword"), (isset($context["newPasswordInput"]) ? $context["newPasswordInput"] : null));
            // line 135
            echo "

\t\t\t";
            // line 137
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")) {
                // line 138
                echo "\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Require a password reset on next login"), "name" => "passwordResetRequired", "checked" => $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "passwordResetRequired")));
                // line 142
                echo "
\t\t\t";
            }
            // line 144
            echo "
\t\t";
        }
        // line 146
        echo "
\t\t";
        // line 147
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Localize"), "method")) {
            // line 148
            echo "\t\t\t";
            ob_start();
            // line 149
            echo "\t\t\t\t<div class=\"select\">
\t\t\t\t\t<select id=\"preferredLocale\" name=\"preferredLocale\">
\t\t\t\t\t\t";
            // line 151
            $context["allSiteLocales"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getSiteLocales");
            // line 152
            echo "\t\t\t\t\t\t";
            $context["userLocale"] = (((array_key_exists("account", $context) && $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "preferredLocale"))) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "preferredLocale")) : ((((array_key_exists("account", $context) && $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent"))) ? ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale")) : ($this->getAttribute((isset($context["allSiteLocales"]) ? $context["allSiteLocales"] : null), 0, array(), "array")))));
            // line 153
            echo "
\t\t\t\t\t\t";
            // line 154
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allSiteLocales"]) ? $context["allSiteLocales"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 155
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id") == (isset($context["userLocale"]) ? $context["userLocale"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "nativeName"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t";
            $context["localeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 160
            echo "
\t\t\t";
            // line 161
            echo $context["forms"]->getfield(array("id" => "preferredLocale", "label" => \Craft\Craft::t("Preferred Locale")), (isset($context["localeInput"]) ? $context["localeInput"] : null));
            // line 164
            echo "
\t\t";
        }
        // line 166
        echo "
        ";
        // line 167
        if ((array_key_exists("account", $context) && $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent"))) {
            // line 168
            echo "            <input type=\"submit\" class=\"btn submit\" value=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
        ";
        } else {
            // line 170
            echo "            <div class=\"btngroup\">
                <input type=\"submit\" class=\"btn submit\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
                <div class=\"btn submit menubtn\"></div>
                <div class=\"menu\">
                    <ul>
                        <li><a class=\"formsubmit\" data-redirect=\"users/{id}\">";
            // line 175
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
            echo "</a></li>
                        <li><a class=\"formsubmit\" data-redirect=\"users/new\">";
            // line 176
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
            echo "</a></li>
                    </ul>
                </div>
            </div>
        ";
        }
        // line 181
        echo "
        ";
        // line 182
        if ((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null)) {
            // line 183
            echo "        \t<p class=\"field\">";
            echo \Craft\Craft::t("Note: new users must validate their account via email. Please ensure your <a href=\"{url}\">email settings</a> are valid.", array("url" => \Craft\UrlHelper::getUrl("settings/email")));
            echo "</p>
        ";
        }
        // line 185
        echo "

    </form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "users/_edit/account";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 185,  284 => 183,  282 => 182,  279 => 181,  271 => 176,  267 => 175,  260 => 171,  257 => 170,  251 => 168,  249 => 167,  246 => 166,  242 => 164,  240 => 161,  237 => 160,  232 => 157,  217 => 155,  213 => 154,  210 => 153,  207 => 152,  205 => 151,  201 => 149,  198 => 148,  196 => 147,  193 => 146,  189 => 144,  185 => 142,  182 => 138,  180 => 137,  176 => 135,  174 => 132,  171 => 131,  166 => 129,  158 => 124,  153 => 121,  151 => 117,  146 => 114,  144 => 113,  140 => 111,  138 => 108,  135 => 107,  130 => 105,  122 => 100,  117 => 97,  115 => 91,  110 => 88,  108 => 87,  105 => 86,  100 => 83,  98 => 76,  95 => 75,  93 => 74,  86 => 69,  84 => 63,  79 => 60,  77 => 54,  70 => 49,  68 => 39,  65 => 38,  59 => 36,  55 => 34,  53 => 33,  49 => 31,  47 => 30,  45 => 27,  39 => 22,  37 => 21,  35 => 20,  33 => 19,  30 => 15,  28 => 14,  26 => 12,  24 => 11,  22 => 9,  19 => 6,  16 => 4,  14 => 3,);
    }
}
