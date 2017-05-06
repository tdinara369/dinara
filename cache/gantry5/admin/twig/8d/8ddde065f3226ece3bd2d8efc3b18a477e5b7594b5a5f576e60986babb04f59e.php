<?php

/* @gantry-admin/pages/configurations/settings/settings.html.twig */
class __TwigTemplate_b79f97ac01c6194ff2bbcfaff7585c230ccb3aaaa677e2dd05ba745fef9e611c extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/settings/settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "particles", array()), "overrides", array(0 => (isset($context["configuration"]) ? $context["configuration"] : null)), "method") || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "request", array()), "get", array()), "get", array(0 => "enable"), "method"))) {
            // line 5
            echo "    ";
            $context["stored_data"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->jsonDecodeFilter(_twig_default_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->getCookie("g5-collapsed"), "{}"));
            // line 6
            echo "    <div id=\"settings\">
        <form method=\"post\">
            <div data-set-page=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null), "html", null, true);
            echo "\" data-set-root=\"\">
                <span class=\"float-right\">
                    <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Particle Defaults\">
                    <i class=\"fa fa-fw fa-check\" aria-hidden=\"true\"></i> <span>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SAVE_PARTICLE_DEFAULTS"), "html", null, true);
            echo "</span></button>
                </span>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["particles"]) ? $context["particles"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["group"] => $context["list"]) {
                if (($context["list"] && ($context["group"] != "hidden"))) {
                    // line 14
                    echo "                    <h2 class=\"page-title\">
                        <span class=\"title\">";
                    // line 15
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DEFAULTS"), "html", null, true);
                    echo "</span>
                    </h2>

                    <div class=\"g-filter-actions\">
                        <div class=\"g-panel-filters\" data-g-global-filter=\"\">
                            <div class=\"search settings-block\">
                                <input type=\"text\" data-g-collapse-filter placeholder=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
                    echo "...\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
                    echo "...\" role=\"search\" />
                                <i class=\"fa fa-fw fa-search\" aria-hidden=\"true\"></i>
                            </div>
                            <button class=\"button\" type=\"button\" data-g-collapse-all=\"true\"><i class=\"fa fa-fw fa-toggle-up\" aria-hidden=\"true\"></i> ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_COLLAPSE_ALL"), "html", null, true);
                    echo "</button>
                            <button class=\"button\" type=\"button\" data-g-collapse-all=\"false\"><i class=\"fa fa-fw fa-toggle-down\" aria-hidden=\"true\"></i> ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXPAND_ALL"), "html", null, true);
                    echo "</button>
                        </div>
                    </div>

                    <div class=\"cards-wrapper g-grid\">
                        ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["list"]);
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
                    foreach ($context['_seq'] as $context["id"] => $context["particle"]) {
                        // line 31
                        echo "                            ";
                        if ( !$this->getAttribute($context["particle"], "hidden", array())) {
                            // line 32
                            echo "                                ";
                            $context["particle"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "particles", array()), "getBlueprintForm", array(0 => $context["id"]), "method");
                            // line 33
                            echo "                                ";
                            $context["prefix"] = (("particles." . $context["id"]) . ".");
                            // line 34
                            echo "                                ";
                            $context["collapsed"] = ($this->getAttribute($this->getAttribute($context["particle"], "form", array()), "collapsed", array()) || $this->getAttribute((isset($context["stored_data"]) ? $context["stored_data"] : null), (isset($context["prefix"]) ? $context["prefix"] : null)));
                            // line 35
                            echo "                                ";
                            $context["labels"] = array("collapse" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_COLLAPSE"), "expand" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXPAND"));
                            // line 36
                            echo "                                <div class=\"card settings-block";
                            echo (((isset($context["collapsed"]) ? $context["collapsed"] : null)) ? (" g-collapsed") : (""));
                            echo "\">
                                    <input type=\"hidden\" name=\"particles[";
                            // line 37
                            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                            echo "]\"/>
                                    <h4 data-g-collapse=\"";
                            // line 38
                            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["labels"]) ? $context["labels"] : null), array("collapsed" => (((isset($context["collapsed"]) ? $context["collapsed"] : null)) ? (true) : (false)), "id" => (isset($context["prefix"]) ? $context["prefix"] : null), "target" => "~ .inner-params"))), "html_attr");
                            echo "\"
                                        data-g-collapse-id=\"";
                            // line 39
                            echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
                            echo "\"
                                        ";
                            // line 40
                            echo (((isset($context["overrideable"]) ? $context["overrideable"] : null)) ? (" class=\"card-overrideable\"") : (""));
                            echo "
                                    >
                                        <span class=\"g-collapse\" data-title=\"";
                            // line 42
                            echo twig_escape_filter($this->env, (((isset($context["collapsed"]) ? $context["collapsed"] : null)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "expand", array())) : ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "collapse", array()))), "html", null, true);
                            echo "\" data-tip=\"";
                            echo twig_escape_filter($this->env, (((isset($context["collapsed"]) ? $context["collapsed"] : null)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "expand", array())) : ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "collapse", array()))), "html", null, true);
                            echo "\" data-tip-place=\"top-right\"><i class=\"fa fa-fw fa-caret-up\" aria-hidden=\"true\"></i></span>
                                        <span class=\"g-title\">";
                            // line 43
                            echo twig_escape_filter($this->env, $this->getAttribute($context["particle"], "name", array()), "html", null, true);
                            echo "</span>
                                        ";
                            // line 44
                            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["particle"], "form", array()), "fields", array()), "enabled", array())) {
                                // line 45
                                echo "                                            ";
                                $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/configurations/settings/settings.html.twig", 45)->display(array_merge($context, array("default" => true, "scope" => (isset($context["prefix"]) ? $context["prefix"] : null), "name" => "enabled", "field" => $this->getAttribute($this->getAttribute($this->getAttribute($context["particle"], "form", array()), "fields", array()), "enabled", array()), "value" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "enabled")), "method"))));
                                // line 46
                                echo "
                                            ";
                                // line 47
                                if ((isset($context["overrideable"]) ? $context["overrideable"] : null)) {
                                    // line 48
                                    echo "                                                ";
                                    $this->loadTemplate("forms/override.html.twig", "@gantry-admin/pages/configurations/settings/settings.html.twig", 48)->display(array_merge($context, array("scope" => (isset($context["prefix"]) ? $context["prefix"] : null), "name" => "enabled", "has_value" =>  !(null === $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "get", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "enabled")), "method")), "field" => array("label" => (("Enabled of the " . $this->getAttribute($context["particle"], "name", array())) . " Particle")))));
                                    // line 49
                                    echo "                                            ";
                                }
                                // line 50
                                echo "                                        ";
                            }
                            // line 51
                            echo "                                    </h4>

                                    <div class=\"inner-params\">
                                        ";
                            // line 54
                            $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/settings/settings.html.twig", 54)->display(array_merge($context, array("ignore_not_overrideable" => true, "overrideable" => (isset($context["overrideable"]) ? $context["overrideable"] : null), "not_global_overrideable" => ($this->getAttribute($this->getAttribute($context["particle"], "form", array()), "overrideable", array()) === false), "blueprints" => $this->getAttribute($context["particle"], "form", array()), "skip" => array(0 => "enabled"), "data" => (isset($context["data"]) ? $context["data"] : null), "prefix" => (isset($context["prefix"]) ? $context["prefix"] : null))));
                            // line 55
                            echo "                                    </div>
                                </div>
                            ";
                        }
                        // line 58
                        echo "                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['id'], $context['particle'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                    </div>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group'], $context['list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
                <div class=\"g-footer-actions\">
                    <span class=\"float-right\">
                        <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Particle Defaults\">
                            <i class=\"fa fa-fw fa-check\" aria-hidden=\"true\"></i> <span>";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SAVE_PARTICLE_DEFAULTS"), "html", null, true);
            echo "</span></button>
                    </span>
                </div>
            </div>
            <input type=\"hidden\" name=\"_end\" value=\"1\" />
        </form>
        ";
        } else {
            // line 72
            echo "            ";
            ob_start();
            echo "data-g5-ajaxify=\"\" data-g5-nav=\"settings\" data-g5-ajaxify-target=\"[data-g5-content-wrapper]\" data-g5-ajaxify-params=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
            echo "\"";
            $context["ajaxify"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 73
            echo "            <h2 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE_DEFAULTS"), "html", null, true);
            echo "</h2>
            <p>";
            // line 74
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE_DEFAULTS_FROM_BASE", (isset($context["ajaxify"]) ? $context["ajaxify"] : null), $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations/default/settings"), "method"), $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE"));
            echo "</p>
            <p>";
            // line 75
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE_DEFAULTS_ENTER", (isset($context["ajaxify"]) ? $context["ajaxify"] : null), ($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["configuration"]) ? $context["configuration"] : null), 2 => "settings"), "method") . "&enable=1"));
            echo "</p>
            <p class=\"alert alert-notice\">";
            // line 76
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE_DEFAULTS_WARNING", $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PARTICLE_DEFAULTS"));
            echo "</p>
        ";
        }
        // line 78
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/settings/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 78,  256 => 76,  252 => 75,  248 => 74,  243 => 73,  236 => 72,  226 => 65,  220 => 61,  209 => 59,  195 => 58,  190 => 55,  188 => 54,  183 => 51,  180 => 50,  177 => 49,  174 => 48,  172 => 47,  169 => 46,  166 => 45,  164 => 44,  160 => 43,  154 => 42,  149 => 40,  145 => 39,  141 => 38,  137 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  100 => 30,  92 => 25,  88 => 24,  76 => 21,  65 => 15,  62 => 14,  51 => 13,  46 => 11,  40 => 8,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/configurations/settings/settings.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/pages/configurations/settings/settings.html.twig");
    }
}
