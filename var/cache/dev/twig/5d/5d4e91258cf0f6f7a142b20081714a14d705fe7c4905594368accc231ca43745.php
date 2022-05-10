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

/* back/livraison/ModifierLivraison.html.twig */
class __TwigTemplate_02da755d17522f91bae91b6c8c87fceaf53ffb6b404db5249fe9cd43f00204f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/ModifierLivraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/ModifierLivraison.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/livraison/ModifierLivraison.html.twig", 1);
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
        echo "    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Modifier Livraison</div>
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Addresse</label>
                                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "addresse", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        <ul class=\"custom-error\">
                                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "addresse", [], "any", false, false, false, 39), 'errors');
        echo "
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Etat</label>
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "etat", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Code Postal</label>
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "codepostal", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "codepostal", [], "any", false, false, false, 49), 'errors');
        echo "
                                    </div>

                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Ville</label>
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "ville", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Numero de telephone</label>
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "tel", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "tel", [], "any", false, false, false, 59), 'errors');
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Commentaire</label>
                                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "commentaire", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Methode de livraison</label>
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "methode", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                    <div class=\"d-grid\">
                                        <button type =submit href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherlivraison");
        echo "\" type=\"button\" class=\"btn btn-light\">Modifier</button>
                                    </div>
                                </div>
                                ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/livraison/ModifierLivraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 73,  189 => 70,  183 => 67,  176 => 63,  169 => 59,  165 => 58,  158 => 54,  150 => 49,  146 => 48,  139 => 44,  131 => 39,  126 => 37,  120 => 34,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    Livraison
{% endblock %}
{% block body %}
    <div class=\"page-wrapper\">
        <div class=\"page-content\">

            <!--breadcrumb-->
            <div class=\"page-breadcrumb d-none d-sm-flex align-items-center mb-3\">
                <div class=\"breadcrumb-title pe-3\">Modifier Livraison</div>
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
                                    {{ form_start(form,{ 'attr' : {'novalidate':'novalidate'} }) }}
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Addresse</label>
                                        {{ form_widget(form.addresse ,  {'attr': {'class': 'form-control'}}) }}
                                        <ul class=\"custom-error\">
                                            {{form_errors(form.addresse)}}
                                        </ul>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Etat</label>
                                        {{ form_widget(form.etat ,  {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Code Postal</label>
                                        {{ form_widget(form.codepostal ,  {'attr': {'class': 'form-control'}}) }}
                                        {{form_errors(form.codepostal)}}
                                    </div>

                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Ville</label>
                                        {{ form_widget(form.ville ,  {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Numero de telephone</label>
                                        {{ form_widget(form.tel ,  {'attr': {'class': 'form-control'}}) }}
                                        {{form_errors(form.tel)}}
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Commentaire</label>
                                        {{ form_widget(form.commentaire ,  {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"inputPrice\" class=\"form-label\">Methode de livraison</label>
                                        {{ form_widget(form.methode ,  {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div class=\"d-grid\">
                                        <button type =submit href=\"{{ path('afficherlivraison') }}\" type=\"button\" class=\"btn btn-light\">Modifier</button>
                                    </div>
                                </div>
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>

                </div><!--end row-->
            </div>
        </div>
    </div>

    </div>
    </div>
{% endblock %}", "back/livraison/ModifierLivraison.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\back\\livraison\\ModifierLivraison.html.twig");
    }
}
