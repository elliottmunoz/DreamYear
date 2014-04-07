<?php

/* _layout */
class __TwigTemplate_52dbe3e29173edd7757f564ecf30099bead87d46e0327f1bc5131da4b4112fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>";
        // line 16
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"home\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" />
\t<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
\t<link href='assets/stylesheets/application.css' rel='stylesheet' type='text/css'>
</head>

<body>
\t<div id=\"container\">
\t\t<header id=\"header\">
\t\t\t<nav>
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#";
        // line 27
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 28
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 29
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 30
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#articles\">Articles</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>

\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t\t</main>

\t\t<footer id=\"footer\">
\t\t\tCopyright ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ucfirst($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "serverName")), "html", null, true);
        echo ". All rights reserved  •  Built with <a href=\"http://buildwithcraft.com\">Craft</a>
\t\t</footer>
\t</div>
</body>
</html>
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t<p>If you see me, you haven’t set your <code>";
        echo "{% block content %}…{% endblock %}";
        echo "</code> yet.</p>
\t\t\t\t<p>See Twig’s <a href=\"http://twig.sensiolabs.org/doc/templates.html#template-inheritance\">Template Inheritance</a> documentation for an explanation.</p>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  98 => 38,  86 => 45,  81 => 42,  79 => 38,  60 => 29,  54 => 28,  35 => 17,  27 => 16,  20 => 11,  263 => 80,  252 => 78,  248 => 77,  242 => 74,  237 => 73,  228 => 70,  224 => 69,  220 => 68,  215 => 67,  211 => 66,  207 => 65,  204 => 64,  193 => 62,  189 => 61,  181 => 56,  177 => 55,  173 => 54,  169 => 53,  162 => 52,  152 => 50,  148 => 49,  143 => 48,  139 => 47,  132 => 45,  127 => 43,  121 => 42,  117 => 40,  113 => 38,  97 => 36,  93 => 35,  88 => 34,  71 => 33,  68 => 32,  66 => 30,  62 => 30,  59 => 29,  48 => 27,  44 => 26,  40 => 25,  34 => 24,  31 => 23,  28 => 22,);
    }
}
