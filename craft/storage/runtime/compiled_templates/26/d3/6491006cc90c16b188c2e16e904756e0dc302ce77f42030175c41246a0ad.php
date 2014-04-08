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
\t<script src=\"/assets/scripts/src/core/application.js\"></script>
</head>

<body>
\t<div id=\"container\">
\t\t<header id=\"header\">
\t\t\t<nav>
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#";
        // line 29
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 30
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 31
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#";
        // line 32
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
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "\t\t</main>

\t\t<footer id=\"footer\">
\t\t\tCopyright ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ucfirst($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "serverName")), "html", null, true);
        echo ". All rights reserved  •  Built with <a href=\"http://buildwithcraft.com\">Craft</a>
\t\t</footer>
\t</div>
\t<script src=\"/assets/scripts/src/plugins/jquery.fitvids.js\"></script>
</body>
</html>
";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
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
        return array (  104 => 41,  101 => 40,  88 => 47,  83 => 44,  81 => 40,  68 => 32,  62 => 31,  56 => 30,  50 => 29,  36 => 18,  28 => 17,  20 => 11,);
    }
}
