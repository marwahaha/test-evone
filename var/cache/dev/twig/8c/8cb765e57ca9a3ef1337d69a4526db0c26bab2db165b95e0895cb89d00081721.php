<?php

/* @SyliusAdmin/Customer/_info.html.twig */
class __TwigTemplate_4690f415e74a275882e2c17acd4016d49255a903f58fe367dd5b718bdd6d7aa9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/_info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/_info.html.twig"));

        // line 1
        echo "<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_show", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 3, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"header sylius-customer-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 3, $this->source); })()), "fullName", array()), "html", null, true);
        echo "</a>
        <div class=\"meta\">
            <span class=\"date\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo $this->extensions['Sonata\IntlBundle\Twig\Extension\DateTimeExtension']->formatDate(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 5, $this->source); })()), "createdAt", array()));
        echo ".</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 9, $this->source); })()), "email", array()), "html", null, true);
        echo "\">
            <i class=\"envelope icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 11, $this->source); })()), "email", array()), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 14
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 14, $this->source); })()), "phoneNumber", array()))) {
            // line 15
            echo "        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 18, $this->source); })()), "phoneNumber", array()), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "customerIp", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 22, $this->source); })()), "customerIp", array())))) {
            // line 23
            echo "        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 26, $this->source); })()), "customerIp", array()), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 30
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  82 => 26,  77 => 23,  74 => 22,  67 => 18,  62 => 15,  60 => 14,  54 => 11,  49 => 9,  40 => 5,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"{{ path('sylius_admin_customer_show', {'id': customer.id}) }}\" class=\"header sylius-customer-name\">{{ customer.fullName }}</a>
        <div class=\"meta\">
            <span class=\"date\">{{ 'sylius.ui.customer_since'|trans }} {{ customer.createdAt|format_date }}.</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:{{ customer.email }}\">
            <i class=\"envelope icon\"></i>
            {{ customer.email }}
        </a>
    </div>
    {% if customer.phoneNumber is not empty %}
        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            {{ customer.phoneNumber }}
        </span>
        </div>
    {% endif %}
    {% if order.customerIp is defined and order.customerIp is not empty %}
        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            {{ order.customerIp }}
        </span>
        </div>
    {% endif %}
</div>
", "@SyliusAdmin/Customer/_info.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/_info.html.twig");
    }
}
