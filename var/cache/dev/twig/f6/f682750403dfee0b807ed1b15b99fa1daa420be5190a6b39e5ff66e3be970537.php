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
class __TwigTemplate_c070cf7d2a47cc77506d87ca71d4091b793c56fdd040cde0940456b69e15af7b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
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
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </head>
    <body>
        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 518
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "           <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "            <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "        <div class=\"container-xxl position-relative bg-white d-flex p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

";
        // line 56
        $this->displayBlock('sidebar', $context, $blocks);
        // line 101
        echo "
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
                <form class=\"d-none d-md-flex ms-4\">
                    <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                </form>
                <div class=\"navbar-nav align-items-center ms-auto\">
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Message</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"";
        // line 124
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
        // line 134
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
        // line 144
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
                            <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
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
        // line 181
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
        // line 194
        $this->displayBlock('form', $context, $blocks);
        // line 223
        echo "
            <!-- Sale & Revenue Start -->
            ";
        // line 225
        $this->displayBlock('salesRevenue', $context, $blocks);
        // line 267
        echo "            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            ";
        // line 271
        $this->displayBlock('salesChart', $context, $blocks);
        // line 295
        echo "            <!-- Sales Chart End -->


            ";
        // line 298
        $this->displayBlock('table', $context, $blocks);
        // line 373
        echo "
            <!-- Widgets Start -->
            ";
        // line 375
        $this->displayBlock('messages', $context, $blocks);
        // line 495
        echo "            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Quantech</a>, All Right Reserved. 
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 57
        echo "        <!-- Sidebar Start -->
        <div class=\"sidebar pe-4 pb-3\">
            <nav class=\"navbar bg-light navbar-light\">
                <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                    <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>QUANTECH</h3>
                </a>
                <div class=\"d-flex align-items-center ms-4 mb-4\">
                    <div class=\"position-relative\">
                        <img class=\"rounded-circle\" src=\"";
        // line 65
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
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_index");
        echo "\" class=\"nav-item nav-link active\"><i class=\"bi bi-person-circle\"></i>Utilisateurs</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Elements</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"button.html\" class=\"dropdown-item\">Buttons</a>
                            <a href=\"typography.html\" class=\"dropdown-item\">Typography</a>
                            <a href=\"element.html\" class=\"dropdown-item\">Other Elements</a>
                        </div>
                    </div>
                    <a href=\"widget.html\" class=\"nav-item nav-link\"><i class=\"fa fa-th me-2\"></i>Widgets</a>
                    <a href=\"form.html\" class=\"nav-item nav-link\"><i class=\"fa fa-keyboard me-2\"></i>Forms</a>
                    <a href=\"table.html\" class=\"nav-item nav-link\"><i class=\"fa fa-table me-2\"></i>Tables</a>
                    <a href=\"chart.html\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
                            <a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
                            <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                            <a href=\"blank.html\" class=\"dropdown-item\">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 194
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 195
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

    // line 225
    public function block_salesRevenue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesRevenue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesRevenue"));

        // line 226
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

    // line 271
    public function block_salesChart($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesChart"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "salesChart"));

        // line 272
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

    // line 298
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 299
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

    // line 375
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 376
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
        // line 385
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
        // line 395
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
        // line 405
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
        // line 415
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
        return array (  780 => 415,  767 => 405,  754 => 395,  741 => 385,  730 => 376,  720 => 375,  637 => 299,  627 => 298,  595 => 272,  585 => 271,  535 => 226,  525 => 225,  488 => 195,  478 => 194,  441 => 74,  429 => 65,  419 => 57,  409 => 56,  377 => 495,  375 => 375,  371 => 373,  369 => 298,  364 => 295,  362 => 271,  356 => 267,  354 => 225,  350 => 223,  348 => 194,  332 => 181,  292 => 144,  279 => 134,  266 => 124,  241 => 101,  239 => 56,  228 => 47,  218 => 46,  206 => 42,  200 => 39,  196 => 38,  192 => 37,  188 => 36,  184 => 35,  180 => 34,  176 => 33,  171 => 30,  161 => 29,  149 => 26,  143 => 23,  137 => 20,  133 => 19,  121 => 9,  111 => 8,  92 => 5,  77 => 518,  75 => 46,  71 => 44,  69 => 29,  66 => 28,  63 => 8,  59 => 5,  53 => 1,);
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
        {% block body %}
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
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Elements</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"button.html\" class=\"dropdown-item\">Buttons</a>
                            <a href=\"typography.html\" class=\"dropdown-item\">Typography</a>
                            <a href=\"element.html\" class=\"dropdown-item\">Other Elements</a>
                        </div>
                    </div>
                    <a href=\"widget.html\" class=\"nav-item nav-link\"><i class=\"fa fa-th me-2\"></i>Widgets</a>
                    <a href=\"form.html\" class=\"nav-item nav-link\"><i class=\"fa fa-keyboard me-2\"></i>Forms</a>
                    <a href=\"table.html\" class=\"nav-item nav-link\"><i class=\"fa fa-table me-2\"></i>Tables</a>
                    <a href=\"chart.html\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
                            <a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
                            <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                            <a href=\"blank.html\" class=\"dropdown-item\">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
{% endblock %}

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
                <form class=\"d-none d-md-flex ms-4\">
                    <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
                </form>
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
                            <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
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


            <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Quantech</a>, All Right Reserved. 
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>
    {% endblock %}

    </body>
</html>


", "base.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\base.html.twig");
    }
}
