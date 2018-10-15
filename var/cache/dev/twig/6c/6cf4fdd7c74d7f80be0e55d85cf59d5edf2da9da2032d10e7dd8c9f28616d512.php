<?php

/* SyliusShopBundle:Product/Index:_main.html.twig */
class __TwigTemplate_1f89ae0dc69e9bbae7f052fe19bcef78894db4bacdeedaebe2eed6e42d635f36 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_main.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 1);
        // line 2
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_search", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->source); })()), "data", array()))));
        echo "

";
        // line 6
        $this->loadTemplate("@SyliusShop/Product/Index/_search.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_search", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 8, $this->source); })()), "data", array()))));
        echo "

";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_pagination.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 10)->display($context);
        // line 11
        $this->loadTemplate("@SyliusShop/Product/Index/_sorting.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 11)->display($context);
        // line 12
        echo "
<div class=\"ui clearing hidden divider\"></div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_list", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 15, $this->source); })()), "data", array()))));
        echo "

";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 17, $this->source); })()), "data", array())) > 0)) {
            // line 18
            echo "    <div class=\"ui three cards\" id=\"products\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 19, $this->source); })()), "data", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 20)->display($context);
                // line 21
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </div>
    <div class=\"ui hidden divider\"></div>

    ";
            // line 25
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_pagination", array("products" => twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 25, $this->source); })()), "data", array()))));
            echo "

    ";
            // line 27
            echo $context["pagination"]->macro_simple(twig_get_attribute($this->env, $this->source, (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 27, $this->source); })()), "data", array()));
            echo "
";
        } else {
            // line 29
            echo "    ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  114 => 27,  109 => 25,  104 => 22,  90 => 21,  87 => 20,  70 => 19,  67 => 18,  65 => 17,  60 => 15,  55 => 12,  53 => 11,  51 => 10,  46 => 8,  43 => 7,  41 => 6,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}

{{ sonata_block_render_event('sylius.shop.product.index.before_search', {'products': resources.data}) }}

{% include '@SyliusShop/Product/Index/_search.html.twig' %}

{{ sonata_block_render_event('sylius.shop.product.index.after_search', {'products': resources.data}) }}

{% include '@SyliusShop/Product/Index/_pagination.html.twig' %}
{% include '@SyliusShop/Product/Index/_sorting.html.twig' %}

<div class=\"ui clearing hidden divider\"></div>

{{ sonata_block_render_event('sylius.shop.product.index.before_list', {'products': resources.data}) }}

{% if resources.data|length > 0 %}
    <div class=\"ui three cards\" id=\"products\">
        {% for product in resources.data %}
            {% include '@SyliusShop/Product/_box.html.twig' %}
        {% endfor %}
    </div>
    <div class=\"ui hidden divider\"></div>

    {{ sonata_block_render_event('sylius.shop.product.index.before_pagination', {'products': resources.data}) }}

    {{ pagination.simple(resources.data) }}
{% else %}
    {{ messages.info('sylius.ui.no_results_to_display') }}
{% endif %}
", "SyliusShopBundle:Product/Index:_main.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_main.html.twig");
    }
}
