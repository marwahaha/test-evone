<?php

/* @SyliusAdmin/ProductVariant/Tab/_details.html.twig */
class __TwigTemplate_f13d8e7efebdcdbfe052b9453848209e177a80ab0cb018e9f06df534e2133ccc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig"));

        // line 1
        $context["__internal_0de157daf9feaef2e6371f3fc5a738f2855cb1331dee2cd3040ed3f623a3c298"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig", 1);
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>

    <div class=\"ui segments\">
        ";
        // line 7
        echo $context["__internal_0de157daf9feaef2e6371f3fc5a738f2855cb1331dee2cd3040ed3f623a3c298"]->macro_translationForm(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "translations", array()));
        echo "
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "code", array()), 'row');
        echo "
            <div class=\"two fields\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "shippingCategory", array()), 'row');
        echo "
            </div>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "channelPricings", array()), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <div class=\"one field\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "shippingRequired", array()), 'row');
        echo "
            </div>
        </div>
        ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "optionValues", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "optionValues", array())) > 0))) {
            // line 22
            echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.options"), "html", null, true);
            echo "</h4>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option_form"]) {
                // line 26
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["option_form"], 'row');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
        ";
        }
        // line 30
        echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.properties"), "html", null, true);
        echo "</h4>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "height", array()), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "width", array()), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "depth", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "weight", array()), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.inventory"), "html", null, true);
        echo "</h4>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "onHand", array()), 'row');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "tracked", array()), 'row');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "version", array()), 'row');
        echo "
        </div>
    </div>

    ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product_variant." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 47, $this->source); })())) . ".tab_details"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()))));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/ProductVariant/Tab/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  136 => 43,  132 => 42,  128 => 41,  124 => 40,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 30,  93 => 28,  84 => 26,  80 => 25,  76 => 24,  72 => 22,  70 => 21,  64 => 18,  57 => 14,  52 => 12,  47 => 10,  41 => 7,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h3>

    <div class=\"ui segments\">
        {{ translationForm(form.translations) }}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            {{ form_row(form.code) }}
            <div class=\"two fields\">
                {{ form_row(form.shippingCategory) }}
            </div>
            {{ form_row(form.channelPricings) }}
        </div>
        <div class=\"ui segment\">
            <div class=\"one field\">
                {{ form_row(form.shippingRequired) }}
            </div>
        </div>
        {% if form.optionValues is defined and form.optionValues|length > 0 %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.options'|trans }}</h4>
            {% for option_form in form.optionValues %}
                {{ form_row(option_form) }}
            {% endfor %}
        </div>
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.properties'|trans }}</h4>
            {{ form_row(form.height) }}
            {{ form_row(form.width) }}
            {{ form_row(form.depth) }}
            {{ form_row(form.weight) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.inventory'|trans }}</h4>
            {{ form_row(form.onHand) }}
            {{ form_row(form.tracked) }}
            {{ form_row(form.version) }}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product_variant.' ~ action ~ '.tab_details', {'form': form}) }}
</div>
", "@SyliusAdmin/ProductVariant/Tab/_details.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Tab/_details.html.twig");
    }
}
