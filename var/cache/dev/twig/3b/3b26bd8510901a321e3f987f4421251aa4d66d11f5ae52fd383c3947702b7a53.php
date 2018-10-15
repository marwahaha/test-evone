<?php

/* @SyliusAdmin/Order/Show/Summary/_totals.html.twig */
class __TwigTemplate_080e4782105f4aabdbe348484ea32d8aa6e7f054b4c31678be9ba3339fe867ef extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_totals.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/Summary/_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Order/Show/Summary/_totals.html.twig", 1);
        // line 2
        echo "

";
        // line 4
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 5
        $context["orderShippingPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 6
        $context["itemPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT");
        // line 7
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 8
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 9
        echo "
";
        // line 10
        $context["orderShippingPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->source); })()), "getAdjustmentsRecursively", array(0 => (isset($context["orderShippingPromotionAdjustment"]) || array_key_exists("orderShippingPromotionAdjustment", $context) ? $context["orderShippingPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotionAdjustment" does not exist.', 10, $this->source); })())), "method")));
        // line 11
        echo "
<tr>
    <th colspan=\"8\" id=\"items-total\" class=\"right aligned\">
        <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</strong>:
        ";
        // line 15
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 15, $this->source); })()), "itemsTotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 15, $this->source); })()), "currencyCode", array()));
        echo "
    </th>
</tr>
<tr>
    <td colspan=\"";
        // line 19
        echo (((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 19, $this->source); })())) ? (2) : (4));
        echo "\" id=\"shipping-charges\">
        ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->source); })()), "adjustments", array(0 => (isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "shippingAdjustment" does not exist.', 20, $this->source); })())), "method"), "isEmpty", array(), "method")) {
            // line 21
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 22, $this->source); })()), "adjustments", array(0 => (isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "shippingAdjustment" does not exist.', 22, $this->source); })())), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 23
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adjustment"], "label", array()), "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 27
                echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, $context["adjustment"], "amount", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->source); })()), "currencyCode", array()));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        ";
        } else {
            // line 34
            echo "            <p><small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_shipping_charges"), "html", null, true);
            echo "</small></p>
        ";
        }
        // line 36
        echo "    </td>
    ";
        // line 37
        if ( !twig_test_empty((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 41
                echo "                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">";
                // line 43
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</div>
                        <div class=\"description\">
                            ";
                // line 45
                echo $context["money"]->macro_format($context["amount"], twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 45, $this->source); })()), "currencyCode", array()));
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </div>
    </td>
    ";
        }
        // line 53
        echo "    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 55
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->source); })()), "shippingTotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"taxes\">
        ";
        // line 60
        $context["taxAdjustments"] = twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 60, $this->source); })()), "getAdjustmentsRecursively", array(0 => (isset($context["taxAdjustment"]) || array_key_exists("taxAdjustment", $context) ? $context["taxAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "taxAdjustment" does not exist.', 60, $this->source); })())), "method");
        // line 61
        echo "        ";
        if ( !twig_test_empty((isset($context["taxAdjustments"]) || array_key_exists("taxAdjustments", $context) ? $context["taxAdjustments"] : (function () { throw new Twig_Error_Runtime('Variable "taxAdjustments" does not exist.', 61, $this->source); })()))) {
            // line 62
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array((isset($context["taxAdjustments"]) || array_key_exists("taxAdjustments", $context) ? $context["taxAdjustments"] : (function () { throw new Twig_Error_Runtime('Variable "taxAdjustments" does not exist.', 63, $this->source); })()))));
            foreach ($context['_seq'] as $context["taxLabel"] => $context["taxAmount"]) {
                // line 64
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 66
                echo twig_escape_filter($this->env, $context["taxLabel"], "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 68
                echo $context["money"]->macro_format($context["taxAmount"], twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 68, $this->source); })()), "currencyCode", array()));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['taxLabel'], $context['taxAmount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            </div>
        ";
        } else {
            // line 75
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_taxes"), "html", null, true);
            echo ".</p>
        ";
        }
        // line 77
        echo "    </td>
    <td colspan=\"4\" id=\"tax-total\" class=\"right aligned\">
        <strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 80
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 80, $this->source); })()), "taxTotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 80, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-discounts\">
        ";
        // line 85
        $context["orderPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 85, $this->source); })()), "getAdjustmentsRecursively", array(0 => (isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotionAdjustment" does not exist.', 85, $this->source); })())), "method")));
        // line 86
        echo "        ";
        if ( !twig_test_empty((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotions" does not exist.', 86, $this->source); })()))) {
            // line 87
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotions" does not exist.', 88, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 89
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 91
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 93
                echo $context["money"]->macro_format($context["amount"], twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 93, $this->source); })()), "currencyCode", array()));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </div>
        ";
        } else {
            // line 100
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_promotion"), "html", null, true);
            echo ".</p>
        ";
        }
        // line 102
        echo "    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\">
        <strong>";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.promotion_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 105
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 105, $this->source); })()), "orderPromotionTotal", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 105, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"8\" id=\"total\" class=\"ui large header right aligned\">
        <strong>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total"), "html", null, true);
        echo "</strong>:
        ";
        // line 111
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 111, $this->source); })()), "total", array()), twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 111, $this->source); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/Show/Summary/_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 111,  278 => 110,  270 => 105,  266 => 104,  262 => 102,  256 => 100,  252 => 98,  241 => 93,  236 => 91,  232 => 89,  228 => 88,  225 => 87,  222 => 86,  220 => 85,  212 => 80,  208 => 79,  204 => 77,  198 => 75,  194 => 73,  183 => 68,  178 => 66,  174 => 64,  170 => 63,  167 => 62,  164 => 61,  162 => 60,  154 => 55,  150 => 54,  147 => 53,  142 => 50,  131 => 45,  126 => 43,  122 => 41,  118 => 40,  114 => 38,  112 => 37,  109 => 36,  103 => 34,  99 => 32,  88 => 27,  83 => 25,  79 => 23,  75 => 22,  72 => 21,  70 => 20,  66 => 19,  59 => 15,  55 => 14,  50 => 11,  48 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}


{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set orderShippingPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set itemPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set orderShippingPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderShippingPromotionAdjustment)) %}

<tr>
    <th colspan=\"8\" id=\"items-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.subtotal'|trans }}</strong>:
        {{ money.format(order.itemsTotal ,order.currencyCode) }}
    </th>
</tr>
<tr>
    <td colspan=\"{{ orderShippingPromotions ? 2 : 4 }}\" id=\"shipping-charges\">
        {% if not order.adjustments(shippingAdjustment).isEmpty() %}
            <div class=\"ui relaxed divided list\">
                {% for adjustment in order.adjustments(shippingAdjustment) %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ adjustment.label }}</span>
                            <div class=\"description\">
                                {{ money.format(adjustment.amount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p><small>{{ 'sylius.ui.no_shipping_charges'|trans }}</small></p>
        {% endif %}
    </td>
    {% if not orderShippingPromotions is empty %}
    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            {% for label, amount in orderShippingPromotions %}
                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">{{ label }}</div>
                        <div class=\"description\">
                            {{ money.format(amount, order.currencyCode) }}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </td>
    {% endif %}
    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.shipping_total'|trans }}</strong>:
        {{ money.format(order.shippingTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"taxes\">
        {% set taxAdjustments = order.getAdjustmentsRecursively(taxAdjustment) %}
        {% if taxAdjustments is not empty %}
            <div class=\"ui relaxed divided list\">
                {% for taxLabel, taxAmount in sylius_aggregate_adjustments(taxAdjustments) %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ taxLabel }}</span>
                            <div class=\"description\">
                                {{ money.format(taxAmount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>{{ 'sylius.ui.no_taxes'|trans }}.</p>
        {% endif %}
    </td>
    <td colspan=\"4\" id=\"tax-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.tax_total'|trans }}</strong>:
        {{ money.format(order.taxTotal ,order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-discounts\">
        {% set orderPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderPromotionAdjustment)) %}
        {% if not orderPromotions is empty %}
            <div class=\"ui relaxed divided list\">
                {% for label, amount in orderPromotions %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ label }}</span>
                            <div class=\"description\">
                                {{ money.format(amount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>{{ 'sylius.ui.no_promotion'|trans }}.</p>
        {% endif %}
    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.promotion_total'|trans }}</strong>:
        {{ money.format(order.orderPromotionTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"8\" id=\"total\" class=\"ui large header right aligned\">
        <strong>{{ 'sylius.ui.total'|trans }}</strong>:
        {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
", "@SyliusAdmin/Order/Show/Summary/_totals.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/Summary/_totals.html.twig");
    }
}
