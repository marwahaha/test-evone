<?php

/* SyliusShopBundle:ProductReview:index.html.twig */
class __TwigTemplate_87cd6055240b0428b583520f4ebde42b5dc2600289fc47db994eae0d4d8e8517 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:ProductReview:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.before_product_box", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 7, $this->source); })()))));
        echo "

            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_product_show_by_slug", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "slug"), "method"), "template" => "@SyliusShop/Product/_box.html.twig")));
        // line 14
        echo "

            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.after_product_box", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 16, $this->source); })()))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\" id=\"sylius-product-reviews\">
                ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.before_list", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 20, $this->source); })()))));
        echo "

                ";
        // line 22
        $this->loadTemplate("@SyliusShop/ProductReview/_list.html.twig", "SyliusShopBundle:ProductReview:index.html.twig", 22)->display($context);
        // line 23
        echo "
                ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.index.after_list", array("product_reviews" => (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 24, $this->source); })()))));
        echo "
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_review_create", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->source); })()), "request", array()), "get", array(0 => "slug"), "method"))), "html", null, true);
        echo "\">
                    <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_your_review"), "html", null, true);
        echo "</div>
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  91 => 25,  87 => 24,  84 => 23,  82 => 22,  77 => 20,  70 => 16,  66 => 14,  64 => 11,  63 => 9,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.product_review.index.before_product_box', {'product_reviews': product_reviews}) }}

            {{
                render(url('sylius_shop_partial_product_show_by_slug', {
                    'slug': app.request.attributes.get('slug'),
                    'template': '@SyliusShop/Product/_box.html.twig'
                }))
            }}

            {{ sonata_block_render_event('sylius.shop.product_review.index.after_product_box', {'product_reviews': product_reviews}) }}
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\" id=\"sylius-product-reviews\">
                {{ sonata_block_render_event('sylius.shop.product_review.index.before_list', {'product_reviews': product_reviews}) }}

                {% include '@SyliusShop/ProductReview/_list.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.product_review.index.after_list', {'product_reviews': product_reviews}) }}
                <a href=\"{{ path('sylius_shop_product_review_create', {'slug': app.request.get('slug')}) }}\">
                    <div class=\"ui blue labeled icon button\"><i class=\"icon plus\"></i> {{ 'sylius.ui.add_your_review'|trans }}</div>
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:ProductReview:index.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/index.html.twig");
    }
}
