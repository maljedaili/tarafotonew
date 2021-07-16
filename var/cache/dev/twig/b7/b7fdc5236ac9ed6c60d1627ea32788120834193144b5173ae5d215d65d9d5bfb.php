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

/* common/_header.html.twig */
class __TwigTemplate_86b3aa8bf0f45c2a1df84941f77d16245e1f4bccf9cb7792d34e51473d1e8a8d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_header.html.twig"));

        // line 1
        echo "
             <!--Header-->
    
            <div class=\" hero \">
                <!-- Masthead Avatar Image-->
                <img class=\"avatar\" src=\"../img/logo.svg\" alt=\"...\" />
                
                <!-- Masthead Heading-->
               
                <!-- Icon Divider-->
                <div class=\"divider-custom divider-light\">
                    <div class=\"divider-custom-line\"></div>
                    <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                    <div class=\"divider-custom-line\"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class=\"masthead-subheading font-weight-light mb-0\">\"One sees clearly only with the heart. What is essential is invisible to the eye.\" </p>
                <br>
                <br>
                <a class= \"btn btn-lg btn-primary\" href=\" ";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo " \">Signup</a>
            </div>  

        



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "common/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
             <!--Header-->
    
            <div class=\" hero \">
                <!-- Masthead Avatar Image-->
                <img class=\"avatar\" src=\"../img/logo.svg\" alt=\"...\" />
                
                <!-- Masthead Heading-->
               
                <!-- Icon Divider-->
                <div class=\"divider-custom divider-light\">
                    <div class=\"divider-custom-line\"></div>
                    <div class=\"divider-custom-icon\"><i class=\"fas fa-star\"></i></div>
                    <div class=\"divider-custom-line\"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class=\"masthead-subheading font-weight-light mb-0\">\"One sees clearly only with the heart. What is essential is invisible to the eye.\" </p>
                <br>
                <br>
                <a class= \"btn btn-lg btn-primary\" href=\" {{path('app_register') }} \">Signup</a>
            </div>  

        



", "common/_header.html.twig", "/Users/test/Documents/project final/tarafoto-1/templates/common/_header.html.twig");
    }
}
