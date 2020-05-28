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

/* element/card-recette.html.twig */
class __TwigTemplate_9e64968cf7ec5e88e05a2749b2a85f646cb3d30dab23e891b2a18b4089fb8e9e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-recette.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-recette.html.twig"));

        // line 1
        echo "<section id=\"nos-recettes\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titleRecette"]) || array_key_exists("titleRecette", $context) ? $context["titleRecette"] : (function () { throw new RuntimeError('Variable "titleRecette" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "        
    <div id=\"block-txt-recette\" class=\" m-auto d-flex flex-column justify-content-center align-items-center\">
        <h2 class=\"mt-2\"> ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo " </h2>
        <p class=\"mt-2\"> ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 6), "html", null, true);
            echo " </p>
        <hr>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "


    <div id=\"container-card-recette\" class=\"row d-flex justify-content-around align-items-center pt-md-3 \">


        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "        <div class=\"card m-5\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/" . twig_get_attribute($this->env, $this->source, $context["i"], "imageName", [], "any", false, false, false, 18))), "html", null, true);
            echo "\" alt=\"Recette de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
                <p class=\"card-text\"> ";
            // line 21
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "description", [], "any", false, false, false, 21), 100), "html", null, true);
            echo " </p>
                <a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "element/card-recette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  94 => 21,  90 => 20,  83 => 18,  80 => 17,  76 => 16,  68 => 10,  58 => 6,  54 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"nos-recettes\">
    {% for i in titleRecette %}
        
    <div id=\"block-txt-recette\" class=\" m-auto d-flex flex-column justify-content-center align-items-center\">
        <h2 class=\"mt-2\"> {{ i.title }} </h2>
        <p class=\"mt-2\"> {{ i.contenu }} </p>
        <hr>
    </div>
    {% endfor %}



    <div id=\"container-card-recette\" class=\"row d-flex justify-content-around align-items-center pt-md-3 \">


        {% for i in recette %}
        <div class=\"card m-5\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"{{ asset('build/images/' ~ i.imageName) }}\" alt=\"Recette de {{ i.name }}\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ i.name }}</h5>
                <p class=\"card-text\"> {{ i.description|truncate (100) }} </p>
                <a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
            </div>
        </div>
        {% endfor %}
    </div>
</section>", "element/card-recette.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/card-recette.html.twig");
    }
}
