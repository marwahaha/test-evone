<?php

/* @BitBagSyliusCmsPlugin/Block/Crud/_form.html.twig */
class __TwigTemplate_2695c5dcb346605dc3f791d4bf71b696420822ef40e8938eb1019ab6a90483b9 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Block/Crud/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Block/Crud/_form.html.twig"));

        // line 1
        $context["__internal_df72f5725e900390363307e154760150fabe5b5d8cd581690658982dc52c6571"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", "@BitBagSyliusCmsPlugin/Block/Crud/_form.html.twig", 1);
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), array(0 => "@BitBagSyliusCmsPlugin/Form/theme.html.twig"), true);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig", "@BitBagSyliusCmsPlugin/Block/Crud/_form.html.twig", 4)->display($context);
        // line 5
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'errors');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "code", array()), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "enabled", array()), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "products", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "sections", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "channels", array()), 'row');
        echo "

            <a href=\"#\" class=\"ui labeled button icon primary bitbag-cms-resource-preview\" data-url=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_block_preview");
        echo "\">
                <i class=\"eye icon\"></i>
                ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.preview"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</div>

<div class=\"ui one column stackable grid\">
    <div class=\"column\" id=\"bitbag-block-image\">
        ";
        // line 26
        echo $context["__internal_df72f5725e900390363307e154760150fabe5b5d8cd581690658982dc52c6571"]->macro_translationForm(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "translations", array()), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 26, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Block/Crud/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  74 => 18,  69 => 16,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  38 => 5,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig' import translationForm %}
{% form_theme form '@BitBagSyliusCmsPlugin/Form/theme.html.twig' %}

{% include '@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig' %}

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            {{ form_row(form.code) }}
            {{ form_row(form.enabled) }}
            {{ form_row(form.products) }}
            {{ form_row(form.sections) }}
            {{ form_row(form.channels) }}

            <a href=\"#\" class=\"ui labeled button icon primary bitbag-cms-resource-preview\" data-url=\"{{ path('bitbag_sylius_cms_plugin_admin_block_preview') }}\">
                <i class=\"eye icon\"></i>
                {{ 'bitbag_sylius_cms_plugin.ui.preview'|trans }}
            </a>
        </div>
    </div>
</div>

<div class=\"ui one column stackable grid\">
    <div class=\"column\" id=\"bitbag-block-image\">
        {{ translationForm(form.translations, resource) }}
    </div>
</div>
", "@BitBagSyliusCmsPlugin/Block/Crud/_form.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Block/Crud/_form.html.twig");
    }
}
