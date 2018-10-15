<?php

/* BitBagSyliusMailChimpPlugin::_subscribe.html.twig */
class __TwigTemplate_57802dff6194a07ae39815fcc232bea95212196ca2fe02f9f4d2535507a348a1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusMailChimpPlugin::_subscribe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusMailChimpPlugin::_subscribe.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_mailchimp_plugin_newsletter_subscribe");
        echo "\" method=\"POST\" class=\"ui form\" id=\"footer-newsletter-form\">
    <div class=\"success-element\"></div>
    <div class=\"validation-element\"></div>
    <div class=\"inline field\">
        <input type=\"text\"
               id=\"newsletter-email\" name=\"email\"
               placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_mailchimp_plugin.ui.your_email_address"), "html", null, true);
        echo "\"
        />
        <input type=\"hidden\" id=\"newsletter-token\" name=\"_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("newsletter"), "html", null, true);
        echo "\">
        <button title=\"";
        // line 10
        echo "bitbag_sylius_mailchimp_plugin.ui.subscribe";
        echo "\" type=\"submit\" class=\"ui button\">
            ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_mailchimp_plugin.ui.subscribe"), "html", null, true);
        echo "
        </button>
    </div>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusMailChimpPlugin::_subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  44 => 9,  39 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ path('bitbag_sylius_mailchimp_plugin_newsletter_subscribe') }}\" method=\"POST\" class=\"ui form\" id=\"footer-newsletter-form\">
    <div class=\"success-element\"></div>
    <div class=\"validation-element\"></div>
    <div class=\"inline field\">
        <input type=\"text\"
               id=\"newsletter-email\" name=\"email\"
               placeholder=\"{{ 'bitbag_sylius_mailchimp_plugin.ui.your_email_address'|trans }}\"
        />
        <input type=\"hidden\" id=\"newsletter-token\" name=\"_token\" value=\"{{ csrf_token('newsletter') }}\">
        <button title=\"{{ 'bitbag_sylius_mailchimp_plugin.ui.subscribe' }}\" type=\"submit\" class=\"ui button\">
            {{ 'bitbag_sylius_mailchimp_plugin.ui.subscribe'|trans }}
        </button>
    </div>
</form>
", "BitBagSyliusMailChimpPlugin::_subscribe.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/mailchimp-plugin/src/Resources/views/_subscribe.html.twig");
    }
}
