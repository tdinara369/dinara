<?php

/* @gantry-admin/modals/atom.html.twig */
class __TwigTemplate_fe3cfc7d23a7ce2da3cef491be8d1f4819e54107b882d40f4713cc810c32d8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/modals/atom.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <form method=\"post\"
          action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), "html", null, true);
        echo "\"
          data-g-inheritance-settings=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "type" => "atom", "subtype" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()))), "html_attr");
        echo "\"
    >
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" />
        <div class=\"g-tabs\" role=\"tablist\">
            <ul>
                ";
        // line 12
        echo "                <li class=\"active\">
                    <a href=\"#\" id=\"g-settings-atom-tab\" role=\"presentation\" aria-controls=\"g-settings-atom\" role=\"tab\" aria-expanded=\"true\">
                        ";
        // line 14
        if ((isset($context["inheritable"]) ? $context["inheritable"] : null)) {
            echo "<i class=\"fa fa-fw fa-";
            echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "inherit", array()) && twig_in_filter("attributes", $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "inherit", array()), "include", array())))) ? ("lock") : ("unlock"));
            echo "\" aria-hidden=\"true\"></i>";
        }
        // line 15
        echo "                        ";
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "                    </a>
                </li>
                ";
        // line 21
        echo "                ";
        if ((isset($context["inheritance"]) ? $context["inheritance"] : null)) {
            // line 22
            echo "                    <li>
                        <a href=\"#\" id=\"g-settings-inheritance-tab\" role=\"presentation\" aria-controls=\"g-settings-inheritance\" aria-expanded=\"false\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_INHERITANCE"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 28
        echo "            </ul>
        </div>

        <div class=\"g-panes\">
            ";
        // line 33
        echo "            <div class=\"g-pane active\" role=\"tabpanel\" id=\"g-settings-atom\" aria-labelledby=\"g-settings-atom-tab\" aria-expanded=\"true\">
                ";
        // line 34
        $this->loadTemplate("@gantry-admin/pages/configurations/layouts/particle-card.html.twig", "@gantry-admin/modals/atom.html.twig", 34)->display(array_merge($context, array("item" =>         // line 35
(isset($context["item"]) ? $context["item"] : null), "title" => $this->getAttribute(        // line 36
(isset($context["item"]) ? $context["item"] : null), "title", array()), "blueprints" => $this->getAttribute(        // line 37
(isset($context["blueprints"]) ? $context["blueprints"] : null), "form", array()), "overrideable" => (        // line 38
(isset($context["overrideable"]) ? $context["overrideable"] : null) && ( !$this->getAttribute($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "form", array(), "any", false, true), "overrideable", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "form", array()), "overrideable", array()))), "inherit" => (((twig_in_filter("attributes", $this->getAttribute($this->getAttribute(        // line 39
(isset($context["item"]) ? $context["item"] : null), "inherit", array()), "include", array())) && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "inherit", array()), "outline", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["inheritance"]) ? $context["inheritance"] : null), "form", array()), "fields", array()), "outline", array()), "filter", array())))) ? ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "inherit", array()), "outline", array())) : (null)))));
        // line 41
        echo "            </div>

            ";
        // line 44
        echo "            ";
        if ((isset($context["inheritance"]) ? $context["inheritance"] : null)) {
            // line 45
            echo "                <div class=\"g-pane\" role=\"tabpanel\" id=\"g-settings-inheritance\" aria-labelledby=\"g-settings-inheritance-tab\" aria-expanded=\"false\">
                    <div class=\"card settings-block\">
                        <h4>
                            ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_INHERITANCE"), "html", null, true);
            echo "
                        </h4>
                        <div class=\"inner-params\">
                            ";
            // line 51
            $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/modals/atom.html.twig", 51)->display(array("gantry" =>             // line 52
(isset($context["gantry"]) ? $context["gantry"] : null), "blueprints" => $this->getAttribute(            // line 53
(isset($context["inheritance"]) ? $context["inheritance"] : null), "form", array()), "data" => array("inherit" => $this->getAttribute(            // line 54
(isset($context["item"]) ? $context["item"] : null), "inherit", array())), "prefix" => "inherit."));
            // line 57
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 61
        echo "        </div>

        <div class=\"g-modal-actions\">
            <button class=\"button button-primary\" type=\"submit\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY"), "html", null, true);
        echo "</button>
            <button class=\"button button-primary\" data-apply-and-save=\"\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_APPLY_SAVE"), "html", null, true);
        echo "</button>
            <button class=\"button g5-dialog-close\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
        </div>
    </form>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        // line 16
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ATOM"), "html", null, true);
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/modals/atom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 16,  146 => 15,  138 => 66,  134 => 65,  130 => 64,  125 => 61,  119 => 57,  117 => 54,  116 => 53,  115 => 52,  114 => 51,  108 => 48,  103 => 45,  100 => 44,  96 => 41,  94 => 39,  93 => 38,  92 => 37,  91 => 36,  90 => 35,  89 => 34,  86 => 33,  80 => 28,  73 => 24,  69 => 22,  66 => 21,  62 => 18,  59 => 15,  53 => 14,  49 => 12,  43 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/modals/atom.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/modals/atom.html.twig");
    }
}
