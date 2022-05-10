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

/* back/commande/ModifierCommande.html.twig */
class __TwigTemplate_8419fdf36c46c30904ec63ad1bf8fa4586d5857431ef663ae3f17358062d0ce1 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/commande/ModifierCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/commande/ModifierCommande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/commande/ModifierCommande.html.twig", 1);
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
        echo "    modifier
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
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Modifier Commande</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-calendar-event\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">

                    <hr/>
                    <div class=\"form-body mt-4\">

                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">
                                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Nom</label>
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        <ul class=\"custom-error\">
                                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'errors');
        echo "
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Prenom</label>
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        <ul class=\"custom-error\">
                                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 46, $this->source); })()), "prenom", [], "any", false, false, false, 46), 'errors');
        echo "
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Etat</label>
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "etat", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Addresse</label>
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 55, $this->source); })()), "adresse", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 56, $this->source); })()), "adresse", [], "any", false, false, false, 56), 'errors');
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Email</label>
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'errors');
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Telephone</label>
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 65, $this->source); })()), "telephone", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 66, $this->source); })()), "telephone", [], "any", false, false, false, 66), 'errors');
        echo "
                                    </div>

";
        // line 73
        echo "                                        <div class=\"d-grid\">
                                            <button type =submit href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichercommande");
        echo "\" type=\"button\" class=\"btn btn-light\">Modifier</button>
                                        </div>
                                    </div>
                                ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 77, $this->source); })()), 'form_end');
        echo "
                                </div>
                            </div>
                        </div>

                    </div><!--end row-->
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

    public function getTemplateName()
    {
        return "back/commande/ModifierCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 77,  194 => 74,  191 => 73,  185 => 66,  181 => 65,  174 => 61,  170 => 60,  163 => 56,  159 => 55,  152 => 51,  144 => 46,  139 => 44,  131 => 39,  126 => 37,  120 => 34,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    modifier
{% endblock %}
{% block body %}
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Modifier Commande</div>
                <div class=\"ps-3\">
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb mb-0 p-0\">
                            <li class=\"breadcrumb-item\"><a href=\"javascript:;\"><i class=\"bx bx-calendar-event\"></i></a>
                            </li>

                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <div class=\"card\">
                <div class=\"card-body p-4\">

                    <hr/>
                    <div class=\"form-body mt-4\">

                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"border border-3 p-4 rounded\">
                                    {{ form_start(f,{ 'attr' : {'novalidate':'novalidate'} }) }}
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Nom</label>
                                        {{ form_widget(f.nom ,  {'attr': {'class': 'form-control'}}) }}
                                        <ul class=\"custom-error\">
                                        {{form_errors(f.nom)}}
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Prenom</label>
                                        {{ form_widget(f.prenom ,  {'attr': {'class': 'form-control'}}) }}
                                        <ul class=\"custom-error\">
                                            {{form_errors(f.prenom)}}
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Etat</label>
                                        {{ form_widget(f.etat ,  {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Addresse</label>
                                        {{ form_widget(f.adresse ,  {'attr': {'class': 'form-control'}}) }}
                                        {{form_errors(f.adresse)}}
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Email</label>
                                        {{ form_widget(f.email ,  {'attr': {'class': 'form-control'}}) }}
                                        {{form_errors(f.email)}}
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Telephone</label>
                                        {{ form_widget(f.telephone,  {'attr': {'class': 'form-control'}}) }}
                                        {{form_errors(f.telephone)}}
                                    </div>

{#                                    <div class=\"mb-3\">#}
{#                                        <label for=\"inputPrice\" class=\"form-label\">Mode de Paiement</label>#}
{#                                        {{ form_widget(f.modepaiement ,  {'attr': {'class': 'form-control'}}) }}#}
{#                                    </div>#}
                                        <div class=\"d-grid\">
                                            <button type =submit href=\"{{ path('affichercommande') }}\" type=\"button\" class=\"btn btn-light\">Modifier</button>
                                        </div>
                                    </div>
                                {{ form_end(f) }}
                                </div>
                            </div>
                        </div>

                    </div><!--end row-->
                </div>
            </div>
        </div>

    </div>
    </div>
    <!--end page wrapper -->
{% endblock %}", "back/commande/ModifierCommande.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\back\\commande\\ModifierCommande.html.twig");
    }
}
