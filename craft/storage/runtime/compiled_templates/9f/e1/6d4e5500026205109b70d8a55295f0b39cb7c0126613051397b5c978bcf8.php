<?php

/* users/_edit */
class __TwigTemplate_9fe16d4e5500026205109b70d8a55295f0b39cb7c0126613051397b5c978bcf8 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
            // line 4
            $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Users"), "url" => \Craft\UrlHelper::getUrl("users")));
        }
        // line 9
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 11
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
            // line 12
            \Craft\craft()->templates->includeTranslations(
            	"Are you sure you want to delete this photo?"
            );
            // line 16
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js");
            // line 17
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js");
            // line 18
            \Craft\craft()->templates->includeJsResource("lib/imgareaselect/jquery.imgareaselect.pack.js");
            // line 19
            \Craft\craft()->templates->includeJsResource("js/profile.js");
            // line 20
            \Craft\craft()->templates->includeCssResource("lib/imgareaselect/imgareaselect-animated.css");
            // line 21
            \Craft\craft()->templates->includeCssResource("css/profile.css");
            // line 24
            ob_start();
            // line 25
            echo "\t\t";
            $this->env->loadTemplate("users/_userphoto")->display(array("account" => (isset($context["account"]) ? $context["account"] : null)));
            // line 26
            echo "\t";
            $context["photoInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 29
        ob_start();
        // line 30
        echo "
\t";
        // line 31
        if (((!$this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "registerUsers"), "method")) || ((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) != (isset($context["CraftPro"]) ? $context["CraftPro"] : null)))) {
            // line 32
            echo "\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
\t";
        } else {
            // line 34
            echo "\t\t<div class=\"btngroup submit\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"users/{id}\">";
            // line 39
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"users/new\">";
            // line 40
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 45
        echo "
";
        $context["saveUserButtons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        $context["requireEmailVerification"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "systemSettings"), "users"), "requireEmailVerification");
        // line 50
        ob_start();
        // line 51
        echo "\t";
        if ((!(isset($context["isNewAccount"]) ? $context["isNewAccount"] : null))) {
            // line 52
            echo "<input type=\"hidden\" name=\"userId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "id"), "html", null, true);
            echo "\">";
        }
        $context["hiddenInputs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 57
    public function block_main($context, array $blocks = array())
    {
        // line 58
        echo "\t<div class=\"grid\">
\t\t<div class=\"item\" data-position=\"left\">
\t\t\t<form id=\"userform\" class=\"pane\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"users/saveUser\">
\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
        // line 62
        echo ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) ? ("users") : ("dashboard"));
        echo "\">
\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["hiddenInputs"]) ? $context["hiddenInputs"] : null), "html", null, true);
        echo "

\t\t\t\t";
        // line 65
        $this->env->loadTemplate("_includes/tabs")->display($context);
        // line 66
        echo "
\t\t\t\t<div id=\"account\">
\t\t\t\t\t";
        // line 68
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Username"), "id" => "username", "name" => "username", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "username")) : (null)), "autofocus" => true, "required" => ((((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null) || ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") || $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent")))) ? (true) : (false)), "disabled" => ((((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null) || ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") || $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent")))) ? (false) : (true)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "username"), "method")) : (null))));
        // line 78
        echo "

\t\t\t\t\t<div class=\"grid\" data-cols=\"2\" data-mode=\"pct\">
\t\t\t\t\t\t<div class=\"item\" data-colspan=\"1\">
\t\t\t\t\t\t\t";
        // line 82
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("First Name"), "id" => "firstName", "name" => "firstName", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "firstName")) : (null)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "firstName"), "method")) : (null))));
        // line 88
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item\" data-colspan=\"1\">
\t\t\t\t\t\t\t";
        // line 91
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Last Name"), "id" => "lastName", "name" => "lastName", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastName")) : (null)), "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "lastName"), "method")) : (null))));
        // line 97
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 101
        if ((isset($context["isNewAccount"]) ? $context["isNewAccount"] : null)) {
            // line 102
            echo "
\t\t\t\t\t\t";
            // line 103
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Email"), "instructions" => ((((isset($context["requireEmailVerification"]) ? $context["requireEmailVerification"] : null) && (!$this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")))) ? ("A verification email will be sent automatically.") : ("")), "id" => "email", "name" => "email", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "email")) : (null)), "required" => true, "errors" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "email"), "method")) : (null))));
            // line 111
            echo "

\t\t\t\t\t\t";
            // line 113
            if (((isset($context["requireEmailVerification"]) ? $context["requireEmailVerification"] : null) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin"))) {
                // line 114
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Send a verification email?"), "name" => "verificationRequired", "checked" => true));
                // line 118
                echo "
\t\t\t\t\t\t";
            }
            // line 120
            echo "
\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin"))) {
            // line 122
            echo "
\t\t\t\t\t\t";
            // line 123
            ob_start();
            // line 124
            echo "\t\t\t\t\t\t\t<table class=\"fullwidth inputs\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 127
            echo $context["forms"]->gettext(array("id" => "email", "name" => "email", "value" => ((array_key_exists("account", $context)) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "email")) : (null)), "required" => true, "disabled" => true));
            // line 133
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t\t<div id=\"emailLockBtn\" class=\"btn lock\" data-icon=\"secure\" title=\"";
            // line 136
            echo twig_escape_filter($this->env, \Craft\Craft::t("Click to change the email address."), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t";
            // line 141
            echo $context["forms"]->geterrorList($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "email"), "method"));
            echo "
\t\t\t\t\t\t";
            $context["emailInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 143
            echo "
\t\t\t\t\t\t";
            // line 144
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Email"), "instructions" => ((((isset($context["requireEmailVerification"]) ? $context["requireEmailVerification"] : null) && (!$this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")))) ? ("New email addresses must be verified before taking effect.") : ("")), "id" => "email"), (isset($context["emailInput"]) ? $context["emailInput"] : null));
            // line 148
            echo "

\t\t\t\t\t\t";
            // line 150
            ob_start();
            // line 151
            echo "\t\t\t\t\t\t\t<table class=\"fullwidth inputs\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 154
            echo $context["forms"]->getpassword(array("id" => "newPassword", "name" => "newPassword", "disabled" => true));
            // line 158
            echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t\t<div id=\"newPasswordLockBtn\" class=\"btn lock\" data-icon=\"secure\" title=\"";
            // line 161
            echo twig_escape_filter($this->env, \Craft\Craft::t("Click to set a new password."), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t";
            // line 166
            echo $context["forms"]->geterrorList($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getErrors", array(0 => "newPassword"), "method"));
            echo "
\t\t\t\t\t\t";
            $context["newPasswordInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 168
            echo "
\t\t\t\t\t\t";
            // line 169
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("New Password"), "id" => "newPassword"), (isset($context["newPasswordInput"]) ? $context["newPasswordInput"] : null));
            // line 172
            echo "

\t\t\t\t\t\t";
            // line 174
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")) {
                // line 175
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Require a password reset on next login"), "name" => "passwordResetRequired", "checked" => $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "passwordResetRequired")));
                // line 179
                echo "
\t\t\t\t\t\t";
            }
            // line 181
            echo "
\t\t\t\t\t";
        }
        // line 183
        echo "
\t\t\t\t\t";
        // line 184
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            // line 185
            echo "\t\t\t\t\t\t";
            ob_start();
            // line 186
            echo "\t\t\t\t\t\t\t<div class=\"select\">
\t\t\t\t\t\t\t\t<select id=\"preferredLocale\" name=\"preferredLocale\">
\t\t\t\t\t\t\t\t\t";
            // line 188
            $context["allSiteLocales"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getSiteLocales");
            // line 189
            echo "\t\t\t\t\t\t\t\t\t";
            $context["userLocale"] = (((array_key_exists("account", $context) && $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "preferredLocale"))) ? ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "preferredLocale")) : ((((array_key_exists("account", $context) && $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent"))) ? ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale")) : ($this->getAttribute((isset($context["allSiteLocales"]) ? $context["allSiteLocales"] : null), 0, array(), "array")))));
            // line 190
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 191
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["allSiteLocales"]) ? $context["allSiteLocales"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id") == (isset($context["userLocale"]) ? $context["userLocale"] : null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "getName", array(), "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            $context["localeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 197
            echo "
\t\t\t\t\t\t";
            // line 198
            echo $context["forms"]->getfield(array("id" => "preferredLocale", "label" => \Craft\Craft::t("Preferred Locale")), (isset($context["localeInput"]) ? $context["localeInput"] : null));
            // line 201
            echo "
\t\t\t\t\t";
        }
        // line 203
        echo "
\t\t\t\t\t";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["saveUserButtons"]) ? $context["saveUserButtons"] : null), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 207
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
            // line 208
            echo "\t\t\t\t\t<div id=\"profile\" class=\"hidden\">
\t\t\t\t\t\t";
            // line 209
            if ((!(isset($context["isNewAccount"]) ? $context["isNewAccount"] : null))) {
                // line 210
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Photo")), (isset($context["photoInput"]) ? $context["photoInput"] : null));
                // line 212
                echo "

\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t";
            }
            // line 216
            echo "
\t\t\t\t\t\t";
            // line 217
            $this->env->loadTemplate("_includes/fields")->display(array("fields" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "getLayoutByType", array(0 => "User"), "method"), "getFields", array(), "method"), "element" => (isset($context["account"]) ? $context["account"] : null)));
            // line 221
            echo "
\t\t\t\t\t\t";
            // line 222
            echo twig_escape_filter($this->env, (isset($context["saveUserButtons"]) ? $context["saveUserButtons"] : null), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 225
        echo "
\t\t\t\t";
        // line 226
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "assignUserPermissions"), "method"))) {
            // line 227
            echo "\t\t\t\t\t<div id=\"perms\" class=\"hidden\">
\t\t\t\t\t\t<h2>";
            // line 228
            echo twig_escape_filter($this->env, \Craft\Craft::t("User Groups"), "html", null, true);
            echo "</h2>

\t\t\t\t\t\t";
            // line 230
            $context["allGroups"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "userGroups"), "getAllGroups", array(), "method");
            // line 231
            echo "\t\t\t\t\t\t";
            $context["userGroups"] = $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "getGroups", array(0 => "id"), "method");
            // line 232
            echo "
\t\t\t\t\t\t<input type=\"hidden\" name=\"groups\" value=\"\">

\t\t\t\t\t\t";
            // line 235
            if ((isset($context["allGroups"]) ? $context["allGroups"] : null)) {
                // line 236
                echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 237
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["allGroups"]) ? $context["allGroups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 238
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t";
                    // line 239
                    echo $context["forms"]->getcheckbox(array("label" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name"), "name" => "groups[]", "value" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id"), "checked" => twig_in_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id"), twig_get_array_keys_filter((isset($context["userGroups"]) ? $context["userGroups"] : null)))));
                    // line 244
                    echo "
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t";
            } else {
                // line 250
                echo "\t\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("No user groups exist yet."), "html", null, true);
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 252
            echo "
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<h2>";
            // line 255
            echo twig_escape_filter($this->env, \Craft\Craft::t("Permissions"), "html", null, true);
            echo "</h2>

\t\t\t\t\t\t";
            // line 257
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")) {
                // line 258
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => (("<strong>" . \Craft\Craft::t("Admin")) . "</strong>"), "name" => "admin", "checked" => $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "admin"), "reverseToggle" => "permissions"));
                // line 263
                echo "
\t\t\t\t\t\t";
            }
            // line 265
            echo "
\t\t\t\t\t\t<input type=\"hidden\" name=\"permissions\" value=\"\">

\t\t\t\t\t\t<div id=\"permissions\" class=\"field";
            // line 268
            if ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "admin")) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t\t\t";
            // line 269
            $this->env->loadTemplate("_includes/permissions")->display(array("userOrGroup" => (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "admin")) ? (null) : ((isset($context["account"]) ? $context["account"] : null))), "groupPermissions" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "userPermissions"), "getGroupPermissionsByUserId", array(0 => $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "id")), "method")));
            // line 273
            echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 275
            echo twig_escape_filter($this->env, (isset($context["saveUserButtons"]) ? $context["saveUserButtons"] : null), "html", null, true);
            echo "

\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 279
        echo "\t\t\t</form>
\t\t</div><!--/item-->

\t\t";
        // line 282
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && (!(isset($context["isNewAccount"]) ? $context["isNewAccount"] : null)))) {
            // line 283
            echo "\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">
\t\t\t\t<form class=\"pane\" method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t";
            // line 285
            echo twig_escape_filter($this->env, (isset($context["hiddenInputs"]) ? $context["hiddenInputs"] : null), "html", null, true);
            echo "

\t\t\t\t\t<h5 class=\"first\">";
            // line 287
            echo twig_escape_filter($this->env, \Craft\Craft::t("Account Status"), "html", null, true);
            echo "</h5>
\t\t\t\t\t<p>
\t\t\t\t\t\t<span class=\"status ";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "status"), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t";
            // line 290
            if (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "status") == "pending")) {
                // line 291
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Unverified"), "html", null, true);
                echo " 
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                // line 292
                echo twig_escape_filter($this->env, \Craft\Craft::t("Resend verification email"), "html", null, true);
                echo "\" data-action=\"users/sendActivationEmail\">
\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "status") == "locked")) {
                // line 294
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Locked"), "html", null, true);
                echo " 
\t\t\t\t\t\t\t";
                // line 295
                if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "administrateUsers"), "method")) {
                    echo "<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Unlock"), "html", null, true);
                    echo "\" data-action=\"users/unlockUser\">";
                }
                // line 296
                echo "\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "status") == "suspended")) {
                // line 297
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Suspended"), "html", null, true);
                echo " 
\t\t\t\t\t\t\t";
                // line 298
                if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "administrateUsers"), "method")) {
                    echo "<input type=\"submit\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Unsuspend"), "html", null, true);
                    echo "\" data-action=\"users/unsuspendUser\">";
                }
                // line 299
                echo "\t\t\t\t\t\t";
            } else {
                // line 300
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Active"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 302
            echo "\t\t\t\t\t</p>

\t\t\t\t\t";
            // line 304
            if ((($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "status") == "locked") && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "cooldownDuration"))) {
                // line 305
                echo "\t\t\t\t\t\t<h5>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Cooldown Time Remaining"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 306
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "remainingCooldownTime"), "humanDuration"), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            }
            // line 308
            echo "
\t\t\t\t\t<h5>";
            // line 309
            echo twig_escape_filter($this->env, \Craft\Craft::t("Registration Date"), "html", null, true);
            echo "</h5>
\t\t\t\t\t<p>";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "dateCreated"), "nice"), "html", null, true);
            echo "</p>

\t\t\t\t\t";
            // line 312
            if (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "status") != "pending")) {
                // line 313
                echo "\t\t\t\t\t\t<h5>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Last Login Date"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 314
                if ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastLoginDate")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastLoginDate"), "nice"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Never"), "html", null, true);
                }
                echo "</p>

\t\t\t\t\t\t<h5>";
                // line 316
                echo twig_escape_filter($this->env, \Craft\Craft::t("Last Invalid Login Date"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 317
                if ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastInvalidLoginDate")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastInvalidLoginDate"), "nice"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Never"), "html", null, true);
                }
                echo "</p>

\t\t\t\t\t\t<h5>";
                // line 319
                echo twig_escape_filter($this->env, \Craft\Craft::t("Last Password Change Date"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 320
                if ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastPasswordChangeDate")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "lastPasswordChangeDate"), "nice"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Never"), "html", null, true);
                }
                echo "</p>

\t\t\t\t\t\t<h5>";
                // line 322
                echo twig_escape_filter($this->env, \Craft\Craft::t("Invalid Login Count"), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t<p>";
                // line 323
                if ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "invalidLoginCount")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["account"]) ? $context["account"] : null), "invalidLoginCount"), "html", null, true);
                } else {
                    echo "0";
                }
                echo "</p>
\t\t\t\t\t";
            }
            // line 325
            echo "\t\t\t\t</form>

\t\t\t\t";
            // line 327
            if (((!$this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent")) && ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "deleteUsers"), "method") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "administrateUsers"), "method")))) {
                // line 328
                echo "\t\t\t\t\t<form class=\"pane\" method=\"post\" accept-charset=\"UTF-8\">
\t\t\t\t\t\t";
                // line 329
                echo twig_escape_filter($this->env, (isset($context["hiddenInputs"]) ? $context["hiddenInputs"] : null), "html", null, true);
                echo "

\t\t\t\t\t\t";
                // line 331
                if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "administrateUsers"), "method") && ($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "status") != "suspended"))) {
                    // line 332
                    echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Suspend"), "html", null, true);
                    echo "\" data-action=\"users/suspendUser\">
\t\t\t\t\t\t";
                }
                // line 334
                echo "
\t\t\t\t\t\t";
                // line 335
                if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "deleteUsers"), "method")) {
                    // line 336
                    echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                    echo "\" data-action=\"users/deleteUser\"
\t\t\t\t\t\t\t\t\t   data-confirm=\"";
                    // line 337
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this account and all associated content?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t   data-redirect=\"";
                    // line 338
                    echo ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) ? ("users") : ("dashboard"));
                    echo "\">
\t\t\t\t\t\t";
                }
                // line 340
                echo "
\t\t\t\t\t\t";
                // line 341
                if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") && (!$this->getAttribute((isset($context["account"]) ? $context["account"] : null), "isCurrent")))) {
                    // line 342
                    echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Login as user"), "html", null, true);
                    echo "\" data-action=\"users/impersonate\">
\t\t\t\t\t\t";
                }
                // line 344
                echo "\t\t\t\t\t</form>
\t\t\t\t";
            }
            // line 346
            echo "\t\t\t</div><!--/item-->
\t\t";
        }
        // line 348
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "users/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  678 => 348,  674 => 346,  670 => 344,  664 => 342,  662 => 341,  659 => 340,  654 => 338,  650 => 337,  645 => 336,  643 => 335,  640 => 334,  634 => 332,  632 => 331,  627 => 329,  624 => 328,  622 => 327,  618 => 325,  609 => 323,  605 => 322,  596 => 320,  592 => 319,  583 => 317,  579 => 316,  570 => 314,  565 => 313,  563 => 312,  558 => 310,  554 => 309,  551 => 308,  546 => 306,  541 => 305,  539 => 304,  535 => 302,  529 => 300,  526 => 299,  520 => 298,  515 => 297,  512 => 296,  506 => 295,  501 => 294,  496 => 292,  491 => 291,  489 => 290,  485 => 289,  480 => 287,  475 => 285,  471 => 283,  469 => 282,  464 => 279,  457 => 275,  453 => 273,  451 => 269,  445 => 268,  440 => 265,  436 => 263,  433 => 258,  431 => 257,  426 => 255,  421 => 252,  415 => 250,  410 => 247,  402 => 244,  400 => 239,  397 => 238,  393 => 237,  390 => 236,  388 => 235,  383 => 232,  380 => 231,  378 => 230,  373 => 228,  370 => 227,  368 => 226,  365 => 225,  359 => 222,  356 => 221,  354 => 217,  351 => 216,  345 => 212,  342 => 210,  340 => 209,  337 => 208,  335 => 207,  329 => 204,  326 => 203,  322 => 201,  320 => 198,  317 => 197,  312 => 194,  297 => 192,  293 => 191,  290 => 190,  287 => 189,  285 => 188,  281 => 186,  278 => 185,  276 => 184,  273 => 183,  269 => 181,  265 => 179,  262 => 175,  260 => 174,  256 => 172,  254 => 169,  251 => 168,  246 => 166,  238 => 161,  233 => 158,  231 => 154,  226 => 151,  224 => 150,  220 => 148,  218 => 144,  215 => 143,  210 => 141,  202 => 136,  197 => 133,  195 => 127,  190 => 124,  188 => 123,  185 => 122,  181 => 120,  177 => 118,  174 => 114,  172 => 113,  168 => 111,  166 => 103,  163 => 102,  161 => 101,  155 => 97,  153 => 91,  148 => 88,  146 => 82,  140 => 78,  138 => 68,  134 => 66,  132 => 65,  127 => 63,  123 => 62,  117 => 58,  114 => 57,  105 => 52,  102 => 51,  100 => 50,  98 => 48,  94 => 45,  86 => 40,  82 => 39,  75 => 35,  72 => 34,  66 => 32,  64 => 31,  61 => 30,  59 => 29,  55 => 26,  52 => 25,  50 => 24,  48 => 21,  46 => 20,  44 => 19,  42 => 18,  40 => 17,  38 => 16,  34 => 12,  32 => 11,  30 => 9,  27 => 4,  25 => 3,);
    }
}
