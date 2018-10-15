<?php

/* @BitBagSyliusCmsPlugin/layout.html.twig */
class __TwigTemplate_b58a9739aacb3310ffe26a200a1571a285019f920f943db12a2bbcff85b3fb0b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 6
        $this->loadTemplate("SyliusUiBundle::_stylesheets.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 6)->display(array_merge($context, array("path" => "bundles/bitbagsyliuscmsplugin/css/style.css")));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 13
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 13)->display(array_merge($context, array("path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-upload-csv.js")));
        // line 14
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 14)->display(array_merge($context, array("path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-page-slug.js")));
        // line 15
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 15)->display(array_merge($context, array("path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js")));
        // line 16
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 16)->display(array_merge($context, array("path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js")));
        // line 17
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 17)->display(array_merge($context, array("path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js")));
        // line 18
        echo "    ";
        $this->loadTemplate("SyliusUiBundle::_javascripts.html.twig", "@BitBagSyliusCmsPlugin/layout.html.twig", 18)->display(array_merge($context, array("path" => "bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js")));
        // line 19
        echo "
    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 20, $this->source); })()) . ".javascripts")));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 20,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  90 => 15,  87 => 14,  85 => 13,  79 => 11,  70 => 10,  60 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    {% include 'SyliusUiBundle::_stylesheets.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/css/style.css'} %}
{% endblock %}


{% block javascripts %}
    {{ parent() }}

    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-upload-csv.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-page-slug.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-block-image-preview.js'} %}
    {% include 'SyliusUiBundle::_javascripts.html.twig' with {'path': 'bundles/bitbagsyliuscmsplugin/js/bitbag-cms-resource-preview.js'} %}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "@BitBagSyliusCmsPlugin/layout.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/layout.html.twig");
    }
}
