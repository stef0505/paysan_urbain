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

/* element/caroussel-block-txt.html.twig */
class __TwigTemplate_8cfddf1a315da680d81c407422844399f1bd536641d8ed6426ad472e919a5e95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/caroussel-block-txt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/caroussel-block-txt.html.twig"));

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
        echo "<section id=\"block-txt-caroussel\" class=\"container\">
    <div class=\"row\">

        <!--  caroussel  -->

        <div id=\"caroussel\" class=\"col-12 col-md-6 col-sm-6 order-2\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- <ol class=\"carousel-indicators\">
                                  <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                  <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                  <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                                </ol> -->
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/3.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>

        <!-- block-txt  -->
        <div id=\"block-text\" class=\"col-12 col-md-6 col-sm-6 order-1\">
            <h2 class=\"mt-2\">Notre Histoire</h2>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockHistoire"]) || array_key_exists("blockHistoire", $context) ? $context["blockHistoire"] : (function () { throw new RuntimeError('Variable "blockHistoire" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "                    <p class=\"mt-2\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 40), "html", null, true);
            echo " </p> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <hr>
        </div>
    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/caroussel-block-txt.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  115 => 40,  111 => 39,  91 => 22,  85 => 19,  79 => 16,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<section id=\"block-txt-caroussel\" class=\"container\">
    <div class=\"row\">

        <!--  caroussel  -->

        <div id=\"caroussel\" class=\"col-12 col-md-6 col-sm-6 order-2\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- <ol class=\"carousel-indicators\">
                                  <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                                  <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                                  <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                                </ol> -->
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img class=\"d-block w-100\" src=\"{{ asset('build/images/2.jpg') }}\" alt=\"First slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"{{ asset('build/images/1.jpg') }}\" alt=\"Second slide\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"{{ asset('build/images/3.jpg') }}\" alt=\"Third slide\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>

        <!-- block-txt  -->
        <div id=\"block-text\" class=\"col-12 col-md-6 col-sm-6 order-1\">
            <h2 class=\"mt-2\">Notre Histoire</h2>
                {% for i in blockHistoire %}
                    <p class=\"mt-2\"> {{ i.contenu }} </p> 
                {% endfor %}
            <hr>
        </div>
    </div>
</section>

{% endblock body %}", "element/caroussel-block-txt.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/caroussel-block-txt.html.twig");
    }
}
