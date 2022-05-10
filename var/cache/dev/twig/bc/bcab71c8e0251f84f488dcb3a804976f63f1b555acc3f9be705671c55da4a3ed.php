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

/* front(soulayma).html.twig */
class __TwigTemplate_21e11c4498912b3c4c2871ef9ef7786922033579b6c8f7452eb3d2d070cc48ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'home' => [$this, 'block_home'],
            'body' => [$this, 'block_body'],
            'aboutUs' => [$this, 'block_aboutUs'],
            'services' => [$this, 'block_services'],
            'portfolio' => [$this, 'block_portfolio'],
            'team' => [$this, 'block_team'],
            'pricing' => [$this, 'block_pricing'],
            'faq' => [$this, 'block_faq'],
            'contactus' => [$this, 'block_contactus'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front(soulayma).html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front(soulayma).html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Quantech</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/favicon.png"), "html", null, true);
        echo "')}}\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/apple-touch-icon.png"), "html", null, true);
        echo "')}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <h1><a href=\"index.html\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo pi 3.png"), "html", null, true);
        echo "\"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_indexfront");
        echo "\">Home</a></li>
          <li><a class=\"nav-link scrollto\"href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointdevente_aboutus");
        echo "\">AboutUs</a></li>
          <li><a class=\"nav-link scrollto \" href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheFrontBlog");
        echo "\">Blog</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_indexf");
        echo "\">Event</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheFront");
        echo "\">Produits</a></li>
                <!-- Cart -->
                <div class=\"dropdown\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CartController::nbproduit"));
        echo "

                </div>
                <!-- /Cart -->
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
            ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "          <li><a class=\"getstarted scrollto\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_signup");
            echo "\">S'inscrire</a></li>
          <li><a class=\"getstarted scrollto\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_login");
            echo "\">Se connecter</a></li>
          ";
        } else {
            // line 69
            echo "         
          <li><a class=\"getstarted scrollto\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_logout");
            echo "\">Déconnexion</a></li>
          <li><a class=\"getstarted scrollto\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_editprofil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">Mon profil</a></li>
          
          ";
        }
        // line 74
        echo "        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  ";
        // line 82
        $this->displayBlock('home', $context, $blocks);
        // line 101
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "  <!-- End Hero -->

  <main id=\"main\">

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients clients\">
      <div class=\"container\">

        <div class=\"row\">

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/clients/client-1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/clients/client-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/clients/client-3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/clients/client-4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/clients/client-5.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/clients/client-6.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"500\">
          </div>

        </div>

      </div>
    </section>
    
    <!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    ";
        // line 145
        $this->displayBlock('aboutUs', $context, $blocks);
        // line 231
        echo "    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    ";
        // line 234
        $this->displayBlock('services', $context, $blocks);
        // line 510
        echo "  
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    ";
        // line 514
        $this->displayBlock('portfolio', $context, $blocks);
        // line 667
        echo "    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    ";
        // line 670
        $this->displayBlock('team', $context, $blocks);
        // line 758
        echo "    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    ";
        // line 761
        $this->displayBlock('pricing', $context, $blocks);
        // line 828
        echo "    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    ";
        // line 831
        $this->displayBlock('faq', $context, $blocks);
        // line 902
        echo "    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    ";
        // line 905
        $this->displayBlock('contactus', $context, $blocks);
        // line 976
        echo "    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"row d-flex align-items-center\">
        <div class=\"col-lg-6 text-lg-left text-center\">
          <div class=\"copyright\">
            &copy; Copyright <strong>Quantech</strong>. All Rights Reserved
          </div>
          <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
           
          </div>
        </div>
        <div class=\"col-lg-6\">
          <nav class=\"footer-links text-lg-right text-center pt-2 pt-lg-0\">
            <a href=\"#intro\" class=\"scrollto\">Home</a>
            <a href=\"#about\" class=\"scrollto\">About</a>
            <a href=\"#\">Privacy Policy</a>
            <a href=\"#\">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 1011
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/purecounter/purecounter.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1012
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1013
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1014
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1015
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1016
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1017
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 1020
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        // line 83
        echo "  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center\">
          <h1 data-aos=\"fade-up\">Grow your business with Vesperr</h1>
          <h2 data-aos=\"fade-up\" data-aos-delay=\"400\">We are team of talented designers making websites with Bootstrap</h2>
          <div data-aos=\"fade-up\" data-aos-delay=\"800\">
          </div>
        </div>
        <div class=\"col-lg-6 order-1 order-lg-2 hero-img\" data-aos=\"fade-left\" data-aos-delay=\"200\">
          <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/hero-img.png"), "html", null, true);
        echo "\" class=\"img-fluid animated\" alt=\"\">
        </div>
      </div>
    </div>

  </section>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 102
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_aboutUs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aboutUs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aboutUs"));

        // line 146
        echo "    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>About Us</h2>
        </div>

        <div class=\"row content\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"150\">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href=\"#\" class=\"btn-learn-more\">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    
    <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start\" data-aos=\"fade-right\" data-aos-delay=\"150\">
            <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/counts-img.svg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
          </div>

          <div class=\"col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"content d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-smile\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"65\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-journal-richtext\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"85\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-clock\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"18\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-award\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_services($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "services"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "services"));

        // line 235
        echo "    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"icon\"><i class=\"bx bxl-dribbble\"></i></div>
              <h4 class=\"title\"><a href=\"\">Lorem Ipsum</a></h4>
              <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"icon\"><i class=\"bx bx-file\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"icon\"><i class=\"bx bx-tachometer\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"icon\"><i class=\"bx bx-world\"></i></div>
              <h4 class=\"title\"><a href=\"\">Nemo Enim</a></h4>
              <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id=\"more-services\" class=\"more-services\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-md-6 d-flex align-items-stretch\">
            <div class=\"card\" style='background-image: url(\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/more-services-1.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Lobira Duno</a></h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"card\" style='background-image: url(\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/more-services-2.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Limere Radses</a></h5>
                <p class=\"card-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/more-services-3.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nive Lodo</a></h5>
                <p class=\"card-text\">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/more-services-4.jpg"), "html", null, true);
        echo "\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Pale Treda</a></h5>
                <p class=\"card-text\">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- End More Services Section -->

    <!-- ======= Features Section ======= -->
    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Features</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-lg-3 col-md-4\">
            <div class=\"icon-box\">
              <i class=\"ri-store-line\" style=\"color: #ffbb2c;\"></i>
              <h3><a href=\"\">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-bar-chart-box-line\" style=\"color: #5578ff;\"></i>
              <h3><a href=\"\">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-calendar-todo-line\" style=\"color: #e80368;\"></i>
              <h3><a href=\"\">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-lg-0\">
            <div class=\"icon-box\">
              <i class=\"ri-paint-brush-line\" style=\"color: #e361ff;\"></i>
              <h3><a href=\"\">Magni Dolores</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-database-2-line\" style=\"color: #47aeff;\"></i>
              <h3><a href=\"\">Nemo Enim</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-gradienter-line\" style=\"color: #ffa76e;\"></i>
              <h3><a href=\"\">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-file-list-3-line\" style=\"color: #11dbcf;\"></i>
              <h3><a href=\"\">Midela Teren</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-price-tag-2-line\" style=\"color: #4233ff;\"></i>
              <h3><a href=\"\">Pira Neve</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-anchor-line\" style=\"color: #b2904f;\"></i>
              <h3><a href=\"\">Dirada Pack</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-disc-line\" style=\"color: #b20969;\"></i>
              <h3><a href=\"\">Moton Ideal</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-base-station-line\" style=\"color: #ff5828;\"></i>
              <h3><a href=\"\">Verdo Park</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-fingerprint-line\" style=\"color: #29cc61;\"></i>
              <h3><a href=\"\">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
        </div>

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonials/testimonials-1.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonials/testimonials-2.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonials/testimonials-3.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonials/testimonials-4.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/testimonials/testimonials-5.jpg"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 514
    public function block_portfolio($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "portfolio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "portfolio"));

        // line 515
        echo "    <section id=\"portfolio\" class=\"portfolio\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 670
    public function block_team($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        // line 671
        echo "    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"member-img\">
                <img src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team/team-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"member-img\">
                <img src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team/team-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"member-img\">
                <img src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team/team-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"member-img\">
                <img src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/team/team-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 761
    public function block_pricing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pricing"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pricing"));

        // line 762
        echo "    <section id=\"pricing\" class=\"pricing\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"box\" data-aos=\"zoom-in-right\" data-aos-delay=\"200\">
              <h3>Free</h3>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-md-0\">
            <div class=\"box recommended\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <h3>Business</h3>
              <h4><sup>\$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-lg-0\">
            <div class=\"box\" data-aos=\"zoom-in-left\" data-aos-delay=\"200\">
              <h3>Developer</h3>
              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 831
    public function block_faq($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "faq"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "faq"));

        // line 832
        echo "    <section id=\"faq\" class=\"faq\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"400\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"500\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 905
    public function block_contactus($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactus"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactus"));

        // line 906
        echo "    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Contact Us</h2>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"contact-about\">
              <h3>Vesperr</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class=\"social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info\">
              <div>
                <i class=\"ri-map-pin-line\"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class=\"ri-mail-send-line\"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class=\"ri-phone-line\"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class=\"col-lg-5 col-md-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front(soulayma).html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1418 => 906,  1408 => 905,  1329 => 832,  1319 => 831,  1244 => 762,  1234 => 761,  1204 => 738,  1183 => 720,  1162 => 702,  1141 => 684,  1126 => 671,  1116 => 670,  1094 => 655,  1086 => 650,  1074 => 641,  1066 => 636,  1054 => 627,  1046 => 622,  1034 => 613,  1026 => 608,  1014 => 599,  1006 => 594,  994 => 585,  986 => 580,  974 => 571,  966 => 566,  954 => 557,  946 => 552,  934 => 543,  926 => 538,  901 => 515,  891 => 514,  862 => 492,  844 => 477,  826 => 462,  808 => 447,  790 => 432,  670 => 315,  658 => 306,  645 => 296,  633 => 287,  579 => 235,  569 => 234,  514 => 186,  472 => 146,  462 => 145,  452 => 102,  442 => 101,  425 => 94,  412 => 83,  402 => 82,  387 => 1020,  381 => 1017,  377 => 1016,  373 => 1015,  369 => 1014,  365 => 1013,  361 => 1012,  357 => 1011,  320 => 976,  318 => 905,  313 => 902,  311 => 831,  306 => 828,  304 => 761,  299 => 758,  297 => 670,  292 => 667,  290 => 514,  284 => 510,  282 => 234,  277 => 231,  275 => 145,  261 => 134,  254 => 130,  247 => 126,  240 => 122,  233 => 118,  226 => 114,  213 => 103,  210 => 101,  208 => 82,  198 => 74,  192 => 71,  188 => 70,  185 => 69,  180 => 68,  175 => 67,  173 => 66,  165 => 61,  159 => 58,  154 => 56,  150 => 55,  146 => 54,  142 => 53,  134 => 48,  129 => 46,  109 => 29,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  70 => 14,  66 => 13,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Quantech</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{asset('front/img/favicon.png')}}')}}\" rel=\"icon\">
  <link href=\"{{asset('front/img/apple-touch-icon.png')}}')}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{asset('front/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('front/css/style.css')}}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <h1><a href=\"index.html\"><img src=\"{{asset('front/img/logo pi 3.png')}}\"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"{{asset('front/img/logo.png')}}\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto\" href=\"{{ path('app_utilisateur_indexfront') }}\">Home</a></li>
          <li><a class=\"nav-link scrollto\"href=\"{{ path('app_pointdevente_aboutus') }}\">AboutUs</a></li>
          <li><a class=\"nav-link scrollto \" href=\"{{ path('AfficheFrontBlog') }}\">Blog</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ path('app_event_indexf') }}\">Event</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>
          <li><a class=\"nav-link scrollto\" href=\"{{ path('AfficheFront') }}\">Produits</a></li>
                <!-- Cart -->
                <div class=\"dropdown\">
                    {{render(controller('App\\\\Controller\\\\CartController::nbproduit' )) }}

                </div>
                <!-- /Cart -->
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
            {% if not app.user %}
          <li><a class=\"getstarted scrollto\" href=\"{{path('app_utilisateur_signup')}}\">S'inscrire</a></li>
          <li><a class=\"getstarted scrollto\" href=\"{{path('app_utilisateur_login')}}\">Se connecter</a></li>
          {% else %}         
          <li><a class=\"getstarted scrollto\" href=\"{{path('app_utilisateur_logout')}}\">Déconnexion</a></li>
          <li><a class=\"getstarted scrollto\" href=\"{{path('app_utilisateur_editprofil',{'id':app.user.id})}}\">Mon profil</a></li>
          
          {% endif %}
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  {% block home %}
  <section id=\"hero\" class=\"d-flex align-items-center\">

    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center\">
          <h1 data-aos=\"fade-up\">Grow your business with Vesperr</h1>
          <h2 data-aos=\"fade-up\" data-aos-delay=\"400\">We are team of talented designers making websites with Bootstrap</h2>
          <div data-aos=\"fade-up\" data-aos-delay=\"800\">
          </div>
        </div>
        <div class=\"col-lg-6 order-1 order-lg-2 hero-img\" data-aos=\"fade-left\" data-aos-delay=\"200\">
          <img src=\"{{asset('front/img/hero-img.png')}}\" class=\"img-fluid animated\" alt=\"\">
        </div>
      </div>
    </div>

  </section>
  {% endblock %}
  {% block body %}
  {% endblock %}
  <!-- End Hero -->

  <main id=\"main\">

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients clients\">
      <div class=\"container\">

        <div class=\"row\">

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('front/img/clients/client-1.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('front/img/clients/client-2.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('front/img/clients/client-3.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('front/img/clients/client-4.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('front/img/clients/client-5.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
          </div>

          <div class=\"col-lg-2 col-md-4 col-6\">
            <img src=\"{{asset('front/img/clients/client-6.png')}}\" class=\"img-fluid\" alt=\"\" data-aos=\"zoom-in\" data-aos-delay=\"500\">
          </div>

        </div>

      </div>
    </section>
    
    <!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    {% block aboutUs %}
    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>About Us</h2>
        </div>

        <div class=\"row content\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"150\">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href=\"#\" class=\"btn-learn-more\">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    
    <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id=\"counts\" class=\"counts\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start\" data-aos=\"fade-right\" data-aos-delay=\"150\">
            <img src=\"{{asset('front/img/counts-img.svg')}}\" alt=\"\" class=\"img-fluid\">
          </div>

          <div class=\"col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"content d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-emoji-smile\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"65\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-journal-richtext\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"85\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-clock\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"18\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class=\"col-md-6 d-md-flex align-items-md-stretch\">
                  <div class=\"count-box\">
                    <i class=\"bi bi-award\"></i>
                    <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    {% endblock %}
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    {% block services %}
    <section id=\"services\" class=\"services\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"icon\"><i class=\"bx bxl-dribbble\"></i></div>
              <h4 class=\"title\"><a href=\"\">Lorem Ipsum</a></h4>
              <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"icon\"><i class=\"bx bx-file\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"icon\"><i class=\"bx bx-tachometer\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0\">
            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"icon\"><i class=\"bx bx-world\"></i></div>
              <h4 class=\"title\"><a href=\"\">Nemo Enim</a></h4>
              <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id=\"more-services\" class=\"more-services\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-md-6 d-flex align-items-stretch\">
            <div class=\"card\" style='background-image: url(\"{{asset('front/img/more-services-1.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Lobira Duno</a></h5>
                <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4 mt-md-0\">
            <div class=\"card\" style='background-image: url(\"{{asset('front/img/more-services-2.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Limere Radses</a></h5>
                <p class=\"card-text\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"{{asset('front/img/more-services-3.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nive Lodo</a></h5>
                <p class=\"card-text\">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4\">
            <div class=\"card\" style='background-image: url(\"{{asset('front/img/more-services-4.jpg')}}\");' data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Pale Treda</a></h5>
                <p class=\"card-text\">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- End More Services Section -->

    <!-- ======= Features Section ======= -->
    <section id=\"features\" class=\"features\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Features</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-lg-3 col-md-4\">
            <div class=\"icon-box\">
              <i class=\"ri-store-line\" style=\"color: #ffbb2c;\"></i>
              <h3><a href=\"\">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-bar-chart-box-line\" style=\"color: #5578ff;\"></i>
              <h3><a href=\"\">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-md-0\">
            <div class=\"icon-box\">
              <i class=\"ri-calendar-todo-line\" style=\"color: #e80368;\"></i>
              <h3><a href=\"\">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4 mt-lg-0\">
            <div class=\"icon-box\">
              <i class=\"ri-paint-brush-line\" style=\"color: #e361ff;\"></i>
              <h3><a href=\"\">Magni Dolores</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-database-2-line\" style=\"color: #47aeff;\"></i>
              <h3><a href=\"\">Nemo Enim</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-gradienter-line\" style=\"color: #ffa76e;\"></i>
              <h3><a href=\"\">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-file-list-3-line\" style=\"color: #11dbcf;\"></i>
              <h3><a href=\"\">Midela Teren</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-price-tag-2-line\" style=\"color: #4233ff;\"></i>
              <h3><a href=\"\">Pira Neve</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-anchor-line\" style=\"color: #b2904f;\"></i>
              <h3><a href=\"\">Dirada Pack</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-disc-line\" style=\"color: #b20969;\"></i>
              <h3><a href=\"\">Moton Ideal</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-base-station-line\" style=\"color: #ff5828;\"></i>
              <h3><a href=\"\">Verdo Park</a></h3>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-4 mt-4\">
            <div class=\"icon-box\">
              <i class=\"ri-fingerprint-line\" style=\"color: #29cc61;\"></i>
              <h3><a href=\"\">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
        </div>

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"{{asset('front/img/testimonials/testimonials-1.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"{{asset('front/img/testimonials/testimonials-2.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"{{asset('front/img/testimonials/testimonials-3.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"{{asset('front/img/testimonials/testimonials-4.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-wrap\">
                <div class=\"testimonial-item\">
                  <img src=\"{{asset('front/img/testimonials/testimonials-5.jpg')}}\" class=\"testimonial-img\" alt=\"\">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section>
    {% endblock %}  
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    {% block portfolio %}
    <section id=\"portfolio\" class=\"portfolio\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 1</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-1.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-2.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 2</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-3.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-4.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-4.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-5.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-5.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-6.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>App 3</h4>
                <p>App</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-6.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-7.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-7.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-8.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-8.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <div class=\"portfolio-wrap\">
              <img src=\"{{asset('front/img/portfolio/portfolio-9.jpg')}}\" class=\"img-fluid\" alt=\"\">
              <div class=\"portfolio-info\">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class=\"portfolio-links\">
                  <a href=\"{{asset('front/img/portfolio/portfolio-9.jpg')}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    {% endblock %}
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    {% block team %}
    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"member-img\">
                <img src=\"{{asset('front/img/team/team-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"member-img\">
                <img src=\"{{asset('front/img/team/team-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"member-img\">
                <img src=\"{{asset('front/img/team/team-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\">
            <div class=\"member\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"member-img\">
                <img src=\"{{asset('front/img/team/team-4.jpg')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    {% endblock %}
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    {% block pricing %}
    <section id=\"pricing\" class=\"pricing\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"box\" data-aos=\"zoom-in-right\" data-aos-delay=\"200\">
              <h3>Free</h3>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-md-0\">
            <div class=\"box recommended\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <h3>Business</h3>
              <h4><sup>\$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 mt-4 mt-lg-0\">
            <div class=\"box\" data-aos=\"zoom-in-left\" data-aos-delay=\"200\">
              <h3>Developer</h3>
              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    {% endblock %}
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    {% block faq %}
    <section id=\"faq\" class=\"faq\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"400\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class=\"row faq-item d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"500\">
          <div class=\"col-lg-5\">
            <i class=\"ri-question-line\"></i>
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
          </div>
          <div class=\"col-lg-7\">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section>
    {% endblock %}
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    {% block contactus %}
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Contact Us</h2>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"contact-about\">
              <h3>Vesperr</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class=\"social-links\">
                <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info\">
              <div>
                <i class=\"ri-map-pin-line\"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class=\"ri-mail-send-line\"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class=\"ri-phone-line\"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class=\"col-lg-5 col-md-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"form-group\">
                <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
              </div>
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    {% endblock %}
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"row d-flex align-items-center\">
        <div class=\"col-lg-6 text-lg-left text-center\">
          <div class=\"copyright\">
            &copy; Copyright <strong>Quantech</strong>. All Rights Reserved
          </div>
          <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
           
          </div>
        </div>
        <div class=\"col-lg-6\">
          <nav class=\"footer-links text-lg-right text-center pt-2 pt-lg-0\">
            <a href=\"#intro\" class=\"scrollto\">Home</a>
            <a href=\"#about\" class=\"scrollto\">About</a>
            <a href=\"#\">Privacy Policy</a>
            <a href=\"#\">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"{{asset('front/vendor/purecounter/purecounter.js')}}\"></script>
  <script src=\"{{asset('front/vendor/aos/aos.js')}}\"></script>
  <script src=\"{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('front/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{asset('front/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{asset('front/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{asset('front/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset('front/js/main.js')}}\"></script>

</body>

</html>", "front(soulayma).html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\front(soulayma).html.twig");
    }
}
