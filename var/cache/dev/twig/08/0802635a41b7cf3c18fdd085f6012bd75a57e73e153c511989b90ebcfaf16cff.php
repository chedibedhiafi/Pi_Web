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

/* produit/AfficheP.html.twig */
class __TwigTemplate_146d38fa70fb3a098005d73355a27c6e30d9d7f3ce1f55203bdadb8b8d2059ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'form' => [$this, 'block_form'],
            'salesRevenue' => [$this, 'block_salesRevenue'],
            'salesChart' => [$this, 'block_salesChart'],
            'messages' => [$this, 'block_messages'],
            'table' => [$this, 'block_table'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/AfficheP.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/AfficheP.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>
        hr {
            border: none;
            border-top: 3px dotted #000000;
            color: #000000;
            background-color: #000000;
            height: 0.5px;
            width: 100%;
        }
    </style>
    <div class=\"bg-light rounded h-100 p-4\">
        <h1 class=\"mb-4\" align=\"center\">Liste des Produits</h1>
        <h3 style=\"text-align: left; margin-top: 2em; color: #00A8B3\"><b>Recherche :</b></h3>

        <div class=\"sidebar-search\">

            <div class=\"input-group custom-search-form\">

                <input  type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Recherche Produit\" style=\"display:block ; margin-bottom: 0.5em; height: 2em; text-align: left; font-weight: bold; font-size: 16px\" size=188>
            </div>
            <!-- /input-group -->
        </div>
        <ul class=\"nav\" id=\"side-menu\">
            <li>
                            <br>
                      ";
        // line 31
        echo "                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul><br>
        ";
        // line 36
        echo "        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                var searchRequest = null;
                \$(\"#search\").keyup(function() {
                    var minlength = 1;
                    var that = this;
                    var value = \$(this).val();
                    var entitySelector = \$(\"#entitiesNav\").html('');
                    if (value.length >= minlength ) {
                        if (searchRequest != null)
                            searchRequest.abort();
                        searchRequest = \$.ajax({
                            type: \"GET\",
                            url: \"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_search");
        echo "\",
                            data: {
                                'q' : value
                            },
                            dataType: \"text\",
                            success: function(msg){
                                //we need to check if the value is the same
                                if (value===\$(that).val()) {
                                    var result = JSON.parse(msg);
                                    \$.each(result, function(key, arr) {
                                        \$.each(arr, function(id, value) {
                                            if (key === 'produits') {
                                                if (id !== 'error') {
                                                    console.log(value[1]);
                                                    entitySelector.append('<br style=\"font-size: 14px\">Nom:'+value[0]+'<hr></b><li><b style=\"font-size: 14px\">Prix:'+value[5]+'<hr></b><a href=\"/produit/'+id+'\">'+'<img src=\"/uploads/'+value[4]+'\" style=\"width: 220px; height: 220px; border: 2px solid black\" height=\"200\" width=\"200\" border=\"1px\" alt=\"Image du Produit\"/>'+'<hr></a></li><br style=\"font-size: 14px\">Description:'+value[2]+'</br><li><hr><br style=\"font-size: 14px\">Categorie:'+value[6]+'<hr></br><hr>');
                                                } else {
                                                    entitySelector.append('<li class=\"errorLi\" style=\"font-weight: bold;color: #0e0b0b; font-size: 18px\">'+value+'</li>');

                                                }
                                            }
                                        });
                                    });
                                }
                            }

                        });
                    }
                });
            });

        </script>
        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 83
            echo "            <div class=\"alert alert-success\">
                ";
            // line 84
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        <h6 style=\"font-weight: bold\" >Nombre des Produit:(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 88, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 88), "html", null, true);
        echo ")</h6>
        <table class=\"table\" >

            <thead>
            <tr>
                <th>Nom</th>
                <th>Categorie</th>
                <th>Prix</th>
                <th>Promotion</th>
                <th>PrixFinale</th>



                <th>Image</th>
                <th>DELETE</th>
                <th>UPDATE</th>
                <th>DETAILS</th>
                <th>Qr-Code</th>





                <form action=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
        echo "\">
                    <input type=\"submit\" value=\"AjouterProduit\" class=\"btn btn-primary w-100 m-2\">
                </form>
                <form action=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stats");
        echo "\">
                    <input type=\"submit\" value=\"Stat Selon Profit\" class=\"btn btn-primary w-100 m-2\">
                </form>







            </tr>
            </thead>
            <tbody>
            ";
        // line 127
        $context["compteur"] = 0;
        // line 128
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
            // line 129
            echo "
                ";
            // line 130
            $context["compteur"] = ((isset($context["compteur"]) || array_key_exists("compteur", $context) ? $context["compteur"] : (function () { throw new RuntimeError('Variable "compteur" does not exist.', 130, $this->source); })()) + 1);
            // line 131
            echo "
                <tr>
                    <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pp"], "nom", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
                    <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pp"], "idCategorie", [], "any", false, false, false, 134), "nom", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                    <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pp"], "prix", [], "any", false, false, false, 135), "html", null, true);
            echo "TDN</td>
                    <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pp"], "idPromotion", [], "any", false, false, false, 136), "percentage", [], "any", false, false, false, 136), "html", null, true);
            echo "%</td>
                    <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pp"], "prixfinale", [], "any", false, false, false, 137), "html", null, true);
            echo "TDN</td>



                    <td> <img src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["pp"], "getImage", [], "method", false, false, false, 141))), "html", null, true);
            echo "\" height=\"200\" width=\"200\"></td>
                    <td><a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["pp"], "id", [], "any", false, false, false, 142)]), "html", null, true);
            echo "\"  class=\"btn btn-danger rounded-pill m-2\">DELETE</a> </td>
                    <td><a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UU", ["id" => twig_get_attribute($this->env, $this->source, $context["pp"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            echo "\" class=\"btn btn-success rounded-pill m-2\">UPDATE</a> </td>
                    <td><a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => twig_get_attribute($this->env, $this->source, $context["pp"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            echo "\" class=\"btn btn-primary rounded-pill m-2\">DETAILS</a></td>
                    <td>
                        <a onclick=\"showQr(this.id)\" id=\"qr";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["compteur"]) || array_key_exists("compteur", $context) ? $context["compteur"] : (function () { throw new RuntimeError('Variable "compteur" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "\" class=\"btn rounded-pill btn-primary\">Créer le code QR</a>
                        <img id=\"image_qr";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["compteur"]) || array_key_exists("compteur", $context) ? $context["compteur"] : (function () { throw new RuntimeError('Variable "compteur" does not exist.', 147, $this->source); })()), "html", null, true);
            echo "\" style=\"width: 120px;height: 120px; display: none;\"
                             src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodeDataUriFunction(((((((((((("*** Produit : " . twig_get_attribute($this->env, $this->source, $context["pp"], "nom", [], "any", false, false, false, 148)) . "
*** Reference : ") . twig_get_attribute($this->env, $this->source, $context["pp"], "description", [], "any", false, false, false, 148)) . "
*** Prix : ") . twig_get_attribute($this->env, $this->source, $context["pp"], "prix", [], "any", false, false, false, 148)) . "
*** Promotion : ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pp"], "idpromotion", [], "any", false, false, false, 148), "percentage", [], "any", false, false, false, 148)) . "
*** PrixFinale : ") . twig_get_attribute($this->env, $this->source, $context["pp"], "prixfinale", [], "any", false, false, false, 148)) . "
*** Categorie : ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pp"], "idCategorie", [], "any", false, false, false, 148), "nom", [], "any", false, false, false, 148))), "html", null, true);
            echo "\" /></td>

                    <script >
                        function showQr(id) {
                            var qr = document.getElementById(id);
                            var img = document.getElementById('image_'+id);
                            // console.log(qr);
                            console.log(img);
                            if (img.style.display == \"none\") {
                                img.style.display = \"block\";
                                qr.style.display=\"none\";
                            } else {
                                img.style.display = \"none\";
                            }
                            console.log(img);
                        }

                    </script>






                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "            </tbody>
        </table>

        
<td><a href=\"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("excel");
        echo "\"  class=\"btn btn-primary w-100 m-2\">Generer Excel</a> </td>
<td><a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listp");
        echo "\"  class=\"btn btn-primary w-100 m-2\">Imprimer PDF</a> </td>
    </div>

    <button type=\"button\" class=\"btn btn-secondary\">";
        // line 182
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 182, $this->source); })()));
        echo "</button>
 




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 189
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

    // line 191
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

    // line 193
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

    // line 195
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

    // line 197
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

    public function getTemplateName()
    {
        return "produit/AfficheP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 197,  411 => 195,  393 => 193,  375 => 191,  357 => 189,  340 => 182,  334 => 179,  330 => 178,  324 => 174,  287 => 148,  283 => 147,  279 => 146,  274 => 144,  270 => 143,  266 => 142,  262 => 141,  255 => 137,  251 => 136,  247 => 135,  243 => 134,  239 => 133,  235 => 131,  233 => 130,  230 => 129,  225 => 128,  223 => 127,  207 => 114,  201 => 111,  174 => 88,  164 => 84,  161 => 83,  157 => 82,  123 => 51,  106 => 36,  100 => 31,  73 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
    <style>
        hr {
            border: none;
            border-top: 3px dotted #000000;
            color: #000000;
            background-color: #000000;
            height: 0.5px;
            width: 100%;
        }
    </style>
    <div class=\"bg-light rounded h-100 p-4\">
        <h1 class=\"mb-4\" align=\"center\">Liste des Produits</h1>
        <h3 style=\"text-align: left; margin-top: 2em; color: #00A8B3\"><b>Recherche :</b></h3>

        <div class=\"sidebar-search\">

            <div class=\"input-group custom-search-form\">

                <input  type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Recherche Produit\" style=\"display:block ; margin-bottom: 0.5em; height: 2em; text-align: left; font-weight: bold; font-size: 16px\" size=188>
            </div>
            <!-- /input-group -->
        </div>
        <ul class=\"nav\" id=\"side-menu\">
            <li>
                            <br>
                      {#    <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a> #}
                <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                </ul>
            </li>
        </ul><br>
        {#        // Fonction de recherche AJAX + JS + Jquery#}
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                var searchRequest = null;
                \$(\"#search\").keyup(function() {
                    var minlength = 1;
                    var that = this;
                    var value = \$(this).val();
                    var entitySelector = \$(\"#entitiesNav\").html('');
                    if (value.length >= minlength ) {
                        if (searchRequest != null)
                            searchRequest.abort();
                        searchRequest = \$.ajax({
                            type: \"GET\",
                            url: \"{{ path('ajax_search') }}\",
                            data: {
                                'q' : value
                            },
                            dataType: \"text\",
                            success: function(msg){
                                //we need to check if the value is the same
                                if (value===\$(that).val()) {
                                    var result = JSON.parse(msg);
                                    \$.each(result, function(key, arr) {
                                        \$.each(arr, function(id, value) {
                                            if (key === 'produits') {
                                                if (id !== 'error') {
                                                    console.log(value[1]);
                                                    entitySelector.append('<br style=\"font-size: 14px\">Nom:'+value[0]+'<hr></b><li><b style=\"font-size: 14px\">Prix:'+value[5]+'<hr></b><a href=\"/produit/'+id+'\">'+'<img src=\"/uploads/'+value[4]+'\" style=\"width: 220px; height: 220px; border: 2px solid black\" height=\"200\" width=\"200\" border=\"1px\" alt=\"Image du Produit\"/>'+'<hr></a></li><br style=\"font-size: 14px\">Description:'+value[2]+'</br><li><hr><br style=\"font-size: 14px\">Categorie:'+value[6]+'<hr></br><hr>');
                                                } else {
                                                    entitySelector.append('<li class=\"errorLi\" style=\"font-weight: bold;color: #0e0b0b; font-size: 18px\">'+value+'</li>');

                                                }
                                            }
                                        });
                                    });
                                }
                            }

                        });
                    }
                });
            });

        </script>
        {% for message in app.flashes('info') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>

        {% endfor %}
        <h6 style=\"font-weight: bold\" >Nombre des Produit:({{ p.getTotalItemCount }})</h6>
        <table class=\"table\" >

            <thead>
            <tr>
                <th>Nom</th>
                <th>Categorie</th>
                <th>Prix</th>
                <th>Promotion</th>
                <th>PrixFinale</th>



                <th>Image</th>
                <th>DELETE</th>
                <th>UPDATE</th>
                <th>DETAILS</th>
                <th>Qr-Code</th>





                <form action=\"{{ path('ajout') }}\">
                    <input type=\"submit\" value=\"AjouterProduit\" class=\"btn btn-primary w-100 m-2\">
                </form>
                <form action=\"{{ path('stats') }}\">
                    <input type=\"submit\" value=\"Stat Selon Profit\" class=\"btn btn-primary w-100 m-2\">
                </form>







            </tr>
            </thead>
            <tbody>
            {% set compteur=0 %}
            {% for pp in p %}

                {% set compteur=compteur+1 %}

                <tr>
                    <td>{{ pp.nom }}</td>
                    <td>{{ pp.idCategorie.nom }}</td>
                    <td>{{ pp.prix }}TDN</td>
                    <td>{{ pp.idPromotion.percentage }}%</td>
                    <td>{{ pp.prixfinale }}TDN</td>



                    <td> <img src=\"{{ asset('uploads/' ~ pp.getImage())  }}\" height=\"200\" width=\"200\"></td>
                    <td><a href=\"{{ path('DeleteProduit',{'id':pp.id}) }}\"  class=\"btn btn-danger rounded-pill m-2\">DELETE</a> </td>
                    <td><a href=\"{{ path('UU',{'id':pp.id}) }}\" class=\"btn btn-success rounded-pill m-2\">UPDATE</a> </td>
                    <td><a href=\"{{ path('details', {'id': pp.id}) }}\" class=\"btn btn-primary rounded-pill m-2\">DETAILS</a></td>
                    <td>
                        <a onclick=\"showQr(this.id)\" id=\"qr{{ compteur }}\" class=\"btn rounded-pill btn-primary\">Créer le code QR</a>
                        <img id=\"image_qr{{ compteur }}\" style=\"width: 120px;height: 120px; display: none;\"
                             src=\"{{ qr_code_data_uri(\"*** Produit : \"~pp.nom~\"\\n*** Reference : \"~pp.description~\"\\n*** Prix : \"~pp.prix~\"\\n*** Promotion : \"~pp.idpromotion.percentage~\"\\n*** PrixFinale : \"~pp.prixfinale~\"\\n*** Categorie : \"~pp.idCategorie.nom) }}\" /></td>

                    <script >
                        function showQr(id) {
                            var qr = document.getElementById(id);
                            var img = document.getElementById('image_'+id);
                            // console.log(qr);
                            console.log(img);
                            if (img.style.display == \"none\") {
                                img.style.display = \"block\";
                                qr.style.display=\"none\";
                            } else {
                                img.style.display = \"none\";
                            }
                            console.log(img);
                        }

                    </script>






                </tr>
            {% endfor %}
            </tbody>
        </table>

        
<td><a href=\"{{ path('excel') }}\"  class=\"btn btn-primary w-100 m-2\">Generer Excel</a> </td>
<td><a href=\"{{ path('listp') }}\"  class=\"btn btn-primary w-100 m-2\">Imprimer PDF</a> </td>
    </div>

    <button type=\"button\" class=\"btn btn-secondary\">{{ knp_pagination_render(p) }}</button>
 




{% endblock %}
{% block form %}
{% endblock %}
{% block salesRevenue %}
{% endblock %}
{% block salesChart %}
{% endblock %}
{% block messages %}
{% endblock %}
{% block table %}
{% endblock %}
", "produit/AfficheP.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\produit\\AfficheP.html.twig");
    }
}
