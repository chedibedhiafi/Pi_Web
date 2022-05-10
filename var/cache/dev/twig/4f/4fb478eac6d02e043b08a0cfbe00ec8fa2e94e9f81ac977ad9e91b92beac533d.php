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

/* pointdevente/index.html.twig */
class __TwigTemplate_969130bc93eea97a7da6c7def71c5f61453228ce4e3b244887cc02df610936ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sale' => [$this, 'block_sale'],
            'table' => [$this, 'block_table'],
            'widgets' => [$this, 'block_widgets'],
            'salesChart' => [$this, 'block_salesChart'],
            'form' => [$this, 'block_form'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointdevente/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointdevente/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pointdevente/index.html.twig", 1);
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

        // line 4
        echo "\tPoints de ventes
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_sale($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sale"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sale"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 11
        echo "\t<script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
\t<script src=\"https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js\"></script>

\t<div class=\"container-fluid pt-4\">

\t\t<div class=\"bg-light text-center rounded p-4\">

\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-4\">
\t\t\t\t<h6 class=\"mb-0\">Points de ventes</h6>
\t\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointdevente_new");
        echo "\" class=\"nav-link \">
\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">


\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Reference</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Proprietaire</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>DateOuverture</th>
\t\t\t\t\t\t\t<th>Longitude</th>
\t\t\t\t\t\t\t<th>Latitude</th>
\t\t\t\t\t\t\t<th>Show</th>
\t\t\t\t\t\t\t<th>Edit</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pointdeventes"]) || array_key_exists("pointdeventes", $context) ? $context["pointdeventes"] : (function () { throw new RuntimeError('Variable "pointdeventes" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pointdevente"]) {
            // line 43
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointdevente"], "reference", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointdevente"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointdevente"], "proprietaire", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointdevente"], "adresse", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["pointdevente"], "dateOuverture", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointdevente"], "dateOuverture", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointdevente"], "longitude", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointdevente"], "latitude", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointdevente_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["pointdevente"], "reference", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointdevente_edit", ["reference" => twig_get_attribute($this->env, $this->source, $context["pointdevente"], "reference", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pointdevente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>


\t\t</div>
\t\t
\t\t\t";
        // line 87
        echo "
\t\t\t


\t</div>

\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_widgets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_salesChart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesChart"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesChart"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pointdevente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 108,  260 => 99,  242 => 97,  224 => 87,  214 => 68,  205 => 64,  194 => 58,  186 => 53,  180 => 50,  176 => 49,  172 => 48,  168 => 47,  164 => 46,  160 => 45,  156 => 44,  153 => 43,  148 => 42,  123 => 20,  112 => 11,  102 => 10,  84 => 8,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tPoints de ventes
{% endblock %}


{% block sale %}{% endblock %}

{% block table %}
\t<script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
\t<script src=\"https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js\"></script>

\t<div class=\"container-fluid pt-4\">

\t\t<div class=\"bg-light text-center rounded p-4\">

\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-4\">
\t\t\t\t<h6 class=\"mb-0\">Points de ventes</h6>
\t\t\t\t<a href=\"{{ path('app_pointdevente_new') }}\" class=\"nav-link \">
\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">


\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Reference</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Proprietaire</th>
\t\t\t\t\t\t\t<th>Adresse</th>
\t\t\t\t\t\t\t<th>DateOuverture</th>
\t\t\t\t\t\t\t<th>Longitude</th>
\t\t\t\t\t\t\t<th>Latitude</th>
\t\t\t\t\t\t\t<th>Show</th>
\t\t\t\t\t\t\t<th>Edit</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for pointdevente in pointdeventes %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ pointdevente.reference }}</td>
\t\t\t\t\t\t\t\t<td>{{ pointdevente.name }}</td>
\t\t\t\t\t\t\t\t<td>{{ pointdevente.proprietaire }}</td>
\t\t\t\t\t\t\t\t<td>{{ pointdevente.adresse }}</td>
\t\t\t\t\t\t\t\t<td>{{ pointdevente.dateOuverture ? pointdevente.dateOuverture|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t\t<td>{{ pointdevente.longitude }}</td>
\t\t\t\t\t\t\t\t<td>{{ pointdevente.latitude }}</td>
\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_pointdevente_show', {'reference': pointdevente.reference}) }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_pointdevente_edit', {'reference': pointdevente.reference}) }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>


\t\t</div>
\t\t
\t\t\t{# <div class=\"bg-light rounded h-100 p-4\">
                            <iframe class=\"position-relative rounded w-100 h-100\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\">
\t\t\t\t\t\t\t\t\t\t<div id='map'></div>
\t\t\t\t\t\t\t\t\t\t<script language=\"javascript\" src=\"{{asset('front/js/map.js')}}\"/>
\t\t\t{% for pointdevente in pointdeventes %}
\t\t\t\t<script>
\t\t\t\t\taddMarker({{ pointdevente.longitude }}, {{ pointdevente.latitude }})
\t\t\t\t</script>
\t\t\t{% endfor %}
\t\t\t\t\t\t\t</iframe>
                        </div> #}

\t\t\t


\t</div>

\t

{% endblock %}

{% block widgets %}{% endblock %}

{% block salesChart %}
{#
{% block worldwideSales %}
{% endblock %}

{% block salesAndRevenue %}
{% endblock %}
#}{% endblock %}

{% block form %}{% endblock %}
", "pointdevente/index.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\pointdevente\\index.html.twig");
    }
}
