<?php

/* SyliusAdminBundle:Product:_info.html.twig */
class __TwigTemplate_d74320d464868cc62b29e76c6123335076ffcebf5705f4652be58889115fcc64 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_info.html.twig"));

        // line 1
        echo "<div class=\"ui header\">
    ";
        // line 2
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "SyliusAdminBundle:Product:_info.html.twig", 2)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->source); })()), "filter" => "sylius_admin_product_tiny_thumbnail")));
        // line 3
        echo "    <div class=\"content\">
        <div class=\"sylius-product-name\" title=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "productName", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "productName", array()), "html", null, true);
        echo "</div>
        <span class=\"sub header sylius-product-variant-code\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 5, $this->source); })()), "code", array()), "html", null, true);
        echo "\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 6, $this->source); })()), "code", array()), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->source); })()), "hasOptions", array(), "method")) {
            // line 11
            echo "    <div class=\"ui horizontal divided list sylius-product-options\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 12, $this->source); })()), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 13
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "name", array()), "html", null, true);
                echo "\">
                ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
";
        } elseif ( !(null === twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->source); })()), "variantName", array()))) {
            // line 19
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->source); })()), "variantName", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  82 => 19,  80 => 18,  77 => 17,  68 => 14,  63 => 13,  59 => 12,  56 => 11,  54 => 10,  47 => 6,  43 => 5,  37 => 4,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui header\">
    {% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_admin_product_tiny_thumbnail'} %}
    <div class=\"content\">
        <div class=\"sylius-product-name\" title=\"{{ item.productName }}\">{{ item.productName }}</div>
        <span class=\"sub header sylius-product-variant-code\" title=\"{{ variant.code }}\">
            {{ variant.code }}
        </span>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\">
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif item.variantName is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            {{ item.variantName }}
        </div>
    </div>
{% endif %}
", "SyliusAdminBundle:Product:_info.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_info.html.twig");
    }
}
