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

/* element/equipe-ville.html.twig */
class __TwigTemplate_4d6658c524ad0f6ebb1d14f314d35039f59aeb7a8804972a70b715f44191a9ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/equipe-ville.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/equipe-ville.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 3
        echo "
";
        // line 4
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
<section id=\"equipe-ville\" class=\"container\">
        <div class=\" m-auto d-flex flex-column justify-content-center align-items-center\">
            <h2 class=\"mt-2\">Fièr(e) d'être Paysan(ne)s !</h2>
            <hr class=\"equipe\">
        </div>
        <div class=\"container\" id=\"container-membre\">
            <div class=\"row\" id=\"card-membres\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membreEquipe"]) || array_key_exists("membreEquipe", $context) ? $context["membreEquipe"] : (function () { throw new RuntimeError('Variable "membreEquipe" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["xMember"]) {
            // line 14
            echo "                    
                <!-- Team member -->
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <p><img class=\" img-fluid\"
                                src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/user.png"), "html", null, true);
            echo "\"
                                alt=\"Photo de ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["xMember"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "\"></p>
                        <h4 class=\"card-title pt-5\" >";
            // line 21
            echo nl2br(twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["xMember"], "name", [], "any", false, false, false, 21), [" " => "
"]), "html", null, true));
            echo "</h4>
 

                        <p class=\"card-text\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["xMember"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <!-- ./Team member -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['xMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>
    
    
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/equipe-ville.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  124 => 24,  117 => 21,  113 => 20,  109 => 19,  102 => 14,  98 => 13,  88 => 5,  78 => 4,  60 => 1,  50 => 4,  47 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
{% endblock stylesheets %}

{% block body %}
    
<section id=\"equipe-ville\" class=\"container\">
        <div class=\" m-auto d-flex flex-column justify-content-center align-items-center\">
            <h2 class=\"mt-2\">Fièr(e) d'être Paysan(ne)s !</h2>
            <hr class=\"equipe\">
        </div>
        <div class=\"container\" id=\"container-membre\">
            <div class=\"row\" id=\"card-membres\">
                {% for xMember in membreEquipe %}
                    
                <!-- Team member -->
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <p><img class=\" img-fluid\"
                                src=\"{{ asset('build/images/user.png') }}\"
                                alt=\"Photo de {{ xMember.name }}\"></p>
                        <h4 class=\"card-title pt-5\" >{{ xMember.name|replace({' ': '\\n'})|nl2br }}</h4>
 

                        <p class=\"card-text\">{{ xMember.description }}</p>
                    </div>
                </div>
                <!-- ./Team member -->
                {% endfor %}
            </div>
        </div>
    
    
    </section>
{% endblock body %}", "element/equipe-ville.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/equipe-ville.html.twig");
    }
}
