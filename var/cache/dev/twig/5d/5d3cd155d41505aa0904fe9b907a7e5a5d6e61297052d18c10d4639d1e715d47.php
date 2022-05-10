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

/* historiquestock/show.html.twig */
class __TwigTemplate_a335a3862ff03f8549fcf4c8b538ed1a9f4db6373404527b155cb673bcca6596 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquestock/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historiquestock/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Historiquestock</title>

";
        // line 5
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

        // line 6
        echo "    <h1>Historiquestock</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Reference</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 12, $this->source); })()), "reference", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Produit</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 16, $this->source); })()), "idProduit", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Point de vente</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 20, $this->source); })()), "idPointdevente", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 28, $this->source); })()), "quantite", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reason</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 32, $this->source); })()), "reason", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historiquestock_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historiquestock_edit", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["historiquestock"]) || array_key_exists("historiquestock", $context) ? $context["historiquestock"] : (function () { throw new RuntimeError('Variable "historiquestock" does not exist.', 39, $this->source); })()), "reference", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "historiquestock/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "historiquestock/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  125 => 39,  120 => 37,  112 => 32,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>Historiquestock</title>

{% block body %}
    <h1>Historiquestock</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Reference</th>
                <td>{{ historiquestock.reference }}</td>
            </tr>
            <tr>
                <th>Produit</th>
                <td>{{ historiquestock.idProduit }}</td>
            </tr>
            <tr>
                <th>Point de vente</th>
                <td>{{ historiquestock.idPointdevente }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ historiquestock.date ? historiquestock.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>{{ historiquestock.quantite }}</td>
            </tr>
            <tr>
                <th>Reason</th>
                <td>{{ historiquestock.reason }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_historiquestock_index') }}\">back to list</a>

    <a href=\"{{ path('app_historiquestock_edit', {'reference': historiquestock.reference}) }}\">edit</a>

    {{ include('historiquestock/_delete_form.html.twig') }}
{% endblock %}
", "historiquestock/show.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\historiquestock\\show.html.twig");
    }
}
