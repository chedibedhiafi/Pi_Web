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

/* produit/AfficheFront.html.twig */
class __TwigTemplate_b78aa5fbc3a8c04a08bb15639ed89e73a1122dd4e32f044c8592455f34ff7bf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'home' => [$this, 'block_home'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheFront.html.twig"));

        $this->parent = $this->loadTemplate("front(soulayma).html.twig", "produit/AfficheFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produit index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        // line 11
        echo "    <html>
    <head>
    <style>
        .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    }

    .price {
    color: grey;
    font-size: 22px;
    }

    .card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    }


    .card button:hover {
    opacity: 0.7;
    }

    </style>
    <body>


    <h1 style = \"margin-top : 40px; text-align:center ;font-weight: bold; color:  #00A9CC\">Liste des Produits</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\" >
                ";
        // line 53
        $this->loadTemplate("produit/_filter.html.twig", "produit/AfficheFront.html.twig", 53)->display(twig_to_array(["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })())]));
        // line 54
        echo "            </div>


            <div class=\"col-9\">


                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
            // line 61
            echo "

                    <div class=\"card\">
                        <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["pp"], "getImage", [], "method", false, false, false, 64))), "html", null, true);
            echo "\" height=\"300\" width=\"297\">
                        <h5 style=\"color: #18d26e\" >Nom de Produit:</h5>
                        <h6> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pp"], "nom", [], "any", false, false, false, 66), "html", null, true);
            echo "</h6>
                        <h5 style=\"color: #18d26e\" >Categorie:</h5>
                        <h6>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pp"], "idCategorie", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
            echo "</h6>
                        <h5 style=\"color: #18d26e\" >Promotion:</h5>
                        <h6>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pp"], "idpromotion", [], "any", false, false, false, 70), "percentage", [], "any", false, false, false, 70), "html", null, true);
            echo "%</h6>
                        <h5 style=\"color: #18d26e\" >Prix:</h5>
                        <h5 class=\"price\" style=\"float: left; display: inline-block;margin-right: 1em; text-decoration: line-through\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pp"], "prix", [], "any", false, false, false, 72), "html", null, true);
            echo "TDN</h5>
                        <h6 class=\"price\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pp"], "prixfinale", [], "any", false, false, false, 73), "html", null, true);
            echo "TDN</h6>
                        <h5 style=\"color: #18d26e\" >Description:</h5>
                        <h6>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pp"], "description", [], "any", false, false, false, 75), "html", null, true);
            echo "</h6>

                        ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
                // line 78
                echo "                        <li class=\"nav-item\">
                                                <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_one_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["pp"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"btn btn-success\">
                                                    <i class=\"bi bi-cart-plus\"></i> Ajouter au panier
                                                </a>
                                            </li>
                        ";
            }
            // line 84
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
            </div>

        </div>

    </div>



    </body>
    </html>

    <div style=\"margin-left: 35em\">




<button type=\"button\" class=\"btn btn-secondary\"> ";
        // line 103
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 103, $this->source); })()));
        echo "   <div class=\"pagination\">

</button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/AfficheFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 103,  205 => 86,  198 => 84,  190 => 79,  187 => 78,  185 => 77,  180 => 75,  175 => 73,  171 => 72,  166 => 70,  161 => 68,  156 => 66,  151 => 64,  146 => 61,  142 => 60,  134 => 54,  132 => 53,  88 => 11,  78 => 10,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front(soulayma).html.twig' %}



{% block title %}Produit index{% endblock %}




{% block home %}
    <html>
    <head>
    <style>
        .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    }

    .price {
    color: grey;
    font-size: 22px;
    }

    .card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    }


    .card button:hover {
    opacity: 0.7;
    }

    </style>
    <body>


    <h1 style = \"margin-top : 40px; text-align:center ;font-weight: bold; color:  #00A9CC\">Liste des Produits</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3\" >
                {% include 'produit/_filter.html.twig' with {form: form} only %}
            </div>


            <div class=\"col-9\">


                {% for pp in p %}


                    <div class=\"card\">
                        <img src=\"{{ asset('uploads/' ~ pp.getImage())  }}\" height=\"300\" width=\"297\">
                        <h5 style=\"color: #18d26e\" >Nom de Produit:</h5>
                        <h6> {{ pp.nom}}</h6>
                        <h5 style=\"color: #18d26e\" >Categorie:</h5>
                        <h6>{{ pp.idCategorie.nom }}</h6>
                        <h5 style=\"color: #18d26e\" >Promotion:</h5>
                        <h6>{{ pp.idpromotion.percentage }}%</h6>
                        <h5 style=\"color: #18d26e\" >Prix:</h5>
                        <h5 class=\"price\" style=\"float: left; display: inline-block;margin-right: 1em; text-decoration: line-through\">{{ pp.prix }}TDN</h5>
                        <h6 class=\"price\">{{ pp.prixfinale}}TDN</h6>
                        <h5 style=\"color: #18d26e\" >Description:</h5>
                        <h6>{{ pp.description }}</h6>

                        {% if app.user %}
                        <li class=\"nav-item\">
                                                <a href=\"{{path(\"add_one_to_cart\", {id: pp.id})}}\" class=\"btn btn-success\">
                                                    <i class=\"bi bi-cart-plus\"></i> Ajouter au panier
                                                </a>
                                            </li>
                        {% endif %}
                    </div>
                {% endfor %}

            </div>

        </div>

    </div>



    </body>
    </html>

    <div style=\"margin-left: 35em\">




<button type=\"button\" class=\"btn btn-secondary\"> {{ knp_pagination_render(p) }}   <div class=\"pagination\">

</button>
    </div>
{% endblock %}
", "produit/AfficheFront.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\produit\\AfficheFront.html.twig");
    }
}
