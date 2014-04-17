<?php

/* contactform/_settings */
class __TwigTemplate_8465c8baf9b4f23eaa90c8a797eaa56d7d9d75bb8629b6a021d1a9348345271f extends Craft\BaseTemplate
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
";
        // line 3
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("To Email"), "id" => "toEmail", "name" => "toEmail", "instructions" => \Craft\Craft::t("The email address(es) that the contact form will send to. Separate multiple email addresses with commas."), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "toEmail"), "autofocus" => true, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "toEmail"), "method")));
        // line 12
        echo "

";
        // line 14
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Sender Text"), "id" => "prependSender", "name" => "prependSender", "instructions" => \Craft\Craft::t("Text that will be prepended to the email’s From Name to inform who the Contact Form actually was sent by."), "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prependSender")) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prependSender")) : (\Craft\Craft::t("On behalf of"))), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "prependSender"), "method")));
        // line 21
        echo "

";
        // line 23
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Subject Text"), "id" => "prependSubject", "name" => "prependSubject", "instructions" => \Craft\Craft::t("Text that will be prepended to the email’s Subject to flag that it comes from the Contact Form."), "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prependSubject")) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prependSubject")) : (\Craft\Craft::t("New message from {siteName}", array("siteName" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "siteName"))))), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "prependSubject"), "method")));
        // line 30
        echo "

";
        // line 32
        echo $context["forms"]->getlightswitchField(array("label" => \Craft\Craft::t("Allow attachments?"), "id" => "allowAttachments", "name" => "allowAttachments", "on" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "allowAttachments"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "allowAttachments"), "method")));
        // line 38
        echo "


";
        // line 41
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Honeypot Field"), "id" => "honeypotField", "name" => "honeypotField", "instructions" => \Craft\Craft::t("The name of the 'honeypot' field in your Contact Form."), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "honeypotField"), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "honeypotField"), "method")));
        // line 48
        echo "

";
    }

    public function getTemplateName()
    {
        return "contactform/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 48,  49 => 41,  44 => 38,  42 => 32,  38 => 30,  36 => 23,  32 => 21,  30 => 14,  26 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }
}
