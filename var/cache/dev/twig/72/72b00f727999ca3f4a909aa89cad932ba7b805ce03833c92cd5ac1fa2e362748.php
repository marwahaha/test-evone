<?php

/* SyliusAdminBundle:Order/Show/Summary:_item.html.twig */
class __TwigTemplate_beecf649222cfcaa18bc653dd006b13e7a6652ee6eb8ccfc0554e28321245393 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["itemPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT");
        // line 5
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 6
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 7
        echo "
";
        // line 8
        $context["variant"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->source); })()), "variant", array());
        // line 9
        $context["product"] = twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 9, $this->source); })()), "product", array());
        // line 10
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Product/_info.html.twig", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", 13)->display($context);
        // line 14
        echo "    </td>
    <td class=\"right aligned unit-price\">
        ";
        // line 16
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 16, $this->source); })()), "unitPrice", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 16, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned discounted-unit-price\">
        ";
        // line 19
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 19, $this->source); })()), "discountedUnitPrice", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned quantity\">
        ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->source); })()), "quantity", array()), "html", null, true);
        echo "
    </td>
    <td class=\"right aligned subtotal\">
        ";
        // line 25
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->source); })()), "subtotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 25, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned discount\">
        ";
        // line 28
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->source); })()), "getAdjustmentsTotalRecursively", array(0 => (isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotionAdjustment" does not exist.', 28, $this->source); })())), "method"), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned tax\">
        ";
        // line 31
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->source); })()), "taxTotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 31, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned total\">
        ";
        // line 34
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->source); })()), "total", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 34, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show/Summary:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  90 => 31,  84 => 28,  78 => 25,  72 => 22,  66 => 19,  60 => 16,  56 => 14,  54 => 13,  49 => 10,  47 => 9,  45 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set itemPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set variant = item.variant %}
{% set product = variant.product %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusAdmin/Product/_info.html.twig' %}
    </td>
    <td class=\"right aligned unit-price\">
        {{ money.format(item.unitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned discounted-unit-price\">
        {{ money.format(item.discountedUnitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned quantity\">
        {{ item.quantity }}
    </td>
    <td class=\"right aligned subtotal\">
        {{ money.format(item.subtotal, order.currencyCode) }}
    </td>
    <td class=\"right aligned discount\">
        {{ money.format(item.getAdjustmentsTotalRecursively(orderPromotionAdjustment), order.currencyCode) }}
    </td>
    <td class=\"right aligned tax\">
        {{ money.format(item.taxTotal, order.currencyCode) }}
    </td>
    <td class=\"right aligned total\">
        {{ money.format(item.total, order.currencyCode) }}
    </td>
</tr>
", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_item.html.twig");
    }
}
