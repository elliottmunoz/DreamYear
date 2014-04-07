<?php

/* _elements/thumbsview/elements */
class __TwigTemplate_6db9cd5c85f56b8d7bbfd3a9faa8f4e0c658292153fc07522d0a76d7273cb032 extends Twig_Template
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
            // line 2
            echo "\t<li";
            if (twig_in_filter($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "id"), (isset($context["disabledElementIds"]) ? $context["disabledElementIds"] : null))) {
                echo " class=\"disabled\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "id"), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo "\" data-status=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getStatus", array(), "method"), "html", null, true);
            echo "\">
\t\t";
            // line 3
            $this->env->loadTemplate("_elements/element")->display($context);
            // line 4
            echo "\t</li>
";
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
    }

    public function getTemplateName()
    {
        return "_elements/thumbsview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  49 => 3,  36 => 2,  24 => 3,  22 => 2,  19 => 1,);
    }
}
