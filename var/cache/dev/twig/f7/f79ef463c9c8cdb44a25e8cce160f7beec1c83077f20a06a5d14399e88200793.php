<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* element/btn-home-page.html.twig */
class __TwigTemplate_1c685ed75162f1ada2bbafc2d76e01228d67fe7822de8cf7fdf7865ce12cd7d6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/btn-home-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/btn-home-page.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<section id=\"btn-homepage\" class=\"d-flex flex-column justify-content-center align-items-center mt-5\">
<h3 class=\" text-center\">Vous serez toujours là ...</h3>
<hr class=\"mb-5\">

<div class=\"w-100 d-flex flex-row flex-wrap justify-content-around align-items-center\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["epu"]) {
            // line 10
            echo "    <a class=\"btn btn-lg btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_ville", ["nameEntreprise" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 10))]), "html", null, true);
            echo "\" role=\"button\">Bienvenue à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/btn-home-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 12,  78 => 10,  74 => 9,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block body %}

<section id=\"btn-homepage\" class=\"d-flex flex-column justify-content-center align-items-center mt-5\">
<h3 class=\" text-center\">Vous serez toujours là ...</h3>
<hr class=\"mb-5\">

<div class=\"w-100 d-flex flex-row flex-wrap justify-content-around align-items-center\">
    {% for epu in entreprisesPu %}
    <a class=\"btn btn-lg btn-outline-secondary\" href=\"{{ path('home_ville', {nameEntreprise: epu.name|lower }) }}\" role=\"button\">Bienvenue à {{ epu.name }}</a>
    {% endfor %}
</div>
</section>

{% endblock body %}", "element/btn-home-page.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/btn-home-page.html.twig");
    }
}
