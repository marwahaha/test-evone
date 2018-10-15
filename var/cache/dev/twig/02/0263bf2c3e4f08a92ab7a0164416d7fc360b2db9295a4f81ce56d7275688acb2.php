<?php

/* BitBagSyliusCmsPlugin:Modal:_channelSwitch.html.twig */
class __TwigTemplate_628cb6eb44f20a188539ca117629d858ac1feb9ae4bf498642299186efa566e3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Modal:_channelSwitch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Modal:_channelSwitch.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    ";
            $context["selected"] = twig_first($this->env, (isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 2, $this->source); })()));
            // line 3
            echo "    ";
            $context["code"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "channel", 1 => twig_get_attribute($this->env, $this->source, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new Twig_Error_Runtime('Variable "selected" does not exist.', 3, $this->source); })()), "code", array())), "method");
            // line 4
            echo "
    <div class=\"field\">
        <label for=\"bitbag_sylius_cms_plugin_channel_switch\" class=\"required\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channel"), "html", null, true);
            echo "
        </label>
        <select id=\"bitbag_sylius_cms_plugin_channel_switch\" class=\" ui dropdown\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new Twig_Error_Runtime('Variable "channels" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 11
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "code", array()), "html", null, true);
                echo "\" ";
                echo (((twig_get_attribute($this->env, $this->source, $context["channel"], "code", array()) === (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new Twig_Error_Runtime('Variable "code" does not exist.', 11, $this->source); })()))) ? ("selected") : (""));
                echo ">
                    ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "name", array()), "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </select>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Modal:_channelSwitch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  59 => 12,  52 => 11,  48 => 10,  42 => 7,  37 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if channels|length > 0 %}
    {% set selected = channels|first %}
    {% set code = app.request.query.get('channel', selected.code) %}

    <div class=\"field\">
        <label for=\"bitbag_sylius_cms_plugin_channel_switch\" class=\"required\">
            {{ 'sylius.ui.channel'|trans }}
        </label>
        <select id=\"bitbag_sylius_cms_plugin_channel_switch\" class=\" ui dropdown\">
            {% for channel in channels %}
                <option value=\"{{ channel.code }}\" {{ channel.code is same as(code) ? 'selected' : '' }}>
                    {{ channel.name }}
                </option>
            {% endfor %}
        </select>
    </div>
{% endif %}
", "BitBagSyliusCmsPlugin:Modal:_channelSwitch.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Modal/_channelSwitch.html.twig");
    }
}
