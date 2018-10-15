<?php

/* @SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig */
class __TwigTemplate_b1031727033e19744dadb826eef3f5eead7393acdc794bb87568c7e5bf2dc546 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", 1);
        // line 2
        echo "
<div class=\"title";
        // line 3
        if ((0 == twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 3, $this->source); })()), "index0", array()))) {
            echo " active";
        }
        echo "\">
    <i class=\"dropdown icon\"></i>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 5, $this->source); })()), "channel", array()), "name", array()), "html", null, true);
        echo "
</div>
<div class=\"content";
        // line 7
        if ((0 == twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 7, $this->source); })()), "index0", array()))) {
            echo " active";
        }
        echo "\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 13, $this->source); })()), "channel", array()), "color", array()))) {
            // line 14
            echo "                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 14, $this->source); })()), "channel", array()), "color", array()), "html", null, true);
            echo "\"></span>
                        ";
        }
        // line 16
        echo "                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 16, $this->source); })()), "channel", array()), "name", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channel"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 26, $this->source); })()), "ordersCount", array()), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        ";
        // line 36
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 36, $this->source); })()), "ordersValue", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 36, $this->source); })()), "channel", array()), "baseCurrency", array()), "code", array()));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total_value_of_orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        ";
        // line 46
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 46, $this->source); })()), "averageOrderValue", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new Twig_Error_Runtime('Variable "statistic" does not exist.', 46, $this->source); })()), "channel", array()), "baseCurrency", array()), "code", array()));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  114 => 46,  104 => 39,  98 => 36,  88 => 29,  82 => 26,  72 => 19,  65 => 16,  59 => 14,  57 => 13,  46 => 7,  41 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}

<div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
    <i class=\"dropdown icon\"></i>
    {{ statistic.channel.name }}
</div>
<div class=\"content{% if 0 == loop.index0 %} active{% endif %}\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        {% if statistic.channel.color is not empty %}
                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ statistic.channel.color }}\"></span>
                        {% endif %}
                        {{ statistic.channel.name }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.channel'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        {{ statistic.ordersCount }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        {{ money.format(statistic.ordersValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.total_value_of_orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        {{ money.format(statistic.averageOrderValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.average_order_value'|trans }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Statistics/_perChannel.html.twig");
    }
}
