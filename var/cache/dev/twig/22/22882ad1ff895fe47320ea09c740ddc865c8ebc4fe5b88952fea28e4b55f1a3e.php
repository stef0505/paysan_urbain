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

/* security/login.html.twig */
class __TwigTemplate_5d28cc344c71f6cab0c0566737636f5992989b1fe4b79bbd2cb4587fad9236e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "<section id=\"login\" class=\"d-flex flex-column align-items-center\">
    <h3 class=\"p-5 text-center\" style=\"color: rgb(170, 18, 150);\">ADMINISTRATION</h3>
    <img src=\"/assets/img/logoPaysanUrbain.jpg\" alt=\"LOGO PAYSAN URBAIN\" class=\"p-5\">

    <form id=\"form_login\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\" class=\"d-flex flex-column align-items-center p-5\">
        <div class=\"content-form w-25 d-flex flex-column align-items-center\">
            <input type=\"text\" name=\"_username\" id=\"name-login-form\" placeholder=\"Email\" required>
            <input type=\"password\" name=\"_password\" id=\"password-login-form\" placeholder=\"Mot de passe\" required>
        </div>
        <div class=\"submit-form\">
            <button type=\"submit\">connexion</button>
        </div>
    </form>
    <button><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">Accédez au site</a></button>

    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "    <button><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
            echo "\">Accédez au Panel Admin</a></button>
        
    ";
        }
        // line 23
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  93 => 20,  91 => 19,  86 => 17,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<section id=\"login\" class=\"d-flex flex-column align-items-center\">
    <h3 class=\"p-5 text-center\" style=\"color: rgb(170, 18, 150);\">ADMINISTRATION</h3>
    <img src=\"/assets/img/logoPaysanUrbain.jpg\" alt=\"LOGO PAYSAN URBAIN\" class=\"p-5\">

    <form id=\"form_login\" action=\"{{ path('security_login') }}\" method=\"post\" class=\"d-flex flex-column align-items-center p-5\">
        <div class=\"content-form w-25 d-flex flex-column align-items-center\">
            <input type=\"text\" name=\"_username\" id=\"name-login-form\" placeholder=\"Email\" required>
            <input type=\"password\" name=\"_password\" id=\"password-login-form\" placeholder=\"Mot de passe\" required>
        </div>
        <div class=\"submit-form\">
            <button type=\"submit\">connexion</button>
        </div>
    </form>
    <button><a href=\"{{ path('home_page') }}\">Accédez au site</a></button>

    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
    <button><a href=\"{{ path('easyadmin') }}\">Accédez au Panel Admin</a></button>
        
    {% endif %}
</section>
{% endblock body %}", "security/login.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/security/login.html.twig");
    }
}
