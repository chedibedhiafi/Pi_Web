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

/* livraison/livraison.html.twig */
class __TwigTemplate_d9ed4f8779126af692ad5c878f724a4d14e80b7fd49e8810936fe063aa315c1e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/livraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/livraison.html.twig"));

        $this->parent = $this->loadTemplate("front(soulayma).html.twig", "livraison/livraison.html.twig", 1);
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
        echo "    Livraison
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"page-banner-area\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Livraison</h2>
                        <ul>
                            <li>Liste livraison</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"cart-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"col-lg-12 col-md-12\">
                        <div class=\"billing-details\">
                            <h3 class=\"title\">Vos Livraisons</h3>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12\">
                                    <div class=\"form-group\">

                                            <div class=\"cart-table table-responsive\">
                                                <table class=\"table table-bordered\">
                                                    <thead>
                                                    <tr>
                                                        <th scope=\"col\">Addresse</th>
                                                        <th scope=\"col\">Code Postal</th>
                                                        <th scope=\"col\">Ville</th>
                                                        <th scope=\"col\">Tel</th>
                                                        <th scope=\"col\">Commentaire</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 46
            echo "                                                        <tr>
                                                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "addresse", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>

                                                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "codepostal", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "ville", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                                            <td>
                                                                ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "tel", [], "any", false, false, false, 52), "html", null, true);
            echo "
                                                            </td>
                                                            <td>
                                                                ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "commentaire", [], "any", false, false, false, 55), "html", null, true);
            echo "
                                                            </td>
                                                            <td>
                                                                <div class=\"d-flex order-actions\">

                                                                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerlivraisonfront", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"ms-3\"><i class='bx bxs-trash'></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                    </div>
                                </div >
                            </div >
                        </div >
                    </div >
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livraison/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 65,  166 => 60,  158 => 55,  152 => 52,  147 => 50,  143 => 49,  138 => 47,  135 => 46,  131 => 45,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front(soulayma).html.twig'%}
{% block title %}
    Livraison
{% endblock %}
{% block body %}

    <div class=\"page-banner-area\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Livraison</h2>
                        <ul>
                            <li>Liste livraison</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"cart-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"col-lg-12 col-md-12\">
                        <div class=\"billing-details\">
                            <h3 class=\"title\">Vos Livraisons</h3>
                            <div class=\"row\">
                                <div class=\"col-lg-12 col-md-12\">
                                    <div class=\"form-group\">

                                            <div class=\"cart-table table-responsive\">
                                                <table class=\"table table-bordered\">
                                                    <thead>
                                                    <tr>
                                                        <th scope=\"col\">Addresse</th>
                                                        <th scope=\"col\">Code Postal</th>
                                                        <th scope=\"col\">Ville</th>
                                                        <th scope=\"col\">Tel</th>
                                                        <th scope=\"col\">Commentaire</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    {% for l in livraison %}
                                                        <tr>
                                                            <td>{{ l.addresse }}</td>

                                                            <td>{{ l.codepostal }}</td>
                                                            <td>{{ l.ville }}</td>
                                                            <td>
                                                                {{ l.tel }}
                                                            </td>
                                                            <td>
                                                                {{ l.commentaire }}
                                                            </td>
                                                            <td>
                                                                <div class=\"d-flex order-actions\">

                                                                    <a href=\"{{ path('supprimerlivraisonfront',{id :l.id}) }}\" class=\"ms-3\"><i class='bx bxs-trash'></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>

                                    </div>
                                </div >
                            </div >
                        </div >
                    </div >
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
{% endblock %}", "livraison/livraison.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\livraison\\livraison.html.twig");
    }
}
