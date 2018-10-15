<?php

/* BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion/Index:_show.html.twig */
class __TwigTemplate_e8efb3dd781a20edcacbf46c8db65ec7a85d38c6be98d93207ee2860445f8f67 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion/Index:_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion/Index:_show.html.twig"));

        // line 1
        echo "<h3 class=\"ui header bitbag-question\">
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frequentlyAskedQuestion"]) || array_key_exists("frequentlyAskedQuestion", $context) ? $context["frequentlyAskedQuestion"] : (function () { throw new Twig_Error_Runtime('Variable "frequentlyAskedQuestion" does not exist.', 2, $this->source); })()), "question", array()), "html", null, true);
        echo "
</h3>
<p>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["frequentlyAskedQuestion"]) || array_key_exists("frequentlyAskedQuestion", $context) ? $context["frequentlyAskedQuestion"] : (function () { throw new Twig_Error_Runtime('Variable "frequentlyAskedQuestion" does not exist.', 5, $this->source); })()), "answer", array()), "html", null, true);
        echo "
</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion/Index:_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3 class=\"ui header bitbag-question\">
    {{ frequentlyAskedQuestion.question }}
</h3>
<p>
    {{ frequentlyAskedQuestion.answer }}
</p>
", "BitBagSyliusCmsPlugin:Shop/FrequentlyAskedQuestion/Index:_show.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Shop/FrequentlyAskedQuestion/Index/_show.html.twig");
    }
}
