<?php

/* @gantry-admin/layouts/outline.html.twig */
class __TwigTemplate_acd1efc7fb85c7e5b35a70942da518d1f00458a440f208c99261450f95a32051 extends Twig_Template
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
        try {            // line 2
            $context["preset"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "layoutPreset", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method");
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 4
            $context["preset"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "layoutPreset", array(0 => "default"), "method");
        }
        // line 6
        echo "
<div id=\"outline-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" class=\"page\">
    <h4>
        ";
        // line 9
        if (((isset($context["name"]) ? $context["name"] : null) == "default")) {
            // line 10
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 12
            echo "            ";
            if ($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "outline.rename"), "method")) {
                // line 13
                echo "            <span data-g-config-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["name"]) ? $context["name"] : null), 2 => "rename"), "method"), "html", null, true);
                echo "\" data-g-config-method=\"post\"
                  data-title-editable=\"";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\" class=\"title\" data-tip=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\" data-tip-place=\"top-right\">
                ";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
            </span>
            <i class=\"fa fa-fw fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null))), "html", null, true);
                echo "\" data-title-edit=\"\"></i>
            ";
            } else {
                // line 19
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
            ";
            }
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <span class=\"float-right font-small\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ID_X", (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo ")</span>
    </h4>
    <div class=\"inner-params\">
        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc((($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array()), "gantry-admin://images/layouts/default.png")) : ("gantry-admin://images/layouts/default.png"))), "html", null, true);
        echo "\" />
    </div>
    <div class=\"inner-params\">
        <div class=\"center outline-actions\">
            <a data-title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT"), "html", null, true);
        echo "\"
               data-tip=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT"), "html", null, true);
        echo "\"
               role=\"button\"
               aria-label=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_X", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\"
               title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_X", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\"
               data-g5-ajaxify=\"\"
               data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
               data-g5-ajaxify-params=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
        echo "\"
               href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["name"]) ? $context["name"] : null), 2 => "styles"), "method"), "html", null, true);
        echo "\"
               class=\"button button-primary\"
            >
                <i class=\"fa fa-fw fa-pencil\" aria-hidden=\"true\"></i>
            </a>
            ";
        // line 42
        if (($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "outline.create"), "method") && $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "canDuplicate", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"))) {
            // line 43
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["name"]) ? $context["name"] : null), 2 => "duplicate"), "method"), "html", null, true);
            echo "\"
               data-tip=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE"), "html", null, true);
            echo "\"
               title=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE_X", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "\"
               aria-label=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE_X", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "\"
               data-g5-outline-duplicate class=\"button button-secondary\">
                <i class=\"fa fa-fw fa-copy\" aria-hidden=\"true\"></i>
            </a>
            ";
        }
        // line 51
        echo "            ";
        if (((((isset($context["name"]) ? $context["name"] : null) != "default") && $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "outline.delete"), "method")) && $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "canDelete", array(0 => (isset($context["name"]) ? $context["name"] : null)), "method"))) {
            // line 52
            echo "            <button data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE"), "html", null, true);
            echo "\"
                    data-tip=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE"), "html", null, true);
            echo "\"
                    title=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE_X", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "\"
                    aria-label=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DELETE_X", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "\"
                    data-g-config=\"delete\"
                    data-g-config-href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["name"]) ? $context["name"] : null), 2 => "delete"), "method"), "html", null, true);
            echo "\"
                    data-g-config-href-confirm=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["name"]) ? $context["name"] : null), 2 => "delete/confirm"), "method"), "html", null, true);
            echo "\"
                    data-g-config-method=\"POST\" class=\"button red\"
            >
                <i class=\"fa fa-fw fa-trash-o\" aria-hidden=\"true\"></i>
            </button>
            ";
        }
        // line 64
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/layouts/outline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 64,  171 => 58,  167 => 57,  162 => 55,  158 => 54,  154 => 53,  149 => 52,  146 => 51,  138 => 46,  134 => 45,  130 => 44,  125 => 43,  123 => 42,  115 => 37,  111 => 36,  105 => 33,  101 => 32,  96 => 30,  92 => 29,  85 => 25,  78 => 22,  75 => 21,  69 => 19,  64 => 17,  59 => 15,  53 => 14,  48 => 13,  45 => 12,  39 => 10,  37 => 9,  32 => 7,  29 => 6,  26 => 4,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/layouts/outline.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/layouts/outline.html.twig");
    }
}
