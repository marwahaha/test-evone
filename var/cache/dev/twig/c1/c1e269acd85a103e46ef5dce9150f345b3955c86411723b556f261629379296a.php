<?php

/* SyliusAdminBundle:Order/Show:_shipment.html.twig */
class __TwigTemplate_fbb31ee428f73d84ffbb167cb17d51aa0518e46fef25eda4bfdc0ddbbc9fe42b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order/Show:_shipment.html.twig", 1);
        // line 2
        echo "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 5
        echo $context["label"]->macro_default($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("sylius.ui." . twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 5, $this->source); })()), "state", array()))));
        echo "
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 10, $this->source); })()), "method", array()), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 13, $this->source); })()), "method", array()), "zone", array()), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 16
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 16, $this->source); })()), "ship", "sylius_shipment")) {
            // line 17
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_shipment_ship", array("orderId" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->source); })()), "id", array()), "id" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 17, $this->source); })()), "id", array()))));
            echo "
    ";
        }
        // line 19
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 19, $this->source); })()), "tracking", array()))) {
            // line 20
            echo "        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracking_code")), "html", null, true);
            echo "</span>
            <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 22, $this->source); })()), "tracking", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 25
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_shipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  74 => 22,  70 => 21,  67 => 20,  64 => 19,  58 => 17,  56 => 16,  50 => 13,  44 => 10,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}

<div class=\"item\">
    <div class=\"right floated content\">
        {{ label.default(('sylius.ui.'~shipment.state)|trans) }}
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ shipment.method }}
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>{{ shipment.method.zone }}
        </div>
    </div>
    {% if sm_can(shipment, 'ship', 'sylius_shipment') %}
        {{ render(path('sylius_admin_partial_shipment_ship', {'orderId': order.id, 'id': shipment.id})) }}
    {% endif %}
    {% if shipment.tracking is not empty %}
        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> {{ 'sylius.ui.tracking_code'|trans|upper }}</span>
            <p>{{ shipment.tracking }}</p>
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_shipment.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_shipment.html.twig");
    }
}
