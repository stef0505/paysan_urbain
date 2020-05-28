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

/* element/card-mission.html.twig */
class __TwigTemplate_0255d3ff9504b12c659dceaa8d5a75b3e97c5819e4d8790db377f38e4011f679 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-mission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/card-mission.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 2
        echo "<!-- <link rel=\"stylesheet\" href=\"assets/css/element/card-mission.css\"> -->
";
        // line 3
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section>
    <div id=\"block-text\" class=\"w-75 m-auto\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titleMission"]) || array_key_exists("titleMission", $context) ? $context["titleMission"] : (function () { throw new RuntimeError('Variable "titleMission" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "            
        <h2 class=\"mt-2\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
        <p class=\"mt-2\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
            <hr class=\"mb-5 mt-5\">
    </div>

    <div class=\"container\" id=\"card-mission\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardMission"]) || array_key_exists("cardMission", $context) ? $context["cardMission"] : (function () { throw new RuntimeError('Variable "cardMission" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "

        <!--  Première carte   -->
        <div class=\"cardContainer inactive\">
            <div class=\"card\">
                <div class=\"side front\">
                    <div class=\"img img1\"></div>
                    <div class=\"info\">
                        <h4> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo " </h4>
                        <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 26), 100), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"side back\">
                    <div class=\"info\">
                        <h6>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</h6>
                        <hr class=\"mb-5\">
                        <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 33), "html", null, true);
            echo " </p>
                        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "pathinfo", [], "any", false, false, false, 34) == (("/" . twig_lower_filter($this->env, (isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 34, $this->source); })()))) . (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 34, $this->source); })())))) {
                // line 35
                echo "                        <div class=\"btn btn-success\">
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact", ["nameEntreprise" => twig_lower_filter($this->env, (isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 36, $this->source); })()))]), "html", null, true);
                echo "\">Nous contacter</a>
                            <svg fill=\"#333\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" />
                                <path d=\"M0-.25h24v24H0z\" fill=\"none\" /></svg>
                        </div>
                        ";
            }
            // line 42
            echo "                        <!-- <div class=\"btn\">
                        <h4>Nous Contacter</h4>
                        <svg fill=\"#333\"  viewBox=\"0 0 24 24\"  xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" />
                            <path d=\"M0-.25h24v24H0z\" fill=\"none\" /></svg>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class=\"trait\"></div> -->

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    </div>

</section>

<!-- Script JavaScript -->
<script>
    const cards = document.querySelectorAll('.card');

    function transition() {
        if (this.classList.contains('active')) {
            this.classList.remove('active')
        } else {
            this.classList.add('active');
        }
    }

    cards.forEach(card => card.addEventListener('click', transition));
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/card-mission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  185 => 55,  167 => 42,  158 => 36,  155 => 35,  153 => 34,  149 => 33,  144 => 31,  136 => 26,  132 => 25,  122 => 17,  118 => 16,  111 => 11,  103 => 9,  99 => 8,  96 => 7,  92 => 6,  88 => 4,  78 => 3,  60 => 1,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}{% endblock %}
<!-- <link rel=\"stylesheet\" href=\"assets/css/element/card-mission.css\"> -->
{% block body %}
<section>
    <div id=\"block-text\" class=\"w-75 m-auto\">
        {% for i in titleMission %}
            
        <h2 class=\"mt-2\">{{i.title}}</h2>
        <p class=\"mt-2\">{{ i.contenu }}</p>
            {% endfor %}

            <hr class=\"mb-5 mt-5\">
    </div>

    <div class=\"container\" id=\"card-mission\">
        {% for i in cardMission %}


        <!--  Première carte   -->
        <div class=\"cardContainer inactive\">
            <div class=\"card\">
                <div class=\"side front\">
                    <div class=\"img img1\"></div>
                    <div class=\"info\">
                        <h4> {{ i.title }} </h4>
                        <p>{{ i.contenu|truncate (100) }}</p>
                    </div>
                </div>
                <div class=\"side back\">
                    <div class=\"info\">
                        <h6>{{ i.title }}</h6>
                        <hr class=\"mb-5\">
                        <p>{{ i.contenu}} </p>
                        {% if app.request.pathinfo == \"/\"~ entreprisesPu|lower ~ route %}
                        <div class=\"btn btn-success\">
                            <a href=\"{{ path('contact', {nameEntreprise: entreprisesPu|lower }) }}\">Nous contacter</a>
                            <svg fill=\"#333\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" />
                                <path d=\"M0-.25h24v24H0z\" fill=\"none\" /></svg>
                        </div>
                        {% endif %}
                        <!-- <div class=\"btn\">
                        <h4>Nous Contacter</h4>
                        <svg fill=\"#333\"  viewBox=\"0 0 24 24\"  xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" />
                            <path d=\"M0-.25h24v24H0z\" fill=\"none\" /></svg>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class=\"trait\"></div> -->

        {% endfor %}

    </div>

</section>

<!-- Script JavaScript -->
<script>
    const cards = document.querySelectorAll('.card');

    function transition() {
        if (this.classList.contains('active')) {
            this.classList.remove('active')
        } else {
            this.classList.add('active');
        }
    }

    cards.forEach(card => card.addEventListener('click', transition));
</script>
{% endblock body %}", "element/card-mission.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/card-mission.html.twig");
    }
}
