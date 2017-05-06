<?php

/* @particles/contentarray.html.twig */
class __TwigTemplate_ec5af2455aadc06b169304eb8e61590f2f18c482529bb58d84d3dca6914fd51d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentarray.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = ((((((isset($context["attr_extra"]) ? $context["attr_extra"] : null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_particle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["article_settings"] = $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "article", array());
        // line 14
        echo "    ";
        $context["filter"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "filter", array());
        // line 15
        echo "    ";
        $context["sort"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "sort", array());
        // line 16
        echo "    ";
        $context["limit"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "limit", array());
        // line 17
        echo "    ";
        $context["display"] = $this->getAttribute((isset($context["article_settings"]) ? $context["article_settings"] : null), "display", array());
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $context["category_options"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categories", array())) ? (array("id" => array(0 => twig_split_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "categories", array()), ","), 1 => 0))) : (array()));
        // line 21
        echo "    ";
        $context["categories"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "finder", array(0 => "category", 1 => (isset($context["category_options"]) ? $context["category_options"] : null)), "method"), "published", array(0 => 1), "method"), "language", array(), "method"), "limit", array(0 => 0), "method"), "find", array(), "method");
        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        if ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "articles", array())) {
            // line 25
            echo "        ";
            $context["article_options"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "articles", array())) ? (array("id" => array(0 => twig_split_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "articles", array()), " ", ""), ",")))) : (array()));
            // line 26
            echo "        ";
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "finder", array(0 => "content", 1 => (isset($context["article_options"]) ? $context["article_options"] : null)), "method"), "published", array(0 => 1), "method"), "language", array(), "method");
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        ";
            $context["article_finder"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["joomla"]) ? $context["joomla"] : null), "finder", array(0 => "content"), "method"), "category", array(0 => (isset($context["categories"]) ? $context["categories"] : null)), "method"), "published", array(0 => 1), "method"), "language", array(), "method");
            // line 29
            echo "    ";
        }
        // line 30
        echo "
    ";
        // line 31
        $context["featured"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "featured", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "featured", array()), "include")) : ("include"));
        // line 32
        echo "    ";
        if (((isset($context["featured"]) ? $context["featured"] : null) == "exclude")) {
            // line 33
            echo "        ";
            $this->getAttribute((isset($context["article_finder"]) ? $context["article_finder"] : null), "featured", array(0 => false), "method");
            // line 34
            echo "    ";
        } elseif (((isset($context["featured"]) ? $context["featured"] : null) == "only")) {
            // line 35
            echo "        ";
            $this->getAttribute((isset($context["article_finder"]) ? $context["article_finder"] : null), "featured", array(0 => true), "method");
            // line 36
            echo "    ";
        }
        // line 37
        echo "
    ";
        // line 38
        $context["articles"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["article_finder"]) ? $context["article_finder"] : null), "order", array(0 => $this->getAttribute((isset($context["sort"]) ? $context["sort"] : null), "orderby", array()), 1 => $this->getAttribute((isset($context["sort"]) ? $context["sort"] : null), "ordering", array())), "method"), "limit", array(0 => $this->getAttribute((isset($context["limit"]) ? $context["limit"] : null), "total", array())), "method"), "start", array(0 => $this->getAttribute((isset($context["limit"]) ? $context["limit"] : null), "start", array())), "method"), "find", array(), "method");
        // line 39
        echo "
    ";
        // line 41
        echo "    <div class=\"g-content-array g-joomla-articles";
        if ($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "css", array()), "class", array()), "html", null, true);
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "extra", array())) {
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
        }
        echo ">

        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["articles"]) ? $context["articles"] : null), $this->getAttribute((isset($context["limit"]) ? $context["limit"] : null), "columns", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 44
            echo "            <div class=\"g-grid\">
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 46
                echo "
                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            <div class=\"g-array-item\">
                                ";
                // line 50
                if ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())) || $this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()))) {
                    // line 51
                    echo "                                    ";
                    if ((($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()) && ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "intro")) || ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "show"))) {
                        // line 52
                        echo "                                        <div class=\"g-array-item-image\">
                                            <a href=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
                                                <img src=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_intro", array()));
                        echo " />
                                            </a>
                                        </div>
                                    ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 57
$context["article"], "images", array()), "image_fulltext", array()) && ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "image", array()), "enabled", array()) == "full"))) {
                        // line 58
                        echo "                                        <div class=\"g-array-item-image\">
                                            <a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                        echo "\">
                                                <img src=\"";
                        // line 60
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array())), "html", null, true);
                        echo "\" ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->imageSize($this->getAttribute($this->getAttribute($context["article"], "images", array()), "image_fulltext", array()));
                        echo " />
                                            </a>
                                        </div>
                                    ";
                    }
                    // line 64
                    echo "                                ";
                }
                // line 65
                echo "
                                ";
                // line 66
                if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "enabled", array())) {
                    // line 67
                    echo "                                    <div class=\"g-array-item-title\">
                                        <h3 class=\"g-item-title\">
                                            <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 70
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["article"], "title", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "title", array()), "limit", array()))) : ($this->getAttribute($context["article"], "title", array()))), "html", null, true);
                    echo "
                                            </a>
                                        </h3>
                                    </div>
                                ";
                }
                // line 75
                echo "
                                ";
                // line 76
                if (((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array()))) {
                    // line 77
                    echo "                                    <div class=\"g-array-item-details\">
                                        ";
                    // line 78
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array())) {
                        // line 79
                        echo "                                            <span class=\"g-array-item-date\">
                                                ";
                        // line 80
                        if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "published")) {
                            // line 81
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "publish_up", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                            echo "
                                                ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 82
(isset($context["display"]) ? $context["display"] : null), "date", array()), "enabled", array()) == "modified")) {
                            // line 83
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "modified", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 85
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "created", array()), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "date", array()), "format", array())), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 87
                        echo "                                            </span>
                                        ";
                    }
                    // line 89
                    echo "
                                        ";
                    // line 90
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "author", array()), "enabled", array())) {
                        // line 91
                        echo "                                            <span class=\"g-array-item-author\">
                                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", array()), "name", array()), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 95
                    echo "
                                        ";
                    // line 96
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array())) {
                        // line 97
                        echo "                                            ";
                        $context["category_link"] = ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "category", array()), "enabled", array()) == "link");
                        // line 98
                        echo "                                            <span class=\"g-array-item-category\">
                                                ";
                        // line 99
                        $context["cat"] = twig_last($this->env, $this->getAttribute($context["article"], "categories", array()));
                        // line 100
                        echo "                                                ";
                        if ((isset($context["category_link"]) ? $context["category_link"] : null)) {
                            // line 101
                            echo "                                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "route", array()), "html", null, true);
                            echo "\">
                                                        <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                            // line 102
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "title", array()), "html", null, true);
                            echo "
                                                    </a>
                                                ";
                        } else {
                            // line 105
                            echo "                                                    <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "title", array()), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 107
                        echo "                                            </span>
                                        ";
                    }
                    // line 109
                    echo "
                                        ";
                    // line 110
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "hits", array()), "enabled", array())) {
                        // line 111
                        echo "                                            <span class=\"g-array-item-hits\">
                                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>";
                        // line 112
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "hits", array()), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 115
                    echo "                                    </div>
                                ";
                }
                // line 117
                echo "
                                ";
                // line 118
                if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array())) {
                    // line 119
                    echo "                                    ";
                    $context["article_text"] = ((($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "type", array()) == "intro")) ? ($this->getAttribute($context["article"], "introtext", array())) : ($this->getAttribute($context["article"], "text", array())));
                    // line 120
                    echo "                                    <div class=\"g-array-item-text\">
                                        ";
                    // line 121
                    if (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "formatting", array()) == "text")) {
                        // line 122
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    } else {
                        // line 124
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml((isset($context["article_text"]) ? $context["article_text"] : null), $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    }
                    // line 126
                    echo "                                    </div>
                                ";
                }
                // line 128
                echo "
                                ";
                // line 129
                if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "enabled", array())) {
                    // line 130
                    echo "                                    <div class=\"g-array-item-read-more\">
                                        <a href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "route", array()), "html", null, true);
                    echo "\">
                                            <button class=\"button";
                    // line 132
                    if ($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "css", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array()), "css", array()), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["display"]) ? $context["display"] : null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
                    echo "</button>

                                        </a>
                                    </div>
                                ";
                }
                // line 137
                echo "                            </div>
                        </div>
                    </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentarray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 144,  391 => 142,  381 => 137,  368 => 132,  364 => 131,  361 => 130,  359 => 129,  356 => 128,  352 => 126,  346 => 124,  340 => 122,  338 => 121,  335 => 120,  332 => 119,  330 => 118,  327 => 117,  323 => 115,  317 => 112,  314 => 111,  312 => 110,  309 => 109,  305 => 107,  299 => 105,  293 => 102,  288 => 101,  285 => 100,  283 => 99,  280 => 98,  277 => 97,  275 => 96,  272 => 95,  266 => 92,  263 => 91,  261 => 90,  258 => 89,  254 => 87,  248 => 85,  242 => 83,  240 => 82,  235 => 81,  233 => 80,  230 => 79,  228 => 78,  225 => 77,  223 => 76,  220 => 75,  212 => 70,  208 => 69,  204 => 67,  202 => 66,  199 => 65,  196 => 64,  187 => 60,  183 => 59,  180 => 58,  178 => 57,  170 => 54,  166 => 53,  163 => 52,  160 => 51,  158 => 50,  152 => 46,  148 => 45,  145 => 44,  141 => 43,  128 => 41,  125 => 39,  123 => 38,  120 => 37,  117 => 36,  114 => 35,  111 => 34,  108 => 33,  105 => 32,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  85 => 25,  82 => 24,  79 => 22,  76 => 21,  73 => 20,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 1,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/contentarray.html.twig", "/home/aljoykz/horest.kz/media/gantry5/engines/nucleus/particles/contentarray.html.twig");
    }
}
