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

/* livraison/AjouterLivraison.html.twig */
class __TwigTemplate_56d879f2423c7b630f05559b7e2a22df3aaa89a51ebf20ced63e3b09e8842314 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'home' => [$this, 'block_home'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/AjouterLivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/AjouterLivraison.html.twig"));

        $this->parent = $this->loadTemplate("front(soulayma).html.twig", "livraison/AjouterLivraison.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Livraison
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"page-banner-area\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"container\">
                    <div class=\"page-banner-content\">
                        <h2>Livraison</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Checkout Area -->
    <section class=\"checkout-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"user-actions\">


                        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"billing-details\">
                                    <h3 class=\"title\">Details de la livraison</h3>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Addresse <span class=\"required\"></span></label>
                                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "addresse", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <ul class=\"custom-error\">
                                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "addresse", [], "any", false, false, false, 45), 'errors');
        echo "
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Code Postal <span class=\"required\"></span></label>
                                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "codepostal", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <ul class=\"custom-error\">
                                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "codepostal", [], "any", false, false, false, 55), 'errors');
        echo "
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Ville<span class=\"required\"></span></label>
                                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "ville", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <ul class=\"custom-error\">
                                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "ville", [], "any", false, false, false, 65), 'errors');
        echo "
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Numero de telephone <span class=\"required\"></span></label>
                                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "tel", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <ul class=\"custom-error\">
                                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "tel", [], "any", false, false, false, 75), 'errors');
        echo "
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-12\">
                                            <div class=\"form-group\">
                                                <label>Commentaire <span class=\"required\"></span></label>
                                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "commentaire", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <ul class=\"custom-error\">
                                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "commentaire", [], "any", false, false, false, 85), 'errors');
        echo "
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-12\">
                                            <div class=\"form-group\">
                                                <label>METHODE DE LIVRAISON<span class=\"required\"></span></label>
                                                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "methode", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                <ul class=\"custom-error\">
                                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "methode", [], "any", false, false, false, 94), 'errors');
        echo "
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <form action=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterlivraison");
        echo "\">
                                                <input type=\"submit\" value=\"Passer a la livraison\" class=\"btn btn-primary rounded-pill m-2\">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        echo "
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"order-details\">
                                    <h3 class=\"title\">Liste des Produits</h3>
                                    <div class=\"order-table table-responsive\">
                                        <table class=\"table table-bordered\">
                                            <thead>

                                            <tr>
                                                <th scope=\"col\">Nom du Produit</th>
                                                <th scope=\"col\">Prix</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 123
            echo "                                                <tr>
                                                    <td class=\"product-name\">
                                                        <a href=\"shop-details.html\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom", [], "any", false, false, false, 125), "html", null, true);
            echo "</a>
                                                    </td>
                                                    <td class=\"product-total\">
                                                        <span class=\"subtotal-amount\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "prixFinale", [], "any", false, false, false, 128), "html", null, true);
            echo "</span>
                                                    </td>
                                                </tr>

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan=\"4\" class=\"text-right\">Total :</td>
                                                <td class=\"text-right\">";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 137, $this->source); })()), "html", null, true);
        echo "Dt</td>
                                                <td></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <form action=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_paiement_new");
        echo "\">
                                    <input type=\"submit\" value=\"Passer au paiement\" class=\"btn btn-primary rounded-pill m-2\">
                                </form>
                            </div>
                        </div>
                    </div>
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
        return "livraison/AjouterLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 146,  297 => 137,  291 => 133,  280 => 128,  274 => 125,  270 => 123,  266 => 122,  248 => 107,  237 => 99,  229 => 94,  224 => 92,  214 => 85,  209 => 83,  198 => 75,  193 => 73,  182 => 65,  177 => 63,  166 => 55,  161 => 53,  150 => 45,  145 => 43,  133 => 34,  109 => 12,  99 => 11,  88 => 6,  78 => 5,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front(soulayma).html.twig' %}
{% block home %}
{% endblock %}

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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Checkout Area -->
    <section class=\"checkout-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12\">
                    <div class=\"user-actions\">


                        {{ form_start(form,{ 'attr' : {'novalidate':'novalidate'} }) }}
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"billing-details\">
                                    <h3 class=\"title\">Details de la livraison</h3>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Addresse <span class=\"required\"></span></label>
                                                {{ form_widget(form.addresse ,  {'attr': {'class': 'form-control'}}) }}
                                                <ul class=\"custom-error\">
                                                    {{form_errors(form.addresse)}}
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Code Postal <span class=\"required\"></span></label>
                                                {{ form_widget(form.codepostal ,  {'attr': {'class': 'form-control'}}) }}
                                                <ul class=\"custom-error\">
                                                    {{form_errors(form.codepostal)}}
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Ville<span class=\"required\"></span></label>
                                                {{ form_widget(form.ville ,  {'attr': {'class': 'form-control'}}) }}
                                                <ul class=\"custom-error\">
                                                    {{form_errors(form.ville)}}
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Numero de telephone <span class=\"required\"></span></label>
                                                {{ form_widget(form.tel ,  {'attr': {'class': 'form-control'}}) }}
                                                <ul class=\"custom-error\">
                                                    {{form_errors(form.tel)}}
                                                </ul>

                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-12\">
                                            <div class=\"form-group\">
                                                <label>Commentaire <span class=\"required\"></span></label>
                                                {{ form_widget(form.commentaire ,  {'attr': {'class': 'form-control'}}) }}
                                                <ul class=\"custom-error\">
                                                    {{form_errors(form.commentaire)}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-12 col-md-12\">
                                            <div class=\"form-group\">
                                                <label>METHODE DE LIVRAISON<span class=\"required\"></span></label>
                                                {{ form_widget(form.methode ,  {'attr': {'class': 'form-control'}}) }}
                                                <ul class=\"custom-error\">
                                                    {{form_errors(form.methode)}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div>
                                            <form action=\"{{ path('ajouterlivraison') }}\">
                                                <input type=\"submit\" value=\"Passer a la livraison\" class=\"btn btn-primary rounded-pill m-2\">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{ form_end(form) }}
                            <div class=\"col-lg-6 col-md-6\">
                                <div class=\"order-details\">
                                    <h3 class=\"title\">Liste des Produits</h3>
                                    <div class=\"order-table table-responsive\">
                                        <table class=\"table table-bordered\">
                                            <thead>

                                            <tr>
                                                <th scope=\"col\">Nom du Produit</th>
                                                <th scope=\"col\">Prix</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for p in produits %}
                                                <tr>
                                                    <td class=\"product-name\">
                                                        <a href=\"shop-details.html\">{{ p.nom }}</a>
                                                    </td>
                                                    <td class=\"product-total\">
                                                        <span class=\"subtotal-amount\">{{ p.prixFinale }}</span>
                                                    </td>
                                                </tr>

                                            {% endfor %}
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan=\"4\" class=\"text-right\">Total :</td>
                                                <td class=\"text-right\">{{ total }}Dt</td>
                                                <td></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <form action=\"{{ path('app_paiement_new') }}\">
                                    <input type=\"submit\" value=\"Passer au paiement\" class=\"btn btn-primary rounded-pill m-2\">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->

{% endblock %}", "livraison/AjouterLivraison.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\livraison\\AjouterLivraison.html.twig");
    }
}
