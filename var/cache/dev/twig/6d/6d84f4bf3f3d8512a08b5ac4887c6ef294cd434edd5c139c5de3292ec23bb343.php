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

/* stock/stockPdv.html.twig */
class __TwigTemplate_1af84ae35f0ea91a7b156e925b753f8fca4b04db2bcf85b8cb58f974240a82aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/stockPdv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/stockPdv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/stockPdv.html.twig", 1);
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
        echo "\tStock
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
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

    // line 11
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_widgets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        // line 14
        echo "\t<br>
\t<div class=\"bg-light text-center rounded p-4\">
\t\t<div class=\"d-flex  align-items-center mb-4\">
\t\t\t<h6 class=\"mb-0\" style=\"margin-right: 10px;\">Edit in Stock</h6>
\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historiquestock_new", ["reference" => (isset($context["pointdevente"]) || array_key_exists("pointdevente", $context) ? $context["pointdevente"] : (function () { throw new RuntimeError('Variable "pointdevente" does not exist.', 18, $this->source); })())]), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>

\t\t\t</a>


\t\t</div>
\t\t<br>
\t\t<div class=\"d-flex  align-items-center mb-4\">

\t\t\t<h6 class=\"mb-0\" style=\"margin-right: 10px;\">Generate PDF</h6>
\t\t\t<br>
\t\t\t<select class=\"form-select mb-3\" id=\"monthe\" name=\"monthe\" onchange=\"onCBchanged()\">
\t\t\t\t";
        // line 31
        $context["months"] = range(1, 12);
        // line 32
        echo "
\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 34
            echo "\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</select>
\t\t\t";
        // line 37
        $context["years"] = range(2022, 1990);
        // line 38
        echo "\t\t\t<select class=\"form-select mb-3\" id=\"yeare\" name=\"yeare\" onchange=\"onCBchanged()\">

\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 41
            echo "\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t</select>
\t\t\t<div id=\"theButton\">
\t\t\t\t<a 
\t\t\t\thref=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generatePDF", ["reference" => (isset($context["pointdevente"]) || array_key_exists("pointdevente", $context) ? $context["pointdevente"] : (function () { throw new RuntimeError('Variable "pointdevente" does not exist.', 47, $this->source); })()), "date" => "01-2022"]), "html", null, true);
        echo "\"
\t\t\t\t
\t\t\t\t>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary ms-2\" >Generate</button>

\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\tfunction onCBchanged (){
\t\tconst myMonth = document.getElementById(\"monthe\").value;
\t\tconst myYear = document.getElementById(\"yeare\").value;
\t\tlet datee = myMonth+'-'+myYear;
\t\tlet ref = window.location.href.split(\"showAll/\")[1];
\t\tconsole.log(ref);
\t\t\$(\"#theButton\").html('<a href=\"/historiquestock/generatePDF/'+
\t\tref+
\t\t'/'+
\t\tdatee+
\t\t'\"><button type=\"button\" class=\"btn btn-primary ms-2\" onclick=\"submitDate()\">Generate</button></a>');

\t\tconsole.log(datee);
\t}

\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
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

    // line 86
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 87
        echo "

\t<div class=\"container-fluid pt-4 px-4\">
\t\t<div class=\"row g-4\">
\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 92
            echo "\t\t\t\t<div class=\"col-sm-6 col-xl-3\">
\t\t\t\t\t<div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
\t\t\t\t\t\t<img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stock"], "idProduit", [], "any", false, false, false, 94), "image", [], "any", false, false, false, 94)) . "")), "html", null, true);
            echo "\" style=\"width: 120px;height: 120px;\">
\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<b>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "idProduit", [], "any", false, false, false, 97), "html", null, true);
            echo "</b>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Quantite
\t\t\t\t\t\t\t\t<h6 style=\"color : #4ee44e;\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "quantite", [], "any", false, false, false, 100), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t</div>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stock/stockPdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 106,  314 => 100,  308 => 97,  302 => 94,  298 => 92,  294 => 91,  288 => 87,  278 => 86,  260 => 77,  221 => 47,  216 => 44,  204 => 41,  200 => 40,  196 => 38,  194 => 37,  191 => 36,  180 => 34,  176 => 33,  173 => 32,  171 => 31,  155 => 18,  149 => 14,  139 => 13,  121 => 11,  103 => 9,  85 => 7,  74 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tStock
{% endblock %}

{% block stylesheet %}{% endblock %}

{% block sale %}{% endblock %}

{% block table %}{% endblock %}

{% block widgets %}
\t<br>
\t<div class=\"bg-light text-center rounded p-4\">
\t\t<div class=\"d-flex  align-items-center mb-4\">
\t\t\t<h6 class=\"mb-0\" style=\"margin-right: 10px;\">Edit in Stock</h6>
\t\t\t<a href=\"{{ path('app_historiquestock_new', {'reference': pointdevente}) }}\">
\t\t\t\t<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>

\t\t\t</a>


\t\t</div>
\t\t<br>
\t\t<div class=\"d-flex  align-items-center mb-4\">

\t\t\t<h6 class=\"mb-0\" style=\"margin-right: 10px;\">Generate PDF</h6>
\t\t\t<br>
\t\t\t<select class=\"form-select mb-3\" id=\"monthe\" name=\"monthe\" onchange=\"onCBchanged()\">
\t\t\t\t{% set months = range(01, 12)  %}

\t\t\t\t{% for month in months %}
\t\t\t\t\t<option value={{month}}>{{month}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t{% set years = range(2022, 1990)  %}
\t\t\t<select class=\"form-select mb-3\" id=\"yeare\" name=\"yeare\" onchange=\"onCBchanged()\">

\t\t\t\t{% for year in years %}
\t\t\t\t\t<option value={{year}}>{{year}}</option>

\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<div id=\"theButton\">
\t\t\t\t<a 
\t\t\t\thref=\"{{ path('generatePDF', {'reference' : pointdevente, 'date': \"01-2022\" }) }}\"
\t\t\t\t
\t\t\t\t>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary ms-2\" >Generate</button>

\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\tfunction onCBchanged (){
\t\tconst myMonth = document.getElementById(\"monthe\").value;
\t\tconst myYear = document.getElementById(\"yeare\").value;
\t\tlet datee = myMonth+'-'+myYear;
\t\tlet ref = window.location.href.split(\"showAll/\")[1];
\t\tconsole.log(ref);
\t\t\$(\"#theButton\").html('<a href=\"/historiquestock/generatePDF/'+
\t\tref+
\t\t'/'+
\t\tdatee+
\t\t'\"><button type=\"button\" class=\"btn btn-primary ms-2\" onclick=\"submitDate()\">Generate</button></a>');

\t\tconsole.log(datee);
\t}

\t</script>

{% endblock %}

{% block salesChart %}
{#
{% block worldwideSales %}
{% endblock %}

{% block salesAndRevenue %}
{% endblock %}
#}{% endblock %}

{% block form %}


\t<div class=\"container-fluid pt-4 px-4\">
\t\t<div class=\"row g-4\">
\t\t\t{% for stock in stocks %}
\t\t\t\t<div class=\"col-sm-6 col-xl-3\">
\t\t\t\t\t<div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
\t\t\t\t\t\t<img src=\"{{asset('uploads/'~stock.idProduit.image~'')}}\" style=\"width: 120px;height: 120px;\">
\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t<p class=\"mb-2\">
\t\t\t\t\t\t\t\t<b>{{ stock.idProduit }}</b>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>Quantite
\t\t\t\t\t\t\t\t<h6 style=\"color : #4ee44e;\">{{ stock.quantite }}</h6>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>


{% endblock %}
", "stock/stockPdv.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\stock\\stockPdv.html.twig");
    }
}
