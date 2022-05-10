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

/* historiquestock/new.html.twig */
class __TwigTemplate_761cf895cf1199c1cc86398e30f993c0a3c0973f7fe7a050d291a66cb37833a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquestock/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquestock/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "historiquestock/new.html.twig", 1);
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
        echo "\tNew Historiquestock
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
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

    // line 14
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

    // line 23
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 24
        echo "\t<div class=\"container-fluid pt-4 px-4\">
\t\t<div class=\"row g-4\">
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-light rounded h-100 p-4\">
\t\t\t\t\t<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stock_showStock", ["reference" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 28, $this->source); })()), "idPointdevente", [], "any", false, false, false, 28), "reference", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">
\t\t\t\t\t\t<i class=\"fas fa-arrow-alt-circle-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<br>
\t\t\t\t\t<h6 class=\"mb-4\">Edit in Stock :
\t\t\t\t\t\t<b>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 33, $this->source); })()), "idPointdevente", [], "any", false, false, false, 33), "html", null, true);
        echo "</b>
\t\t\t\t\t</h6>
\t\t\t\t\t<form method=\"post\">


\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Produit</label>

\t\t\t\t\t\t\t<select class=\"form-select mb-3\" aria-label=\"Default select example\" onchange=\"onSelectProduct()\" id=\"myProductCombo\" name=\"produit\">
\t\t\t\t\t\t\t";
        // line 42
        $context["index"] = 0;
        // line 43
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["produit"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 45
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 45, $this->source); })()) + 1);
            // line 46
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Quantite</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"quantite\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<select class=\"form-select mb-3\" aria-label=\"Default select example\" onchange=\"onComboBoxChanged()\" id=\"comboBox\" name=\"reason\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"Restock\">Restock</option>
\t\t\t\t\t\t\t\t<option value=\"Sale\">Sale</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Date :
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<b>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 67, $this->source); })()), "date", [], "any", false, false, false, 67), "format", [0 => "Y-m-d"], "method", false, false, false, 67), "html", null, true);
        echo "</b> 
\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Edit</button>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-light rounded h-100 p-4\" id=\"productPlace\">
\t\t\t\t\t<div class=\"myProduct\">
\t\t\t\t\t<img id = \"myProductImg\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t\t<style>
\t\t\t.myProduct
\t\t\t{
\t\t\twidth:100%;
\t\t\t}
\t\t\t.myProduct img{
\t\t\twidth: 100%;
\t\t\t}
\t\t\t</style>
\t\t\t<script>
\t\t\tlet productImagesSrc = [];
\t\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 100
            echo "\t\t\tproductImagesSrc.push(
\t\t\t\t\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 101)) . "")), "html", null, true);
            echo "\")
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\tfunction onSelectProduct()
\t\t\t{
\t\t\t
\t\t\tlet theProduct = document.getElementById(\"myProductCombo\").value;
\t\t\tconst mySrc = productImagesSrc[theProduct];
\t\t\tdocument.getElementById(\"myProductImg\").src=mySrc;
\t\t\t}
\t\t\t</script>

\t\t</div>


\t</div>


\t<div class=\"container-fluid pt-4 px-4\">

\t\t<div class=\"bg-light text-center rounded p-4\">

\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-4\">
\t\t\t\t<h6 class=\"mb-0\">Points de ventes</h6>

\t\t\t</div>
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Reference</th>
\t\t\t\t\t\t<th>Point De Vente</th>
\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t\t<th>Reason</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historiquestocks"]) || array_key_exists("historiquestocks", $context) ? $context["historiquestocks"] : (function () { throw new RuntimeError('Variable "historiquestocks" does not exist.', 139, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["historiquestock1"]) {
            // line 140
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquestock1"], "reference", [], "any", false, false, false, 141), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquestock1"], "idPointdevente", [], "any", false, false, false, 142), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquestock1"], "idProduit", [], "any", false, false, false, 143), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t<td>";
            // line 145
            ((twig_get_attribute($this->env, $this->source, $context["historiquestock1"], "date", [], "any", false, false, false, 145)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquestock1"], "date", [], "any", false, false, false, 145), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquestock1"], "quantite", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historiquestock1"], "reason", [], "any", false, false, false, 147), "html", null, true);
            echo "</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 151
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historiquestock1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
<script>

function onComboBoxChanged(){

\tvar e = document.getElementById(\"#comboBox\");
        var index = e.options[e.selectedIndex].value;
\t\tvar inputVal = \"\";
\t\tif (index) {
\t\t\tinputVal = index.value;
\t\t\talert(inputVal);
\t\t}

\t/*
\t\$('#productPlace').html('<img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("front/img/products/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 171, $this->source); })()), ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 171, $this->source); })()) - 1), [], "array", false, false, false, 171), "image", [], "any", false, false, false, 171)) . "")), "html", null, true);
        echo "\" style=\"width: 120px;height: 120px;\">'+
\t\t\t\t\t\t'<div class=\"ms-3\">'+
\t\t\t\t\t\t\t'<p class=\"mb-2\">'+
\t\t\t\t\t\t\t\t'<b>";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 174, $this->source); })()), 0, [], "array", false, false, false, 174), "html", null, true);
        echo "</b>'+
\t\t\t\t\t\t\t'</p>'+
\t\t\t\t\t\t\t'<p>Quantite <h6 style=\"color : #4ee44e;\"></h6></p>'+
\t\t\t\t\t\t'</div>');
\t\t\t*/
}
</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "historiquestock/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 174,  389 => 171,  371 => 155,  362 => 151,  353 => 147,  349 => 146,  345 => 145,  340 => 143,  336 => 142,  332 => 141,  329 => 140,  324 => 139,  286 => 103,  278 => 101,  275 => 100,  271 => 99,  236 => 67,  214 => 47,  208 => 46,  206 => 45,  199 => 44,  194 => 43,  192 => 42,  180 => 33,  172 => 28,  166 => 24,  156 => 23,  138 => 14,  120 => 12,  102 => 10,  84 => 8,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tNew Historiquestock
{% endblock %}


{% block sale %}{% endblock %}

{% block table %}{% endblock %}

{% block widgets %}{% endblock %}

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
\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-light rounded h-100 p-4\">
\t\t\t\t\t<a href=\"{{ path('app_stock_showStock' , {'reference':historiquestock.idPointdevente.reference}) }}\">
\t\t\t\t\t\t<i class=\"fas fa-arrow-alt-circle-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<br>
\t\t\t\t\t<h6 class=\"mb-4\">Edit in Stock :
\t\t\t\t\t\t<b>{{ historiquestock.idPointdevente }}</b>
\t\t\t\t\t</h6>
\t\t\t\t\t<form method=\"post\">


\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Produit</label>

\t\t\t\t\t\t\t<select class=\"form-select mb-3\" aria-label=\"Default select example\" onchange=\"onSelectProduct()\" id=\"myProductCombo\" name=\"produit\">
\t\t\t\t\t\t\t{% set index=0 %}
\t\t\t\t\t\t\t\t{% for produit in produits %}
\t\t\t\t\t\t\t\t<option value=\"{{ index }}\">{{ produit }}</option>
\t\t\t\t\t\t\t\t{% set index=index+1 %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Quantite</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"quantite\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<select class=\"form-select mb-3\" aria-label=\"Default select example\" onchange=\"onComboBoxChanged()\" id=\"comboBox\" name=\"reason\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"Restock\">Restock</option>
\t\t\t\t\t\t\t\t<option value=\"Sale\">Sale</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\" class=\"form-label\">Date :
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<b>{{ historiquestock.date.format('Y-m-d') }}</b> 
\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Edit</button>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-12 col-xl-6\">
\t\t\t\t<div class=\"bg-light rounded h-100 p-4\" id=\"productPlace\">
\t\t\t\t\t<div class=\"myProduct\">
\t\t\t\t\t<img id = \"myProductImg\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>

\t\t\t<style>
\t\t\t.myProduct
\t\t\t{
\t\t\twidth:100%;
\t\t\t}
\t\t\t.myProduct img{
\t\t\twidth: 100%;
\t\t\t}
\t\t\t</style>
\t\t\t<script>
\t\t\tlet productImagesSrc = [];
\t\t\t{% for produit in produits%}
\t\t\tproductImagesSrc.push(
\t\t\t\t\"{{asset('uploads/'~produit.image~'')}}\")
\t\t\t{% endfor %}
\t\t\tfunction onSelectProduct()
\t\t\t{
\t\t\t
\t\t\tlet theProduct = document.getElementById(\"myProductCombo\").value;
\t\t\tconst mySrc = productImagesSrc[theProduct];
\t\t\tdocument.getElementById(\"myProductImg\").src=mySrc;
\t\t\t}
\t\t\t</script>

\t\t</div>


\t</div>


\t<div class=\"container-fluid pt-4 px-4\">

\t\t<div class=\"bg-light text-center rounded p-4\">

\t\t\t<div class=\"d-flex align-items-center justify-content-between mb-4\">
\t\t\t\t<h6 class=\"mb-0\">Points de ventes</h6>

\t\t\t</div>
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Reference</th>
\t\t\t\t\t\t<th>Point De Vente</th>
\t\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Quantite</th>
\t\t\t\t\t\t<th>Reason</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for historiquestock1 in historiquestocks %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ historiquestock1.reference }}</td>
\t\t\t\t\t\t\t<td>{{ historiquestock1.idPointdevente }}</td>
\t\t\t\t\t\t\t<td>{{ historiquestock1.idProduit }}</td>

\t\t\t\t\t\t\t<td>{{ historiquestock1.date ? historiquestock1.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ historiquestock1.quantite }}</td>
\t\t\t\t\t\t\t<td>{{ historiquestock1.reason }}</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
<script>

function onComboBoxChanged(){

\tvar e = document.getElementById(\"#comboBox\");
        var index = e.options[e.selectedIndex].value;
\t\tvar inputVal = \"\";
\t\tif (index) {
\t\t\tinputVal = index.value;
\t\t\talert(inputVal);
\t\t}

\t/*
\t\$('#productPlace').html('<img src=\"{{asset('front/img/products/'~produits[index-1].image~'')}}\" style=\"width: 120px;height: 120px;\">'+
\t\t\t\t\t\t'<div class=\"ms-3\">'+
\t\t\t\t\t\t\t'<p class=\"mb-2\">'+
\t\t\t\t\t\t\t\t'<b>{{ produits[0] }}</b>'+
\t\t\t\t\t\t\t'</p>'+
\t\t\t\t\t\t\t'<p>Quantite <h6 style=\"color : #4ee44e;\"></h6></p>'+
\t\t\t\t\t\t'</div>');
\t\t\t*/
}
</script>
\t{% endblock %}
", "historiquestock/new.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\historiquestock\\new.html.twig");
    }
}
