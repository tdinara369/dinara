<?php

/* @particles/analytics.html.twig */
class __TwigTemplate_fc15f626742b9b7f10d4e0ecebdc7b9c7f22959224bd5d61ec9e58156b01037c extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "ua", array()), "code", array())) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })";
            // line 6
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "ua", array()), "debug", array())) {
                echo "(window,document,'script','//www.google-analytics.com/analytics_debug.js','ga');";
            } else {
                echo "(window,document,'script','//www.google-analytics.com/analytics.js','ga');";
            }
            // line 7
            echo "    ga('create', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "ua", array()), "code", array()), "html", null, true);
            echo "', 'auto');
    ";
            // line 8
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "ua", array()), "anonym", array())) {
                // line 9
                echo "    ga('set', 'anonymizeIp', true);
    ";
            }
            // line 11
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "ua", array()), "ssl", array())) {
                // line 12
                echo "    ga('set', 'forceSSL', true);
    ";
            }
            // line 14
            echo "    ga('send', 'pageview');
    ";
            $context["script"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "
    ";
            // line 17
            $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "document", array()), "addInlineScript", array(0 => (isset($context["script"]) ? $context["script"] : null), 1 => 0), "method");
        }
    }

    public function getTemplateName()
    {
        return "@particles/analytics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  57 => 16,  53 => 14,  49 => 12,  46 => 11,  42 => 9,  40 => 8,  35 => 7,  29 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/analytics.html.twig", "/home/aljoykz/horest.kz/media/gantry5/engines/nucleus/particles/analytics.html.twig");
    }
}
