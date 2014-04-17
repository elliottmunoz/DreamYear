<?php

/* whats-new */
class __TwigTemplate_3dcd72296f618aba70b88f03a1944c0b1d77cf877c0c9c4af0dc13caead875b0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = "What’s new in Craft 2";
        // line 3
        \Craft\craft()->templates->includeCssResource("css/whats-new.css");
        // line 7
        ob_start();
        // line 8
        echo "\t<h1>Categorically awesome.</h1>
\t<p>Craft 2 packs <a href=\"http://buildwithcraft.com/updates#build2524\"><strong>250</strong> new features and improvements</a>. Whether you’re a content author, web designer, or plugin developer, there’s a lot you’re going to love.</p>

\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/categories.png"), "html", null, true);
        echo "\" alt=\"Categories index\">
\t<h1>Categories</h1>
\t<p>You can now manage taxonomies in Craft with <a href=\"http://buildwithcraft.com/docs/categories\">categories</a>, and set up <a href=\"http://buildwithcraft.com/docs/categories-fields\">Categories fields</a> to relate your entries and other elements to them.</p>

\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/upgrade-modal.png"), "html", null, true);
        echo "\" alt=\"Craft’s edition upgrade modal\">
\t<h1>New Pricing</h1>
\t<p>We’ve split Craft into <a href=\"http://buildwithcraft.com/pricing\">three editions</a> – Personal, Client, and Pro – and we’re selling them at price points that make Craft more affordable than ever. Best of all, any sites that have ever purchased a package in Craft 1.x have been upgraded to Pro for free!</p>

\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/cp-arabic.png"), "html", null, true);
        echo "\" alt=\"Craft’s Control Panel translated into Arabic\">
\t<h1>Redesigned Control Panel with RTL Support</h1>
\t<p>We’ve redesigned the Control Panel, giving it a wider max width, a new layout system that offers more modularity and responsiveness, full RTL language support, and countless subtle improvements</p>

\t<h1>So Much More!</h1>
\t<p>Craft 2 packs support for eight new caching methods, partial template caching, background tasks, and tons of improvements to literally every corner of the system. To read the full list, check out the <a href=\"http://buildwithcraft.com/updates#build2524\">release notes</a>.</p>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "whats-new";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 5,  50 => 19,  43 => 15,  36 => 11,  31 => 8,  29 => 7,  27 => 3,  25 => 2,);
    }
}
