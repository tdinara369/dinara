<?php

/* @nucleus/layout/offcanvas.html.twig */
class __TwigTemplate_dda090b9d9f71f559d4c1491b3d8d9b6d7a0482e2a8c834fa17cf3220a67f944 extends Twig_Template
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
        $context["attr_class"] = (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array())) ? (((" class=\"" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array()))) . "\"")) : (""));
        // line 2
        $context["attr_extra"] = "";
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "extra", array())) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    echo "            ";
                    $context["attr_extra"] = ((((((isset($context["attr_extra"]) ? $context["attr_extra"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                    // line 8
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 11
        echo "
";
        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 14
            echo "        ";
            $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["child"], "type", array())) . ".html.twig"), "@nucleus/layout/offcanvas.html.twig", 14)->display(array_merge($context, array("segments" => $this->getAttribute($context["child"], "children", array()))));
            // line 15
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["offcanvas"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "sticky", array()) || twig_trim_filter((isset($context["offcanvas"]) ? $context["offcanvas"] : null)))) {
            // line 19
            echo "<div id=\"g-offcanvas\" ";
            echo (isset($context["attr_class"]) ? $context["attr_class"] : null);
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            echo " data-g-offcanvas-swipe=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array(), "any", false, true), "swipe", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array(), "any", false, true), "swipe", array()), "1")) : ("1")), "html", null, true);
            echo "\" data-g-offcanvas-css3=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array(), "any", false, true), "css3animation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array(), "any", false, true), "css3animation", array()), "1")) : ("1")), "html", null, true);
            echo "\">
    ";
            // line 20
            echo (isset($context["offcanvas"]) ? $context["offcanvas"] : null);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  100 => 19,  98 => 18,  95 => 17,  80 => 15,  77 => 14,  59 => 13,  57 => 12,  54 => 11,  47 => 9,  41 => 8,  38 => 7,  33 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@nucleus/layout/offcanvas.html.twig", "/home/aljoykz/horest.kz/media/gantry5/engines/nucleus/templates/layout/offcanvas.html.twig");
    }
}
