<?php

/* SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig */
class __TwigTemplate_0f587c014ff654043a99afb9f0c28e7970d2d1d4b1af41ebf3638821c1f0eb71 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->source); })()), "isTracked", array())) {
            // line 2
            echo "<div class=\"ui ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->source); })()), "onHand", array()) > 0)) ? ("green") : ("red"));
            echo " icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->source); })()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 4, $this->source); })()), "onHand", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.available_on_hand"), "html", null, true);
            echo "
    ";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 5, $this->source); })()), "onHold", array()) > 0)) {
                // line 6
                echo "    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->source); })()), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->source); })()), "onHold", array()), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.reserved"), "html", null, true);
                echo "
    </div>
    ";
            }
            // line 10
            echo "</div>
";
        } else {
            // line 12
            echo "    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  64 => 12,  60 => 10,  50 => 7,  47 => 6,  45 => 5,  37 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.isTracked %}
<div class=\"ui {{ data.onHand > 0 ? 'green' : 'red' }} icon label\">
    <i class=\"cube icon\"></i>
    <span class=\"onHand\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHand }}</span> {{ 'sylius.ui.available_on_hand'|trans }}
    {% if data.onHold > 0 %}
    <div class=\"detail\">
        <span class=\"onHold\" data-product-variant-id=\"{{ data.id }}\">{{ data.onHold }}</span> {{ 'sylius.ui.reserved'|trans }}
    </div>
    {% endif %}
</div>
{% else %}
    <span class=\"ui red label\">
        <i class=\"remove icon\"></i>
        {{ 'sylius.ui.not_tracked'|trans }}
    </span>
{% endif %}
", "SyliusAdminBundle:ProductVariant/Grid/Field:inventory.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Grid/Field/inventory.html.twig");
    }
}
