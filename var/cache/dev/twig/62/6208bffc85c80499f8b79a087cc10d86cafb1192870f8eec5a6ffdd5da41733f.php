<?php

/* SyliusAdminBundle:Order/Show:_shipments.html.twig */
class __TwigTemplate_d210505784cbcd260506fcd9ecc99d3bf78cc1af5f172d2000d39a6b403df0c7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipments.html.twig"));

        // line 1
        echo "<div class=\"ui segment\" id=\"shipping-state\">
    ";
        // line 2
        $this->loadTemplate((("@SyliusAdmin/Order/Label/ShippingState/" . twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 2, $this->source); })()), "shippingState", array())) . ".html.twig"), "SyliusAdminBundle:Order/Show:_shipments.html.twig", 2)->display(array_merge($context, array("value" => ("sylius.ui." . twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 2, $this->source); })()), "shippingState", array())), "attached" => true)));
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 3, $this->source); })()), "hasShipments", array())) {
            // line 4
            echo "        <h3 class=\"ui dividing header\" id=\"shipping-state\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipments"), "html", null, true);
            echo "</h3>
        <div class=\"ui relaxed divided list\" id=\"sylius-shipments\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->source); })()), "shipments", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
                // line 7
                echo "                ";
                $this->loadTemplate("@SyliusAdmin/Order/Show/_shipment.html.twig", "SyliusAdminBundle:Order/Show:_shipments.html.twig", 7)->display($context);
                // line 8
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        }
        // line 11
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_shipments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  77 => 9,  63 => 8,  60 => 7,  43 => 6,  37 => 4,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\" id=\"shipping-state\">
    {% include '@SyliusAdmin/Order/Label/ShippingState/' ~ order.shippingState ~ '.html.twig' with { 'value': 'sylius.ui.' ~ order.shippingState, 'attached': true } %}
    {% if order.hasShipments %}
        <h3 class=\"ui dividing header\" id=\"shipping-state\">{{ 'sylius.ui.shipments'|trans }}</h3>
        <div class=\"ui relaxed divided list\" id=\"sylius-shipments\">
            {% for shipment in order.shipments %}
                {% include '@SyliusAdmin/Order/Show/_shipment.html.twig' %}
            {% endfor %}
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_shipments.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_shipments.html.twig");
    }
}
