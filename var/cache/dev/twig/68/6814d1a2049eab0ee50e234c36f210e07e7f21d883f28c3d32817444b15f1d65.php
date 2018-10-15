<?php

/* SyliusAdminBundle:Order:show.html.twig */
class __TwigTemplate_06ab17604569dbfa87c853711d1f74acf3ac6e756c2899cc78857ae0d027c9f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "SyliusAdminBundle:Order:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:show.html.twig"));

        // line 5
        $context["customer"] = twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->source); })()), "customer", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.order") . " #") . twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 3, $this->source); })()), "number", array())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->source); })()))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        ";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order:show.html.twig", 12)->display($context);
        // line 13
        echo "    </div>

    ";
        // line 15
        $context["menu"] = $this->extensions['Knp\Menu\Twig\MenuExtension']->get("sylius.admin.order.show", array(), array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 15, $this->source); })())));
        // line 16
        echo "    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 16, $this->source); })()), array("template" => "@SyliusUi/Menu/top.html.twig"));
        echo "
</div>

";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 19, $this->source); })()))));
        echo "

";
        // line 21
        $this->loadTemplate("@SyliusAdmin/Order/Show/_breadcrumb.html.twig", "SyliusAdminBundle:Order:show.html.twig", 21)->display($context);
        // line 22
        echo "
";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_breadcrumb", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 23, $this->source); })()))));
        echo "

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        ";
        // line 27
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_summary", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 27, $this->source); })()))));
        echo "

        <div class=\"ui segment\">
            ";
        // line 30
        $this->loadTemplate("@SyliusAdmin/Order/Show/_summary.html.twig", "SyliusAdminBundle:Order:show.html.twig", 30)->display($context);
        // line 31
        echo "        </div>

        ";
        // line 33
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_summary", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 33, $this->source); })()))));
        echo "

        ";
        // line 35
        $this->loadTemplate("@SyliusAdmin/Order/Show/_notes.html.twig", "SyliusAdminBundle:Order:show.html.twig", 35)->display($context);
        // line 36
        echo "    </div>
    <div class=\"four wide column\">
        ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_customer_information", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 38, $this->source); })()))));
        echo "

        ";
        // line 40
        $this->loadTemplate("@SyliusAdmin/Order/Show/_customer.html.twig", "SyliusAdminBundle:Order:show.html.twig", 40)->display($context);
        // line 41
        echo "
        ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_addresses", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 42, $this->source); })()))));
        echo "

        ";
        // line 44
        $this->loadTemplate("@SyliusAdmin/Order/Show/_addresses.html.twig", "SyliusAdminBundle:Order:show.html.twig", 44)->display($context);
        // line 45
        echo "
        ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.before_payments", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 46, $this->source); })()))));
        echo "

        ";
        // line 48
        $this->loadTemplate("@SyliusAdmin/Order/Show/_payments.html.twig", "SyliusAdminBundle:Order:show.html.twig", 48)->display($context);
        // line 49
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Order/Show/_shipments.html.twig", "SyliusAdminBundle:Order:show.html.twig", 49)->display($context);
        // line 50
        echo "
        ";
        // line 51
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_shipments", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 51, $this->source); })()))));
        echo "
    </div>
</div>

";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.show.after_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 55, $this->source); })()))));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 55,  172 => 51,  169 => 50,  166 => 49,  164 => 48,  159 => 46,  156 => 45,  154 => 44,  149 => 42,  146 => 41,  144 => 40,  139 => 38,  135 => 36,  133 => 35,  128 => 33,  124 => 31,  122 => 30,  116 => 27,  109 => 23,  106 => 22,  104 => 21,  99 => 19,  92 => 16,  90 => 15,  86 => 13,  84 => 12,  77 => 8,  68 => 7,  48 => 3,  38 => 1,  36 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusAdmin/layout.html.twig' %}

{% block title %}{{ 'sylius.ui.order'|trans ~' #'~ order.number }} {{ parent() }}{% endblock %}

{% set customer = order.customer %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.show.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"ten wide column\">
        {% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
    </div>

    {% set menu = knp_menu_get('sylius.admin.order.show', [], {'order': order}) %}
    {{ knp_menu_render(menu, {'template': '@SyliusUi/Menu/top.html.twig'}) }}
</div>

{{ sonata_block_render_event('sylius.admin.order.show.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Order/Show/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.show.after_breadcrumb', {'resource': resource}) }}

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        {{ sonata_block_render_event('sylius.admin.order.show.before_summary', {'resource': resource}) }}

        <div class=\"ui segment\">
            {% include '@SyliusAdmin/Order/Show/_summary.html.twig' %}
        </div>

        {{ sonata_block_render_event('sylius.admin.order.show.after_summary', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_notes.html.twig' %}
    </div>
    <div class=\"four wide column\">
        {{ sonata_block_render_event('sylius.admin.order.show.before_customer_information', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_customer.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.before_addresses', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_addresses.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.before_payments', {'resource': resource}) }}

        {% include '@SyliusAdmin/Order/Show/_payments.html.twig' %}
        {% include '@SyliusAdmin/Order/Show/_shipments.html.twig' %}

        {{ sonata_block_render_event('sylius.admin.order.show.after_shipments', {'resource': resource}) }}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.show.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:show.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/show.html.twig");
    }
}
