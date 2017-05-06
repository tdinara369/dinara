<?php

/* forms/fields/joomla/categories.html.twig */
class __TwigTemplate_4e44e4cdecef61832610ba739df13c3777e164012690d81318034cb851b3e0e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/input/selectize.html.twig", "forms/fields/joomla/categories.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/input/selectize.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["categories"] = twig_array_merge((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()), array())) : (array())), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "finder", array(0 => "categories"), "method"), "published", array(0 => array(0 => 0, 1 => 1)), "method"), "limit", array(0 => 0), "method"), "find", array(), "method"));
        // line 5
        echo "    ";
        $context["Options"] = $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array()), "Options", array());
        // line 6
        echo "    ";
        $context["options"] = array();
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 8
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array(0 => array("value" => $this->getAttribute($context["category"], "id", array()), "text" => ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->repeatFilter("- ", ($this->getAttribute($context["category"], "level", array()) - 1)) . $this->getAttribute($context["category"], "title", array())))));
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        $context["field"] = twig_array_merge(twig_array_merge((isset($context["field"]) ? $context["field"] : null), (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", false, true), "Options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", false, true), "Options", array()), array())) : (array()))), array("selectize" => array("delimiter" => ",", "Options" => (isset($context["options"]) ? $context["options"] : null))));
        // line 11
        echo "
    data-selectize=\"";
        // line 12
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? (twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())), "html_attr")) : (""));
        echo "\"
    ";
        // line 13
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/joomla/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  60 => 12,  57 => 11,  54 => 10,  48 => 9,  45 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/joomla/categories.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/forms/fields/joomla/categories.html.twig");
    }
}
