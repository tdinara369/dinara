<?php

/* forms/fields/input/radios.html.twig */
class __TwigTemplate_00f816ca358edf2bbbc45f5423adf74aa485ff60345cac3f464a8225d3ee9f77 extends Twig_Template
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
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/input/radios.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 5
            echo "        ";
            $context["childName"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((isset($context["name"]) ? $context["name"] : null));
            // line 6
            echo "        ";
            $context["key"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ("1") : ($context["key"]));
            // line 7
            echo "        <span class=\"radios\">
            <input type=\"radio\"
                   id=\"";
            // line 9
            echo twig_escape_filter($this->env, (((isset($context["childName"]) ? $context["childName"] : null) . "-") . twig_lower_filter($this->env, $context["key"])), "html", null, true);
            echo "\"
                   value=\"";
            // line 10
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                   name=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["childName"]) ? $context["childName"] : null))), "html", null, true);
            echo "\"
                   ";
            // line 12
            if (((isset($context["value"]) ? $context["value"] : null) == $context["key"])) {
                echo "checked=\"checked\"";
            }
            // line 13
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array())) {
                echo "required=\"required\"";
            }
            // line 14
            echo "            >
            <label for=\"";
            // line 15
            echo twig_escape_filter($this->env, (((isset($context["childName"]) ? $context["childName"] : null) . "-") . twig_lower_filter($this->env, $context["key"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["text"], "html", null, true);
            echo "</label>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/input/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  66 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 7,  38 => 6,  35 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/input/radios.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/forms/fields/input/radios.html.twig");
    }
}
