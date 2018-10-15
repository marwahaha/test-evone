<?php

/* SyliusShopBundle:Account/AddressBook:_item.html.twig */
class __TwigTemplate_313b7a3420b519b01ff82e795b86be97cb8a60d7be607701c491f936879edcaf extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_item.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/AddressBook:_item.html.twig", 1);
        // line 2
        echo "
<div class=\"eight wide column\">
    <div class=\"ui segment address\">
        <div class=\"ui stackable two column grid\">
            <div class=\"column\">
                ";
        // line 7
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Account/AddressBook:_item.html.twig", 7)->display(array_merge($context, array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "            </div>
            <div class=\"right aligned column\">
                <div class=\"ui vertical small icon labeled buttons\">
                    ";
        // line 11
        echo $context["buttons"]->macro_edit($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 11, $this->source); })()), "id", array()))));
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_set_as_default", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->source); })()), "id", array()))));
        echo "
                    ";
        // line 13
        echo $context["buttons"]->macro_delete($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 13, $this->source); })()), "id", array()))), null, true, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 13, $this->source); })()), "id", array()));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  49 => 12,  45 => 11,  40 => 8,  38 => 7,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"eight wide column\">
    <div class=\"ui segment address\">
        <div class=\"ui stackable two column grid\">
            <div class=\"column\">
                {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
            </div>
            <div class=\"right aligned column\">
                <div class=\"ui vertical small icon labeled buttons\">
                    {{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}
                    {{ render(path('sylius_shop_account_address_book_set_as_default', {'id': address.id})) }}
                    {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
                </div>
            </div>
        </div>
    </div>
</div>
", "SyliusShopBundle:Account/AddressBook:_item.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_item.html.twig");
    }
}
