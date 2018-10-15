<?php

/* @SyliusShop/Account/AddressBook/_defaultAddress.html.twig */
class __TwigTemplate_8988c116cfc5964a44d42b9b05c0685693c6503b9bd3c333a1f5e29d9e76ee2f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", 1);
        // line 2
        echo "
<div class=\"ui top attached styled header\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_default_address"), "html", null, true);
        echo "</div>
<div class=\"ui attached segment\" id=\"sylius-default-address\">
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            ";
        // line 7
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", 7)->display(array_merge($context, array("address" => (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "        </div>
        <div class=\"right aligned column\">
            <div class=\"ui vertical icon labeled buttons\">
                ";
        // line 11
        echo $context["buttons"]->macro_edit($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_update", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 11, $this->source); })()), "id", array()))));
        echo "
                ";
        // line 12
        echo $context["buttons"]->macro_delete($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->source); })()), "id", array()))), null, true, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->source); })()), "id", array()));
        echo "
            </div>
        </div>
    </div>
</div>
<div class=\"ui divider\"></div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  48 => 11,  43 => 8,  41 => 7,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"ui top attached styled header\">{{ 'sylius.ui.your_default_address'|trans }}</div>
<div class=\"ui attached segment\" id=\"sylius-default-address\">
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
        </div>
        <div class=\"right aligned column\">
            <div class=\"ui vertical icon labeled buttons\">
                {{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}
                {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
            </div>
        </div>
    </div>
</div>
<div class=\"ui divider\"></div>
", "@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_defaultAddress.html.twig");
    }
}
