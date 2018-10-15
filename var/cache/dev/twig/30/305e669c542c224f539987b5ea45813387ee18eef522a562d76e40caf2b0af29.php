<?php

/* BitBagSyliusCmsPlugin:Shop/Page:index.html.twig */
class __TwigTemplate_a159d0d7ee31699b8f7c9a961762ff060c817bfe70b232f168f5f5d1f4f69cf9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 4
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", 4);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig"));

        // line 1
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", 1);
        // line 2
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", 2);
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 7, $this->source); })()), "data", array())) > 0)) {
            // line 8
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_section_show", array("code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", array()), "get", array(0 => "sectionCode"), "method"), "template" => "@BitBagSyliusCmsPlugin/Shop/Page/Index/_section.html.twig")));
            echo "
    ";
        }
        // line 10
        echo "    <div class=\"ui stackable grid segment\">
        <div class=\"ui sixteen wide column\">

            ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 13, $this->source); })()), "data", array())) > 0)) {
            // line 14
            echo "                <div class=\"ui one column stackable grid\" id=\"bitbag-pages\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 15, $this->source); })()), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 16
                echo "                        <div class=\"item bitbag-page\">
                            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_page_show", array("slug" => twig_get_attribute($this->env, $this->source, $context["page"], "slug", array()))), "html", null, true);
                echo "\">

                                <div class=\"content\">

                                     ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["page"], "image", array())) {
                    // line 22
                    echo "                                        <img class=\"ui left floated image\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "image", array()), "path", array()), (((isset($context["filter"]) || array_key_exists("filter", $context))) ? (_twig_default_filter((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 22, $this->source); })()), "sylius_small")) : ("sylius_small"))), "html", null, true);
                    echo "\" alt=\"\">
                                    ";
                }
                // line 24
                echo "
                                    <h3>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", array()), "html", null, true);
                echo "</h3>
                                    <p>
                                        ";
                // line 27
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", array()))) > 200)) ? ((twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", array())), 0, 200) . "...")) : (strip_tags(twig_get_attribute($this->env, $this->source, $context["page"], "content", array())))), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </div>
                <div class=\"ui hidden divider\"></div>

                ";
            // line 36
            echo $context["pagination"]->macro_simple(twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 36, $this->source); })()), "data", array()));
            echo "
            ";
        } else {
            // line 38
            echo "                ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
            ";
        }
        // line 40
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  129 => 38,  124 => 36,  119 => 33,  107 => 27,  102 => 25,  99 => 24,  93 => 22,  91 => 21,  84 => 17,  81 => 16,  77 => 15,  74 => 14,  72 => 13,  67 => 10,  61 => 8,  58 => 7,  49 => 6,  39 => 4,  37 => 2,  35 => 1,  15 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}
{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}

{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    {% if resources.data|length > 0 %}
        {{ render(path('bitbag_sylius_cms_plugin_shop_section_show', {'code' : app.request.get('sectionCode'), 'template' : '@BitBagSyliusCmsPlugin/Shop/Page/Index/_section.html.twig'})) }}
    {% endif %}
    <div class=\"ui stackable grid segment\">
        <div class=\"ui sixteen wide column\">

            {% if resources.data|length > 0 %}
                <div class=\"ui one column stackable grid\" id=\"bitbag-pages\">
                    {% for page in resources.data %}
                        <div class=\"item bitbag-page\">
                            <a href=\"{{ path('bitbag_sylius_cms_plugin_shop_page_show', {'slug' : page.slug}) }}\">

                                <div class=\"content\">

                                     {% if page.image %}
                                        <img class=\"ui left floated image\" src=\"{{ page.image.path|imagine_filter(filter|default('sylius_small')) }}\" alt=\"\">
                                    {% endif %}

                                    <h3>{{ page.name }}</h3>
                                    <p>
                                        {{ page.content|striptags|length > 200 ? page.content|striptags|slice(0, 200) ~ '...' : page.content|striptags }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"ui hidden divider\"></div>

                {{ pagination.simple(resources.data) }}
            {% else %}
                {{ messages.info('sylius.ui.no_results_to_display') }}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "BitBagSyliusCmsPlugin:Shop/Page:index.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Page/index.html.twig");
    }
}
