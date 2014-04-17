<?php

/* index */
class __TwigTemplate_47340e7fecc71ba2b7a4bb4f67eaeeb6487e11663f9870aa48d0b4764ccb9038 extends Craft\BaseTemplate
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
\t<div class=\"section section--hero\">
\t\t<div class=\"wrapper\">
\t\t\t<div class=\"hero\">
\t\t\t\t<div class=\"hero__image\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"section\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutHeading"), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"description\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "aboutDescription"), "html", null, true);
        echo "</div>
\t\t\t<ul class=\"resellers\">
\t\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "resellers"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "\t\t\t\t<li class=\"reseller\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerUrl"), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerLogo"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 21
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "resellerName"), "html", null, true);
                echo "\">
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<!--Chapters-->
\t<div class=\"section section--chapters\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chaptersHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chaptersHeading"), "html", null, true);
        echo "</h2>
\t\t\t";
        // line 32
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "chapters"))) {
            // line 33
            echo "\t\t\t";
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
                // line 34
                echo "\t\t\t<div class=\"chapter\">
\t\t\t\t<div class=\"chapter__index\"><h5>Chapter ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                echo ": </h5></div>
\t\t\t\t<div class=\"chapter__name\"><h4>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chapterTitle"), "html", null, true);
                echo "</h4></div>
\t\t\t\t<div class=\"description\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "chapterDescription"), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t\t";
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
            // line 40
            echo "\t\t\t";
        }
        // line 41
        echo "\t\t</div>
\t</div>
\t<!--Author-->
\t<div class=\"section section--author\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"profile\">
\t\t\t\t<div class=\"profile__image\">
\t\t\t\t\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorImage"));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 50
            echo "\t\t\t\t\t<img class=\"image__fluid\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorHeading"), "html", null, true);
            echo "\">
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"profile__content\">
\t\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorDescription"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--Stories-->
\t<div class=\"section\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "storiesHeading"), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"stories__index\">
\t\t\t\t";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "stories"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "\t\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyName"), "html", null, true);
            echo "</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t</div>
\t\t\t";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "stories"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyName"), "html", null, true);
            echo "</p>
\t\t\t<p>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyDescription"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyUrl"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "storyUrl"), "html", null, true);
            echo "</a></p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t</div>
\t</div>
\t<!--Speaking-->
\t<div class=\"section\">
\t\t<div class=\"wrapper\">
\t\t\t<h2 id=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingHeading"), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"description\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingDescription"), "html", null, true);
        echo "</div>
\t\t\t";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "speakingSample"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 81
            echo "\t\t\t<audio controls>
\t\t\t\t<source src=\"";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mp3"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 83
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "\" type=\"audio/mpeg\">
\t\t\t\t<source src=\"";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "ogg"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 86
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\" type=\"audio/ogg\">
\t\t\t\tYour browser does not support the audio element.
\t\t\t</audio>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t<div class=\"speaking__form\">
\t\t\t\t";
        // line 101
        echo "
\t\t\t\t";
        // line 102
        $context["__internal_d390765d461b570bfb403961732ed3858d61858efc86cd2939abb9ead8a24388"] = $this;
        // line 103
        echo "
\t\t\t\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"contactForm/sendMessage\">
\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"contact/thanks\">
\t\t\t\t\t<div class=\"form__element form__element__half\">
\t\t\t\t\t\t<label for=\"fromName\" class=\"form__label\">Your Name</label>
\t\t\t\t\t\t<input id=\"fromName\" class=\"form__element__textfield\" type=\"text\" name=\"fromName\" value=\"";
        // line 109
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromName"), "html", null, true);
        }
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 111
        if (array_key_exists("message", $context)) {
            echo $context["__internal_d390765d461b570bfb403961732ed3858d61858efc86cd2939abb9ead8a24388"]->geterrorList($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getErrors", array(0 => "fromName"), "method"));
        }
        // line 112
        echo "\t\t\t\t\t<div class=\"form__element form__element__half\">
\t\t\t\t\t\t<label for=\"fromEmail\" class=\"form__label required\">Your Email</label>
\t\t\t\t\t\t<input id=\"fromEmail\" class=\"form__element__textfield\" type=\"email\" name=\"fromEmail\" value=\"";
        // line 114
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromEmail"), "html", null, true);
        }
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 116
        if (array_key_exists("message", $context)) {
            echo $context["__internal_d390765d461b570bfb403961732ed3858d61858efc86cd2939abb9ead8a24388"]->geterrorList($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getErrors", array(0 => "fromEmail"), "method"));
        }
        // line 117
        echo "\t\t\t\t\t<div class=\"form__element form__element__half\">
\t\t\t\t\t\t<label for=\"phone\" class=\"form__label required\">Phone</label>
\t\t\t\t\t\t<input id=\"phone\" class=\"form__element__textfield\" type=\"tel\" name=\"message[Phone]\" value=\"\" placeholder=\"(×××) ×××-××××\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form__element form__element__half\">
\t\t\t\t\t\t<label for=\"event\" class=\"form__label required\">Event Name</label>
\t\t\t\t\t\t<input id=\"event\" class=\"form__element__textfield\" type=\"text\" name=\"message[Event]\" value=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form__element form__element__half\">
\t\t\t\t\t\t<label for=\"dates\" class=\"form__label required\">Dates</label>
\t\t\t\t\t\t<input id=\"dates\" class=\"form__element__textfield\" type=\"date\" name=\"message[Dates]\" value=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form__element form__element__half\">
\t\t\t\t\t\t<label for=\"budget\" class=\"form__label required\">Budget</label>
\t\t\t\t\t\t<input id=\"budget\" class=\"form__element__textfield\" type=\"number\" name=\"message[Budget]\" value=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form__element form__element__full\">
\t\t\t\t\t\t<label for=\"message\" class=\"form__label required\">Tell us about your Event</label>
\t\t\t\t\t\t<textarea rows=\"5\" id=\"message\" class=\"form__element__textarea\" name=\"message[body]\">";
        // line 135
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "message"), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 137
        if (array_key_exists("message", $context)) {
            echo $context["__internal_d390765d461b570bfb403961732ed3858d61858efc86cd2939abb9ead8a24388"]->geterrorList($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getErrors", array(0 => "message"), "method"));
        }
        // line 138
        echo "\t\t\t\t\t<div class=\"form__element form__element__full\">
\t\t\t\t\t\t<input class=\"button\" type=\"submit\" value=\"Send\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--
\t<script type=\"text/javascript\" src=\"https://www.formstack.com/forms/js.php?1720416-4QhiH6JuPM-v3\"></script><noscript><a href=\"https://www.formstack.com/forms/?1720416-4QhiH6JuPM\" title=\"Online Form\">Online Form - Speaking Request Form</a></noscript>
-->
<!--Pitch Nights-->
<div class=\"section section--pitch\">
\t<div class=\"wrapper\">
\t\t<h2 id=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightHeading"), "html", null, true);
        echo "</h2>
\t\t<div class=\"video\">
\t\t\t<iframe src=\"//player.vimeo.com/video/";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightVideoId"), "html", null, true);
        echo "\" width=\"640\" height=\"360\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t\t</div>
\t\t<div class=\"description\">";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightDescription"), "html", null, true);
        echo "</div>
\t\t<ul class=\"tour\">
\t\t\t";
        // line 157
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "pitchNightEvents"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 158
            echo "\t\t\t<li class=\"tour--stop\">
\t\t\t\t<div class=\"tour--date\"><h5>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDate"), "format", array(0 => "F d"), "method"), "html", null, true);
            echo "</h5></div>
\t\t\t\t<div class=\"tour--city\">
\t\t\t\t\t<h3><a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventRegistrationLink"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventCity"), "html", null, true);
            echo "</a></h3>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t\t</ul>
\t</div>
</div>
<!--Event-->
<div class=\"section\">
\t<div class=\"wrapper\">
\t\t<h2 id=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "eventHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "eventHeading"), "html", null, true);
        echo "</h2>
\t\t";
        // line 172
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "events"), "limit", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 173
            echo "\t\t<div id=\"event\">
\t\t\t";
            // line 174
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventImage"));
            foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
                // line 175
                echo "\t\t\t<div class=\"event--image\"><img class=\"image__fluid\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asset"]) ? $context["asset"] : null), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventName"), "html", null, true);
                echo "\"></div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "\t\t\t<div class=\"event--date\"><h5>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDate"), "format", array(0 => "F d"), "method"), "html", null, true);
            echo "</h5></div>
\t\t\t<div class=\"event--city\"><h3>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventLocation"), "html", null, true);
            echo "</h3></div>
\t\t\t<div class=\"description\">";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventDescription"), "html", null, true);
            echo "</div>
\t\t\t<a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "eventRegistrationLink"), "html", null, true);
            echo "\" class=\"button\">Register Now</a></p>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "\t</div>
</div>
<!--Event-->
<div class=\"section\">
\t<div class=\"wrapper\">
\t\t<h2 id=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('craft')->replaceFilter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contactHeading"), " ", "-")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contactHeading"), "html", null, true);
        echo "</h2>
\t\t<div class=\"description\">";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contactDescription"), "html", null, true);
        echo "</div>
\t</div>
</div>

";
    }

    // line 92
    public function geterrorList($_errors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $_errors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "\t\t\t\t";
            if ((isset($context["errors"]) ? $context["errors"] : null)) {
                // line 94
                echo "\t\t\t\t<ul class=\"errors\">
\t\t\t\t\t";
                // line 95
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 96
                    echo "\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                    echo "</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  547 => 100,  543 => 98,  534 => 96,  530 => 95,  527 => 94,  524 => 93,  513 => 92,  504 => 189,  498 => 188,  491 => 183,  482 => 180,  478 => 179,  474 => 178,  469 => 177,  458 => 175,  454 => 174,  451 => 173,  447 => 172,  441 => 171,  433 => 165,  421 => 161,  416 => 159,  413 => 158,  409 => 157,  404 => 155,  399 => 153,  392 => 151,  377 => 138,  373 => 137,  366 => 135,  346 => 117,  342 => 116,  335 => 114,  331 => 112,  327 => 111,  320 => 109,  312 => 103,  310 => 102,  307 => 101,  304 => 91,  295 => 87,  286 => 86,  282 => 85,  279 => 84,  270 => 83,  266 => 82,  263 => 81,  259 => 80,  255 => 79,  249 => 78,  242 => 73,  232 => 71,  228 => 70,  223 => 69,  219 => 68,  216 => 67,  207 => 65,  203 => 64,  196 => 62,  185 => 54,  181 => 52,  170 => 50,  166 => 49,  158 => 46,  151 => 41,  148 => 40,  131 => 37,  127 => 36,  123 => 35,  120 => 34,  102 => 33,  100 => 32,  94 => 31,  86 => 25,  79 => 23,  68 => 21,  64 => 20,  59 => 19,  55 => 18,  50 => 16,  44 => 15,  31 => 4,  28 => 3,);
    }
}
