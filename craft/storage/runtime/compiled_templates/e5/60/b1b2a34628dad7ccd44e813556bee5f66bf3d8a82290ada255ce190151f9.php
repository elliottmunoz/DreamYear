<?php

/* _layouts/base */
class __TwigTemplate_e560b1b2a34628dad7ccd44e813556bee5f66bf3d8a82290ada255ce190151f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->templates->includeCssResource("css/craft.css", true);
        // line 3
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 8
        echo twig_escape_filter($this->env, strip_tags((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        if (((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "app"), "siteName"))) {
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "app"), "siteName"), "html", null, true);
        echo "</title>
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, maximum-scale=1.0\">

\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
</head>
<body>
\t";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "\t";
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getFootHtmlFunction(), "html", null, true);
        echo "
</body>
</html>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  51 => 19,  49 => 18,  37 => 9,  29 => 8,  22 => 3,  20 => 1,  35 => 6,  31 => 4,  33 => 6,  28 => 3,  26 => 4,  24 => 2,);
    }
}
