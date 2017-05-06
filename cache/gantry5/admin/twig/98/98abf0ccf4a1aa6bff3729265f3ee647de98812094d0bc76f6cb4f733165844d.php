<?php

/* @gantry-admin/pages/configurations/configurations.html.twig */
class __TwigTemplate_00d80f1194d410a640b456bed34e79499ea854649a34ba359283ff822a546f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/configurations.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"configurations\">
        <div class=\"menu-header\">
        <span class=\"float-right\">
            <button class=\"button button-back-to-conf\" tabindex=\"0\"
                    aria-label=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BACK_SETUP"), "html", null, true);
        echo "\"><i class=\"fa fa-fw fa-fw fa-arrow-left\" aria-hidden=\"true\"></i>
                <span>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BACK_SETUP"), "html", null, true);
        echo "</span></button>
        </span>
            <h2 class=\"page-title\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OUTLINES"), "html", null, true);
        echo "
                ";
        // line 13
        if ($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "outline.create"), "method")) {
            // line 14
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => "create"), "method"), "html", null, true);
            echo "\"
                   title=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_OUTLINE"), "html", null, true);
            echo "\"
                   aria-label=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_OUTLINE"), "html", null, true);
            echo "\"
                   data-g5-outline-create class=\"button button-primary\">
                    <i class=\"fa fa-fw fa-plus\" aria-hidden=\"true\"></i>
                </a>
                ";
        }
        // line 21
        echo "            </h2>
        </div>

        <ul class=\"g-grid\">
            <li class=\"card g-block size-1-4\">
                ";
        // line 26
        $context["name"] = "default";
        // line 27
        echo "                ";
        $this->loadTemplate("@gantry-admin/layouts/outline.html.twig", "@gantry-admin/pages/configurations/configurations.html.twig", 27)->display($context);
        // line 28
        echo "            </li>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "user", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 30
            echo "                <li class=\"card g-block size-1-4";
            echo (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "isDefault", array(0 => $context["name"]), "method")) ? (" outline-is-default") : (""));
            echo "\">
                    ";
            // line 31
            $this->loadTemplate("@gantry-admin/layouts/outline.html.twig", "@gantry-admin/pages/configurations/configurations.html.twig", 31)->display($context);
            // line 32
            echo "                </li>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            ";
        if ($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "outline.create"), "method")) {
            // line 35
            echo "            <li class=\"card g-block size-1-4 add-new\">
                <div class=\"page\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => "create"), "method"), "html", null, true);
            echo "\"
                       title=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_OUTLINE"), "html", null, true);
            echo "\"
                       aria-label=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ADD_NEW_OUTLINE"), "html", null, true);
            echo "\"
                       data-g5-outline-create tabindex=\"0\">
                        <i class=\"fa fa-fw fa-plus\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </li>
            ";
        }
        // line 46
        echo "        </ul>

        <h2>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SYSTEM_OUTLINES"), "html", null, true);
        echo "</h2>
        <ul class=\"g-grid\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "system", array()));
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 51
            echo "                ";
            $context["preset"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "layoutPreset", array(0 => $context["name"]), "method");
            // line 52
            echo "                <li class=\"card g-block size-1-4\">
                    <div class=\"page\">
                        <h4>";
            // line 54
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " <span class=\"float-right font-small\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ID_X", $context["name"]), "html", null, true);
            echo ")</span></h4>
                        <div class=\"inner-params\">
                            <img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc((($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array()), "gantry-admin://images/layouts/default.png")) : ("gantry-admin://images/layouts/default.png"))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"inner-params\">
                            <div class=\"center\">
                                <a data-tip=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT"), "html", null, true);
            echo "\"
                                   title=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_X", $context["title"]), "html", null, true);
            echo "\"
                                   aria-label=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_X", $context["title"]), "html", null, true);
            echo "\"
                                   data-g5-ajaxify=\"\"
                                   data-g5-ajaxify-target=\"[data-g5-content-wrapper]\"
                                   data-g5-ajaxify-params=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
            echo "\"
                                   href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"], 2 => "styles"), "method"), "html", null, true);
            echo "\"
                                   class=\"button button-primary\">
                                    <i class=\"fa fa-fw fa-pencil\" aria-hidden=\"true\"></i>
                                </a>
                                ";
            // line 70
            if ($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "authorize", array(0 => "outline.create"), "method")) {
                // line 71
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"], 2 => "duplicate"), "method"), "html", null, true);
                echo "\"
                                   data-tip=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE"), "html", null, true);
                echo "\"
                                   title=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE_X", $context["title"]), "html", null, true);
                echo "\"
                                   aria-label=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DUPLICATE_X", $context["title"]), "html", null, true);
                echo "\"
                                   data-g5-outline-duplicate class=\"button button-secondary\">
                                    <i class=\"fa fa-fw fa-copy\" aria-hidden=\"true\"></i>
                                </a>
                                ";
            }
            // line 79
            echo "                            </div>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/configurations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 84,  230 => 79,  222 => 74,  218 => 73,  214 => 72,  209 => 71,  207 => 70,  200 => 66,  196 => 65,  190 => 62,  186 => 61,  182 => 60,  175 => 56,  168 => 54,  164 => 52,  161 => 51,  157 => 50,  152 => 48,  148 => 46,  138 => 39,  134 => 38,  130 => 37,  126 => 35,  123 => 34,  108 => 32,  106 => 31,  101 => 30,  84 => 29,  81 => 28,  78 => 27,  76 => 26,  69 => 21,  61 => 16,  57 => 15,  52 => 14,  50 => 13,  46 => 12,  40 => 9,  36 => 8,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/configurations/configurations.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/pages/configurations/configurations.html.twig");
    }
}
