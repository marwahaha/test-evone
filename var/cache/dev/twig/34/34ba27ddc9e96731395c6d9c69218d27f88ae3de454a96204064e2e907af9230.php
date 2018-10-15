<?php

/* @SyliusAdmin/Customer/Show/_header.html.twig */
class __TwigTemplate_d5243b130510ef1df6405e6b07a30ea5828de90d85d7325e97d7a7ca1bc55e4d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/_header.html.twig"));

        // line 1
        echo "<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            ";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "fullName", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 9, $this->source); })()), "email", array()), "html", null, true);
        echo "
                    </div>
                    ";
        // line 11
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 11, $this->source); })()), "user", array()))) {
            // line 12
            echo "                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.guest"), "html", null, true);
            echo "
                            </span>
                        </div>
                    ";
        }
        // line 18
        echo "                </div>
            </div>
        </div>
    </h1>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Customer/Show/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  53 => 14,  49 => 12,  47 => 11,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            {{ customer.fullName|default('sylius.ui.guest_customer'|trans) }}
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        {{ customer.email }}
                    </div>
                    {% if customer.user is null %}
                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> {{ 'sylius.ui.guest'|trans }}
                            </span>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </h1>
</div>
", "@SyliusAdmin/Customer/Show/_header.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_header.html.twig");
    }
}
