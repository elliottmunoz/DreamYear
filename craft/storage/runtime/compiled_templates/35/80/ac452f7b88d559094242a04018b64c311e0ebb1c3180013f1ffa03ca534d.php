<?php

/* index */
class __TwigTemplate_3580ac452f7b88d559094242a04018b64c311e0ebb1c3180013f1ffa03ca534d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
\t<h2 id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), "html", null, true);
        echo "</h2>
\t<p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutDescription"), "html", null, true);
        echo "</p>
\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "resellers"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t<li class=\"reseller\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerUrl"), "html", null, true);
            echo "\">
\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerLogo"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 29
                echo "\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\">
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t<h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chapterHeading"), "html", null, true);
        echo "</h2>
\t";
        // line 35
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chapters"))) {
            // line 36
            echo "\t<div class=\"section--chapters\">
\t\t";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chapters"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "\t\t<div class=\"chapter__index\">Chapter ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ": </div>
\t\t<div class=\"chapter__name\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chapter"), "html", null, true);
                echo "</a></div>
\t\t<div class=\"chapter__description\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), "html", null, true);
                echo "</a></div>
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t</div>
\t";
        }
        // line 44
        echo "
\t<div class=\"section--author\">
\t<h2 id=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
        echo "</h2>
\t<p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorDescription"), "html", null, true);
        echo "</p>
\t</div>
\t<h2 id=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), "html", null, true);
        echo "</h2>

\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "stories"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyName"), "html", null, true);
            echo "</p>
\t<p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyDescription"), "html", null, true);
            echo "</p>
\t<p><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyUrl"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyUrl"), "html", null, true);
            echo "</a></p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t<h2 id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading"), "html", null, true);
        echo "</h2>
\t<p>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingDescription"), "html", null, true);
        echo "</p>
\t<h2>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightHeading"), "html", null, true);
        echo "</h2>
\t<iframe src=\"//player.vimeo.com/video/";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightVideoId"), "html", null, true);
        echo "\" width=\"640\" height=\"360\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t<p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightDescription"), "html", null, true);
        echo "</p>
\t<!--
\t<iframe width='100%' height='500px' frameBorder='0' src='http://a.tiles.mapbox.com/v3/elliottmunoz.hj6m67pi/attribution.html'></iframe>
\t-->
\t<ul>
\t\t";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightLocations"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "city"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "date"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
            echo ", <a href=\"#\">Register</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t</ul>
\t<h2>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "eventHeading"), "html", null, true);
        echo "</h2>
\t";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "events"), "limit", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventLocation"), "html", null, true);
            echo "</p>
\t<p>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
            echo "</p>
\t<p>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDescription"), "html", null, true);
            echo "</p>
\t<p><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventRegistrationLink"), "html", null, true);
            echo "\">Register Now</a></p>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contactHeading"), "html", null, true);
        echo "</h2>
\t<p>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contactDescription"), "html", null, true);
        echo "</p>
\t<h2>Recent News</h2>
\t<ul>
\t\t";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "news"), "method"), "limit", array(0 => 5), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 82
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t</ul>

\t";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 84,  266 => 82,  262 => 81,  256 => 78,  251 => 77,  242 => 74,  238 => 73,  234 => 72,  229 => 71,  225 => 70,  221 => 69,  218 => 68,  207 => 66,  203 => 65,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  176 => 56,  166 => 54,  162 => 53,  157 => 52,  153 => 51,  146 => 49,  141 => 47,  135 => 46,  131 => 44,  127 => 42,  111 => 40,  107 => 39,  102 => 38,  85 => 37,  82 => 36,  80 => 35,  76 => 34,  73 => 33,  66 => 31,  57 => 29,  53 => 28,  48 => 27,  44 => 26,  40 => 25,  34 => 24,  31 => 23,  28 => 22,);
    }
}
