<?php

/* @BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig */
class __TwigTemplate_0a1971c547b296e234516c27e56ea8871e8cd02190e9219eddcae636d3e9f9d1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig"));

        // line 1
        $context["__internal_7c54517b124a551ece55e7f939b53b388632952f4e012d225207683ccdf8b894"] = $this->loadTemplate("@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig", 1);
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), array(0 => "@BitBagSyliusCmsPlugin/Form/theme.html.twig"), true);
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        echo "

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "code", array()), 'row');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "enabled", array()), 'row');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "products", array()), 'row');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "sections", array()), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "channels", array()), 'row');
        echo "

            <a href=\"#\" class=\"ui labeled button icon primary bitbag-cms-resource-preview\" data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_admin_page_preview", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "vars", array()), "data", array()), "id", array()))), "html", null, true);
        echo "\">
                <i class=\"eye icon\"></i>
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.preview"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</div>

<div class=\"ui one column stackable grid\">
    <div class=\"column\" id=\"bitbag-block-image\">
        ";
        // line 27
        echo $context["__internal_7c54517b124a551ece55e7f939b53b388632952f4e012d225207683ccdf8b894"]->macro_translationFormWithSlug(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "translations", array()), "@BitBagSyliusCmsPlugin/Page/Crud/_slugField.html.twig", (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 27, $this->source); })()));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  75 => 19,  70 => 17,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  41 => 6,  38 => 5,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@BitBagSyliusCmsPlugin/Macro/translationForm.html.twig' import translationFormWithSlug %}
{% form_theme form '@BitBagSyliusCmsPlugin/Form/theme.html.twig' %}

{% include '@BitBagSyliusCmsPlugin/Modal/_resourcePreview.html.twig' %}

{{ form_errors(form) }}

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_row(form.code) }}
            {{ form_row(form.enabled) }}
            {{ form_row(form.products) }}
            {{ form_row(form.sections) }}
            {{ form_row(form.channels) }}

            <a href=\"#\" class=\"ui labeled button icon primary bitbag-cms-resource-preview\" data-url=\"{{ path('bitbag_sylius_cms_plugin_admin_page_preview', {'id': form.vars.data.id}) }}\">
                <i class=\"eye icon\"></i>
                {{ 'bitbag_sylius_cms_plugin.ui.preview'|trans }}
            </a>
        </div>
    </div>
</div>

<div class=\"ui one column stackable grid\">
    <div class=\"column\" id=\"bitbag-block-image\">
        {{ translationFormWithSlug(form.translations, '@BitBagSyliusCmsPlugin/Page/Crud/_slugField.html.twig', page) }}
    </div>
</div>
", "@BitBagSyliusCmsPlugin/Page/Crud/_form.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Page/Crud/_form.html.twig");
    }
}
