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

/* element/card-home-ville.html.twig */
class __TwigTemplate_3308bc4644152203beb5221c756c9a995b578bcd361b52046c7e3f7358f87df2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-home-ville.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-home-ville.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "<!-- <link rel=\"stylesheet\" href=\"assets/css/element/card-home-ville.css\"> -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<hr class=\"hr_footer\">
<section id=\"card-home-ville\" class=\"container\">
    <div class=\"row d-flex flex-row justify-content-around\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardHomeVille"]) || array_key_exists("cardHomeVille", $context) ? $context["cardHomeVille"] : (function () { throw new RuntimeError('Variable "cardHomeVille" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "        <div class=\"card p-10\">
            <div class=\"card-body d-flex flex-column justify-content-around\">
                <h3 class=\"card-title \"> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo " </h3>
                <hr>
                <p class=\"card-text p-1\"> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 15), "html", null, true);
            echo " </p>
                <div>
                    ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "pathinfo", [], "any", false, false, false, 17) == (("/" . twig_lower_filter($this->env, (isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 17, $this->source); })()))) . "/accueil"))) {
                // line 18
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nos_micropousses", ["nameEntreprise" => twig_lower_filter($this->env, (isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 18, $this->source); })()))]), "html", null, true);
                echo "\" class=\"btn btn-success\">En
                        savoir plus</a>
                    ";
            }
            // line 21
            echo "                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        
    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/card-home-ville.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 25,  124 => 21,  117 => 18,  115 => 17,  110 => 15,  105 => 13,  101 => 11,  97 => 10,  92 => 7,  82 => 6,  71 => 2,  61 => 1,  51 => 6,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
<!-- <link rel=\"stylesheet\" href=\"assets/css/element/card-home-ville.css\"> -->
{% endblock stylesheets %}


{% block body %}
<hr class=\"hr_footer\">
<section id=\"card-home-ville\" class=\"container\">
    <div class=\"row d-flex flex-row justify-content-around\">
        {% for i in cardHomeVille %}
        <div class=\"card p-10\">
            <div class=\"card-body d-flex flex-column justify-content-around\">
                <h3 class=\"card-title \"> {{ i.title }} </h3>
                <hr>
                <p class=\"card-text p-1\"> {{ i.contenu }} </p>
                <div>
                    {% if app.request.pathinfo == \"/\"~ entreprisesPu|lower ~\"/accueil\" %}
                    <a href=\"{{ path('nos_micropousses', {nameEntreprise: entreprisesPu|lower }) }}\" class=\"btn btn-success\">En
                        savoir plus</a>
                    {% endif %}
                </div>
            </div>
        </div>
        {% endfor %}
        
    </div>
</section>

{% endblock body %}", "element/card-home-ville.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/card-home-ville.html.twig");
    }
}
