<?php

/* @SyliusShop/Account/Order/Show/_header.html.twig */
class __TwigTemplate_ae037488b02228f6bac873e31d9cae654e6523530a6ad8e24f1cb5903fc6afbd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/Order/Show/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/Order/Show/_header.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusShop/Account/Order/Show/_header.html.twig", 1);
        // line 2
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "@SyliusShop/Account/Order/Show/_header.html.twig", 2);
        // line 3
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->source); })()), "number", array()), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 11
        echo $this->extensions['Sonata\IntlBundle\Twig\Extension\DateTimeExtension']->formatDate(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->source); })()), "checkoutCompletedAt", array()));
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 14
        $this->loadTemplate(array(0 => ((("@SyliusShop/Account/Order/Label/State" . "/") . twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 14, $this->source); })()), "state", array())) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "@SyliusShop/Account/Order/Show/_header.html.twig", 14)->display(array_merge($context, array("value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 14, $this->source); })()), "state", array()))))));
        // line 15
        echo "                </div>
                <div class=\"item\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->source); })()), "currencyCode", array()), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 20
        echo $context["flags"]->macro_fromLocaleCode(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->source); })()), "localeCode", array()));
        echo $this->extensions['Sonata\IntlBundle\Twig\Extension\LocaleExtension']->locale(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->source); })()), "localeCode", array()));
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>

";
        // line 27
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->source); })()), "paymentState", array()), array(0 => "awaiting_payment"))) {
            // line 28
            echo "    ";
            echo $context["buttons"]->macro_default($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", array("tokenValue" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->source); })()), "tokenValue", array()))), "sylius.ui.pay", null, "credit card alternative", "fluid blue");
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/Order/Show/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  77 => 27,  66 => 20,  60 => 17,  56 => 15,  54 => 14,  48 => 11,  39 => 7,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}
{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.order'|trans }} #{{ order.number }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ order.checkoutCompletedAt|format_date }}
                </div>
                <div class=\"item\">
                    {% include [('@SyliusShop/Account/Order/Label/State' ~ '/' ~ order.state ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': ('sylius.ui.' ~ order.state)|trans} %}
                </div>
                <div class=\"item\">
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\">
                    {{ flags.fromLocaleCode(order.localeCode) }}{{ order.localeCode|locale }}
                </div>
            </div>
        </div>
    </div>
</h1>

{% if order.paymentState in ['awaiting_payment'] %}
    {{ buttons.default(path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'sylius.ui.pay', null, 'credit card alternative', 'fluid blue') }}
{% endif %}
", "@SyliusShop/Account/Order/Show/_header.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Show/_header.html.twig");
    }
}
