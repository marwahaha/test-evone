<?php

/* SyliusShopBundle:Cart/Summary:_header.html.twig */
class __TwigTemplate_83772f8d41cc3b5168890eea3d94fda8b680aba77147722ae3f334f01c2c0ba3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_header.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusShopBundle:Cart/Summary:_header.html.twig", 1);
        // line 2
        echo "
<div class=\"ui hidden divider\"></div>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 6
        echo $context["headers"]->macro_default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 6, $this->source); })())), "cart", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_your_items_apply_coupon_or_proceed_to_the_checkout"));
        echo "
    </div>
    <div class=\"middle aligned column\">
        <form method=\"post\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_clear");
        echo "\" >
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 11, $this->source); })()), "id", array())), "html", null, true);
        echo "\" />
            <button type=\"submit\" id=\"sylius-cart-clear\" class=\"ui right floated basic red button\">
                <i class=\"icon remove\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.clear_cart"), "html", null, true);
        echo "
            </button>
        </form>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  48 => 11,  43 => 9,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/headers.html.twig' as headers %}

<div class=\"ui hidden divider\"></div>
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ headers.default(header|trans, 'cart', 'sylius.ui.edit_your_items_apply_coupon_or_proceed_to_the_checkout'|trans) }}
    </div>
    <div class=\"middle aligned column\">
        <form method=\"post\" action=\"{{ path('sylius_shop_cart_clear') }}\" >
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(cart.id) }}\" />
            <button type=\"submit\" id=\"sylius-cart-clear\" class=\"ui right floated basic red button\">
                <i class=\"icon remove\"></i> {{ 'sylius.ui.clear_cart'|trans }}
            </button>
        </form>
    </div>
</div>
", "SyliusShopBundle:Cart/Summary:_header.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_header.html.twig");
    }
}
