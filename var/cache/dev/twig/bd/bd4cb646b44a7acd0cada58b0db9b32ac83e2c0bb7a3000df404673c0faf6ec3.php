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

/* element/footer-home-page.html.twig */
class __TwigTemplate_8fd82b509790f78ce9ad57225e875d4f08f32547db3f5774e2176af788d9ac76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/footer-home-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "element/footer-home-page.html.twig"));

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
        echo "<hr class=\"hr_footer\">
<footer id=\"footer\" class=\"footer-1\">
    <div class=\"main-footer widgets-dark typo-light\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"widget subscribe no-box\">
                        <img src=\"data:image/png;base64,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\"
                            alt=\"logo du Paysan Urbain\">
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"widget no-box\">
                        <h5 class=\"widget-title\">Le monde des micropousses:<span></span></h5>
                        <ul class=\"thumbnail-widget\">
                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["epu"]) {
            // line 19
            echo "                            <li>
                                <div class=\"thumb-content\">
                                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nos_micropousses", ["nameEntreprise" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 21))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</a>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </ul>
                    </div>
                </div>

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"widget no-box\">
                        <h5 class=\"widget-title\">Nos animations<span></span></h5>
                        <ul class=\"thumbnail-widget\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["epu"]) {
            // line 34
            echo "                            <li>
                                <div class=\"thumb-content\">
                                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nos_missions", ["nameEntreprise" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 36))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </ul>
                    </div>
                </div>

                <div class=\"col-xs-12 col-sm-6 col-md-3\">

                    <div class=\"widget no-box\">
                        <h5 class=\"widget-title\">Nous contacter<span></span></h5>

                        <ul class=\"thumbnail-widget\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprisesPu"]) || array_key_exists("entreprisesPu", $context) ? $context["entreprisesPu"] : (function () { throw new RuntimeError('Variable "entreprisesPu" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["epu"]) {
            // line 51
            echo "                            <li>
                                <div class=\"thumb-content\">
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact", ["nameEntreprise" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 53))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["epu"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                                </div>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['epu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <p>Copyright Le Paysan Urbain © 2019. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "element/footer-home-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 57,  151 => 53,  147 => 51,  143 => 50,  131 => 40,  119 => 36,  115 => 34,  111 => 33,  101 => 25,  89 => 21,  85 => 19,  81 => 18,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
<hr class=\"hr_footer\">
<footer id=\"footer\" class=\"footer-1\">
    <div class=\"main-footer widgets-dark typo-light\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"widget subscribe no-box\">
                        <img src=\"data:image/png;base64,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\"
                            alt=\"logo du Paysan Urbain\">
                    </div>
                </div>
                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"widget no-box\">
                        <h5 class=\"widget-title\">Le monde des micropousses:<span></span></h5>
                        <ul class=\"thumbnail-widget\">
                            {% for epu in entreprisesPu %}
                            <li>
                                <div class=\"thumb-content\">
                                    <a href=\"{{ path('nos_micropousses', {nameEntreprise: epu.name|lower }) }}\">{{ epu.name }}</a>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>

                <div class=\"col-xs-12 col-sm-6 col-md-3\">
                    <div class=\"widget no-box\">
                        <h5 class=\"widget-title\">Nos animations<span></span></h5>
                        <ul class=\"thumbnail-widget\">
                            {% for epu in entreprisesPu %}
                            <li>
                                <div class=\"thumb-content\">
                                    <a href=\"{{ path('nos_missions', {nameEntreprise: epu.name|lower }) }}\">{{ epu.name }}</a>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>

                <div class=\"col-xs-12 col-sm-6 col-md-3\">

                    <div class=\"widget no-box\">
                        <h5 class=\"widget-title\">Nous contacter<span></span></h5>

                        <ul class=\"thumbnail-widget\">
                            {% for epu in entreprisesPu %}
                            <li>
                                <div class=\"thumb-content\">
                                    <a href=\"{{ path('contact', {nameEntreprise: epu.name|lower }) }}\">{{ epu.name }}</a>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <p>Copyright Le Paysan Urbain © 2019. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
{% endblock body %}", "element/footer-home-page.html.twig", "/Users/stef/Documents/maquettes/paysan_urbain/templates/element/footer-home-page.html.twig");
    }
}
