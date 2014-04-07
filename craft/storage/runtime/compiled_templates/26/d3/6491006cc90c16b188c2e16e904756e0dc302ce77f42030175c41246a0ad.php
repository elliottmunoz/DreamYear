<?php

/* _layout */
class __TwigTemplate_26d36491006cc90c16b188c2e16e904756e0dc302ce77f42030175c41246a0ad extends Twig_Template
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
\t <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 17
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"home\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" />
\t<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
\t<link href=\"assets/stylesheets/application.css\" rel='stylesheet' type='text/css'>
</head>

<body>
\t<div id=\"container\">
\t\t<header id=\"header\">
\t\t\t<nav>
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#";
        // line 28
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 29
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 30
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 31
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
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "\t\t</main>

\t\t<footer id=\"footer\">
\t\t\tCopyright ";
        // line 46
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

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
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
        return array (  102 => 40,  99 => 39,  87 => 46,  82 => 43,  80 => 39,  67 => 31,  61 => 30,  49 => 28,  20 => 11,  396 => 117,  392 => 116,  385 => 111,  377 => 109,  373 => 108,  369 => 107,  365 => 106,  362 => 105,  351 => 103,  347 => 102,  344 => 101,  340 => 100,  336 => 99,  328 => 93,  315 => 91,  311 => 90,  306 => 88,  302 => 87,  298 => 86,  288 => 78,  279 => 74,  270 => 73,  266 => 72,  263 => 71,  254 => 70,  250 => 69,  247 => 68,  243 => 67,  238 => 65,  232 => 64,  225 => 59,  215 => 57,  211 => 56,  206 => 55,  202 => 54,  199 => 53,  190 => 51,  186 => 50,  179 => 48,  168 => 41,  157 => 39,  153 => 38,  147 => 37,  139 => 31,  135 => 29,  119 => 27,  115 => 26,  110 => 25,  93 => 24,  90 => 23,  88 => 22,  84 => 21,  77 => 16,  70 => 14,  59 => 12,  55 => 29,  50 => 10,  46 => 9,  42 => 8,  36 => 18,  31 => 4,  28 => 17,);
    }
}
