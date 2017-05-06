<?php

/* forms/fields/enable/enable.html.twig */
class __TwigTemplate_123550dcfe51b70d0a2e99399a955939f3a021f6c1115d6d2bebc192bfe754e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"))), "forms/fields/enable/enable.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <span class=\"enabler\" role=\"checkbox\" aria-checked=\"";
        echo (((isset($context["value"]) ? $context["value"] : null)) ? ("true") : ("false"));
        echo "\" tabindex=\"0\" aria-label=\"";
        echo twig_escape_filter($this->env, (((isset($context["turned_off"]) ? $context["turned_off"] : null)) ? ("Disabled") : (("Enables " . _twig_default_filter(twig_trim_filter(twig_title_string_filter($this->env, twig_replace_filter((isset($context["scope"]) ? $context["scope"] : null), array("." => " ")))), twig_trim_filter((isset($context["title"]) ? $context["title"] : null)))))), "html", null, true);
        echo "\">
    <input
            ";
        // line 7
        echo "            type=\"hidden\"
            name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
            value=\"";
        // line 9
        echo (((isset($context["value"]) ? $context["value"] : null)) ? (1) : (0));
        echo "\"
            ";
        // line 10
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo "disabled=\"disabled\"";
        }
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
            />
    ";
        // line 14
        if ((isset($context["turned_off"]) ? $context["turned_off"] : null)) {
            // line 15
            echo "    <span><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i></span>
    ";
        } else {
            // line 17
            echo "    <span class=\"toggle\"><span class=\"knob\"></span></span>
    ";
        }
        // line 19
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/enable/enable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  67 => 17,  63 => 15,  61 => 14,  55 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  38 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/enable/enable.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/forms/fields/enable/enable.html.twig");
    }
}
