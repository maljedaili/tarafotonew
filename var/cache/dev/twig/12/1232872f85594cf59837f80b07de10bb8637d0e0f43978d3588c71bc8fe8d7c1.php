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

/* common/_navbar.html.twig */
class __TwigTemplate_1677a0d115ab346194fa0509dd907acf05adee770a4ba4fbdcd8cca10b7ba299 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/_navbar.html.twig"));

        // line 1
        echo "
<header>
\t<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">tarafoto</a>
\t\t\t<button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\tMenu
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Signin</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#about\">About</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show");
        echo "\">Gallery</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#contact\">Contact</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">logout</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>





   
  
\t
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "common/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  80 => 27,  77 => 26,  75 => 25,  66 => 19,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<header>
\t<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"/\">tarafoto</a>
\t\t\t<button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\tMenu
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
\t\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"{{ path('app_login') }}\">Signin</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#about\">About</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"{{ path('show') }}\">Gallery</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"#contact\">Contact</a>
\t\t\t\t\t</li>

\t\t\t\t\t{% if app.user %}
\t\t\t\t\t<li class=\"nav-item mx-0 mx-lg-1\">
\t\t\t\t\t\t<a class=\"nav-link py-3 px-0 px-lg-3 rounded\" href=\"{{ path('app_logout') }}\">logout</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>





   
  
\t
", "common/_navbar.html.twig", "/Users/test/Documents/project final/tarafoto-1/templates/common/_navbar.html.twig");
    }
}
