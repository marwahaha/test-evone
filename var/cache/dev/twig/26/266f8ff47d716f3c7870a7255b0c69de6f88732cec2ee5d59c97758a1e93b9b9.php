<?php

/* @SyliusAdmin/Customer/Show/_content.html.twig */
class __TwigTemplate_af82bd72ace8788d88029da576b72d6770479680dfdabfcbf364e9078ddf4e1e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_content.html.twig"));

        // line 1
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusAdmin/Customer/Show/_content.html.twig", 1);
        // line 2
        echo "
<div class=\"eight wide column\" id=\"info\">
    <div class=\"ui fluid card\">
        ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.before_information", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 5, $this->source); })()))));
        echo "

        <div class=\"content\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_customer_update", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 8, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"header\">
                ";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
            </a>
            <div class=\"meta\">
                <span class=\"date\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 12, $this->source); })()), "createdAt", array())), "html", null, true);
        echo "</span>
                <br />
                ";
        // line 14
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 14, $this->source); })()), "group", array()))) {
            // line 15
            echo "                    <span class=\"group\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.group_membership"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 15, $this->source); })()), "group", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 17
        echo "            </div>
        </div>
        <div class=\"content\">
            <div id=\"subscribed-to-newsletter\">
                <i class=\"";
        // line 21
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 21, $this->source); })()), "subscribedToNewsletter", array())) ? ("green checkmark") : ("red remove"));
        echo " icon\"></i>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subscribed_to_newsletter"), "html", null, true);
        echo "
            </div>
            ";
        // line 24
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 24, $this->source); })()), "user", array()))) {
            // line 25
            echo "                ";
            $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 25, $this->source); })()), "user", array());
            // line 26
            echo "                <div id=\"verified-email\">
                    <i class=\"";
            // line 27
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 27, $this->source); })()), "verified", array())) ? ("green checkmark") : ("red remove"));
            echo " icon\"></i>
                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.email_verified"), "html", null, true);
            echo "
                </div>
                <br />
                ";
            // line 31
            if (call_user_func_array($this->env->getFunction('is_shop_enabled')->getCallable(), array())) {
                // line 32
                echo "                    ";
                echo $context["buttons"]->macro_default($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_impersonate_user", array("username" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 32, $this->source); })()), "emailCanonical", array()))), "sylius.ui.impersonate", "impersonate", "unhide", "blue");
                echo "
                ";
            }
            // line 34
            echo "            ";
        }
        // line 35
        echo "        </div>
        <div class=\"extra content\">
            <a href=\"mailto:";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 37, $this->source); })()), "email", array()), "html", null, true);
        echo "\">
                <i class=\"envelope icon\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 38, $this->source); })()), "email", array()), "html", null, true);
        echo "
            </a>
            ";
        // line 40
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 40, $this->source); })()), "phoneNumber", array()))) {
            // line 41
            echo "                <div id=\"phone-number\">
                    <i class=\"phone icon\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 42, $this->source); })()), "phoneNumber", array()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 45
        echo "        </div>

        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.customer.show.after_information", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 47, $this->source); })()))));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  137 => 45,  131 => 42,  128 => 41,  126 => 40,  121 => 38,  117 => 37,  113 => 35,  110 => 34,  104 => 32,  102 => 31,  96 => 28,  92 => 27,  89 => 26,  86 => 25,  84 => 24,  79 => 22,  75 => 21,  69 => 17,  61 => 15,  59 => 14,  52 => 12,  46 => 9,  42 => 8,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

<div class=\"eight wide column\" id=\"info\">
    <div class=\"ui fluid card\">
        {{ sonata_block_render_event('sylius.admin.customer.show.before_information', {'resource': resource}) }}

        <div class=\"content\">
            <a href=\"{{ path('sylius_admin_customer_update', {'id': customer.id}) }}\" class=\"header\">
                {{ customer.fullName|default('sylius.ui.guest_customer'|trans) }}
            </a>
            <div class=\"meta\">
                <span class=\"date\">{{ 'sylius.ui.customer_since'|trans }} {{ customer.createdAt|date }}</span>
                <br />
                {% if customer.group is not null %}
                    <span class=\"group\">{{ 'sylius.ui.group_membership'|trans }}: {{ customer.group }}</span>
                {% endif %}
            </div>
        </div>
        <div class=\"content\">
            <div id=\"subscribed-to-newsletter\">
                <i class=\"{{ customer.subscribedToNewsletter ? 'green checkmark' : 'red remove' }} icon\"></i>
                {{ 'sylius.ui.subscribed_to_newsletter'|trans }}
            </div>
            {% if customer.user is not null %}
                {% set user = customer.user %}
                <div id=\"verified-email\">
                    <i class=\"{{ user.verified ? 'green checkmark' : 'red remove' }} icon\"></i>
                    {{ 'sylius.ui.email_verified'|trans }}
                </div>
                <br />
                {% if is_shop_enabled() %}
                    {{ buttons.default(path('sylius_admin_impersonate_user', {'username': user.emailCanonical}), 'sylius.ui.impersonate', 'impersonate', 'unhide', 'blue') }}
                {% endif %}
            {% endif %}
        </div>
        <div class=\"extra content\">
            <a href=\"mailto:{{ customer.email }}\">
                <i class=\"envelope icon\"></i> {{ customer.email }}
            </a>
            {% if customer.phoneNumber is not null %}
                <div id=\"phone-number\">
                    <i class=\"phone icon\"></i> {{ customer.phoneNumber }}
                </div>
            {% endif %}
        </div>

        {{ sonata_block_render_event('sylius.admin.customer.show.after_information', {'resource': resource}) }}
    </div>
</div>
", "@SyliusAdmin/Customer/Show/_content.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_content.html.twig");
    }
}
