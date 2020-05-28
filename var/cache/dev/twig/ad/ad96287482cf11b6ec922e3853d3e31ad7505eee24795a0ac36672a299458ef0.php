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

/* page/contactParis.html.twig */
class __TwigTemplate_8b0c0458d60400b248c3fa9a5fa826920b3cd925f5c069e9b46c27b740f07970 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contactParis.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contactParis.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/contactParis.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h4 class=\"text-center\">PARIS</h4>
";
        // line 7
        $this->loadTemplate("/element/baniere.html.twig", "page/contactParis.html.twig", 7)->display($context);
        // line 8
        echo "

<hr style=\"width: 50%; margin:auto;\" class=\"mb-5\">
";
        // line 12
        echo "<section id=\"form-contact\" style=\"margin-top: 120px;\">

    <h1 class=\"text-center my-sm-5\" style=\"margin-bottom: 60px;\">Contactez-nous !</h1>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "    <div class=\"alert sucess\">
    Votre message a bien été envoyé
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "valid", [], "any", false, false, false, 21)) {
            // line 22
            echo "    <div class=\"alert danger\">
    erreur dans le formulaire
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"form-row\">
        <div class=\"col-md-5 pr-md-3\">
            <div class=\"border p-3 rounded-lg\">
            <p class=\"text-center pb-3 lpu text-success\"for=\"inputAddress\">Le Paysan Urbain de PARIS</p>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
             <div class=\"col-3 row\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'row', ["attr" => ["placeholder" => "nom"]]);
        echo "</div>
                <div class=\"col-3 row\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "email"]]);
        echo "</div>
                <div class=\"col-3  row\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "sujet", [], "any", false, false, false, 33), 'row', ["attr" => ["placeholder" => "sujet"]]);
        echo "</div>
                
                <div class=\"col-3 row\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "message", [], "any", false, false, false, 35), 'row', ["attr" => ["placeholder" => "message"]]);
        echo "</div>
                <div class=\"col-3 row\"><button type=\"submit\" class=\"btn btn-success\">Envoyer</button></div>
                
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>

        <div class=\"titi col-md-7 pl-md-3\">
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "            <div class=\"info-form\">
                <h6 class=\"purple-text\">Lorem</h6>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae adipisci hic nam quo at fuga
                    temporibus
                    aliquid praesentium quibusdam asperiores ex earum neque mollitia
                    recusandae iure officiis a, debitis illo.</p>
                </p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </div>
    </div>
    <hr class=\"hr_footer\">

</section>

";
        // line 60
        echo "<section id=\"map-ville\" style=\"margin-top: 120px;\">
    <div class=\"carte text-center border row pt-md-3\">
        <div class=\"map col-lg-6\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.1043325781216!2d2.428112415347285!3d48.894348779291064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66d1d8e9806f9%3A0xa714d00470af3d83!2s64%20Avenue%20Gaston%20Roussel%2C%2093230%20Romainville!5e0!3m2!1sfr!2sfr!4v1573119252233!5m2!1sfr!2sfr\" width=\"100%\" height=\"400px\" alt=\"Plan d'accès au Paysan Urbain de Paris\"></iframe>
        </div>
        <div class=\"align-self-center map col-lg-6\">
                <h5>Romainville</h5>
                <p><img src=\"/assets/img/icons/icon-location.png\" alt=\"icone représentant l'adresse\" width=\"14px\" height=\"18px\"> 64 avenue Gaston
                    Roussel,
                    93230</p>
                <p><img src=\"/assets/img/icons/telephone.png\" alt=\"icone représentant le numéro de téléphone\" width=\"14px\" height=\"14px\"> : 0607080901</p>
                <p <H4>@</H4> : paysanurbainparis@gmail.com</p>
                <a href=\"#\">Nos micro-pousses</a>
        </div>

        
    </div>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/contactParis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  162 => 53,  148 => 44,  144 => 43,  136 => 38,  130 => 35,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  107 => 26,  101 => 22,  99 => 21,  96 => 20,  87 => 16,  83 => 15,  78 => 12,  73 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
<h4 class=\"text-center\">PARIS</h4>
{% include \"/element/baniere.html.twig\" %}


<hr style=\"width: 50%; margin:auto;\" class=\"mb-5\">
{# Section à placer dans : form-contact.html.twig + css : form-contact.css #}
<section id=\"form-contact\" style=\"margin-top: 120px;\">

    <h1 class=\"text-center my-sm-5\" style=\"margin-bottom: 60px;\">Contactez-nous !</h1>
    {% for message in app.flashes('success') %}
    <div class=\"alert sucess\">
    Votre message a bien été envoyé
    </div>
    {% endfor %}
    
    {% if not form.vars.valid %}
    <div class=\"alert danger\">
    erreur dans le formulaire
    </div>
    {% endif %}
    <div class=\"form-row\">
        <div class=\"col-md-5 pr-md-3\">
            <div class=\"border p-3 rounded-lg\">
            <p class=\"text-center pb-3 lpu text-success\"for=\"inputAddress\">Le Paysan Urbain de PARIS</p>
            {{ form_start(form) }}
             <div class=\"col-3 row\">{{ form_row(form.nom, {'attr': {'placeholder': \"nom\"}}) }}</div>
                <div class=\"col-3 row\">{{ form_row(form.email, {'attr': {'placeholder': \"email\"}}) }}</div>
                <div class=\"col-3  row\">{{ form_row(form.sujet, {'attr': {'placeholder': \"sujet\"}}) }}</div>
                
                <div class=\"col-3 row\">{{ form_row(form.message, {'attr': {'placeholder': \"message\"}}) }}</div>
                <div class=\"col-3 row\"><button type=\"submit\" class=\"btn btn-success\">Envoyer</button></div>
                
                {{ form_end(form) }}
            </div>
        </div>

        <div class=\"titi col-md-7 pl-md-3\">
            {% for i in 0..2 %}
            <div class=\"info-form\">
                <h6 class=\"purple-text\">Lorem</h6>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae adipisci hic nam quo at fuga
                    temporibus
                    aliquid praesentium quibusdam asperiores ex earum neque mollitia
                    recusandae iure officiis a, debitis illo.</p>
                </p>
            </div>
            {% endfor %}
        </div>
    </div>
    <hr class=\"hr_footer\">

</section>

{# Section à placer dans : block-contact.html.twig + css : block-contact.css #}
<section id=\"map-ville\" style=\"margin-top: 120px;\">
    <div class=\"carte text-center border row pt-md-3\">
        <div class=\"map col-lg-6\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.1043325781216!2d2.428112415347285!3d48.894348779291064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66d1d8e9806f9%3A0xa714d00470af3d83!2s64%20Avenue%20Gaston%20Roussel%2C%2093230%20Romainville!5e0!3m2!1sfr!2sfr!4v1573119252233!5m2!1sfr!2sfr\" width=\"100%\" height=\"400px\" alt=\"Plan d'accès au Paysan Urbain de Paris\"></iframe>
        </div>
        <div class=\"align-self-center map col-lg-6\">
                <h5>Romainville</h5>
                <p><img src=\"/assets/img/icons/icon-location.png\" alt=\"icone représentant l'adresse\" width=\"14px\" height=\"18px\"> 64 avenue Gaston
                    Roussel,
                    93230</p>
                <p><img src=\"/assets/img/icons/telephone.png\" alt=\"icone représentant le numéro de téléphone\" width=\"14px\" height=\"14px\"> : 0607080901</p>
                <p <H4>@</H4> : paysanurbainparis@gmail.com</p>
                <a href=\"#\">Nos micro-pousses</a>
        </div>

        
    </div>
</section>


{% endblock body %}", "page/contactParis.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/page/contactParis.html.twig");
    }
}
