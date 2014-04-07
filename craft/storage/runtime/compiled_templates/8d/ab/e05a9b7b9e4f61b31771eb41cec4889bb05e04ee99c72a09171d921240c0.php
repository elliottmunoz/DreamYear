<?php

/* entries/_revisions */
class __TwigTemplate_8dabe05a9b7b9e4f61b31771eb41cec4889bb05e04ee99c72a09171d921240c0 extends Twig_Template
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
        if (!\Craft\craft()->hasPackage("PublishPro"))
        {
        	throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        $context["drafts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getEditableDraftsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
        // line 4
        $context["versions"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getVersionsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
        // line 5
        echo "
<div class=\"btn menubtn\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["revisionLabel"]) ? $context["revisionLabel"] : null), "html", null, true);
        echo "</div>

<div class=\"menu padded\">
\t<ul>
\t\t<li><a";
        // line 10
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "Entry")) {
            echo " class=\"sel\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Current"), "html", null, true);
        echo "</a></li>
\t</ul>

\t";
        // line 13
        if ((isset($context["drafts"]) ? $context["drafts"] : null)) {
            // line 14
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drafts"]) ? $context["drafts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 17
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryDraft") && ($this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId") == (isset($context["draftId"]) ? $context["draftId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "/drafts/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, \Craft\Craft::t("Draft {id}", array("id" => $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId"))), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 19
                if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
                    // line 20
                    echo "\t\t\t\t\t\t<span class=\"light\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "creator"), "html", null, true);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t</ul>
\t";
        }
        // line 26
        echo "
\t";
        // line 27
        if ((isset($context["versions"]) ? $context["versions"] : null)) {
            // line 28
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 31
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryVersion") && ($this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId") == (isset($context["versionId"]) ? $context["versionId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                echo "/versions/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version {id}", array("id" => $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId"))), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 33
                if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "hasPackage", array(0 => "Users"), "method")) {
                    // line 34
                    echo "\t\t\t\t\t\t<span class=\"light\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "creator"), "html", null, true);
                    echo "</span>
\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t</ul>
\t";
        }
        // line 40
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "entries/_revisions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  133 => 36,  127 => 34,  125 => 33,  121 => 32,  110 => 31,  106 => 30,  100 => 27,  97 => 26,  93 => 24,  86 => 22,  80 => 20,  78 => 19,  63 => 17,  59 => 16,  55 => 14,  53 => 13,  41 => 10,  34 => 6,  31 => 5,  29 => 4,  27 => 3,  19 => 1,  422 => 203,  420 => 202,  415 => 197,  412 => 196,  409 => 195,  404 => 193,  400 => 192,  397 => 191,  394 => 190,  391 => 189,  383 => 187,  381 => 186,  375 => 182,  362 => 180,  360 => 179,  357 => 178,  354 => 177,  351 => 176,  348 => 175,  345 => 174,  342 => 173,  339 => 172,  337 => 171,  330 => 169,  322 => 164,  316 => 160,  314 => 159,  311 => 158,  306 => 155,  303 => 154,  298 => 152,  294 => 151,  289 => 150,  287 => 149,  284 => 148,  276 => 146,  274 => 145,  269 => 143,  265 => 142,  259 => 141,  255 => 139,  253 => 138,  247 => 134,  243 => 132,  237 => 129,  232 => 128,  230 => 127,  227 => 126,  223 => 124,  220 => 121,  216 => 119,  213 => 115,  210 => 114,  204 => 112,  201 => 111,  199 => 110,  195 => 108,  193 => 101,  189 => 99,  187 => 92,  184 => 91,  180 => 89,  177 => 83,  175 => 82,  172 => 81,  168 => 79,  165 => 73,  163 => 72,  159 => 70,  157 => 63,  150 => 62,  148 => 61,  144 => 40,  142 => 58,  138 => 56,  134 => 54,  131 => 47,  129 => 46,  126 => 45,  120 => 43,  118 => 42,  115 => 41,  109 => 39,  107 => 38,  102 => 28,  98 => 35,  95 => 34,  88 => 31,  85 => 30,  83 => 29,  81 => 26,  77 => 22,  74 => 18,  72 => 20,  69 => 19,  64 => 16,  49 => 14,  46 => 13,  42 => 12,  38 => 11,  35 => 10,  32 => 9,  30 => 8,  26 => 4,  24 => 2,);
    }
}
