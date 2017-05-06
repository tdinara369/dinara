<?php

/* forms/fields.html.twig */
class __TwigTemplate_0a59bfb317655102885bebd438359d34c22a885703f8f28a95e7a9270c1aae90 extends Twig_Template
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
        $context["scope"] = (((array_key_exists("scope", $context) &&  !(null === (isset($context["scope"]) ? $context["scope"] : null)))) ? ((isset($context["scope"]) ? $context["scope"] : null)) : ((isset($context["prefix"]) ? $context["prefix"] : null)));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "type", array())) {
            // line 4
            echo "    ";
            $context["field"] = (isset($context["blueprints"]) ? $context["blueprints"] : null);
            // line 5
            echo "    ";
            $context["current_value"] = (isset($context["data"]) ? $context["data"] : null);
            // line 6
            echo "    ";
            $context["default_value"] = (isset($context["defaults"]) ? $context["defaults"] : null);
            // line 7
            echo "
    ";
            // line 8
            $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields.html.twig", 8)->display($context);
            // line 9
            echo "
";
        } else {
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "fields", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["field"]) {
                // line 13
                echo "        ";
                if ((is_string($__internal_cc4f3417e314f89cac9e95c3a6a7664557154c567dc90f2e3e95eaff2828a03d = $context["name"]) && is_string($__internal_4d3390b461d52bb19f335de8a48eaec86ac6610e6e04d127e38b188fe540f08d = ".") && ('' === $__internal_4d3390b461d52bb19f335de8a48eaec86ac6610e6e04d127e38b188fe540f08d || 0 === strpos($__internal_cc4f3417e314f89cac9e95c3a6a7664557154c567dc90f2e3e95eaff2828a03d, $__internal_4d3390b461d52bb19f335de8a48eaec86ac6610e6e04d127e38b188fe540f08d)))) {
                    // line 14
                    echo "            ";
                    $context["name"] = twig_slice($this->env, $context["name"], 1, null);
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "
        ";
                // line 17
                $context["container"] = ($this->getAttribute($context["field"], "type", array()) == "container.tabs");
                // line 18
                echo "        ";
                $context["current_value"] = (((isset($context["container"]) ? $context["container"] : null)) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), twig_trim_filter((isset($context["scope"]) ? $context["scope"] : null), "."))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["name"]))));
                // line 19
                echo "        ";
                $context["default_value"] = (((isset($context["container"]) ? $context["container"] : null)) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), twig_trim_filter((isset($context["scope"]) ? $context["scope"] : null), "."))) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["name"]))));
                // line 20
                echo "        ";
                $context["has_value"] =  !(null === (isset($context["current_value"]) ? $context["current_value"] : null));
                // line 21
                echo "        ";
                $context["field_overrideable"] = (($this->getAttribute($context["field"], "overridable", array(), "any", true, true)) ? ($this->getAttribute($context["field"], "overridable", array())) : ((($this->getAttribute($context["field"], "overrideable", array(), "any", true, true)) ? ($this->getAttribute($context["field"], "overrideable", array())) : (true))));
                // line 22
                echo "
        ";
                // line 23
                if ((((($this->getAttribute($context["field"], "type", array()) && !twig_in_filter($context["name"], (isset($context["skip"]) ? $context["skip"] : null))) &&  !$this->getAttribute($context["field"], "skip", array())) &&  !(((isset($context["ignore_not_overrideable"]) ? $context["ignore_not_overrideable"] : null) &&  !(isset($context["field_overrideable"]) ? $context["field_overrideable"] : null)) &&  !(isset($context["has_value"]) ? $context["has_value"] : null))) &&  !( !(isset($context["has_value"]) ? $context["has_value"] : null) && (isset($context["not_global_overrideable"]) ? $context["not_global_overrideable"] : null)))) {
                    // line 24
                    echo "            ";
                    $context["field"] = ($context["field"] + array("name" => $context["name"]));
                    // line 25
                    echo "
            ";
                    // line 26
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["field"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields.html.twig", 26)->display($context);
                    // line 27
                    echo "        ";
                }
                // line 28
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "forms/fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  103 => 27,  101 => 26,  98 => 25,  95 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  76 => 17,  73 => 16,  70 => 15,  67 => 14,  64 => 13,  47 => 12,  44 => 11,  40 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/forms/fields.html.twig");
    }
}
