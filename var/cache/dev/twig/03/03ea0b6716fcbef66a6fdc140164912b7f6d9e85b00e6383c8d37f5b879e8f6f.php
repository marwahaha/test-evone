<?php

/* SyliusAdminBundle:Order:update.html.twig */
class __TwigTemplate_e85e3ec8435b43f4343f63e4d5682beb530c1e454a35948fd7fc33dc89af3445 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusAdmin/layout.html.twig", "SyliusAdminBundle:Order:update.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:update.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("@SyliusUi/Macro/headers.html.twig", "SyliusAdminBundle:Order:update.html.twig", 3);
        // line 4
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusAdminBundle:Order:update.html.twig", 4);
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), array(0 => "@SyliusUi/Form/theme.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit_order") . " #") . twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->source); })()), "number", array())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.before_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 11, $this->source); })()))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        ";
        // line 15
        $this->loadTemplate("@SyliusAdmin/Order/Show/_header.html.twig", "SyliusAdminBundle:Order:update.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
    <div class=\"four wide right aligned column\">
        ";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Order/Update/_actions.html.twig", "SyliusAdminBundle:Order:update.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
</div>

";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 22, $this->source); })()))));
        echo "
    
";
        // line 24
        $this->loadTemplate("@SyliusAdmin/Order/Update/_breadcrumb.html.twig", "SyliusAdminBundle:Order:update.html.twig", 24)->display($context);
        // line 25
        echo "
";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_breadcrumb", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 26, $this->source); })()))));
        echo "

";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_update", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->source); })()), "id", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
    <div class=\"ui segment\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h4>
            ";
        // line 34
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order:update.html.twig", 34)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "shippingAddress", array()))));
        // line 35
        echo "        </div>

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h4>
            ";
        // line 39
        $this->loadTemplate("@SyliusAdmin/Common/Form/_address.html.twig", "SyliusAdminBundle:Order:update.html.twig", 39)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "billingAddress", array()))));
        // line 40
        echo "        </div>

        ";
        // line 42
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.form", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 42, $this->source); })()))));
        echo "

        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "_token", array()), 'row');
        echo "
        ";
        // line 45
        $this->loadTemplate("@SyliusUi/Form/Buttons/_update.html.twig", "SyliusAdminBundle:Order:update.html.twig", 45)->display(array_merge($context, array("paths" => array("cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_order_index")))));
        // line 46
        echo "    </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "

";
        // line 49
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.update.after_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 49, $this->source); })()))));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 49,  159 => 47,  156 => 46,  154 => 45,  150 => 44,  145 => 42,  141 => 40,  139 => 39,  135 => 38,  130 => 35,  128 => 34,  124 => 33,  116 => 28,  111 => 26,  108 => 25,  106 => 24,  101 => 22,  96 => 19,  94 => 18,  90 => 16,  88 => 15,  81 => 11,  72 => 10,  52 => 6,  42 => 1,  40 => 8,  38 => 4,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusAdmin/layout.html.twig' %}

{% import '@SyliusUi/Macro/headers.html.twig' as headers %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% block title %}{{ 'sylius.ui.edit_order'|trans ~' #'~ order.number }} {{ parent() }}{% endblock %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.update.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        {% include '@SyliusAdmin/Order/Show/_header.html.twig' %}
    </div>
    <div class=\"four wide right aligned column\">
        {% include '@SyliusAdmin/Order/Update/_actions.html.twig' %}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.update.after_header', {'resource': resource}) }}
    
{% include '@SyliusAdmin/Order/Update/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.update.after_breadcrumb', {'resource': resource}) }}

{{ form_start(form, {'action': path('sylius_admin_order_update', {'id': order.id}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
    <div class=\"ui segment\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h4>
            {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.shippingAddress} %}
        </div>

        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h4>
            {% include '@SyliusAdmin/Common/Form/_address.html.twig' with {'form': form.billingAddress} %}
        </div>

        {{ sonata_block_render_event('sylius.admin.order.update.form', {'resource': resource}) }}

        {{ form_row(form._token) }}
        {% include '@SyliusUi/Form/Buttons/_update.html.twig' with {'paths': {'cancel': path('sylius_admin_order_index')}} %}
    </div>
{{ form_end(form, {'render_rest': false}) }}

{{ sonata_block_render_event('sylius.admin.order.update.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:update.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/update.html.twig");
    }
}
