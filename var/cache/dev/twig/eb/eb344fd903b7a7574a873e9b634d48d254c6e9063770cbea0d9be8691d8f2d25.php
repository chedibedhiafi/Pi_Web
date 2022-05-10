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

/* @Captcha/captcha.html.twig */
class __TwigTemplate_3acc9699c092e000ef41f91ddaf4c887ffc8c3c5d465536ff4a357f0e56db023 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'simple_captcha_widget' => [$this, 'block_simple_captcha_widget'],
            'captcha_widget' => [$this, 'block_captcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Captcha/captcha.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Captcha/captcha.html.twig"));

        // line 5
        $this->displayBlock('simple_captcha_widget', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_simple_captcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "simple_captcha_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "simple_captcha_widget"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        echo (isset($context["captcha_html"]) || array_key_exists("captcha_html", $context) ? $context["captcha_html"] : (function () { throw new RuntimeError('Variable "captcha_html" does not exist.', 7, $this->source); })());
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget', ["id" => (isset($context["user_input_id"]) || array_key_exists("user_input_id", $context) ? $context["user_input_id"] : (function () { throw new RuntimeError('Variable "user_input_id" does not exist.', 8, $this->source); })()), "value" => ""]);
        echo "
    ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_captcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 13
        echo "    ";
        ob_start();
        // line 14
        echo "        ";
        echo (isset($context["captcha_html"]) || array_key_exists("captcha_html", $context) ? $context["captcha_html"] : (function () { throw new RuntimeError('Variable "captcha_html" does not exist.', 14, $this->source); })());
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'widget', ["id" => (isset($context["user_input_id"]) || array_key_exists("user_input_id", $context) ? $context["user_input_id"] : (function () { throw new RuntimeError('Variable "user_input_id" does not exist.', 15, $this->source); })()), "value" => ""]);
        echo "
    ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Captcha/captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 13,  111 => 15,  106 => 14,  103 => 13,  93 => 12,  83 => 6,  78 => 8,  73 => 7,  70 => 6,  60 => 5,  50 => 12,  47 => 11,  45 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# 
    sf4application/templates/bundles/CaptchaBundle/captcha.html.twig 
    https://github.com/captcha-com/symfony-captcha-bundle/pull/11/commits/a7d36269a192be90e71df28669238a3f7c50a550
#}
{% block simple_captcha_widget %}
    {% apply spaceless %}
        {{ captcha_html | raw }}
        {{ form_widget(form, { 'id': user_input_id, 'value': '' }) }}
    {% endapply  %}
{% endblock %}

{% block captcha_widget %}
    {% apply spaceless %}
        {{ captcha_html | raw }}
        {{ form_widget(form, { 'id': user_input_id, 'value': '' }) }}
    {% endapply  %}
{% endblock %}", "@Captcha/captcha.html.twig", "C:\\Users\\21694\\Desktop\\quantech\\vendor\\captcha-com\\symfony-captcha-bundle\\Resources\\views\\captcha.html.twig");
    }
}
