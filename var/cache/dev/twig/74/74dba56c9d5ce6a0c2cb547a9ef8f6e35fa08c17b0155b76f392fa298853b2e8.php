<?php

/* BitBagSyliusCmsPlugin:Shop/Page/Show:_sections.html.twig */
class __TwigTemplate_e59ff78b310a6ba99f7e6b0301c8c78481e6efd2bc00bf582f448c4e90f7a092 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page/Show:_sections.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BitBagSyliusCmsPlugin:Shop/Page/Show:_sections.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 1, $this->source); })()), "sections", array())) > 0)) {
            // line 2
            echo "\t<strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bitbag_sylius_cms_plugin.ui.sections"), "html", null, true);
            echo ": </strong>
\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 3, $this->source); })()), "sections", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 4
                echo "\t    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_page_index_by_section_code", array("sectionCode" => twig_get_attribute($this->env, $this->source, $context["section"], "code", array()))), "html", null, true);
                echo "\" class=\"ui label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "name", array()), "html", null, true);
                echo "</a>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BitBagSyliusCmsPlugin:Shop/Page/Show:_sections.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  36 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.sections|length > 0 %}
\t<strong> {{ 'bitbag_sylius_cms_plugin.ui.sections'|trans }}: </strong>
\t{% for section in page.sections %}
\t    <a href=\"{{ path('bitbag_sylius_cms_plugin_shop_page_index_by_section_code', {'sectionCode' : section.code}) }}\" class=\"ui label\">{{ section.name }}</a>
\t{% endfor %}
{% endif %}
", "BitBagSyliusCmsPlugin:Shop/Page/Show:_sections.html.twig", "/var/www/workspace/test-evonne/vendor/bitbag/cms-plugin/src/Resources/views/Shop/Page/Show/_sections.html.twig");
    }
}
