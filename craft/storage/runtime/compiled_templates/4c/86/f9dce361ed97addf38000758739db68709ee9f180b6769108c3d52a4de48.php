<?php

/* _layouts/base */
class __TwigTemplate_4c86f9dce361ed97addf38000758739db68709ee9f180b6769108c3d52a4de48 extends Twig_Template
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
        return array (  60 => 18,  51 => 19,  22 => 3,  20 => 1,  129 => 42,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  59 => 20,  50 => 15,  39 => 12,  33 => 8,  31 => 7,  29 => 8,  27 => 5,  25 => 3,  52 => 19,  49 => 18,  47 => 14,  41 => 14,  37 => 9,  35 => 9,  30 => 6,  28 => 4,  26 => 3,  24 => 2,);
    }
}
