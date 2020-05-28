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

/* /element/navbar-home.html.twig */
class __TwigTemplate_03e2b4d28658e04e823f85dfa3932521ebbc2008bb83ab79ba381d696d7f45c3 extends \Twig\Template
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
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/element/navbar-home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/element/navbar-home.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        
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
        echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
    integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
    integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\">
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
    integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\">
</script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
    integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\">
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "<nav class=\"row navbar navbar-expand-lg navbar-dark fixed-top stroke\">
    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\" class=\"button\">
        <span class=\"text-hover\"><img src=\"/assets/img/logoPaysanUrbain2.jpg\" alt=\"Logo du Paysan Urbain\"
                class=\"img-fluid\" width=\"200px\" height=\"200px\"></span>
        <span class=\"text-base\"><img src=\"/assets/img/logoPaysanUrbain.jpg\" alt=\"Logo du Paysan Urbain\"
                class=\"img-fluid\" width=\"200px\" height=\"200px\"></span></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

    <div class=\"collapse navbar-collapse \" id=\"navbarNavDropdown\">
        <!-- <div class=\"mr-auto navbar-nav \"> -->
            ";
        // line 29
        echo "            <!-- </div> -->
            <div class=\"nav-item dropdown form-inline my-2 my-lg-0\">
                <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["epu"]) {
            // line 34
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 34, $this->source); })())) > 3)) {
                // line 35
                echo "                  </li>  
                    ";
            }
            // line 37
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["epu"], "online", [], "any", false, false, false, 37)) {
                // line 38
                echo "                        
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_ville", ["nameEntreprise" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 40))]), "html", null, true);
                echo "\">BIENVENUE
                            À ";
                // line 41
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 41)), "html", null, true);
                echo "</a>
                    </li>
                    ";
            }
            // line 44
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            CONTACT
                        </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["epu"]) {
            // line 52
            echo "                                <a class=\"dropdown-item\"
                                    href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact", ["nameEntreprise" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 53))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                            </div>
                        
                    </li>
                </ul>
            </div>
        <!-- </div> -->
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/element/navbar-home.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 55,  173 => 53,  170 => 52,  166 => 51,  159 => 46,  152 => 44,  146 => 41,  142 => 40,  138 => 38,  135 => 37,  131 => 35,  128 => 34,  124 => 33,  118 => 29,  104 => 17,  101 => 16,  91 => 15,  70 => 2,  60 => 1,  50 => 15,  47 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
    integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
    integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\">
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
    integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\">
</script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
    integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\">
</script>
{% endblock %}

{% block header %}
<nav class=\"row navbar navbar-expand-lg navbar-dark fixed-top stroke\">
    <a href=\"{{ path('home_page') }}\" class=\"button\">
        <span class=\"text-hover\"><img src=\"/assets/img/logoPaysanUrbain2.jpg\" alt=\"Logo du Paysan Urbain\"
                class=\"img-fluid\" width=\"200px\" height=\"200px\"></span>
        <span class=\"text-base\"><img src=\"/assets/img/logoPaysanUrbain.jpg\" alt=\"Logo du Paysan Urbain\"
                class=\"img-fluid\" width=\"200px\" height=\"200px\"></span></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

    <div class=\"collapse navbar-collapse \" id=\"navbarNavDropdown\">
        <!-- <div class=\"mr-auto navbar-nav \"> -->
            {# <a class=\"white nav-link\" href=\"/\">ACCUEIL</a> #}
            <!-- </div> -->
            <div class=\"nav-item dropdown form-inline my-2 my-lg-0\">
                <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    {% for epu in entreprisesPu %}
                    {% if entreprisesPu|length > 3 %}
                  </li>  
                    {% endif %}
                    {% if epu.online %}
                        
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('home_ville', {nameEntreprise: epu.name|lower }) }}\">BIENVENUE
                            À {{ epu.name|upper }}</a>
                    </li>
                    {% endif %}

                    {% endfor %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            CONTACT
                        </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                                {% for epu in entreprisesPu %}
                                <a class=\"dropdown-item\"
                                    href=\"{{ path('contact', {nameEntreprise: epu.name|lower }) }}\">{{epu.name}}</a>
                                {% endfor %}
                            </div>
                        
                    </li>
                </ul>
            </div>
        <!-- </div> -->
</nav>
{% endblock header %}", "/element/navbar-home.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/navbar-home.html.twig");
    }
}
