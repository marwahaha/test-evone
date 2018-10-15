<?php

/* SyliusShopBundle:Product/Show:_association.html.twig */
class __TwigTemplate_b099c91e9c323c4c81e23c70de12d25978b81ee8c59a19c0bb47eac07d71076f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_association.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_association.html.twig"));

        // line 1
        echo "<h4 class=\"ui horizontal section divider header\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new Twig_Error_Runtime('Variable "product_association" does not exist.', 1, $this->source); })()), "type", array()), "name", array()), "html", null, true);
        echo "</h4>
<div id=\"sylius-product-association-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new Twig_Error_Runtime('Variable "product_association" does not exist.', 2, $this->source); })()), "type", array()), "name", array()), "html", null, true);
        echo "\">
";
        // line 3
        $this->loadTemplate("@SyliusShop/Product/_horizontalList.html.twig", "SyliusShopBundle:Product/Show:_association.html.twig", 3)->display(array_merge($context, array("products" => twig_get_attribute($this->env, $this->source, (isset($context["product_association"]) || array_key_exists("product_association", $context) ? $context["product_association"] : (function () { throw new Twig_Error_Runtime('Variable "product_association" does not exist.', 3, $this->source); })()), "associatedProducts", array()))));
        // line 4
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  34 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui horizontal section divider header\">{{ product_association.type.name }}</h4>
<div id=\"sylius-product-association-{{ product_association.type.name }}\">
{% include '@SyliusShop/Product/_horizontalList.html.twig' with {'products': product_association.associatedProducts} %}
</div>
", "SyliusShopBundle:Product/Show:_association.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_association.html.twig");
    }
}
