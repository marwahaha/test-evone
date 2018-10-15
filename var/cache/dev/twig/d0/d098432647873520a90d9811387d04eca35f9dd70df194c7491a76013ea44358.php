<?php

/* BitBagSyliusCmsPlugin:Shop/Product:_pagesBySection.html.twig */
class __TwigTemplate_58a839c65cfa5d4691941127a8072465c1144788c1520a950352bb756d312447 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Product:_pagesBySection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Product:_pagesBySection.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 2
            echo "    <h2>
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "section", array()), "name", array()), "html", null, true);
            echo "
    </h2>
    <div class=\"ui divider\"></div>

    <div class=\"ui stackable two column grid\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 9
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", array()) == false)) {
                    // line 10
                    echo "                ";
                    $context["page"] = $context["row"];
                    // line 11
                    echo "
                <div class=\"column\">
                    <div class=\"ui fluid segment column\">
                        ";
                    // line 14
                    if (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 14, $this->source); })()), "image", array())) {
                        // line 15
                        echo "                            <img class=\"ui fluid image\" src=\"";
                        echo twig_escape_filter($this->env, ("/media/image/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 15, $this->source); })()), "image", array()), "path", array())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 15, $this->source); })()), "nameWhenLinked", array()), "html", null, true);
                        echo "\">
                        ";
                    }
                    // line 17
                    echo "
                        <h3>
                            ";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 19, $this->source); })()), "nameWhenLinked", array()), "html", null, true);
                    echo "
                        </h3>
                        <p>
                            ";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 22, $this->source); })()), "descriptionWhenLinked", array()), "html", null, true);
                    echo "
                        </p>

                        <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_page_show", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->source); })()), "slug", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.read_more"), "html", null, true);
                    echo "</a>
                    </div>
                </div>
            ";
                }
                // line 29
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/Product:_pagesBySection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  107 => 29,  98 => 25,  92 => 22,  86 => 19,  82 => 17,  74 => 15,  72 => 14,  67 => 11,  64 => 10,  61 => 9,  44 => 8,  36 => 3,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for column in data %}
    <h2>
        {{ column.section.name }}
    </h2>
    <div class=\"ui divider\"></div>

    <div class=\"ui stackable two column grid\">
        {% for row in column %}
            {% if loop.first == false %}
                {% set page = row %}

                <div class=\"column\">
                    <div class=\"ui fluid segment column\">
                        {% if page.image %}
                            <img class=\"ui fluid image\" src=\"{{ '/media/image/' ~ page.image.path }}\" alt=\"{{ page.nameWhenLinked }}\">
                        {% endif %}

                        <h3>
                            {{ page.nameWhenLinked }}
                        </h3>
                        <p>
                            {{ page.descriptionWhenLinked }}
                        </p>

                        <a href=\"{{ path('bitbag_sylius_cms_plugin_shop_page_show', {'slug': page.slug}) }}\">{{ 'bitbag_sylius_cms_plugin.ui.read_more'|trans }}</a>
                    </div>
                </div>
            {% endif %}
        {% endfor %}
    </div>
{% endfor %}
", "BitBagSyliusCmsPlugin:Shop/Product:_pagesBySection.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Product/_pagesBySection.html.twig");
    }
}
