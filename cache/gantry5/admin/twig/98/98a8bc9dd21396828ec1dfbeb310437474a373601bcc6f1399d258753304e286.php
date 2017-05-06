<?php

/* @gantry-admin/modals/module-picker.html.twig */
class __TwigTemplate_c067ab79f265ccabf8f99a5fa3eb92215f6b7602c308273a266f728c5244ea27 extends Twig_Template
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
        // line 5
        echo "<div data-mm-particle-stepone=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/particle"), "method"), "html", null, true);
        echo "\" class=\"menu-editor-extras\">
    <div class=\"card settings-block\">
        <h4>
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PICK_MODULE"), "html", null, true);
        echo "
        </h4>
        <div class=\"inner-params\">
            <div class=\"g5-mm-modules-picker menu-editor-modules\">
                <div class=\"search settings-block\">
                    <input type=\"text\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SEARCH_ELI"), "html", null, true);
        echo "\" />
                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </div>
                <div class=\"modules-wrapper\">
                    <ul>
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "listModules", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 19
            echo "                        <li data-mm-module=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" data-mm-type=\"module\">
                            <span class=\"module-infos\">
                                <span data-title=\"";
            // line 21
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["module"], "enabled", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PUBLISHED")) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_UNPUBLISHED"))) . " / ") . $this->getAttribute($context["module"], "access", array())), "html", null, true);
            echo "\"
                                      data-tip=\"";
            // line 22
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["module"], "enabled", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PUBLISHED")) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_UNPUBLISHED"))) . " / ") . $this->getAttribute($context["module"], "access", array())), "html", null, true);
            echo "\"
                                      data-tip-place=\"top-left\"
                                >
                                    <i class=\"fa fa-fw fa-";
            // line 25
            echo (($this->getAttribute($context["module"], "enabled", array())) ? ("toggle-on") : ("toggle-off"));
            echo "\" aria-hidden=\"true\"></i>
                                </span>
                            </span>
                            <span class=\"module-wrapper\">
                                <span class=\"title\" data-mm-title=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "title", array()), "html", null, true);
            echo "\" data-mm-filter=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "title", array()), "html", null, true);
            echo "\">
                                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "title", array()), "html", null, true);
            echo "
                                </span>
                                <span class=\"sub-title font-small\">
                                    <strong>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ID_UPPER"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["module"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "id", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "
                                </span>
                                <span class=\"sub-title font-small\" data-mm-filter=\"";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute($context["module"], "module", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "module", array()), "none")) : ("none")), "html", null, true);
            echo "\">
                                    <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_TYPE"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["module"], "module", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "module", array()), "none")) : ("none")), "html", null, true);
            echo "
                                </span>
                                <span class=\"sub-title font-small\">
                                    <strong>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITION"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["module"], "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["module"], "position", array()), "none")) : ("none")), "html", null, true);
            echo "
                                </span>
                            </span>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"g-modal-actions\">
        ";
        // line 51
        echo "        <button class=\"button button-primary\" type=\"submit\" data-mm-select disabled>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo "</button>
        <button class=\"button g5-dialog-close\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/modals/module-picker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  121 => 51,  113 => 44,  100 => 39,  92 => 36,  88 => 35,  81 => 33,  75 => 30,  69 => 29,  62 => 25,  56 => 22,  52 => 21,  46 => 19,  42 => 18,  34 => 13,  26 => 8,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/modals/module-picker.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/modals/module-picker.html.twig");
    }
}
