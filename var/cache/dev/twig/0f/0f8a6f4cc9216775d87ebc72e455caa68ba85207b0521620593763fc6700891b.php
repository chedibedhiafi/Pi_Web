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

/* back/livraison/pdf.html.twig */
class __TwigTemplate_b2082c6522e246458a998ef9e5a7201d923ef83f034d56dad9f27b63c9d1636d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/pdf.html.twig"));

        // line 1
        echo "<style>body{
        margin: 0;
        padding: 0;
        font: 400 .875rem 'Open Sans', sans-serif;
        color: #bcd0f7;
        background: #1A233A;
        position: relative;
        height: 100%;
    }
    .invoice-container {
        padding: 1rem;
    }
    .invoice-container .invoice-header .invoice-logo {
        margin: 0.8rem 0 0 0;
        display: inline-block;
        font-size: 1.6rem;
        font-weight: 700;
        color: #bcd0f7;
    }
    .invoice-container .invoice-header .invoice-logo img {
        max-width: 130px;
    }
    .invoice-container .invoice-header address {
        font-size: 0.8rem;
        color: #8a99b5;
        margin: 0;
    }
    .invoice-container .invoice-details {
        margin: 1rem 0 0 0;
        padding: 1rem;
        line-height: 180%;
        background: #1a233a;
    }
    .invoice-container .invoice-details .invoice-num {
        text-align: right;
        font-size: 0.8rem;
    }
    .invoice-container .invoice-body {
        padding: 1rem 0 0 0;
    }
    .invoice-container .invoice-footer {
        text-align: center;
        font-size: 0.7rem;
        margin: 5px 0 0 0;
    }

    .invoice-status {
        text-align: center;
        padding: 1rem;
        background: #272e48;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        margin-bottom: 1rem;
    }
    .invoice-status h2.status {
        margin: 0 0 0.8rem 0;
    }
    .invoice-status h5.status-title {
        margin: 0 0 0.8rem 0;
        color: #8a99b5;
    }
    .invoice-status p.status-type {
        margin: 0.5rem 0 0 0;
        padding: 0;
        line-height: 150%;
    }
    .invoice-status i {
        font-size: 1.5rem;
        margin: 0 0 1rem 0;
        display: inline-block;
        padding: 1rem;
        background: #1a233a;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }
    .invoice-status .badge {
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .invoice-container {
            padding: 1rem;
        }
    }

    .card {
        background: #272E48;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 0;
        margin-bottom: 1rem;
    }

    .custom-table {
        border: 1px solid #2b3958;
    }
    .custom-table thead {
        background: #2f71c1;
    }
    .custom-table thead th {
        border: 0;
        color: #ffffff;
    }
    .custom-table > tbody tr:hover {
        background: #172033;
    }
    .custom-table > tbody tr:nth-of-type(even) {
        background-color: #1a243a;
    }
    .custom-table > tbody td {
        border: 1px solid #2e3d5f;
    }

    .table {
        background: #1a243a;
        color: #bcd0f7;
        font-size: .75rem;
    }
    .text-success {
        color: #c0d64a !important;
    }
    .custom-actions-btns {
        margin: auto;
        display: flex;
        justify-content: flex-end;
    }
    .custom-actions-btns .btn {
        margin: .3rem 0 .3rem .3rem;
    }
</style>
<div class=\"container\">
    <div class=\"row gutters\">
        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"invoice-container\">
                        <div class=\"invoice-header\">

                            <!-- Row start -->
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class=\"row gutters\">
                                <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
                                    <a href=\"index.html\" class=\"invoice-logo\">
                                        QUANTECHH
                                    </a>
                                </div>
                                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                    <address class=\"text-right\">
                                        QIANTECH admin Inc, ghazela.<br>
                                        Arianah, Tunis.<br>
                                        71356984
                                    </address>
                                </div>
                            </div>
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class=\"row gutters\">
                                <div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
                                    <div class=\"invoice-details\">
                                        <address>
                                            Mariem touzri<br>
                                            rue de la liberté, Arianah, Tunis
                                        </address>
                                    </div>
                                </div>

                            </div>
                            <!-- Row end -->

                        </div>

                        <div class=\"invoice-body\">

                            <!-- Row start -->
                            <div class=\"row gutters\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table custom-table m-0\">
                                            <thead>
                                            <tr>
                                                <th>Addresse</th>
                                                <th>Etat</th>
                                                <th>Code postal</th>
                                                <th>Ville</th>
                                                <th>Tel</th>
                                                <th>Commentaire</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 197
            echo "                                             <tr>
                                                <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "addresse", [], "any", false, false, false, 198), "html", null, true);
            echo "  </td>
                                                <td>";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "etat", [], "any", false, false, false, 199), "html", null, true);
            echo "  </td>
                                                <td>";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "codepostal", [], "any", false, false, false, 200), "html", null, true);
            echo "  </td>
                                                <td>";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "ville", [], "any", false, false, false, 201), "html", null, true);
            echo "  </td>
                                                <td>";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "tel", [], "any", false, false, false, 202), "html", null, true);
            echo "  </td>
                                                <td>";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "commentaire", [], "any", false, false, false, 203), "html", null, true);
            echo "  </td>
                                             </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>

                        <div class=\"invoice-footer\">
                            Thank you for your Business.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/livraison/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 206,  267 => 203,  263 => 202,  259 => 201,  255 => 200,  251 => 199,  247 => 198,  244 => 197,  240 => 196,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>body{
        margin: 0;
        padding: 0;
        font: 400 .875rem 'Open Sans', sans-serif;
        color: #bcd0f7;
        background: #1A233A;
        position: relative;
        height: 100%;
    }
    .invoice-container {
        padding: 1rem;
    }
    .invoice-container .invoice-header .invoice-logo {
        margin: 0.8rem 0 0 0;
        display: inline-block;
        font-size: 1.6rem;
        font-weight: 700;
        color: #bcd0f7;
    }
    .invoice-container .invoice-header .invoice-logo img {
        max-width: 130px;
    }
    .invoice-container .invoice-header address {
        font-size: 0.8rem;
        color: #8a99b5;
        margin: 0;
    }
    .invoice-container .invoice-details {
        margin: 1rem 0 0 0;
        padding: 1rem;
        line-height: 180%;
        background: #1a233a;
    }
    .invoice-container .invoice-details .invoice-num {
        text-align: right;
        font-size: 0.8rem;
    }
    .invoice-container .invoice-body {
        padding: 1rem 0 0 0;
    }
    .invoice-container .invoice-footer {
        text-align: center;
        font-size: 0.7rem;
        margin: 5px 0 0 0;
    }

    .invoice-status {
        text-align: center;
        padding: 1rem;
        background: #272e48;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        margin-bottom: 1rem;
    }
    .invoice-status h2.status {
        margin: 0 0 0.8rem 0;
    }
    .invoice-status h5.status-title {
        margin: 0 0 0.8rem 0;
        color: #8a99b5;
    }
    .invoice-status p.status-type {
        margin: 0.5rem 0 0 0;
        padding: 0;
        line-height: 150%;
    }
    .invoice-status i {
        font-size: 1.5rem;
        margin: 0 0 1rem 0;
        display: inline-block;
        padding: 1rem;
        background: #1a233a;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }
    .invoice-status .badge {
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .invoice-container {
            padding: 1rem;
        }
    }

    .card {
        background: #272E48;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 0;
        margin-bottom: 1rem;
    }

    .custom-table {
        border: 1px solid #2b3958;
    }
    .custom-table thead {
        background: #2f71c1;
    }
    .custom-table thead th {
        border: 0;
        color: #ffffff;
    }
    .custom-table > tbody tr:hover {
        background: #172033;
    }
    .custom-table > tbody tr:nth-of-type(even) {
        background-color: #1a243a;
    }
    .custom-table > tbody td {
        border: 1px solid #2e3d5f;
    }

    .table {
        background: #1a243a;
        color: #bcd0f7;
        font-size: .75rem;
    }
    .text-success {
        color: #c0d64a !important;
    }
    .custom-actions-btns {
        margin: auto;
        display: flex;
        justify-content: flex-end;
    }
    .custom-actions-btns .btn {
        margin: .3rem 0 .3rem .3rem;
    }
</style>
<div class=\"container\">
    <div class=\"row gutters\">
        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
            <div class=\"card\">
                <div class=\"card-body p-0\">
                    <div class=\"invoice-container\">
                        <div class=\"invoice-header\">

                            <!-- Row start -->
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class=\"row gutters\">
                                <div class=\"col-xl-6 col-lg-6 col-md-6 col-sm-6\">
                                    <a href=\"index.html\" class=\"invoice-logo\">
                                        QUANTECHH
                                    </a>
                                </div>
                                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                    <address class=\"text-right\">
                                        QIANTECH admin Inc, ghazela.<br>
                                        Arianah, Tunis.<br>
                                        71356984
                                    </address>
                                </div>
                            </div>
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class=\"row gutters\">
                                <div class=\"col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12\">
                                    <div class=\"invoice-details\">
                                        <address>
                                            Mariem touzri<br>
                                            rue de la liberté, Arianah, Tunis
                                        </address>
                                    </div>
                                </div>

                            </div>
                            <!-- Row end -->

                        </div>

                        <div class=\"invoice-body\">

                            <!-- Row start -->
                            <div class=\"row gutters\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table custom-table m-0\">
                                            <thead>
                                            <tr>
                                                <th>Addresse</th>
                                                <th>Etat</th>
                                                <th>Code postal</th>
                                                <th>Ville</th>
                                                <th>Tel</th>
                                                <th>Commentaire</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for l in livraison %}
                                             <tr>
                                                <td>{{ l.addresse }}  </td>
                                                <td>{{ l.etat }}  </td>
                                                <td>{{ l.codepostal }}  </td>
                                                <td>{{ l.ville }}  </td>
                                                <td>{{ l.tel }}  </td>
                                                <td>{{ l.commentaire }}  </td>
                                             </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->

                        </div>

                        <div class=\"invoice-footer\">
                            Thank you for your Business.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "back/livraison/pdf.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\back\\livraison\\pdf.html.twig");
    }
}
