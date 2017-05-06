<?php

/* @particles/copyright.html.twig */
class __TwigTemplate_516f80ca45a1f56794ab20c27aa5d284dac977963b00854f55a55e6649ee1e42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/copyright.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["start_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "start", array())), array(0 => "now", 1 => ""))) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "start", array()))));
        // line 4
        $context["end_date"] = ((twig_in_filter(twig_trim_filter($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "end", array())), array(0 => "now", 1 => ""))) ? (twig_date_format_filter($this->env, "now", "Y")) : (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "date", array()), "end", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_particle($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"g-copyright ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()), "html", null, true);
        echo "\">
    &copy;
    ";
        // line 9
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "owner", array()), "link", array()))) {
            echo "<a target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array()), "_blank")) : ("_blank")));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array()));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "owner", array()));
            echo "\">";
        }
        // line 10
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "owner", array()));
        echo "
    ";
        // line 11
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "owner", array()), "link", array()))) {
            echo "</a>";
        }
        // line 12
        echo "    ";
        if (((isset($context["start_date"]) ? $context["start_date"] : null) != (isset($context["end_date"]) ? $context["end_date"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["start_date"]) ? $context["start_date"] : null));
            echo " - ";
        }
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["end_date"]) ? $context["end_date"] : null));
        echo "
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "additional", array()), "text", array()))) {
            echo "<br />";
            echo $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "additional", array()), "text", array());
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  72 => 14,  67 => 13,  61 => 12,  57 => 11,  52 => 10,  42 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/copyright.html.twig", "/home/aljoykz/horest.kz/templates/g5_helium/particles/copyright.html.twig");
    }
}
