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

/* famille/famille.html.twig */
class __TwigTemplate_f4f7d8bebcae032e4e6040f18a178163ef1b16c85763eb84dd72b78d3a6e7e36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "famille/famille.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "famille/famille.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "famille/famille.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La familles : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["famille"]) || array_key_exists("famille", $context) ? $context["famille"] : (function () { throw new RuntimeError('Variable "famille" does not exist.', 3, $this->source); })()), "libelle", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "La familles : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["famille"]) || array_key_exists("famille", $context) ? $context["famille"] : (function () { throw new RuntimeError('Variable "famille" does not exist.', 5, $this->source); })()), "libelle", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
       <h2  class=\"border-bottom border-primary\"> ";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["famille"]) || array_key_exists("famille", $context) ? $context["famille"] : (function () { throw new RuntimeError('Variable "famille" does not exist.', 9, $this->source); })()), "libelle", [], "any", false, false, false, 9)), "html", null, true);
        echo "</h2>
       <div style=\"margin-bottom:20px;\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["famille"]) || array_key_exists("famille", $context) ? $context["famille"] : (function () { throw new RuntimeError('Variable "famille" does not exist.', 10, $this->source); })()), "description", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>

        <div class=\"row\" style=\"width:100%;margin-bottom:50px;overflow:hidden;\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["famille"]) || array_key_exists("famille", $context) ? $context["famille"] : (function () { throw new RuntimeError('Variable "famille" does not exist.', 13, $this->source); })()), "animaux", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 14
            echo "                <div class=\"col-6\" style=\"padding:0;\">
                    <div class=\" align-items-center\">
                        <div class=\"col-12 col-6 col-12 text-center \" style=\"min-height:160px;padding:0;\">
                            <img class=\"img-fluid\"  src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 17))), "html", null, true);
            echo "\" 
                                alt='";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 18), "html", null, true);
            echo "'/>
                        </div>
                        <div class=\"col-auto text-center\" style=\"padding:0;\">
                            <h2> <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_animal", ["id" => twig_get_attribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></h2>
                            <div>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "description", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
                            <div><a href=\"\" class=\"btn btn-primary\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["animal"], "famille", [], "any", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "         </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "famille/famille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 28,  153 => 23,  149 => 22,  143 => 21,  137 => 18,  133 => 17,  128 => 14,  124 => 13,  118 => 10,  114 => 9,  111 => 8,  101 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La familles : {{famille.libelle}}{% endblock %}

{% block monTitre %}La familles : {{famille.libelle}} {% endblock %}

{% block body %}

       <h2  class=\"border-bottom border-primary\"> {{famille.libelle|capitalize}}</h2>
       <div style=\"margin-bottom:20px;\">{{famille.description}}</div>

        <div class=\"row\" style=\"width:100%;margin-bottom:50px;overflow:hidden;\">
            {% for animal in famille.animaux %}
                <div class=\"col-6\" style=\"padding:0;\">
                    <div class=\" align-items-center\">
                        <div class=\"col-12 col-6 col-12 text-center \" style=\"min-height:160px;padding:0;\">
                            <img class=\"img-fluid\"  src=\"{{asset('images/' ~ animal.image)}}\" 
                                alt='{{animal.image}}'/>
                        </div>
                        <div class=\"col-auto text-center\" style=\"padding:0;\">
                            <h2> <a href=\"{{path('afficher_animal',{'id':animal.id})}}\"> {{animal.nom}}</a></h2>
                            <div>{{animal.description}}</div>
                            <div><a href=\"\" class=\"btn btn-primary\">{{animal.famille.libelle}}</a></div>
                        </div>
                    </div>
                </div>
            {% endfor %}
         </div>


{% endblock %}
", "famille/famille.html.twig", "C:\\Users\\VolgoBox\\Desktop\\formation Symfony\\ListeAnimaux\\templates\\famille\\famille.html.twig");
    }
}
