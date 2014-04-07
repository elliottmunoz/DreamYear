<?php

/* _components/widgets/QuickPost/body */
class __TwigTemplate_3bccbccb7261e7da5705b98c00cc75ab67af1265a370c996d11ca29325dd0cd1 extends Twig_Template
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        $context["fieldNamespace"] = ("fields" . twig_random($this->env));
        // line 3
        echo "

<form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
\t<input type=\"hidden\" name=\"fieldsLocation\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null), "html", null, true);
        echo "\">

\t";
        // line 8
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "titleLabel")), "id" => "title", "name" => "title", "required" => true, "first" => true));
        // line 14
        echo "

\t";
        // line 16
        $_namespace = (isset($context["fieldNamespace"]) ? $context["fieldNamespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 17
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 18
                    echo "\t\t\t";
                    if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required") || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fields")))) {
                        // line 19
                        echo "\t\t\t\t";
                        $this->env->loadTemplate("_includes/field")->display(array("fieldId" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "entry" => null));
                        // line 24
                        echo "\t\t\t";
                    }
                    // line 25
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t";
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 17
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 18
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required") || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "fields")))) {
                    // line 19
                    echo "\t\t\t\t";
                    $this->env->loadTemplate("_includes/field")->display(array("fieldId" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldId"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "entry" => null));
                    // line 24
                    echo "\t\t\t";
                }
                // line 25
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t";
        }
        unset($_originalNamespace, $_namespace);
        // line 27
        echo "
\t<div class=\"buttons\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, \Craft\Craft::t("Post"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/QuickPost/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  66 => 26,  60 => 25,  57 => 24,  54 => 19,  51 => 18,  39 => 16,  35 => 14,  33 => 8,  23 => 3,  21 => 2,  19 => 1,  91 => 28,  85 => 27,  82 => 26,  76 => 17,  72 => 22,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  50 => 16,  46 => 17,  42 => 13,  40 => 12,  32 => 8,  30 => 7,  28 => 6,  26 => 3,  24 => 2,);
    }
}
