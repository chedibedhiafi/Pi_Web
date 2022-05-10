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

/* back/commande/AfficherCommande.html.twig */
class __TwigTemplate_ab474ff2afd3af7649698756ae3d5b690daaffdc473a5946e623294ec8c52451 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'table' => [$this, 'block_table'],
            'form' => [$this, 'block_form'],
            'salesRevenue' => [$this, 'block_salesRevenue'],
            'salesChart' => [$this, 'block_salesChart'],
            'messages' => [$this, 'block_messages'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/commande/AfficherCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/commande/AfficherCommande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/commande/AfficherCommande.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Commande
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 6
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-content\">
            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">

                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-purchase-tag\"></i></a>
                            </li>
                            <h1 class=\"mb-4\">Liste des Commandes</h1>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body\">
                    <!--<div class=\"d-lg-flex align-items-center mb-4 gap-3\">
                        <div class=\"position-relative\">
                            <input type=\"text\" class=\"form-control ps-5 radius-30\" placeholder=\"Search Order\"> <span class=\"position-absolute top-50 product-show translate-middle-y\"><i class=\"bx bx-search\"></i></span>
                        </div>
                      <div class=\"ms-auto\"><a href=\"javascript:;\" class=\"btn btn-light radius-30 mt-2 mt-lg-0\"><i class=\"bx bxs-plus-square\"></i>Add New Order</a></div> -->
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table mb-0\">
                        <thead class=\"table-light\">
                        <tr>

                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Etat</th>
                            <th>Adresse</th>
                            <th>DateCreation</th>
                            <th>Telephone</th>
                            <th>email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 49
            echo "                            <tr>

                                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "prenom", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                <td>
                                ";
            // line 54
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["c"], "etat", [], "any", false, false, false, 54), 1))) {
                // line 55
                echo "                                    <span class=\"badge bg-success\">Traité</span>
                                ";
            } else {
                // line 57
                echo "                                    <span class=\"badge bg-secondary\">Non Traité</span>
                                ";
            }
            // line 59
            echo "                                </td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "addresse", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "dateCreation", [], "any", false, false, false, 61), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                 <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "telephone", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "email", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>

                                <td>
                                    <div class=\"d-flex order-actions\">
                                        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifiercommande", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"\"><i class='bx bxs-edit'></i></a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!--end page wrapper -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
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

    // line 85
    public function block_salesRevenue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesRevenue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesRevenue"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
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

    // line 89
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/commande/AfficherCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 89,  254 => 87,  236 => 85,  218 => 83,  198 => 72,  187 => 67,  180 => 63,  176 => 62,  172 => 61,  168 => 60,  165 => 59,  161 => 57,  157 => 55,  155 => 54,  150 => 52,  146 => 51,  142 => 49,  138 => 48,  94 => 6,  84 => 5,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Commande
{% endblock %}
{% block table %}
    <div class=\"page-wrapper\">
        <div class=\"page-content\">
            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">

                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-purchase-tag\"></i></a>
                            </li>
                            <h1 class=\"mb-4\">Liste des Commandes</h1>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body\">
                    <!--<div class=\"d-lg-flex align-items-center mb-4 gap-3\">
                        <div class=\"position-relative\">
                            <input type=\"text\" class=\"form-control ps-5 radius-30\" placeholder=\"Search Order\"> <span class=\"position-absolute top-50 product-show translate-middle-y\"><i class=\"bx bx-search\"></i></span>
                        </div>
                      <div class=\"ms-auto\"><a href=\"javascript:;\" class=\"btn btn-light radius-30 mt-2 mt-lg-0\"><i class=\"bx bxs-plus-square\"></i>Add New Order</a></div> -->
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table mb-0\">
                        <thead class=\"table-light\">
                        <tr>

                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Etat</th>
                            <th>Adresse</th>
                            <th>DateCreation</th>
                            <th>Telephone</th>
                            <th>email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for c in commande %}
                            <tr>

                                <td>{{ c.nom }}</td>
                                <td>{{ c.prenom }}</td>
                                <td>
                                {% if c.etat == 1  %}
                                    <span class=\"badge bg-success\">Traité</span>
                                {% else  %}
                                    <span class=\"badge bg-secondary\">Non Traité</span>
                                {% endif %}
                                </td>
                                <td>{{ c.addresse }}</td>
                                <td>{{ c.dateCreation|date('Y-m-d H:i:s') }}</td>
                                 <td>{{ c.telephone }}</td>
                                <td>{{ c.email }}</td>

                                <td>
                                    <div class=\"d-flex order-actions\">
                                        <a href=\"{{ path('modifiercommande',{id :c.id}) }}\" class=\"\"><i class='bx bxs-edit'></i></a>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!--end page wrapper -->
{% endblock %}
{% block form %}
{% endblock %}
{% block salesRevenue %}
{% endblock %}
{% block salesChart %}
{% endblock %}
{% block messages %}
{% endblock %}", "back/commande/AfficherCommande.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\back\\commande\\AfficherCommande.html.twig");
    }
}
