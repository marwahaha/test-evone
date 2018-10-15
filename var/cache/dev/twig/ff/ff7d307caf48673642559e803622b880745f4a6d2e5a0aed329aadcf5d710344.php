<?php

/* @SyliusShop/Cart/summary.html.twig */
class __TwigTemplate_d57fb5bf4f0cbd192d45bd35960143e155d9b7c715b30c9017fb4cb05c98115b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Cart/summary.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/summary.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), array(0 => "@SyliusUi/Form/theme.html.twig"), true);
        // line 5
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Cart/summary.html.twig", 5);
        // line 7
        $context["header"] = "sylius.ui.your_shopping_cart";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 9, $this->source); })())), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 12, $this->source); })()), "empty", array())) {
            // line 13
            echo "        ";
            $this->loadTemplate("@SyliusShop/Cart/Summary/_header.html.twig", "@SyliusShop/Cart/summary.html.twig", 13)->display($context);
            // line 14
            echo "
        ";
            // line 15
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_content_header", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 15, $this->source); })()))));
            echo "

        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                ";
            // line 19
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 19, $this->source); })()))));
            echo "

                ";
            // line 21
            $this->loadTemplate("@SyliusShop/Cart/Summary/_items.html.twig", "@SyliusShop/Cart/summary.html.twig", 21)->display($context);
            // line 22
            echo "
                ";
            // line 23
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 23, $this->source); })()))));
            echo "
            </div>
            <div class=\"five wide column\">
                ";
            // line 26
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 26, $this->source); })()))));
            echo "

                ";
            // line 28
            $this->loadTemplate("@SyliusShop/Cart/Summary/_totals.html.twig", "@SyliusShop/Cart/summary.html.twig", 28)->display($context);
            // line 29
            echo "
                ";
            // line 30
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 30, $this->source); })()))));
            echo "

                ";
            // line 32
            $this->loadTemplate("@SyliusShop/Cart/Summary/_checkout.html.twig", "@SyliusShop/Cart/summary.html.twig", 32)->display($context);
            // line 33
            echo "            </div>
        </div>

        ";
            // line 36
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_suggestions", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 36, $this->source); })()))));
            echo "

        ";
            // line 38
            $this->loadTemplate("@SyliusShop/Cart/Summary/_suggestions.html.twig", "@SyliusShop/Cart/summary.html.twig", 38)->display($context);
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.your_cart_is_empty");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  142 => 39,  140 => 38,  135 => 36,  130 => 33,  128 => 32,  123 => 30,  120 => 29,  118 => 28,  113 => 26,  107 => 23,  104 => 22,  102 => 21,  97 => 19,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  72 => 11,  52 => 9,  42 => 1,  40 => 7,  38 => 5,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% set header = 'sylius.ui.your_shopping_cart' %}

{% block title %}{{ parent() }} | {{ header|trans }}{% endblock %}

{% block content %}
    {% if not cart.empty %}
        {% include '@SyliusShop/Cart/Summary/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.cart.summary.after_content_header', {'cart': cart}) }}

        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                {{ sonata_block_render_event('sylius.shop.cart.summary.before_items', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_items.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.cart.summary.after_items', {'cart': cart}) }}
            </div>
            <div class=\"five wide column\">
                {{ sonata_block_render_event('sylius.shop.cart.summary.before_totals', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_totals.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.cart.summary.after_totals', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_checkout.html.twig' %}
            </div>
        </div>

        {{ sonata_block_render_event('sylius.shop.cart.summary.before_suggestions', {'cart': cart}) }}

        {% include '@SyliusShop/Cart/Summary/_suggestions.html.twig' %}
    {% else %}
        {{ messages.info('sylius.ui.your_cart_is_empty') }}
    {% endif %}
{% endblock %}
", "@SyliusShop/Cart/summary.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/summary.html.twig");
    }
}
