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

/* element/table-micropousse.html.twig */
class __TwigTemplate_2274d867ef0dc659e03150d858ec96d1ce0d950b720f5a30541ff815b87c351e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/table-micropousse.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/table-micropousse.html.twig"));

        // line 1
        echo "

";
        // line 3
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

        // line 4
        echo "
<section id=\"table-micropousse\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titleGammeMicro"]) || array_key_exists("titleGammeMicro", $context) ? $context["titleGammeMicro"] : (function () { throw new RuntimeError('Variable "titleGammeMicro" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "        
    <div class=\"m-auto d-flex flex-column justify-content-center align-items-center mb-5 text-center\">
        <h2 class=\"mt-2\"> ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo " </h2>
        <p class=\"mt-2\"> ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "contenu", [], "any", false, false, false, 10), "html", null, true);
            echo " </p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "


    <div class=\"table-success row p-md-3 container-fluid\">

        <div id=\"desc-gamme\" class=\"doti col-12 col-md-6 text-center\">
            
            <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/default.jpg"), "html", null, true);
        echo "\" alt=\"Photo de la micro-pousse\" width=\"80%\" height=\"auto\" id=\"imgMp\">


            <hr>
            <h3 id=\"titleMp\"></h3>
            <p id=\"txtMp\">  </p>
            

        </div>

        <div id=\"gamme\" class=\"doto col-12 col-md-6 \">
            <div class=\"w-100 d-flex flex-wrap flex-row justify-content-center\" data-spy=\"scroll\"
                data-target=\"#navbar-example2\" data-offset=\"0\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["micropousses"]) || array_key_exists("micropousses", $context) ? $context["micropousses"] : (function () { throw new RuntimeError('Variable "micropousses" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["micropousse"]) {
            // line 34
            echo "                <div id=\"card-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["micropousse"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\"
                    class=\"card-micropousse card col-4 d-flex flex-column justify-content-between align-items-center\" data-name=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["micropousse"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "\" data-description=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["micropousse"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                    <img  src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/" . twig_get_attribute($this->env, $this->source, $context["micropousse"], "imageName", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["micropousse"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "\" width=\"100%\" height=\"auto\" class=\"img-fluid\">
                    <h6 style=\"text-transform: lowercase;\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["micropousse"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h6>
                    <hr>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['micropousse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </div>
        </div>
    </div>
<script>
    \$(document).ready(function () {

        \$('*[id^=card-]').click(function (e) {
            e.preventDefault();
    
            let name = \$(this).data('name');
            let description = \$(this).data('description');
            let image = \$(this).children('img').attr(\"src\");
    
            \$(\"#titleMp\").html(name);
            \$(\"#txtMp\").html(description);
            let srcImage = image;
            \$(\"#imgMp\").attr(\"src\", srcImage);
            
            \$('html').animate({
                scrollTop: \$(\"#imgMp\").offset().top
            }, 2000);
        });
    });
</script>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/table-micropousse.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  138 => 37,  132 => 36,  126 => 35,  121 => 34,  117 => 33,  101 => 20,  92 => 13,  83 => 10,  79 => 9,  75 => 7,  71 => 6,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block body %}

<section id=\"table-micropousse\">
    {% for i in titleGammeMicro %}
        
    <div class=\"m-auto d-flex flex-column justify-content-center align-items-center mb-5 text-center\">
        <h2 class=\"mt-2\"> {{ i.title }} </h2>
        <p class=\"mt-2\"> {{ i.contenu }} </p>
    </div>
    {% endfor %}



    <div class=\"table-success row p-md-3 container-fluid\">

        <div id=\"desc-gamme\" class=\"doti col-12 col-md-6 text-center\">
            
            <img src=\"{{ asset('build/images/default.jpg') }}\" alt=\"Photo de la micro-pousse\" width=\"80%\" height=\"auto\" id=\"imgMp\">


            <hr>
            <h3 id=\"titleMp\"></h3>
            <p id=\"txtMp\">  </p>
            

        </div>

        <div id=\"gamme\" class=\"doto col-12 col-md-6 \">
            <div class=\"w-100 d-flex flex-wrap flex-row justify-content-center\" data-spy=\"scroll\"
                data-target=\"#navbar-example2\" data-offset=\"0\">
                {% for micropousse in micropousses %}
                <div id=\"card-{{ micropousse.id }}\"
                    class=\"card-micropousse card col-4 d-flex flex-column justify-content-between align-items-center\" data-name=\"{{ micropousse.name }}\" data-description=\"{{ micropousse.description }}\">
                    <img  src=\"{{ asset('build/images/' ~ micropousse.imageName) }}\" alt=\"{{ micropousse.name }}\" width=\"100%\" height=\"auto\" class=\"img-fluid\">
                    <h6 style=\"text-transform: lowercase;\">{{ micropousse.name }}</h6>
                    <hr>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
<script>
    \$(document).ready(function () {

        \$('*[id^=card-]').click(function (e) {
            e.preventDefault();
    
            let name = \$(this).data('name');
            let description = \$(this).data('description');
            let image = \$(this).children('img').attr(\"src\");
    
            \$(\"#titleMp\").html(name);
            \$(\"#txtMp\").html(description);
            let srcImage = image;
            \$(\"#imgMp\").attr(\"src\", srcImage);
            
            \$('html').animate({
                scrollTop: \$(\"#imgMp\").offset().top
            }, 2000);
        });
    });
</script>
</section>
{% endblock %}
", "element/table-micropousse.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/table-micropousse.html.twig");
    }
}
