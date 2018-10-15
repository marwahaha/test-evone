<?php

/* @SyliusAdmin/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig */
class __TwigTemplate_739552b8c5907c13361a765aa379e199278edb7687cca29d65f8a91bc4b6eb2b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->source); })()), "exclusive", array())) {
            // line 2
            echo "    <div class=\"ui ribbon orange label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.exclusive"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 5, $this->source); })()), "couponBased", array())) {
            // line 6
            echo "    <div class=\"ui ribbon blue label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.coupon_based"), "html", null, true);
            echo "</div>
    <br />
";
        }
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->source); })()), "code", array()), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  40 => 6,  38 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.exclusive %}
    <div class=\"ui ribbon orange label\">{{ 'sylius.ui.exclusive'|trans }}</div>
    <br />
{% endif %}
{% if data.couponBased %}
    <div class=\"ui ribbon blue label\">{{ 'sylius.ui.coupon_based'|trans }}</div>
    <br />
{% endif %}
{{ data.code }}
", "@SyliusAdmin/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/codeExclusiveAndCouponBased.html.twig");
    }
}
