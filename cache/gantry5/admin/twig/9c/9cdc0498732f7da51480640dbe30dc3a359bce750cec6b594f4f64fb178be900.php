<?php

/* forms/fields/container/tabs.html.twig */
class __TwigTemplate_72602fe70f3be49ae7594d14ab6edb73023dfc6c20cc036430a4c3e998807cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'overridable' => array($this, 'block_overridable'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/container/tabs.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_overridable($context, array $blocks = array())
    {
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"g5-tabs-container\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 10
            echo "            ";
            $context["tabs"] = array();
            // line 11
            echo "            ";
            $context["panes"] = array();
            // line 12
            echo "            ";
            $context["fieldId"] = (("g-tabs-container-" . $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((isset($context["name"]) ? $context["name"] : null))) . "-");
            // line 13
            echo "
            ";
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
            foreach ($context['_seq'] as $context["tab"] => $context["content"]) {
                // line 16
                echo "                ";
                if (( !(isset($context["ignore_not_overrideable"]) ? $context["ignore_not_overrideable"] : null) || ( !$this->getAttribute($context["content"], "overridable", array(), "any", true, true) || $this->getAttribute($context["content"], "overridable", array())))) {
                    // line 17
                    echo "                    ";
                    $context["tabs"] = twig_array_merge((isset($context["tabs"]) ? $context["tabs"] : null), array(0 => (($this->getAttribute($context["content"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["content"], "label", array()), $context["tab"])) : ($context["tab"]))));
                    // line 18
                    echo "                    ";
                    $context["panes"] = twig_array_merge((isset($context["panes"]) ? $context["panes"] : null), array(0 => (($this->getAttribute($context["content"], "fields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["content"], "fields", array()), array())) : (array()))));
                    // line 19
                    echo "                ";
                }
                // line 20
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
            <div class=\"g-tabs\" role=\"tablist\">
                <ul>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 25
                echo "                        <li ";
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("class=\"active\"") : (""));
                echo ">
                            <a href=\"#\"
                               id=\"";
                // line 27
                echo twig_escape_filter($this->env, (((isset($context["fieldId"]) ? $context["fieldId"] : null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-tab")), "html", null, true);
                echo "\"
                               aria-controls=\"";
                // line 28
                echo twig_escape_filter($this->env, (((isset($context["fieldId"]) ? $context["fieldId"] : null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-pane")), "html", null, true);
                echo "\"
                               aria-expanded=\"";
                // line 29
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("true") : ("false"));
                echo "\"
                               role=\"presentation\"><span>";
                // line 30
                echo twig_escape_filter($this->env, $context["tab"], "html", null, true);
                echo "</span></a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </ul>
            </div>

            <div class=\"g-panes\">
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panes"]) ? $context["panes"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["pane"]) {
                // line 38
                echo "                    <div class=\"g-pane clearfix ";
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("active") : (""));
                echo "\"
                         role=\"tabpanel\"
                         id=\"";
                // line 40
                echo twig_escape_filter($this->env, (((isset($context["fieldId"]) ? $context["fieldId"] : null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-pane")), "html", null, true);
                echo "\"
                         aria-labelledby=\"";
                // line 41
                echo twig_escape_filter($this->env, (((isset($context["fieldId"]) ? $context["fieldId"] : null) . $this->getAttribute($context["loop"], "index0", array())) . twig_lower_filter($this->env, "-tab")), "html", null, true);
                echo "\"
                         aria-expanded=\"";
                // line 42
                echo (( !$this->getAttribute($context["loop"], "index0", array())) ? ("true") : ("false"));
                echo "\">
                        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["pane"]);
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
                foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                    // line 44
                    echo "                            ";
                    if ((is_string($__internal_cb8227a31f0cd95d4dca32cab8452b9823beef030449a5987b4c4fe436c58b78 = $context["childName"]) && is_string($__internal_c9e6ab10f139382f633b6db216f3a888cd7e81dcd4fcfb445085ed886f0f580d = ".") && ('' === $__internal_c9e6ab10f139382f633b6db216f3a888cd7e81dcd4fcfb445085ed886f0f580d || 0 === strpos($__internal_cb8227a31f0cd95d4dca32cab8452b9823beef030449a5987b4c4fe436c58b78, $__internal_c9e6ab10f139382f633b6db216f3a888cd7e81dcd4fcfb445085ed886f0f580d)))) {
                        // line 45
                        echo "                                ";
                        $context["childKey"] = twig_trim_filter($context["childName"], ".");
                        // line 46
                        echo "                                ";
                        $context["childValue"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["value"]) ? $context["value"] : null), (isset($context["childKey"]) ? $context["childKey"] : null));
                        // line 47
                        echo "                                ";
                        $context["childDefault"] = null;
                        // line 48
                        echo "                            ";
                    } else {
                        // line 49
                        echo "                                ";
                        $context["container"] = ($this->getAttribute($context["child"], "type", array()) == "container.tabs");
                        // line 50
                        echo "                                ";
                        $context["childKey"] = $context["childName"];
                        // line 51
                        echo "                                ";
                        $context["childValue"] = (((isset($context["container"]) ? $context["container"] : null)) ? ((isset($context["value"]) ? $context["value"] : null)) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["childKey"]) ? $context["childKey"] : null)))));
                        // line 52
                        echo "                                ";
                        $context["childDefault"] = (((isset($context["container"]) ? $context["container"] : null)) ? ((isset($context["defaults"]) ? $context["defaults"] : null)) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["childKey"]) ? $context["childKey"] : null)))));
                        // line 53
                        echo "                            ";
                    }
                    // line 54
                    echo "                            ";
                    $context["childName"] = ((isset($context["parent_field"]) ? $context["parent_field"] : null) . twig_trim_filter($context["childName"], "."));
                    // line 55
                    echo "
                            ";
                    // line 56
                    if ($this->getAttribute($context["child"], "type", array())) {
                        // line 57
                        echo "                                ";
                        $context["child_overrideable"] = (($this->getAttribute($context["child"], "overridable", array(), "any", true, true)) ? ($this->getAttribute($context["child"], "overridable", array())) : ((($this->getAttribute($context["child"], "overrideable", array(), "any", true, true)) ? ($this->getAttribute($context["child"], "overrideable", array())) : (true))));
                        // line 58
                        echo "
                                ";
                        // line 59
                        if (((($this->getAttribute($context["child"], "type", array()) &&  !$this->getAttribute($context["child"], "skip", array())) &&  !(((isset($context["ignore_not_overrideable"]) ? $context["ignore_not_overrideable"] : null) &&  !(isset($context["child_overrideable"]) ? $context["child_overrideable"] : null)) && (null === (isset($context["childValue"]) ? $context["childValue"] : null)))) &&  !((null === (isset($context["childValue"]) ? $context["childValue"] : null)) && (isset($context["not_global_overrideable"]) ? $context["not_global_overrideable"] : null)))) {
                            // line 60
                            echo "                                    ";
                            $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/container/tabs.html.twig", 60)->display(array_merge($context, array("name" =>                             // line 61
$context["childName"], "field" => $context["child"], "current_value" => (isset($context["childValue"]) ? $context["childValue"] : null), "value" => null, "default_value" => (isset($context["childDefault"]) ? $context["childDefault"] : null), "overrideable" => ((isset($context["overrideable"]) ? $context["overrideable"] : null) && (isset($context["child_overrideable"]) ? $context["child_overrideable"] : null)))));
                            // line 62
                            echo "                                ";
                        }
                        // line 63
                        echo "                            ";
                    }
                    // line 64
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
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pane'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </div>

        ";
        }
        // line 70
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/container/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 70,  276 => 67,  261 => 65,  247 => 64,  244 => 63,  241 => 62,  239 => 61,  237 => 60,  235 => 59,  232 => 58,  229 => 57,  227 => 56,  224 => 55,  221 => 54,  218 => 53,  215 => 52,  212 => 51,  209 => 50,  206 => 49,  203 => 48,  200 => 47,  197 => 46,  194 => 45,  191 => 44,  174 => 43,  170 => 42,  166 => 41,  162 => 40,  156 => 38,  139 => 37,  133 => 33,  116 => 30,  112 => 29,  108 => 28,  104 => 27,  98 => 25,  81 => 24,  76 => 21,  70 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  53 => 15,  50 => 13,  47 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/container/tabs.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/forms/fields/container/tabs.html.twig");
    }
}
