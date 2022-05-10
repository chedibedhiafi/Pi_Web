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

/* commande/show.html.twig */
class __TwigTemplate_69276be2142182ae07b5b341774994a26f95449ed3813edddad69d0dd7b570fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front(soulayma).html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("front(soulayma).html.twig", "commande/show.html.twig", 1);
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

        echo "Order Details ";
        
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
        echo "    ";
        $context["total"] = 0;
        // line 9
        echo "    ";
        $context["tva"] = 0;
        // line 10
        echo "    ";
        $context["total_ttc"] = 0;
        // line 11
        echo "
    <table class=\"table\">
        <tr>
            <td>
                <h3>Commande n° ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</h3>
                <h4>Du ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 16, $this->source); })()), "dateCreation", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
        echo "</h4>
            </td>
            <td id=\"details\">
                <h5>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                <h5>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</h5>
                <h5>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "</h5>
                <h4>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 22, $this->source); })()), "addresse", [], "any", false, false, false, 22), "html", null, true);
        echo "</h4>
                <h4>Tel : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 23, $this->source); })()), "telephone", [], "any", false, false, false, 23), "html", null, true);
        echo "</h4>
            </td>
        </tr>
    </table>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LigneCommande"]) || array_key_exists("LigneCommande", $context) ? $context["LigneCommande"] : (function () { throw new RuntimeError('Variable "LigneCommande" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 40
            echo "            <tr>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "produit", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ligne"], "produit", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "prixFinale", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligne"], "quantity", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["ligne"], "prixFinale", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, $context["ligne"], "quantity", [], "any", false, false, false, 45)), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 47
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["ligne"], "prixFinale", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["ligne"], "quantity", [], "any", false, false, false, 47)));
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
        ";
        // line 50
        $context["tva"] = (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()) * 10) / 100);
        // line 51
        echo "        ";
        $context["total_ttc"] = ((isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 51, $this->source); })()) + (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()));
        // line 52
        echo "

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Montant TVA 19%</td>
            <td>";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><strong>Total TTC</strong></td>
            <td><strong>";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["total_ttc"]) || array_key_exists("total_ttc", $context) ? $context["total_ttc"] : (function () { throw new RuntimeError('Variable "total_ttc" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "</strong></td>
        </tr>
        </tbody>
    </table>






    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 73,  211 => 66,  201 => 59,  192 => 52,  189 => 51,  187 => 50,  184 => 49,  178 => 48,  176 => 47,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  152 => 40,  148 => 39,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  107 => 16,  103 => 15,  97 => 11,  94 => 10,  91 => 9,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front(soulayma).html.twig' %}

{% block title %}Order Details {% endblock %}



{% block body %}
    {% set total  = 0 %}
    {% set tva       = 0 %}
    {% set total_ttc = 0 %}

    <table class=\"table\">
        <tr>
            <td>
                <h3>Commande n° {{commande.id}}</h3>
                <h4>Du {{commande.dateCreation | date('d/m/Y')}}</h4>
            </td>
            <td id=\"details\">
                <h5>{{commande.nom}}</h5>
                <h5>{{commande.prenom}}</h5>
                <h5>{{commande.email}}</h5>
                <h4>{{commande.addresse}}</h4>
                <h4>Tel : {{commande.telephone}}</h4>
            </td>
        </tr>
    </table>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>ID</th>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>

        {% for ligne in LigneCommande %}
            <tr>
                <td>{{ligne.produit.id}}</td>
                <td>{{ligne.produit.nom}}
                <td>{{ligne.prixFinale}}</td>
                <td>{{ligne.quantity}}</td>
                <td>{{ligne.prixFinale * ligne.quantity}}</td>
            </tr>
            {% set total  = total +  ligne.prixFinale * ligne.quantity %}
        {% endfor %}

        {% set tva       =  total * 10 / 100 %}
        {% set total_ttc =  tva + total  %}


        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>{{total}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Montant TVA 19%</td>
            <td>{{tva}}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><strong>Total TTC</strong></td>
            <td><strong>{{total_ttc}}</strong></td>
        </tr>
        </tbody>
    </table>






    </script>
{% endblock %}
", "commande/show.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\commande\\show.html.twig");
    }
}
