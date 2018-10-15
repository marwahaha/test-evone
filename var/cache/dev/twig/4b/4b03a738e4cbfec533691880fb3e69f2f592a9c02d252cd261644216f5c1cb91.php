<?php

/* @SyliusShop/Cart/Summary/_totals.html.twig */
class __TwigTemplate_424dba59d97ed1b28322d74146295b2e8067963a47713551f7bcf7096f043b2f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_totals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/Summary/_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/Summary/_totals.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.summary"), "html", null, true);
        echo "</h2>

    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 6, $this->source); })()))));
        echo "

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-tax-total\" class=\"right aligned\">";
        // line 12
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 12, $this->source); })()), "taxTotal", array()));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-shipping-total\" class=\"right aligned\">";
        // line 16
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 16, $this->source); })()), "shippingTotal", array()));
        echo "</td>
        </tr>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 18, $this->source); })()), "orderPromotionTotal", array())) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.discount"), "html", null, true);
            echo ":</td>
            <td id=\"sylius-cart-promotion-total\" class=\"right aligned\">";
            // line 21
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 21, $this->source); })()), "orderPromotionTotal", array()));
            echo "</td>
        </tr>
        ";
        }
        // line 24
        echo "        <tr style=\"font-size: 2em;\">
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order_total"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-grand-total\" class=\"right aligned\">";
        // line 26
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 26, $this->source); })()), "total", array()));
        echo "</td>
        </tr>
        ";
        // line 28
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 28, $this->source); })()), "currencyCode", array()) === twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 28, $this->source); })()), "currencyCode", array()))) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.base_currency_order_total"), "html", null, true);
            echo ":</td>
                <td id=\"sylius-cart-base-grand-total\" class=\"right aligned\">";
            // line 31
            echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->source); })()), "total", array()), twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->source); })()), "currencyCode", array()));
            echo "</td>
            </tr>
        ";
        }
        // line 34
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/Summary/_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  103 => 31,  99 => 30,  96 => 29,  94 => 28,  89 => 26,  85 => 25,  82 => 24,  76 => 21,  72 => 20,  69 => 19,  67 => 18,  62 => 16,  58 => 15,  52 => 12,  48 => 11,  40 => 6,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">{{ 'sylius.ui.summary'|trans }}</h2>

    {{ sonata_block_render_event('sylius.shop.cart.summary.totals', {'cart': cart}) }}

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>{{ 'sylius.ui.tax'|trans }}:</td>
            <td id=\"sylius-cart-tax-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.taxTotal) }}</td>
        </tr>
        <tr>
            <td>{{ 'sylius.ui.shipping'|trans }}:</td>
            <td id=\"sylius-cart-shipping-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.shippingTotal) }}</td>
        </tr>
        {% if cart.orderPromotionTotal %}
        <tr>
            <td>{{ 'sylius.ui.discount'|trans }}:</td>
            <td id=\"sylius-cart-promotion-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.orderPromotionTotal) }}</td>
        </tr>
        {% endif %}
        <tr style=\"font-size: 2em;\">
            <td>{{ 'sylius.ui.order_total'|trans }}:</td>
            <td id=\"sylius-cart-grand-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.total) }}</td>
        </tr>
        {% if cart.currencyCode is not same as(sylius.currencyCode) %}
            <tr>
                <td>{{ 'sylius.ui.base_currency_order_total'|trans }}:</td>
                <td id=\"sylius-cart-base-grand-total\" class=\"right aligned\">{{ money.format(cart.total, cart.currencyCode) }}</td>
            </tr>
        {% endif %}
        </tbody>
    </table>
</div>
", "@SyliusShop/Cart/Summary/_totals.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_totals.html.twig");
    }
}
