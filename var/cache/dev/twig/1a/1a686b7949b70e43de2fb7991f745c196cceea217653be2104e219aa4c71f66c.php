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

/* utilisateur/template.html.twig */
class __TwigTemplate_5ad470f959a0664e9ad7ad23f699cc1b73e097db7f11cff73258439133fda47e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <title></title>
    
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,600\" rel=\"stylesheet\" type=\"text/css\">
    
    
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color:#8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

</head>

<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;\">
\t<center style=\"width: 100%; background-color: #f5f6fa;\">
        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#f5f6fa\">
            <tr>
               <td style=\"padding: 40px 0;\">
                    <table style=\"width:100%;max-width:620px;margin:0 auto;\">
                        <tbody>
                            <tr>
                                <td style=\"text-align: center; padding-bottom:25px\">
                                    <a href=\"https://imgbb.com/\"><img style=\"height: 100px\" src=\"https://i.ibb.co/f4B8hf1/logo-pi-3.png\" alt=\"logo-pi-3\" border=\"0\" /></a>
                                    <p style=\"font-size: 14px; color: #6576ff; padding-top: 12px;\">Activation de votre compte</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style=\"width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;\">
                        <tbody>
                            <tr>
                                <td style=\"text-align:center;padding: 30px 30px 15px 30px;\">
                                    <h2 style=\"font-size: 18px; color: #1ee0ac; font-weight: 600; margin: 0;\">Votre compte a été créé avec succès! Veuillez cliquer sur ce lien pour pouvoir l'activer</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"text-align:center;padding: 0 30px 20px\">
                                    
                                    <p><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activation", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 84, $this->source); })())])), "html", null, true);
        echo "\">Lien d'activation</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"text-align:center;padding: 0 30px 40px\">
                                    <p style=\"margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;\">Ceci est un e-mail généré automatiquement, veuillez ne pas répondre à cet e-mail. Si vous rencontrez des problèmes, veuillez nous contacter sur quantechp@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style=\"width:100%;max-width:620px;margin:0 auto;\">
                        <tbody>
                            <tr>
                                <td style=\"text-align: center; padding:25px 20px 0;\">
                                    <p style=\"font-size: 13px;\">Copyright © 2021 Tech Mind. All rights reserved. <br> Template Made By <a style=\"color: #6576ff; text-decoration:none;\" href=\"\">Quantech</a>.</p>
                                    <ul style=\"margin: 10px -4px 0;padding: 0;\">
                                        <li style=\"display: inline-block; list-style: none; padding: 4px;\"><a style=\"display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff\" href=\"https://imgbb.com/\"><img style=\"width: 30px\" src=\"https://i.ibb.co/7QFCXgG/facebook.png\" alt=\"facebook\" border=\"0\"></a></li>
                                        <li style=\"display: inline-block; list-style: none; padding: 4px;\"><a style=\"display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff\" href=\"https://imgbb.com/\"><img style=\"width: 30px\" src=\"https://i.ibb.co/DKBqWX0/instagram.png\" alt=\"instagram\" border=\"0\"></a></li>
                                        <li style=\"display: inline-block; list-style: none; padding: 4px;\"><a style=\"display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff\" href=\"https://imgbb.com/\"><img style=\"width: 30px\" src=\"https://i.ibb.co/Kbc5WPY/linkedin.png\" alt=\"linkedin\" border=\"0\"></a></li>
                                    </ul>
                                    <p style=\"padding-top: 15px; font-size: 12px;\">This email was sent to you as a registered user of <a style=\"color: #6576ff; text-decoration:none;\" href=\"\">quantech.com</a>. To update your emails preferences <a style=\"color: #6576ff; text-decoration:none;\" href=\"#\">click here</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 84,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"x-apple-disable-message-reformatting\">
    <title></title>
    
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,600\" rel=\"stylesheet\" type=\"text/css\">
    
    
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color:#8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>

</head>

<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;\">
\t<center style=\"width: 100%; background-color: #f5f6fa;\">
        <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#f5f6fa\">
            <tr>
               <td style=\"padding: 40px 0;\">
                    <table style=\"width:100%;max-width:620px;margin:0 auto;\">
                        <tbody>
                            <tr>
                                <td style=\"text-align: center; padding-bottom:25px\">
                                    <a href=\"https://imgbb.com/\"><img style=\"height: 100px\" src=\"https://i.ibb.co/f4B8hf1/logo-pi-3.png\" alt=\"logo-pi-3\" border=\"0\" /></a>
                                    <p style=\"font-size: 14px; color: #6576ff; padding-top: 12px;\">Activation de votre compte</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style=\"width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;\">
                        <tbody>
                            <tr>
                                <td style=\"text-align:center;padding: 30px 30px 15px 30px;\">
                                    <h2 style=\"font-size: 18px; color: #1ee0ac; font-weight: 600; margin: 0;\">Votre compte a été créé avec succès! Veuillez cliquer sur ce lien pour pouvoir l'activer</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"text-align:center;padding: 0 30px 20px\">
                                    
                                    <p><a href=\"{{ absolute_url(path('activation', {'token':token} )) }}\">Lien d'activation</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"text-align:center;padding: 0 30px 40px\">
                                    <p style=\"margin: 0; font-size: 13px; line-height: 22px; color:#9ea8bb;\">Ceci est un e-mail généré automatiquement, veuillez ne pas répondre à cet e-mail. Si vous rencontrez des problèmes, veuillez nous contacter sur quantechp@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style=\"width:100%;max-width:620px;margin:0 auto;\">
                        <tbody>
                            <tr>
                                <td style=\"text-align: center; padding:25px 20px 0;\">
                                    <p style=\"font-size: 13px;\">Copyright © 2021 Tech Mind. All rights reserved. <br> Template Made By <a style=\"color: #6576ff; text-decoration:none;\" href=\"\">Quantech</a>.</p>
                                    <ul style=\"margin: 10px -4px 0;padding: 0;\">
                                        <li style=\"display: inline-block; list-style: none; padding: 4px;\"><a style=\"display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff\" href=\"https://imgbb.com/\"><img style=\"width: 30px\" src=\"https://i.ibb.co/7QFCXgG/facebook.png\" alt=\"facebook\" border=\"0\"></a></li>
                                        <li style=\"display: inline-block; list-style: none; padding: 4px;\"><a style=\"display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff\" href=\"https://imgbb.com/\"><img style=\"width: 30px\" src=\"https://i.ibb.co/DKBqWX0/instagram.png\" alt=\"instagram\" border=\"0\"></a></li>
                                        <li style=\"display: inline-block; list-style: none; padding: 4px;\"><a style=\"display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff\" href=\"https://imgbb.com/\"><img style=\"width: 30px\" src=\"https://i.ibb.co/Kbc5WPY/linkedin.png\" alt=\"linkedin\" border=\"0\"></a></li>
                                    </ul>
                                    <p style=\"padding-top: 15px; font-size: 12px;\">This email was sent to you as a registered user of <a style=\"color: #6576ff; text-decoration:none;\" href=\"\">quantech.com</a>. To update your emails preferences <a style=\"color: #6576ff; text-decoration:none;\" href=\"#\">click here</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>
</body>
</html>", "utilisateur/template.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\templates\\utilisateur\\template.html.twig");
    }
}
