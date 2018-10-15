<?php

/* @SyliusAdmin/Order/Show/_payment.html.twig */
class __TwigTemplate_b60ea01b061edf84e135ef233327a6637653e394774552c8d825bff1ffc598e7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_payment.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Order/Show/_payment.html.twig", 1);
        // line 2
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusAdmin/Order/Show/_payment.html.twig", 2);
        // line 3
        echo "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 6
        echo $context["label"]->macro_default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 6, $this->source); })()), "state", array()))));
        echo "
    </div>
    <i class=\"large payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 11, $this->source); })()), "method", array()), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            ";
        // line 14
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 14, $this->source); })()), "amount", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 14, $this->source); })()), "order", array()), "currencyCode", array()));
        echo "
        </div>
    </div>
    ";
        // line 17
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 17, $this->source); })()), "complete", "sylius_payment")) {
            // line 18
            echo "    <div class=\"ui segment\">
        <form action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_payment_complete", array("orderId" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->source); })()), "id", array()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 19, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 20, $this->source); })()), "id", array())), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
            echo "</button>
        </form>
    </div>
    ";
        }
        // line 26
        echo "    ";
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 26, $this->source); })()), "refund", "sylius_payment")) {
            // line 27
            echo "        <div class=\"ui segment\">
            <form action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_payment_refund", array("orderId" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->source); })()), "id", array()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 28, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" method=\"post\" novalidate>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new Twig_Error_Runtime('Variable "payment" does not exist.', 29, $this->source); })()), "id", array())), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                <button type=\"submit\" class=\"ui icon labeled tiny yellow fluid loadable button\"><i class=\"reply all icon\"></i> ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.refund"), "html", null, true);
            echo "</button>
            </form>
        </div>
    ";
        }
        // line 35
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/Show/_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 35,  94 => 31,  89 => 29,  85 => 28,  82 => 27,  79 => 26,  72 => 22,  67 => 20,  63 => 19,  60 => 18,  58 => 17,  52 => 14,  46 => 11,  38 => 6,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}
{% import '@SyliusUi/Macro/labels.html.twig' as label %}

<div class=\"item\">
    <div class=\"right floated content\">
        {{ label.default(('sylius.ui.'~payment.state)|trans) }}
    </div>
    <i class=\"large payment icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ payment.method }}
        </div>
        <div class=\"description\">
            {{ money.format(payment.amount, payment.order.currencyCode) }}
        </div>
    </div>
    {% if sm_can(payment, 'complete', 'sylius_payment') %}
    <div class=\"ui segment\">
        <form action=\"{{ path('sylius_admin_order_payment_complete', {'orderId': order.id, 'id': payment.id}) }}\" method=\"post\" novalidate>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(payment.id) }}\" />
            <input type=\"hidden\" name=\"_method\" value=\"PUT\">
            <button type=\"submit\" class=\"ui icon labeled tiny blue fluid loadable button\"><i class=\"check icon\"></i> {{ 'sylius.ui.complete'|trans }}</button>
        </form>
    </div>
    {% endif %}
    {% if sm_can(payment, 'refund', 'sylius_payment') %}
        <div class=\"ui segment\">
            <form action=\"{{ path('sylius_admin_order_payment_refund', {'orderId': order.id, 'id': payment.id}) }}\" method=\"post\" novalidate>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token(payment.id) }}\" />
                <input type=\"hidden\" name=\"_method\" value=\"PUT\">
                <button type=\"submit\" class=\"ui icon labeled tiny yellow fluid loadable button\"><i class=\"reply all icon\"></i> {{ 'sylius.ui.refund'|trans }}</button>
            </form>
        </div>
    {% endif %}
</div>
", "@SyliusAdmin/Order/Show/_payment.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_payment.html.twig");
    }
}
