<?php

/* SyliusAdminBundle:Order/Show:_addresses.html.twig */
class __TwigTemplate_14e02d6bdf0351b934362f80eb56b8d3191699330ee35bce9c7c79ce3005fbbc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_addresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_addresses.html.twig"));

        // line 1
        echo "<h4 class=\"ui top attached styled header\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\" id=\"shipping-address\">
    ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Order/Show:_addresses.html.twig", 5)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->source); })()), "shippingAddress", array()))));
        // line 6
        echo "</div>
<h4 class=\"ui attached styled header\">
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "
</h4>
<div class=\"ui attached segment\" id=\"billing-address\">
    ";
        // line 11
        $this->loadTemplate("@SyliusAdmin/Common/_address.html.twig", "SyliusAdminBundle:Order/Show:_addresses.html.twig", 11)->display(array_merge($context, array("address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->source); })()), "billingAddress", array()))));
        // line 12
        echo "    <div class=\"ui segment\">
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_update", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"ui icon labeled tiny fluid button\">
            <i class=\"pencil icon\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 13,  52 => 12,  50 => 11,  44 => 8,  40 => 6,  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui top attached styled header\">
    {{ 'sylius.ui.shipping_address'|trans }}
</h4>
<div class=\"ui attached segment\" id=\"shipping-address\">
    {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.shippingAddress} %}
</div>
<h4 class=\"ui attached styled header\">
    {{ 'sylius.ui.billing_address'|trans }}
</h4>
<div class=\"ui attached segment\" id=\"billing-address\">
    {% include '@SyliusAdmin/Common/_address.html.twig' with {'address': order.billingAddress} %}
    <div class=\"ui segment\">
        <a href=\"{{ path('sylius_admin_order_update', {'id': order.id}) }}\" class=\"ui icon labeled tiny fluid button\">
            <i class=\"pencil icon\"></i> {{ 'sylius.ui.edit'|trans }}
        </a>
    </div>
</div>
", "SyliusAdminBundle:Order/Show:_addresses.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_addresses.html.twig");
    }
}
