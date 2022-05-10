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

/* cart/cart.html.twig */
class __TwigTemplate_2acb796f8b3eee17e3aff321bde5dd3c847f91eb1cb88df2185c55664dd7ca71 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $this->parent = $this->loadTemplate("front(soulayma).html.twig", "cart/cart.html.twig", 1);
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

        echo "Cart ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <style>
        /*************************
        *******Cart CSS******
        **************************/
        #do_action {
            margin-bottom: 50px;
        }

        #do_action .total_area {
            padding-bottom: 18px !important;
        }

        #do_action .total_area, #do_action .chose_area {
            border: 1px solid #E6E4DF;
            color: #696763;
            padding: 30px 25px 30px 0;
            margin-bottom: 80px;
        }

        #do_action .total_area {
            padding-bottom: 18px !important;
        }

        .total_area{
            padding: 15px !important;
        }

        .total_area span {
            float: right;
        }

        .total_area ul li {
            background:#E6E4DF;
            color: #696763;
            margin-top: 10px;
            padding: 7px 20px;
        }

        .btn-validation{
            margin-top: 15px;
        }


    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "
    <section id=\"cart_items\">
    <div class=\"container\">

    <div class=\"breadcrumbs\">
        <ol class=\"breadcrumb\">

            <h1>Panier</h1>
        </ol>
    </div>

    ";
        // line 69
        if ( !twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 69, $this->source); })()))) {
            // line 70
            echo "        <div class=\"table-responsive cart_info\">
            <table class=\"table table-condensed\">
                <thead>
                <tr class=\"cart_menu\">
                    <td class=\"image\">Produit</td>
                    <td class=\"description\">Détails</td>
                    <td class=\"price\">Prix TND</td>
                    <td class=\"quantity\">Quantité</td>
                    <td class=\"total\">Total TND</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>

                ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prd"]) {
                // line 85
                echo "                    <tr>
                        <td class=\"cart_produit\">
                            <img src=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["prd"], "getImage", [], "method", false, false, false, 87))), "html", null, true);
                echo "\" height=\"200\" width=\"200\"></td>
                        </td>
                        <td class=\"cart_description\">
                            <h4><a href=\"\">";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prd"], "nom", [], "any", false, false, false, 90), "html", null, true);
                echo "</a></h4>
                            <p>ID: ";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prd"], "id", [], "any", false, false, false, 91), "html", null, true);
                echo "</p>
                        </td>
                        <td class=\"cart_prix\">
                            <p>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prd"], "prixFinale", [], "any", false, false, false, 94), "html", null, true);
                echo "</p>
                        </td>
                        <td class=\"cart_quantite\">

                            <div class=\"cart_quantite_button\">
                                <button onclick=\"location.href='";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_one_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["prd"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "'\">+</button>
                                <input id=\"qte_1\" class=\"cart_quantite_input\" type=\"text\" name=\"quantite\" value=\"";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 100, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["prd"], "id", [], "any", false, false, false, 100), [], "array", false, false, false, 100), "html", null, true);
                echo "\" autocomplete=\"off\" size=\"2\" disabled=\"\">
                                <button onclick=\"location.href='";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_one_to_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["prd"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "'\">-</button>
                            </div>
                        </td>
                        <td class=\"cart_total\">
                            <p class=\"cart_total_prix\">";
                // line 105
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 105, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["prd"], "id", [], "any", false, false, false, 105), [], "array", false, false, false, 105) * twig_get_attribute($this->env, $this->source, $context["prd"], "prix", [], "any", false, false, false, 105)), "html", null, true);
                echo "</p>
                        </td>
                        <td class=\"cart_delete\">
                            <a class=\"cart_quantite_delete\"
                               href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_from_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["prd"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "


                </tbody>
            </table>
        </div>


        </div>
        </section> <!--/#cart_items-->

        <section id=\"do_action\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">

                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"total_area\">
                            <ul>
                                <li>Sous total <span>";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 135, $this->source); })()), "html", null, true);
            echo "</span></li>
                                <li>TVA (19%) <span>";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["mnt_tva"]) || array_key_exists("mnt_tva", $context) ? $context["mnt_tva"] : (function () { throw new RuntimeError('Variable "mnt_tva" does not exist.', 136, $this->source); })()), "html", null, true);
            echo "</span></li>
                                <li>Frais de transport <span>7dt</span></li>
                                <li>Total <span>";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 138, $this->source); })()), "html", null, true);
            echo "</span></li>
                            </ul>

                            <div class=\"btn-validation\">
                                <a class=\"btn btn-danger\"
                                   href=\"";
            // line 143
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clear_cart");
            echo "\">Vider le panier</a>

                                <a class=\"btn btn-success\"
                                   href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande");
            echo "\">Valider ma commande</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#do_action-->

    ";
        } else {
            // line 156
            echo "        <h4> Panier est vide !!! </h4>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    ";
        }
        // line 159
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 159,  327 => 156,  314 => 146,  308 => 143,  300 => 138,  295 => 136,  291 => 135,  269 => 115,  257 => 109,  250 => 105,  243 => 101,  239 => 100,  235 => 99,  227 => 94,  221 => 91,  217 => 90,  211 => 87,  207 => 85,  203 => 84,  187 => 70,  185 => 69,  172 => 58,  162 => 57,  108 => 11,  98 => 10,  80 => 7,  61 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front(soulayma).html.twig' %}



{% block title %}Cart {% endblock %}

{% block home %}
{% endblock %}

{% block stylesheets %}
    <style>
        /*************************
        *******Cart CSS******
        **************************/
        #do_action {
            margin-bottom: 50px;
        }

        #do_action .total_area {
            padding-bottom: 18px !important;
        }

        #do_action .total_area, #do_action .chose_area {
            border: 1px solid #E6E4DF;
            color: #696763;
            padding: 30px 25px 30px 0;
            margin-bottom: 80px;
        }

        #do_action .total_area {
            padding-bottom: 18px !important;
        }

        .total_area{
            padding: 15px !important;
        }

        .total_area span {
            float: right;
        }

        .total_area ul li {
            background:#E6E4DF;
            color: #696763;
            margin-top: 10px;
            padding: 7px 20px;
        }

        .btn-validation{
            margin-top: 15px;
        }


    </style>
{% endblock %}

{% block body %}

    <section id=\"cart_items\">
    <div class=\"container\">

    <div class=\"breadcrumbs\">
        <ol class=\"breadcrumb\">

            <h1>Panier</h1>
        </ol>
    </div>

    {% if produits is not empty %}
        <div class=\"table-responsive cart_info\">
            <table class=\"table table-condensed\">
                <thead>
                <tr class=\"cart_menu\">
                    <td class=\"image\">Produit</td>
                    <td class=\"description\">Détails</td>
                    <td class=\"price\">Prix TND</td>
                    <td class=\"quantity\">Quantité</td>
                    <td class=\"total\">Total TND</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>

                {% for prd in produits %}
                    <tr>
                        <td class=\"cart_produit\">
                            <img src=\"{{ asset('uploads/' ~ prd.getImage())  }}\" height=\"200\" width=\"200\"></td>
                        </td>
                        <td class=\"cart_description\">
                            <h4><a href=\"\">{{prd.nom}}</a></h4>
                            <p>ID: {{prd.id}}</p>
                        </td>
                        <td class=\"cart_prix\">
                            <p>{{prd.prixFinale}}</p>
                        </td>
                        <td class=\"cart_quantite\">

                            <div class=\"cart_quantite_button\">
                                <button onclick=\"location.href='{{ path('add_one_to_cart', { 'id' : prd.id }) }}'\">+</button>
                                <input id=\"qte_1\" class=\"cart_quantite_input\" type=\"text\" name=\"quantite\" value=\"{{cart[prd.id]}}\" autocomplete=\"off\" size=\"2\" disabled=\"\">
                                <button onclick=\"location.href='{{ path('remove_one_to_cart', { 'id' : prd.id }) }}'\">-</button>
                            </div>
                        </td>
                        <td class=\"cart_total\">
                            <p class=\"cart_total_prix\">{{cart[prd.id] * prd.prix}}</p>
                        </td>
                        <td class=\"cart_delete\">
                            <a class=\"cart_quantite_delete\"
                               href=\"{{path('remove_from_cart', {'id': prd.id})}}\">
                                <i class=\"fa fa-times\"></i>
                            </a>
                        </td>
                    </tr>
                {% endfor %}



                </tbody>
            </table>
        </div>


        </div>
        </section> <!--/#cart_items-->

        <section id=\"do_action\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">

                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"total_area\">
                            <ul>
                                <li>Sous total <span>{{total}}</span></li>
                                <li>TVA (19%) <span>{{mnt_tva}}</span></li>
                                <li>Frais de transport <span>7dt</span></li>
                                <li>Total <span>{{total}}</span></li>
                            </ul>

                            <div class=\"btn-validation\">
                                <a class=\"btn btn-danger\"
                                   href=\"{{path('clear_cart')}}\">Vider le panier</a>

                                <a class=\"btn btn-success\"
                                   href=\"{{path('commande')}}\">Valider ma commande</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#do_action-->

    {% else %}
        <h4> Panier est vide !!! </h4>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    {% endif %}



{% endblock %}
", "cart/cart.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\cart\\cart.html.twig");
    }
}
