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

/* emails/contact.html.twig */
class __TwigTemplate_28ea78adcc0aa3b8e9c34620d1cc372f519aff6693fc515c8c675c3a49eabbf6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en-US\">

<head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
    <title>Mr./Madame. Votre reservation est validée! </title>
    <meta name=\"description\" content=\"Reset Password Email Template.\">
    <style type=\"text/css\">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" style=\"margin: 0px; background-color: #f2f3f8;\" leftmargin=\"0\">
<!--100% body table-->
<table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#f2f3f8\"
       style=\"@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;\">
    <tr>
        <td>
            <table style=\"background-color: #f2f3f8; max-width:670px;  margin:0 auto;\" width=\"100%\" border=\"0\"
                   align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                <tr>
                    <td style=\"height:80px;\">&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"text-align:center;\">

                    </td>
                </tr>
                <tr>
                    <td style=\"height:20px;\">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                               style=\"max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);\">
                            <tr>
                                <td style=\"height:40px;\">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style=\"padding:0 35px;\">
                                    <h1 style=\"color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;\">Mr/madame, Votre réservation est validée ! </h1>
                                    <span
                                            style=\"display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;\"></span>
                                    <p style=\"color:#455056; font-size:15px;line-height:24px; margin:0;\">
                                        QuanTech vous informe que vous avez eu vos places à notre évènement avec succès  <br>
                                        Soyez les bienvenus !

                                    </p>
                                    <a href=\"\"
                                       style=\"background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;\">reservation
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"height:40px;\">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style=\"height:20px;\">&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"text-align:center;\">
                        <p style=\"font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;\">&copy; <strong>www.QuanTech.com</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style=\"height:80px;\">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% body table-->
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en-US\">

<head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />
    <title>Mr./Madame. Votre reservation est validée! </title>
    <meta name=\"description\" content=\"Reset Password Email Template.\">
    <style type=\"text/css\">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" style=\"margin: 0px; background-color: #f2f3f8;\" leftmargin=\"0\">
<!--100% body table-->
<table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#f2f3f8\"
       style=\"@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;\">
    <tr>
        <td>
            <table style=\"background-color: #f2f3f8; max-width:670px;  margin:0 auto;\" width=\"100%\" border=\"0\"
                   align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                <tr>
                    <td style=\"height:80px;\">&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"text-align:center;\">

                    </td>
                </tr>
                <tr>
                    <td style=\"height:20px;\">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width=\"95%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                               style=\"max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);\">
                            <tr>
                                <td style=\"height:40px;\">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style=\"padding:0 35px;\">
                                    <h1 style=\"color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;\">Mr/madame, Votre réservation est validée ! </h1>
                                    <span
                                            style=\"display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;\"></span>
                                    <p style=\"color:#455056; font-size:15px;line-height:24px; margin:0;\">
                                        QuanTech vous informe que vous avez eu vos places à notre évènement avec succès  <br>
                                        Soyez les bienvenus !

                                    </p>
                                    <a href=\"\"
                                       style=\"background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;\">reservation
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"height:40px;\">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style=\"height:20px;\">&nbsp;</td>
                </tr>
                <tr>
                    <td style=\"text-align:center;\">
                        <p style=\"font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;\">&copy; <strong>www.QuanTech.com</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style=\"height:80px;\">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% body table-->
</body>

</html>
", "emails/contact.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\emails\\contact.html.twig");
    }
}
