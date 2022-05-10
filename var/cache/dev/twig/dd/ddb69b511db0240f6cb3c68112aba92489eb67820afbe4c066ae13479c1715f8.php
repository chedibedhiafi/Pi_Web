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

/* base.html.twig */
class __TwigTemplate_b8724d1f291b4d8c625700bd490e9c3b5919b46ab744ec86c2cb336e2aa665dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascripts' => [$this, 'block_javascripts'],
            'sidebar' => [$this, 'block_sidebar'],
            'search' => [$this, 'block_search'],
            'body' => [$this, 'block_body'],
            'widgets' => [$this, 'block_widgets'],
            'form' => [$this, 'block_form'],
            'salesRevenue' => [$this, 'block_salesRevenue'],
            'salesChart' => [$this, 'block_salesChart'],
            'table' => [$this, 'block_table'],
            'messages' => [$this, 'block_messages'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </head>
    <body>
        <div class=\"container-xxl position-relative bg-white d-flex p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

";
        // line 58
        $this->displayBlock('sidebar', $context, $blocks);
        // line 514
        echo "
    </body>
</html>


";
        
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

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "           <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 30
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "            <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 59
        echo "        <!-- Sidebar Start -->
        <div class=\"sidebar pe-4 pb-3\">
            <nav class=\"navbar bg-light navbar-light\">
                <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                    <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>QUANTECH</h3>
                </a>
                <div class=\"d-flex align-items-center ms-4 mb-4\">
                    <div class=\"position-relative\">
                        <img class=\"rounded-circle\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                        <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                    </div>
                    <div class=\"ms-3\">
                        <h6 class=\"mb-0\">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class=\"navbar-nav w-100\">
                    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"nav-item nav-link active\"><i class=\"bi bi-person-circle\"></i>Utilisateurs</a>
<a class=\"nav-item nav-link active\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AA");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Produit</a>

                </div>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("A");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Categorie</a>
            </div>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichercommande");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Commande</a>

            </div>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherlivraison");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Livraison</a>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheFront");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>FrontTemplate</a>
                <a class=\"nav-item nav-link active\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Commentaire</a>
                                <a class=\"nav-item nav-link active\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Blog</a>

                <a class=\"nav-item nav-link active\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Reservation</a>
                <a class=\"nav-item nav-link active\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        echo "\"><i class=\"fa fa-tachometer-alt me-2\"></i>Event</a>
                <div class=\"navbar-nav w-100\">
                

                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class=\"content\">
            <!-- Navbar Start -->
            <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                    <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                </a>
                <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                    <i class=\"fa fa-bars\"></i>
                </a>
                ";
        // line 116
        $this->displayBlock('search', $context, $blocks);
        // line 121
        echo "                <div class=\"navbar-nav align-items-center ms-auto\">
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Message</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Notifications</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <img class=\"rounded-circle me-lg-2\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <span class=\"d-none d-lg-inline-flex\">John Doe</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                            <a href=\"#\" class=\"dropdown-item\">Settings</a>
                            <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            ";
        // line 199
        $this->displayBlock('body', $context, $blocks);
        // line 200
        echo "             ";
        $this->displayBlock('widgets', $context, $blocks);
        // line 202
        echo "
";
        // line 203
        $this->displayBlock('form', $context, $blocks);
        // line 232
        echo "
            <!-- Sale & Revenue Start -->
            ";
        // line 234
        $this->displayBlock('salesRevenue', $context, $blocks);
        // line 276
        echo "            <!-- Sale & Revenue End -->
           

            <!-- Sales Chart Start -->
            ";
        // line 280
        $this->displayBlock('salesChart', $context, $blocks);
        // line 304
        echo "            <!-- Sales Chart End -->


            ";
        // line 307
        $this->displayBlock('table', $context, $blocks);
        // line 382
        echo "
            <!-- Widgets Start -->
            ";
        // line 384
        $this->displayBlock('messages', $context, $blocks);
        // line 504
        echo "            <!-- Widgets End -->


           


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 117
        echo "                <form class=\"d-none d-md-flex ms-4\">
                    <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                </form>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 199
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_widgets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widgets"));

        // line 201
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 203
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 204
        echo "<div class=\"container-fluid pt-4 px-4\">
    <div class=\"row g-4\">
        <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Form</h6>
                            <form>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>
                                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                        aria-describedby=\"emailHelp\">
                                    <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                                </div>
                                <div class=\"mb-3 form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_salesRevenue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesRevenue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesRevenue"));

        // line 235
        echo "            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 280
    public function block_salesChart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesChart"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesChart"));

        // line 281
        echo "            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Worldwide Sales</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Salse & Revenue</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 307
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 308
        echo "            <!-- Recent Sales Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Recent Salse</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                            <thead>
                                <tr class=\"text-dark\">
                                    <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Invoice</th>
                                    <th scope=\"col\">Customer</th>
                                    <th scope=\"col\">Amount</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 384
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 385
        echo "            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Calender</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div id=\"calender\"></div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">To Do List</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <input class=\"form-control bg-transparent\" type=\"text\" placeholder=\"Enter task\">
                                <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span><del>Short task goes here...</del></span>
                                        <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
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
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  871 => 424,  858 => 414,  845 => 404,  832 => 394,  821 => 385,  811 => 384,  728 => 308,  718 => 307,  686 => 281,  676 => 280,  626 => 235,  616 => 234,  579 => 204,  569 => 203,  559 => 201,  549 => 200,  530 => 199,  517 => 117,  507 => 116,  488 => 504,  486 => 384,  482 => 382,  480 => 307,  475 => 304,  473 => 280,  467 => 276,  465 => 234,  461 => 232,  459 => 203,  456 => 202,  453 => 200,  451 => 199,  436 => 187,  396 => 150,  383 => 140,  370 => 130,  359 => 121,  357 => 116,  333 => 95,  329 => 94,  324 => 92,  320 => 91,  316 => 90,  311 => 88,  304 => 84,  298 => 81,  291 => 77,  287 => 76,  275 => 67,  265 => 59,  255 => 58,  243 => 45,  237 => 42,  233 => 41,  229 => 40,  225 => 39,  221 => 38,  217 => 37,  213 => 36,  208 => 33,  198 => 32,  188 => 30,  178 => 29,  166 => 27,  160 => 24,  154 => 21,  150 => 20,  138 => 10,  128 => 9,  109 => 5,  94 => 514,  92 => 58,  79 => 47,  77 => 32,  74 => 31,  71 => 29,  69 => 9,  66 => 8,  62 => 5,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}

        {% block stylesheets %}
           <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
        {% endblock %}
        {% block stylesheet %}
        {% endblock %}

        {% block javascripts %}
            <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{asset('lib/chart/chart.min.js')}}\"></script>
    <script src=\"{{asset('lib/easing/easing.min.js')}}\"></script>
    <script src=\"{{asset('lib/waypoints/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('lib/owlcarousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('lib/tempusdominus/js/moment.min.js')}}\"></script>
    <script src=\"{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
    <script src=\"{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>

    <!-- Template Javascript -->
    <script src=\"{{asset('js/main.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
        <div class=\"container-xxl position-relative bg-white d-flex p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

{% block sidebar %}
        <!-- Sidebar Start -->
        <div class=\"sidebar pe-4 pb-3\">
            <nav class=\"navbar bg-light navbar-light\">
                <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                    <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>QUANTECH</h3>
                </a>
                <div class=\"d-flex align-items-center ms-4 mb-4\">
                    <div class=\"position-relative\">
                        <img class=\"rounded-circle\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                        <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                    </div>
                    <div class=\"ms-3\">
                        <h6 class=\"mb-0\">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class=\"navbar-nav w-100\">
                    <a href=\"{{ path('app_utilisateur_index')}}\" class=\"nav-item nav-link active\"><i class=\"bi bi-person-circle\"></i>Utilisateurs</a>
<a class=\"nav-item nav-link active\" href=\"{{ path('AA') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Produit</a>

                </div>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"{{ path('A') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Categorie</a>
            </div>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"{{ path('affichercommande') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Commande</a>

            </div>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"{{ path ('afficherlivraison') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Livraison</a>
            <div class=\"navbar-nav w-100\">
                <a class=\"nav-item nav-link active\" href=\"{{ path('AfficheFront') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>FrontTemplate</a>
                <a class=\"nav-item nav-link active\" href=\"{{ path('app_commentaire_index') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Commentaire</a>
                                <a class=\"nav-item nav-link active\" href=\"{{ path('app_blog_index') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Blog</a>

                <a class=\"nav-item nav-link active\" href=\"{{ path('app_reservation_index') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Reservation</a>
                <a class=\"nav-item nav-link active\" href=\"{{ path('app_event_index') }}\"><i class=\"fa fa-tachometer-alt me-2\"></i>Event</a>
                <div class=\"navbar-nav w-100\">
                

                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class=\"content\">
            <!-- Navbar Start -->
            <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                    <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                </a>
                <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                    <i class=\"fa fa-bars\"></i>
                </a>
                {% block search %}
                <form class=\"d-none d-md-flex ms-4\">
                    <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                </form>
                {% endblock %}
                <div class=\"navbar-nav align-items-center ms-auto\">
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Message</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Notifications</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <img class=\"rounded-circle me-lg-2\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <span class=\"d-none d-lg-inline-flex\">John Doe</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                            <a href=\"#\" class=\"dropdown-item\">Settings</a>
                            <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            {% block body %} {% endblock %}
             {% block widgets %}
            {% endblock %}

{% block form %}
<div class=\"container-fluid pt-4 px-4\">
    <div class=\"row g-4\">
        <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light rounded h-100 p-4\">
                            <h6 class=\"mb-4\">Basic Form</h6>
                            <form>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputEmail1\" class=\"form-label\">Email address</label>
                                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\"
                                        aria-describedby=\"emailHelp\">
                                    <div id=\"emailHelp\" class=\"form-text\">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"exampleInputPassword1\" class=\"form-label\">Password</label>
                                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\">
                                </div>
                                <div class=\"mb-3 form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                                    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
{% endblock %}

            <!-- Sale & Revenue Start -->
            {% block salesRevenue %}
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}
            <!-- Sale & Revenue End -->
           

            <!-- Sales Chart Start -->
            {% block salesChart %}
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Worldwide Sales</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"worldwide-sales\"></canvas>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xl-6\">
                        <div class=\"bg-light text-center rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Salse & Revenue</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <canvas id=\"salse-revenue\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}
            <!-- Sales Chart End -->


            {% block table %}
            <!-- Recent Sales Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light text-center rounded p-4\">
                    <div class=\"d-flex align-items-center justify-content-between mb-4\">
                        <h6 class=\"mb-0\">Recent Salse</h6>
                        <a href=\"\">Show All</a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                            <thead>
                                <tr class=\"text-dark\">
                                    <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                                    <th scope=\"col\">Date</th>
                                    <th scope=\"col\">Invoice</th>
                                    <th scope=\"col\">Customer</th>
                                    <th scope=\"col\">Amount</th>
                                    <th scope=\"col\">Status</th>
                                    <th scope=\"col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>\$123</td>
                                    <td>Paid</td>
                                    <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            {% endblock %}

            <!-- Widgets Start -->
            {% block messages %}
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"row g-4\">
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-2\">
                                <h6 class=\"mb-0\">Messages</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-3\">
                                <img class=\"rounded-circle flex-shrink-0\" src=\"{{asset('img/user.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 justify-content-between\">
                                        <h6 class=\"mb-0\">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">Calender</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div id=\"calender\"></div>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-md-6 col-xl-4\">
                        <div class=\"h-100 bg-light rounded p-4\">
                            <div class=\"d-flex align-items-center justify-content-between mb-4\">
                                <h6 class=\"mb-0\">To Do List</h6>
                                <a href=\"\">Show All</a>
                            </div>
                            <div class=\"d-flex mb-2\">
                                <input class=\"form-control bg-transparent\" type=\"text\" placeholder=\"Enter task\">
                                <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span><del>Short task goes here...</del></span>
                                        <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center border-bottom py-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"d-flex align-items-center pt-2\">
                                <input class=\"form-check-input m-0\" type=\"checkbox\">
                                <div class=\"w-100 ms-3\">
                                    <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                        <span>Short task goes here...</span>
                                        <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}
            <!-- Widgets End -->


           


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>
    {% endblock %}

    </body>
</html>


", "base.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\base.html.twig");
    }
}
