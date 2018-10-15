<?php

/* SyliusShopBundle:Account/AddressBook:index.html.twig */
class __TwigTemplate_16239acd76b8c1c1c86d90ffdc70553f37a8299906f7bcf1e0f3574f38b8b512 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 1);
        $this->blocks = array(
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:index.html.twig"));

        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 6
        echo "    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address_book"), "html", null, true);
        echo "
                <div class=\"sub header\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.manage_your_saved_addresses"), "html", null, true);
        echo "</div>
            </h1>

            ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.index.after_content_header", array("addresses" => (isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new Twig_Error_Runtime('Variable "addresses" does not exist.', 13, $this->source); })()))));
        echo "
        </div>
        <div class=\"middle aligned column\">
            <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_address_book_create");
        echo "\" class=\"ui right floated blue button\"><i class=\"circle plus icon\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_address"), "html", null, true);
        echo "</a>

            ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.index.after_add_address_button", array("addresses" => (isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new Twig_Error_Runtime('Variable "addresses" does not exist.', 18, $this->source); })()))));
        echo "
        </div>
    </div>

    ";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new Twig_Error_Runtime('Variable "addresses" does not exist.', 22, $this->source); })())) > 0)) {
            // line 23
            echo "        ";
            $context["default_address"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 23, $this->source); })()), "customer", array()), "defaultAddress", array());
            // line 24
            echo "        ";
            if ( !(null === (isset($context["default_address"]) || array_key_exists("default_address", $context) ? $context["default_address"] : (function () { throw new Twig_Error_Runtime('Variable "default_address" does not exist.', 24, $this->source); })()))) {
                // line 25
                echo "            ";
                $this->loadTemplate("@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 25)->display(array_merge($context, array("address" => (isset($context["default_address"]) || array_key_exists("default_address", $context) ? $context["default_address"] : (function () { throw new Twig_Error_Runtime('Variable "default_address" does not exist.', 25, $this->source); })()))));
                // line 26
                echo "        ";
            }
            // line 27
            echo "    <div class=\"ui stackable grid\" id=\"sylius-addresses\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new Twig_Error_Runtime('Variable "addresses" does not exist.', 28, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                if (((null === (isset($context["default_address"]) || array_key_exists("default_address", $context) ? $context["default_address"] : (function () { throw new Twig_Error_Runtime('Variable "default_address" does not exist.', 28, $this->source); })())) || (twig_get_attribute($this->env, $this->source, $context["address"], "id", array()) != twig_get_attribute($this->env, $this->source, (isset($context["default_address"]) || array_key_exists("default_address", $context) ? $context["default_address"] : (function () { throw new Twig_Error_Runtime('Variable "default_address" does not exist.', 28, $this->source); })()), "id", array())))) {
                    // line 29
                    echo "            ";
                    $this->loadTemplate("@SyliusShop/Account/AddressBook/_item.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 29)->display($context);
                    // line 30
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </div>
    ";
        } else {
            // line 33
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.you_have_no_addresses_defined");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 33,  132 => 31,  122 => 30,  119 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  91 => 22,  84 => 18,  77 => 16,  71 => 13,  65 => 10,  61 => 9,  56 => 6,  47 => 5,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/AddressBook/layout.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% block subcontent %}
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                {{ 'sylius.ui.address_book'|trans }}
                <div class=\"sub header\">{{ 'sylius.ui.manage_your_saved_addresses'|trans }}</div>
            </h1>

            {{ sonata_block_render_event('sylius.shop.account.address_book.index.after_content_header', {'addresses': addresses}) }}
        </div>
        <div class=\"middle aligned column\">
            <a href=\"{{ path('sylius_shop_account_address_book_create') }}\" class=\"ui right floated blue button\"><i class=\"circle plus icon\"></i> {{ 'sylius.ui.add_address'|trans }}</a>

            {{ sonata_block_render_event('sylius.shop.account.address_book.index.after_add_address_button', {'addresses': addresses}) }}
        </div>
    </div>

    {% if addresses|length > 0 %}
        {% set default_address = (sylius.customer.defaultAddress) %}
        {% if default_address is not null %}
            {% include '@SyliusShop/Account/AddressBook/_defaultAddress.html.twig' with {'address': default_address} %}
        {% endif %}
    <div class=\"ui stackable grid\" id=\"sylius-addresses\">
        {% for address in addresses if default_address is null or address.id != default_address.id %}
            {% include '@SyliusShop/Account/AddressBook/_item.html.twig' %}
        {% endfor %}
    </div>
    {% else %}
        {{ messages.info('sylius.ui.you_have_no_addresses_defined') }}
    {% endif %}
{% endblock %}
", "SyliusShopBundle:Account/AddressBook:index.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/index.html.twig");
    }
}
