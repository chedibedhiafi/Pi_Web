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

/* back/livraison/ajax.html.twig */
class __TwigTemplate_6fe4788d343cc0db8041189cec244bcea0bbd8af5ab3ebbc97cec1ea67bfdd1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/ajax.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 2
            echo "    <tr>

        <td>";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "addresse", [], "any", false, false, false, 4), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 6
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["l"], "etat", [], "any", false, false, false, 6), 1))) {
                // line 7
                echo "                <span class=\"badge bg-success\">Traité</span>
            ";
            } else {
                // line 9
                echo "                <span class=\"badge bg-secondary\">Non Traité</span>
            ";
            }
            // line 11
            echo "        </td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "codepostal", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "ville", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "tel", [], "any", false, false, false, 14), "html", null, true);
            echo "
        </td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "commentaire", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
        <td>
            <div class=\"d-flex order-actions\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierlivraison", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"\"><i class='bx bxs-edit'></i></a>
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerlivraison", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\" class=\"ms-3\"><i class='bx bxs-trash'></i></a>
            </div>
        </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/livraison/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  88 => 19,  82 => 16,  77 => 14,  73 => 13,  69 => 12,  66 => 11,  62 => 9,  58 => 7,  56 => 6,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for l in livraison %}
    <tr>

        <td>{{ l.addresse }}</td>
        <td>
            {% if l.etat == 1  %}
                <span class=\"badge bg-success\">Traité</span>
            {% else  %}
                <span class=\"badge bg-secondary\">Non Traité</span>
            {% endif %}
        </td>
        <td>{{ l.codepostal }}</td>
        <td>{{ l.ville  }}</td>
        <td>{{ l.tel }}
        </td>
        <td>{{ l.commentaire  }}</td>
        <td>
            <div class=\"d-flex order-actions\">
                <a href=\"{{ path('modifierlivraison',{id :l.id}) }}\" class=\"\"><i class='bx bxs-edit'></i></a>
                <a href=\"{{ path('supprimerlivraison',{id :l.id}) }}\" class=\"ms-3\"><i class='bx bxs-trash'></i></a>
            </div>
        </td>
    </tr>
{% endfor %}", "back/livraison/ajax.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\back\\livraison\\ajax.html.twig");
    }
}
