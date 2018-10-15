<?php

/* @SyliusShop/ProductReview/_single.html.twig */
class __TwigTemplate_7259c74e6fa48e0fc86799b158569d16402fef70ac503c1547019ec99889742b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_single.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_single.html.twig"));

        // line 1
        echo "<div class=\"comment\">
    <div class=\"content\">
        <a class=\"author\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 3, $this->source); })()), "author", array()), "firstName", array()), "html", null, true);
        echo "</a>
        <div class=\"metadata\">
            <div class=\"title\"><strong>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 5, $this->source); })()), "title", array()), "html", null, true);
        echo "</strong></div>
            <div class=\"date\">";
        // line 6
        echo $this->extensions['Sonata\IntlBundle\Twig\Extension\DateTimeExtension']->formatDate(twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 6, $this->source); })()), "createdAt", array()));
        echo "</div>
            <div class=\"rating\">
                <div class=\"ui star rating\" data-rating=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 8, $this->source); })()), "rating", array()), "html", null, true);
        echo "\" data-max-rating=\"5\" style=\"pointer-events: none;\"></div>
            </div>
        </div>
        <div class=\"text\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["review"]) || array_key_exists("review", $context) ? $context["review"] : (function () { throw new Twig_Error_Runtime('Variable "review" does not exist.', 11, $this->source); })()), "comment", array()), "html", null, true);
        echo "</div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/ProductReview/_single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 8,  42 => 6,  38 => 5,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"comment\">
    <div class=\"content\">
        <a class=\"author\">{{ review.author.firstName }}</a>
        <div class=\"metadata\">
            <div class=\"title\"><strong>{{ review.title }}</strong></div>
            <div class=\"date\">{{ review.createdAt|format_date }}</div>
            <div class=\"rating\">
                <div class=\"ui star rating\" data-rating=\"{{ review.rating }}\" data-max-rating=\"5\" style=\"pointer-events: none;\"></div>
            </div>
        </div>
        <div class=\"text\">{{ review.comment }}</div>
    </div>
</div>
", "@SyliusShop/ProductReview/_single.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/_single.html.twig");
    }
}
