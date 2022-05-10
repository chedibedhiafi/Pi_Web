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

/* back/livraison/livraison.html.twig */
class __TwigTemplate_b7e04c6e87932e7b2e0e687faa4f3098395366c3c8855ad95eda72a02a2e7770 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/livraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/livraison.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/livraison/livraison.html.twig", 1);
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
                            <h1 class=\"mb-4\">Liste des livraisons</h1>
                        </ol>
                    </nav>
                </div>

                <div class=\"col-lg-6 col-xl-8\">
                    <input type=\"text\" id=\"search\" style=\"color: #ffffff\" class=\"form-control-lg search-control\" placeholder=\"Rechercher...\">
                </div>
                <form  action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf");
        echo "\">
                    <input type=\"hidden\"  >
                    <button class=\"btn btn-secondary\">PDF</button>
                </form>
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

                            <th>Addresse</th>
                            <th>Etat</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Tel</th>
                            <th>Commentaire</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody id=\"all\">
                            ";
        // line 54
        $this->loadTemplate("back/livraison/ajax.html.twig", "back/livraison/livraison.html.twig", 54)->display($context);
        // line 55
        echo "                        </tbody>
                        <tbody id=\"search\"></tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    </div>

    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script

            src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), "html", null, true);
        echo "\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchResajax");
        echo "\",
                    type : 'POST',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
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

    // line 104
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

    // line 106
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
        return "back/livraison/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 108,  249 => 106,  231 => 104,  213 => 102,  186 => 84,  168 => 69,  162 => 66,  149 => 55,  147 => 54,  113 => 23,  94 => 6,  84 => 5,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Livraison
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
                            <h1 class=\"mb-4\">Liste des livraisons</h1>
                        </ol>
                    </nav>
                </div>

                <div class=\"col-lg-6 col-xl-8\">
                    <input type=\"text\" id=\"search\" style=\"color: #ffffff\" class=\"form-control-lg search-control\" placeholder=\"Rechercher...\">
                </div>
                <form  action=\"{{path('pdf')}}\">
                    <input type=\"hidden\"  >
                    <button class=\"btn btn-secondary\">PDF</button>
                </form>
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

                            <th>Addresse</th>
                            <th>Etat</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Tel</th>
                            <th>Commentaire</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody id=\"all\">
                            {% include 'back/livraison/ajax.html.twig' %}
                        </tbody>
                        <tbody id=\"search\"></tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    </div>

    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script

            src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"{{ path('searchResajax') }}\",
                    type : 'POST',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>


{% endblock %}

{% block form %}
{% endblock %}
{% block salesRevenue %}
{% endblock %}
{% block salesChart %}
{% endblock %}
{% block messages %}
{% endblock %}", "back/livraison/livraison.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\back\\livraison\\livraison.html.twig");
    }
}
