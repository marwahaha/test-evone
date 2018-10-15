<?php

/* @SyliusShop/Checkout/SelectPayment/_navigation.html.twig */
class __TwigTemplate_367922fa77e4f7f7f867d3ec5330165813a7e8fc019982b2a083c13d60399313 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig"));

        // line 1
        $context["enabled"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->source); })()), "payments", array()));
        // line 2
        echo "
<div class=\"ui two column grid\">
    <div class=\"column\">
        ";
        // line 5
        if (call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), array((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->source); })())))) {
            // line 6
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_shipping_method"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 8
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
            echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.change_address"), "html", null, true);
            echo "</a>
        ";
        }
        // line 10
        echo "    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled";
        // line 12
        if ( !(isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new Twig_Error_Runtime('Variable "enabled" does not exist.', 12, $this->source); })())) {
            echo " disabled";
        }
        echo " button\">
            <i class=\"arrow right icon\"></i>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.next"), "html", null, true);
        echo "
        </button>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  58 => 12,  54 => 10,  46 => 8,  38 => 6,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set enabled = order.payments|length %}

<div class=\"ui two column grid\">
    <div class=\"column\">
        {% if sylius_is_shipping_required(order) %}
            <a href=\"{{ path('sylius_shop_checkout_select_shipping') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_shipping_method'|trans }}</a>
        {% else %}
            <a href=\"{{ path('sylius_shop_checkout_address') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.change_address'|trans }}</a>
        {% endif %}
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled{% if not enabled %} disabled{% endif %} button\">
            <i class=\"arrow right icon\"></i>
            {{ 'sylius.ui.next'|trans }}
        </button>
    </div>
</div>
", "@SyliusShop/Checkout/SelectPayment/_navigation.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_navigation.html.twig");
    }
}
