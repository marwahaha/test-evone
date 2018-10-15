<?php

/* SyliusShopBundle::_footer.html.twig */
class __TwigTemplate_2a38f4ba21f949da5566620742dcebbdf415744e161d0bdd4ab82d13446f0144 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::_footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\" class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"ui inverted divided equal height stackable grid\">
            ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_footer"));
        echo "

            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.about"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.terms_and_conditions"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.privacy_policy"), "html", null, true);
        echo "</a>
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_contact_request");
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.contact_us"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.customer_care"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_contact_request");
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.contact_us"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.faqs"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.delivery_and_shipping"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.returns_policy"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"eight wide column\">
                <h4 class=\"ui inverted header\">&copy; ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
            </div>

            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_footer"));
        echo "
        </div>
    </div>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  96 => 26,  92 => 25,  85 => 21,  81 => 20,  77 => 19,  71 => 18,  66 => 16,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  40 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\" class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"ui inverted divided equal height stackable grid\">
            {{ sonata_block_render_event('sylius.shop.layout.before_footer') }}

            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">{{ 'sylius.ui.your_store'|trans }}</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.about'|trans }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.terms_and_conditions'|trans }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.privacy_policy'|trans }}</a>
                    <a href=\"{{ path('sylius_shop_contact_request') }}\" class=\"item\">{{ 'sylius.ui.contact_us'|trans }}</a>
                </div>
            </div>
            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">{{ 'sylius.ui.customer_care'|trans  }}</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"{{ path('sylius_shop_contact_request') }}\" class=\"item\">{{ 'sylius.ui.contact_us'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.faqs'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.delivery_and_shipping'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.returns_policy'|trans  }}</a>
                </div>
            </div>
            <div class=\"eight wide column\">
                <h4 class=\"ui inverted header\">&copy; {{ 'sylius.ui.your_store'|trans }}</h4>
                <p>{{ 'sylius.ui.powered_by'|trans }} <a href=\"http://sylius.com\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
            </div>

            {{ sonata_block_render_event('sylius.shop.layout.after_footer') }}
        </div>
    </div>
</footer>
", "SyliusShopBundle::_footer.html.twig", "/var/www/workspace/test-evonne/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/_footer.html.twig");
    }
}
