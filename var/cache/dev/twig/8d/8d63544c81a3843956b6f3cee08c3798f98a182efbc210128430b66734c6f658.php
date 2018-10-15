<?php

/* SyliusShopBundle:Taxon:_verticalMenu.html.twig */
class __TwigTemplate_41113f452421d7809a035856c29f064e420bff40ee022a2efbaf9fc6391e7c59 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        // line 1
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_vertical_menu", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 1, $this->source); })()))));
        echo "

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 4, $this->source); })()), "name", array()), "html", null, true);
        echo "</div>
    ";
        // line 5
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 5, $this->source); })()), "parent", array())) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 5, $this->source); })()), "parent", array()), "isRoot", array(), "method"))) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 6, $this->source); })()), "parent", array()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 6, $this->source); })()), "parent", array()), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">
            <i class=\"up arrow icon\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.go_level_up"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 10, $this->source); })()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, $context["child"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_vertical_menu", array("taxon" => (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 15, $this->source); })()))));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_verticalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  68 => 13,  57 => 11,  52 => 10,  46 => 7,  41 => 6,  39 => 5,  35 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ sonata_block_render_event('sylius.shop.product.index.before_vertical_menu', {'taxon': taxon}) }}

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">{{ taxon.name }}</div>
    {% if taxon.parent is not empty and not taxon.parent.isRoot() %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.parent.slug, '_locale': taxon.parent.translation.locale}) }}\" class=\"item\">
            <i class=\"up arrow icon\"></i> {{ 'sylius.ui.go_level_up'|trans }}
        </a>
    {% endif %}
    {% for child in taxon.children %}
    <a href=\"{{ path('sylius_shop_product_index', {'slug': child.slug, '_locale': child.translation.locale}) }}\" class=\"item\">{{ child.name }}</a>
    {% endfor %}
</div>

{{ sonata_block_render_event('sylius.shop.product.index.after_vertical_menu', {'taxon': taxon}) }}
", "SyliusShopBundle:Taxon:_verticalMenu.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_verticalMenu.html.twig");
    }
}
