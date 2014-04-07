<?php

/* _elements/structureview/container */
class __TwigTemplate_69a9b20e0b56751312ccb283c52c9e2eb1e008323c27603aece26017845516aa extends Twig_Template
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
        $context["uniqueClass"] = ("structureview" . twig_random($this->env));
        // line 2
        echo "
<ul class=\"structureview ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["uniqueClass"]) ? $context["uniqueClass"] : null), "html", null, true);
        echo "\">
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            $_thisItemDepth = (int)$this->getAttribute($context["element"], 'depth', array(), Twig_TemplateInterface::ANY_CALL, false, true);
            if (isset($context['nav'])) {
                $_tmpContext = $context;
                $context = $_contextsByDepth[$context['nav']['depth']];
                if ($_thisItemDepth > $context['nav']['depth']) {
                    for ($_i = $context['nav']['depth']; $_i < $_thisItemDepth; $_i++) {
                                                // line 19
                        echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    }
                } else {
                                        // line 23
                    echo "\t\t</li>
\t";
                    if ($_thisItemDepth < $context['nav']['depth']) {
                        for ($_i = $context['nav']['depth']-1; $_i >= $_thisItemDepth; $_i--) {
                            if (isset($_contextsByDepth[$_i])) {
                                $context = $_contextsByDepth[$_i];
                                                                // line 21
                                echo "\t\t\t\t</ul>
\t\t\t";
                                                                // line 23
                                echo "\t\t</li>
\t";
                                unset($_contextsByDepth[$_i]);
                            }
                        }
                    }
                }
                $context = $_tmpContext;
                unset($_tmpContext);
            } else {
                $_firstItemDepth = $_thisItemDepth;
            }
            $context['nav']['depth'] = $_thisItemDepth;
            if (isset($_contextsByDepth[$_thisItemDepth-1])) {
                $context['nav']['parent'] = $_contextsByDepth[$_thisItemDepth-1];
                if (method_exists($context["element"], 'setParent')) {
                    $context["element"]->setParent($context['nav']['parent']["element"]);
                }
            } else {
                $context['nav']['parent'] = null;
            }
            $_contextsByDepth[$_thisItemDepth] = $context;
            // line 5
            echo "\t\t";
            $context["collapsed"] = ($this->getAttribute((isset($context["viewState"]) ? $context["viewState"] : null), "collapsedElementIds", array(), "any", true, true) && twig_in_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "id"), $this->getAttribute((isset($context["viewState"]) ? $context["viewState"] : null), "collapsedElementIds")));
            // line 6
            echo "\t\t<li";
            if ((isset($context["collapsed"]) ? $context["collapsed"] : null)) {
                echo " class=\"collapsed\"";
            }
            echo " data-depth=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "depth"), "html", null, true);
            echo "\">
\t\t\t";
            // line 7
            $context["indent"] = (8 + (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "depth") - 1) * 35));
            // line 8
            echo "\t\t\t<div class=\"row";
            if (twig_in_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "id"), (isset($context["disabledElementIds"]) ? $context["disabledElementIds"] : null))) {
                echo " disabled";
            }
            echo "\" style=\"margin-left: -";
            echo twig_escape_filter($this->env, (isset($context["indent"]) ? $context["indent"] : null), "html", null, true);
            echo "px; padding-left: ";
            echo twig_escape_filter($this->env, (isset($context["indent"]) ? $context["indent"] : null), "html", null, true);
            echo "px;\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "id"), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo "\" data-status=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getStatus", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 9
            $this->env->loadTemplate("_elements/element")->display($context);
            // line 10
            echo "\t\t\t\t";
            if (((isset($context["context"]) ? $context["context"] : null) == "index")) {
                // line 11
                echo "\t\t\t\t\t";
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "sortable", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "sortable"))) {
                    // line 12
                    echo "\t\t\t\t\t\t<a class=\"move icon\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Move"), "html", null, true);
                    echo "\"></a>
\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t<a class=\"add icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Child"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 16
            echo "\t\t\t</div>

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (isset($_thisItemDepth)) {
            $_tmpContext = $context;
            if ($_thisItemDepth > $_firstItemDepth) {
                for ($_i = $_thisItemDepth; $_i > $_firstItemDepth; $_i--) {
                    if (isset($_contextsByDepth[$_i])) {
                        $context = $_contextsByDepth[$_i];
                                                // line 23
                        echo "\t\t</li>
\t";
                                                // line 21
                        echo "\t\t\t\t</ul>
\t\t\t";
                    }
                }
            }
            $context = $_contextsByDepth[$_firstItemDepth];
                        // line 23
            echo "\t\t</li>
\t";
            $context = $_tmpContext;
            unset($_thisItemDepth, $_firstItemDepth, $_i, $_contextsByDepth, $_tmpContext);
        }
        // line 25
        echo "</ul>


";
        // line 29
        if (((((isset($context["context"]) ? $context["context"] : null) == "index") && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "maxDepth", array(), "any", true, true)) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "maxDepth"))) {
            // line 30
            echo "\t";
            ob_start();
            // line 31
            echo "\t\t.";
            echo twig_escape_filter($this->env, (isset($context["uniqueClass"]) ? $context["uniqueClass"] : null), "html", null, true);
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(2, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "maxDepth")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "maxDepth") >= 2)) {
                    echo " ul";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " .add { display: none; }
\t";
            $context["css"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 33
            echo "
\t";
            // line 34
            \Craft\craft()->templates->includeCss((isset($context["css"]) ? $context["css"] : null));
        }
    }

    public function getTemplateName()
    {
        return "_elements/structureview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 34,  204 => 33,  188 => 31,  185 => 30,  183 => 29,  178 => 25,  172 => 23,  165 => 21,  162 => 23,  140 => 16,  134 => 14,  128 => 12,  125 => 11,  122 => 10,  120 => 9,  103 => 8,  101 => 7,  92 => 6,  89 => 5,  66 => 23,  63 => 21,  56 => 23,  51 => 19,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
