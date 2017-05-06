<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_7c9fdd0cb150d3bf8114b22325ffcada3406dee5b8535c2d11d553bdce1b5810 extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_a768be58d5e563c87efe4de8da96dca35dffdbdf7315f0f4950b373c9ab0dd2e = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_6712b0c2f0b2ba49855238e1bf2c977d1e654448e8425d5ab757d6eca223b6bb = "5.4") && ('' === $__internal_6712b0c2f0b2ba49855238e1bf2c977d1e654448e8425d5ab757d6eca223b6bb || 0 === strpos($__internal_a768be58d5e563c87efe4de8da96dca35dffdbdf7315f0f4950b373c9ab0dd2e, $__internal_6712b0c2f0b2ba49855238e1bf2c977d1e654448e8425d5ab757d6eca223b6bb)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/home/aljoykz/horest.kz/administrator/components/com_gantry5/templates/partials/php_unsupported.html.twig");
    }
}
