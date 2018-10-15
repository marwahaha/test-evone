<?php

/* BitBagSyliusCmsPlugin:Shop/Page:show.html.twig */
class __TwigTemplate_0833c43190c2da73dfb57ad0c00d95098c601e5cbca0e8b00769fabe3b6d4c26 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:show.html.twig", 1);
        $this->blocks = array(
            'metatags' => array($this, 'block_metatags'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 4
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 4, $this->source); })()), "metaKeywords", array()))) {
            // line 5
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 5, $this->source); })()), "metaKeywords", array()), "html", null, true);
            echo "\"/>
    ";
        }
        // line 7
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 7, $this->source); })()), "metaDescription", array()))) {
            // line 8
            echo "        <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 8, $this->source); })()), "metaDescription", array()), "html", null, true);
            echo "\"/>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> /</div>
        <div class=\"active section\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 16, $this->source); })()), "breadcrumb", array()), "html", null, true);
        echo "</div>
    </div>
    <div class=\"ui segment\">
        <h1 class=\"ui dividing header bitbag-page-name\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 19, $this->source); })()), "name", array()), "html", null, true);
        echo "</h1>

        <div class=\"ui grid center aligned\">
            <div class=\"eight wide column\">
                ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 23, $this->source); })()), "image", array())) {
            // line 24
            echo "                    ";
            $context["path"] = ((((isset($context["preview"]) || array_key_exists("preview", $context)) && ((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new Twig_Error_Runtime('Variable "preview" does not exist.', 24, $this->source); })()) == true))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 24, $this->source); })()), "image", array()), "path", array())) : (("/media/image/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 24, $this->source); })()), "image", array()), "path", array()))));
            // line 25
            echo "
                    <img class=\"page-image ui fluid image\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "\" alt=\"\">
                ";
        }
        // line 28
        echo "            </div>
        </div>

        <div class=\"ui hidden divider\"></div>

        <div class=\"bitbag-page-content\">";
        // line 33
        echo $this->extensions['BitBag\SyliusCmsPlugin\Twig\Extension\RenderContentExtension']->renderContent((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 33, $this->source); })()));
        echo "</div>
        <div class=\"ui dividing header\"></div>
        <div class=\"bitbag-page-sections\">
            ";
        // line 36
        $this->loadTemplate("@BitBagSyliusCmsPlugin/Shop/Page/Show/_sections.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:show.html.twig", 36)->display($context);
        // line 37
        echo "        </div>
    </div>
    ";
        // line 39
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 39, $this->source); })()), "products", array())) > 0)) {
            // line 40
            echo "        <h2>
            ";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.page_related_products"), "html", null, true);
            echo "
        </h2>
        <div class=\"bitbag-page-products\">
            ";
            // line 44
            $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "BitBagSyliusCmsPlugin:Shop/Page:show.html.twig", 44)->display(array_merge($context, array("products" => twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 44, $this->source); })()), "products", array()))));
            // line 45
            echo "        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/Page:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  155 => 44,  149 => 41,  146 => 40,  144 => 39,  140 => 37,  138 => 36,  132 => 33,  125 => 28,  120 => 26,  117 => 25,  114 => 24,  112 => 23,  105 => 19,  99 => 16,  92 => 14,  89 => 13,  80 => 12,  66 => 8,  63 => 7,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block metatags %}
    {% if page.metaKeywords is not empty %}
        <meta name=\"keywords\" content=\"{{ page.metaKeywords }}\"/>
    {% endif %}
    {% if page.metaDescription is not empty %}
        <meta name=\"description\" content=\"{{ page.metaDescription }}\"/>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> /</div>
        <div class=\"active section\">{{ page.breadcrumb }}</div>
    </div>
    <div class=\"ui segment\">
        <h1 class=\"ui dividing header bitbag-page-name\">{{ page.name }}</h1>

        <div class=\"ui grid center aligned\">
            <div class=\"eight wide column\">
                {% if page.image %}
                    {% set path = preview is defined and preview == true ? page.image.path : '/media/image/'~page.image.path %}

                    <img class=\"page-image ui fluid image\" src=\"{{ path }}\" alt=\"\">
                {% endif %}
            </div>
        </div>

        <div class=\"ui hidden divider\"></div>

        <div class=\"bitbag-page-content\">{{ bitbag_cms_render_content(page) }}</div>
        <div class=\"ui dividing header\"></div>
        <div class=\"bitbag-page-sections\">
            {% include '@BitBagSyliusCmsPlugin/Shop/Page/Show/_sections.html.twig' %}
        </div>
    </div>
    {% if page.products|length > 0 %}
        <h2>
            {{ 'bitbag_sylius_cms_plugin.ui.page_related_products'|trans }}
        </h2>
        <div class=\"bitbag-page-products\">
            {% include '@SyliusShop/Product/_horizontalList.html.twig' with {'products': page.products} %}
        </div>
    {% endif %}
{% endblock %}
", "BitBagSyliusCmsPlugin:Shop/Page:show.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Page/show.html.twig");
    }
}
