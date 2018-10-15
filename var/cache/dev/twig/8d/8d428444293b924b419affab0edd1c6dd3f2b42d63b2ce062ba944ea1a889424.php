<?php

/* @BitBagSyliusCmsPlugin/Shop/Block/show.html.twig */
class __TwigTemplate_11c01b21590c86ceefdc54dea0d3187f0b4770959af3e22182aa1196d53c3c69 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Shop/Block/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BitBagSyliusCmsPlugin/Shop/Block/show.html.twig"));

        // line 1
        echo "<div class=\"bitbag-block\">
    ";
        // line 2
        if ((null != twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 2, $this->source); })()), "name", array()))) {
            // line 3
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 3, $this->source); })()), "name", array()), "html", null, true);
            echo "</h2>
    ";
        }
        // line 5
        echo "    <p>
        ";
        // line 6
        echo $this->extensions['BitBag\SyliusCmsPlugin\Twig\Extension\RenderContentExtension']->renderContent((isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 6, $this->source); })()));
        echo "
    </p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@BitBagSyliusCmsPlugin/Shop/Block/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"bitbag-block\">
    {% if null != block.name %}
        <h2>{{ block.name }}</h2>
    {% endif %}
    <p>
        {{ bitbag_cms_render_content(block) }}
    </p>
</div>
", "@BitBagSyliusCmsPlugin/Shop/Block/show.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Block/show.html.twig");
    }
}
