<?php

/* SyliusResourceBundle:Twig:paginate.html.twig */
class __TwigTemplate_f1607a0931e9c61973ca96076606a29681eb81117f263ca399e987b8af366405 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:paginate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusResourceBundle:Twig:paginate.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 2, $this->source); })()), "maxPerPage", array()), "html", null, true);
        echo "&nbsp;
    <i class=\"icon-angle-down\"></i>
</a>

<ul class=\"dropdown-menu pull-left\" role=\"menu\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limits"]) || array_key_exists("limits", $context) ? $context["limits"] : (function () { throw new Twig_Error_Runtime('Variable "limits" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["limit"] => $context["url"]) {
            // line 8
            echo "    <li>
        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['limit'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
/ ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 13, $this->source); })()), "nbResults", array()), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusResourceBundle:Twig:paginate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  58 => 12,  47 => 9,  44 => 8,  40 => 7,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
    {{ paginator.maxPerPage }}&nbsp;
    <i class=\"icon-angle-down\"></i>
</a>

<ul class=\"dropdown-menu pull-left\" role=\"menu\">
    {% for limit, url in limits %}
    <li>
        <a href=\"{{ url }}\">{{ limit }}</a>
    </li>
    {% endfor %}
</ul>
/ {{ paginator.nbResults }}
", "SyliusResourceBundle:Twig:paginate.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Resources/views/Twig/paginate.html.twig");
    }
}
