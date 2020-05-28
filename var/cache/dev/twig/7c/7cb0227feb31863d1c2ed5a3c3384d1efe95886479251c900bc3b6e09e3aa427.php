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

/* element/card-home-page.html.twig */
class __TwigTemplate_85983182ee97ec8b28f5b6efa378c679f2dd7038b8dbb6ad8413222d27bc3f76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-home-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-home-page.html.twig"));

        // line 1
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

        // line 2
        echo "<section id=\"card-homepage\">
    <div class=\"w-100 text-center mb-5\" style=\"margin-top: 100px;\">
        <iframe width=\"700\" height=\"394\" src=\"https://www.youtube.com/embed/aRAVQfUn9bE\" frameborder=\"0\"
            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
    </div>
    <h2 class=\"text-center \">Ce qui nous pousse à nous lever le matin </h2>
    <hr style=\"width: 50%; margin:auto;\" class=\"mb-5\">

    <div class=\"container\">
        <div class=\"card-deck\">

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardHome"]) || array_key_exists("cardHome", $context) ? $context["cardHome"] : (function () { throw new RuntimeError('Variable "cardHome" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">";
            // line 16
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 16)), "html", null, true);
            echo "</h5>
                    <hr style=\"margin:auto;\" class=\"mb-5\">
                    <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
    </div>

</section>
<hr style=\"margin:auto;\" class=\"mt-5 hr_footer\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/card-home-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  89 => 18,  84 => 16,  80 => 14,  76 => 13,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<section id=\"card-homepage\">
    <div class=\"w-100 text-center mb-5\" style=\"margin-top: 100px;\">
        <iframe width=\"700\" height=\"394\" src=\"https://www.youtube.com/embed/aRAVQfUn9bE\" frameborder=\"0\"
            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
    </div>
    <h2 class=\"text-center \">Ce qui nous pousse à nous lever le matin </h2>
    <hr style=\"width: 50%; margin:auto;\" class=\"mb-5\">

    <div class=\"container\">
        <div class=\"card-deck\">

            {% for i in cardHome %}
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">{{ i.title|upper }}</h5>
                    <hr style=\"margin:auto;\" class=\"mb-5\">
                    <p class=\"card-text\">{{ i.contenu }}</p>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

</section>
<hr style=\"margin:auto;\" class=\"mt-5 hr_footer\">

{% endblock body %}", "element/card-home-page.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/card-home-page.html.twig");
    }
}
