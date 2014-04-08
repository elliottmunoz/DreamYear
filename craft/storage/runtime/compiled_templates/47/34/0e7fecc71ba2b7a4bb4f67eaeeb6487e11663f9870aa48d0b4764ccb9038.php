<?php

/* index */
class __TwigTemplate_47340e7fecc71ba2b7a4bb4f67eaeeb6487e11663f9870aa48d0b4764ccb9038 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<!--About-->
\t<div class=\"section\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), "html", null, true);
        echo "</h2>
\t\t\t<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutDescription"), "html", null, true);
        echo "</p>
\t\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "resellers"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "\t\t\t<li class=\"reseller\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerUrl"), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerLogo"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 12
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerName"), "html", null, true);
                echo "\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</div>
\t</div>
\t<!--Chapters-->
\t<div class=\"section section--chapters\">
\t\t<div class=\"wrapper\">
\t\t\t<h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chaptersHeading"), "html", null, true);
        echo "</h2>
\t\t\t";
        // line 22
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chapters"))) {
            // line 23
            echo "\t\t\t<div class=\"section--chapters\">
\t\t\t\t";
            // line 24
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
                // line 25
                echo "\t\t\t\t<div class=\"chapter__index\">Chapter ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ": </div>
\t\t\t\t<div class=\"chapter__name\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chapterTitle"), "html", null, true);
                echo "</a></div>
\t\t\t\t<div class=\"chapter__description\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chapterDescription"), "html", null, true);
                echo "</a></div>
\t\t\t\t";
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
            // line 29
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 31
        echo "\t\t</div>
\t</div>
\t<!--Author-->
\t<div class=\"section\">
\t\t<div class=\"wrapper\">
\t\t\t<div class=\"section--author\">
\t\t\t\t<h2 id=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
        echo "</h2>
\t\t\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorImage"));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 39
            echo "\t\t\t\t<img class=\"image__fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
            echo "\">
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t<p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorDescription"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--Stories-->
\t<div class=\"section\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"stories__index\">
\t\t\t\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "stories"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyName"), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t</div>
\t\t\t";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "stories"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyName"), "html", null, true);
            echo "</p>
\t\t\t<p>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyDescription"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyUrl"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyUrl"), "html", null, true);
            echo "</a></p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t</div>
\t</div>
\t<!--Speaking-->
\t<div class=\"section\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading"), "html", null, true);
        echo "</h2>
\t\t\t<p>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingDescription"), "html", null, true);
        echo "</p>

\t\t\t";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingSample"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "\t\t\t<audio controls>
\t\t\t\t<source src=\"";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mp3"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 70
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\" type=\"audio/mpeg\">
\t\t\t\t<source src=\"";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ogg"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 73
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\" type=\"audio/ogg\">
\t\t\t\tYour browser does not support the audio element.
\t\t\t</audio>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t</div>
\t</div>
\t<!--
\t<script type=\"text/javascript\" src=\"https://www.formstack.com/forms/js.php?1720416-4QhiH6JuPM-v3\"></script><noscript><a href=\"https://www.formstack.com/forms/?1720416-4QhiH6JuPM\" title=\"Online Form\">Online Form - Speaking Request Form</a></noscript>
-->
<!--Pitch Nights-->
<div class=\"section\">
\t<div class=\"wrapper\">
\t\t<h2>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightHeading"), "html", null, true);
        echo "</h2>
\t\t<div class=\"video\">
\t\t<iframe src=\"//player.vimeo.com/video/";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightVideoId"), "html", null, true);
        echo "\" width=\"640\" height=\"360\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t<p>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightDescription"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<ul>
\t\t\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightEvents"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 93
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventCity"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
            echo ", <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventRegistrationLink"), "html", null, true);
            echo "\">Register</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t</ul>
\t</div>
</div>
<!--Event-->
<div class=\"section\">
\t<div class=\"wrapper\">
\t\t<h2>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "eventHeading"), "html", null, true);
        echo "</h2>
\t\t";
        // line 102
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "events"), "limit", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 103
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventImage"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 104
                echo "\t\t\t<img class=\"image__fluid\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventName"), "html", null, true);
                echo "\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventLocation"), "html", null, true);
            echo "</p>
\t\t<p>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDate"), "format", array(0 => "F d, Y"), "method"), "html", null, true);
            echo "</p>
\t\t<p>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDescription"), "html", null, true);
            echo "</p>
\t\t<p><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventRegistrationLink"), "html", null, true);
            echo "\">Register Now</a></p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t</div>
</div>
<!--Event-->
<div class=\"section\">
\t<div class=\"wrapper\">
\t\t<h2>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contactHeading"), "html", null, true);
        echo "</h2>
\t\t<p>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contactDescription"), "html", null, true);
        echo "</p>
\t</div>
</div>

";
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
        return array (  394 => 117,  390 => 116,  383 => 111,  375 => 109,  371 => 108,  367 => 107,  362 => 106,  351 => 104,  346 => 103,  342 => 102,  338 => 101,  330 => 95,  317 => 93,  313 => 92,  307 => 89,  303 => 88,  298 => 86,  288 => 78,  279 => 74,  270 => 73,  266 => 72,  263 => 71,  254 => 70,  250 => 69,  247 => 68,  243 => 67,  238 => 65,  232 => 64,  225 => 59,  215 => 57,  211 => 56,  206 => 55,  202 => 54,  199 => 53,  190 => 51,  186 => 50,  179 => 48,  168 => 41,  157 => 39,  153 => 38,  147 => 37,  139 => 31,  135 => 29,  119 => 27,  115 => 26,  110 => 25,  93 => 24,  90 => 23,  88 => 22,  84 => 21,  77 => 16,  70 => 14,  59 => 12,  55 => 11,  50 => 10,  46 => 9,  42 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
