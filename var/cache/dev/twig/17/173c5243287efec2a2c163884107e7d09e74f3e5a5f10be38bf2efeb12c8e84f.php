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

/* page/contact.html.twig */
class __TwigTemplate_dece1e97fa94aac2af6a8432630f0ebd55e9e88a2de7e3c1843241c3ec48e789 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/contact.html.twig", 1);
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
        $this->loadTemplate("/element/baniere.html.twig", "page/contact.html.twig", 6)->display($context);
        // line 7
        echo "


";
        // line 11
        echo "<section id=\"form-contact\" style=\"margin-top: 120px;\">

    <h1 class=\"text-center my-sm-5\" style=\"margin-bottom: 60px;\">Contactez-nous !</h1>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "    <div class=\"alert sucess\">
    Votre message a bien été envoyé
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "valid", [], "any", false, false, false, 20)) {
            // line 21
            echo "    <div class=\"alert danger\">
    erreur dans le formulaire
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"form-row \">
        <div class=\"col-md-5 border pr-md-3 d-flex justify-content-center text-center\">
            <div class=\" p-3 rounded-lg\">
            <!-- <p class=\"text-center pb-3 lpu text-success\"for=\"inputAddress\">Le Paysan Urbain de MARSEILLE</p> -->
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
             <div class=\"col-3 row mt-5\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "nom"]]);
        echo "</div>
                <div class=\"col-3 row mt-5\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'row', ["attr" => ["placeholder" => "email"]]);
        echo "</div>
                <div class=\"col-3  row mt-5\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "sujet", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "sujet"]]);
        echo "</div>
                
                <div class=\"col-3 row mt-5\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "message", [], "any", false, false, false, 34), 'row', ["attr" => ["placeholder" => "message"]]);
        echo "</div>
                <div class=\"col-3 row mt-5\"><button type=\"submit\" class=\"btn btn-success\">Envoyer</button></div>
                
                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>

        <div class=\"titi col-md-7 pl-md-3\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cardContact"]) || array_key_exists("cardContact", $context) ? $context["cardContact"] : (function () { throw new RuntimeError('Variable "cardContact" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "            <div class=\"info-form\">
                <h6 class=\"purple-text\">";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 44)), "html", null, true);
            echo "</h6>
                <p>";
            // line 45
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 45), "html", null, true));
            echo "</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>

</section>

";
        // line 54
        echo "<section id=\"map-ville\" style=\"margin-top: 120px;\">
    <div class=\"carte text-center row pt-md-3 d-flex justify-content-center\">
        <div class=\"map col-lg-12\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.9742698871414!2d5.420133615124171!3d43.33572747913344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bfb86294e99f%3A0x6c1e3e2df1e61061!2s20%20Boulevard%20Madeleine%20R%C3%A9musat%2C%2013013%20Marseille!5e0!3m2!1sfr!2sfr!4v1573119188905!5m2!1sfr!2sfr\" width=\"100%\" height=\"400px\" alt=\"Plan d'accès au Paysan Urbain de Marseille\"></iframe>
        </div>         
    </div>
</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  161 => 48,  152 => 45,  148 => 44,  145 => 43,  141 => 42,  133 => 37,  127 => 34,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  104 => 25,  98 => 21,  96 => 20,  93 => 19,  84 => 15,  80 => 14,  75 => 11,  70 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
{% include \"/element/baniere.html.twig\" %}



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
    <div class=\"form-row \">
        <div class=\"col-md-5 border pr-md-3 d-flex justify-content-center text-center\">
            <div class=\" p-3 rounded-lg\">
            <!-- <p class=\"text-center pb-3 lpu text-success\"for=\"inputAddress\">Le Paysan Urbain de MARSEILLE</p> -->
            {{ form_start(form) }}
             <div class=\"col-3 row mt-5\">{{ form_row(form.nom, {'attr': {'placeholder': \"nom\"}}) }}</div>
                <div class=\"col-3 row mt-5\">{{ form_row(form.email, {'attr': {'placeholder': \"email\"}}) }}</div>
                <div class=\"col-3  row mt-5\">{{ form_row(form.sujet, {'attr': {'placeholder': \"sujet\"}}) }}</div>
                
                <div class=\"col-3 row mt-5\">{{ form_row(form.message, {'attr': {'placeholder': \"message\"}}) }}</div>
                <div class=\"col-3 row mt-5\"><button type=\"submit\" class=\"btn btn-success\">Envoyer</button></div>
                
                {{ form_end(form) }}
            </div>
        </div>

        <div class=\"titi col-md-7 pl-md-3\">
            {% for i in cardContact %}
            <div class=\"info-form\">
                <h6 class=\"purple-text\">{{ i.title|upper }}</h6>
                <p>{{ i.contenu|nl2br }}</p>
            </div>
            {% endfor %}
        </div>
    </div>

</section>

{# Section à placer dans : block-contact.html.twig + css : block-contact.css #}
<section id=\"map-ville\" style=\"margin-top: 120px;\">
    <div class=\"carte text-center row pt-md-3 d-flex justify-content-center\">
        <div class=\"map col-lg-12\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.9742698871414!2d5.420133615124171!3d43.33572747913344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bfb86294e99f%3A0x6c1e3e2df1e61061!2s20%20Boulevard%20Madeleine%20R%C3%A9musat%2C%2013013%20Marseille!5e0!3m2!1sfr!2sfr!4v1573119188905!5m2!1sfr!2sfr\" width=\"100%\" height=\"400px\" alt=\"Plan d'accès au Paysan Urbain de Marseille\"></iframe>
        </div>         
    </div>
</section>


{% endblock body %}", "page/contact.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/page/contact.html.twig");
    }
}
