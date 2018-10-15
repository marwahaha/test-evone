<?php

/* SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig */
class __TwigTemplate_1c86e16517c8e8e62b3acf9976310bf3498464daba325ff4febfbf5652384854 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig"));

        // line 1
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->source); })()), "usageLimit", array()))) {
            // line 2
            echo "    <span class=\"ui label\">
        ";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->source); })()), "used", array()), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui label\">∞</span>
";
        } else {
            // line 8
            echo "    ";
            $context["color"] = "teal";
            // line 9
            echo "
    ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 10, $this->source); })()), "used", array()) == twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 10, $this->source); })()), "usageLimit", array()))) {
                // line 11
                echo "        ";
                $context["color"] = "red";
                // line 12
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->source); })()), "used", array()) > (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->source); })()), "usageLimit", array()) / 2))) {
                // line 13
                echo "        ";
                $context["color"] = "yellow";
                // line 14
                echo "    ";
            }
            // line 15
            echo "    <span class=\"ui ";
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " label\">
        ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 16, $this->source); })()), "used", array()), "html", null, true);
            echo "
    </span>
    /
    <span class=\"ui ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " label\">
        ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 20, $this->source); })()), "usageLimit", array()), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  73 => 19,  67 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.usageLimit is empty %}
    <span class=\"ui label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui label\">∞</span>
{% else %}
    {% set color = 'teal' %}

    {% if data.used == data.usageLimit %}
        {% set color = 'red' %}
    {% elseif data.used > data.usageLimit/2 %}
        {% set color = 'yellow' %}
    {% endif %}
    <span class=\"ui {{ color }} label\">
        {{ data.used }}
    </span>
    /
    <span class=\"ui {{ color }} label\">
        {{ data.usageLimit }}
    </span>
{% endif %}
", "SyliusAdminBundle:Promotion/Grid/Field:usage.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Promotion/Grid/Field/usage.html.twig");
    }
}
