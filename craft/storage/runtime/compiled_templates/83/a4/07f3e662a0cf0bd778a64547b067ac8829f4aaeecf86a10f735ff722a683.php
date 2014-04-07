<?php

/* _layouts/message */
class __TwigTemplate_83a407f3e662a0cf0bd778a64547b067ac8829f4aaeecf86a10f735ff722a683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"message-container\">
\t\t<div id=\"message\" class=\"pane\">
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "
\t\t</div>

\t\t<script type=\"text/javascript\">
\t\t\tvar message = document.getElementById('message'),
\t\t\t\tmargin = -Math.round(message.offsetHeight / 2);
\t\t\tmessage.setAttribute('style', 'margin-top: '+margin+'px !important;');
\t\t</script>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "_layouts/message";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  33 => 6,  28 => 3,  26 => 4,  24 => 2,);
    }
}
