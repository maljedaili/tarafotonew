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

<head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>TaraFoto</title>
        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"styles/app.css\" rel=\"stylesheet\" />
       

        
    </head>

    <nav id=\"nav\">
        
         <ul>
\t\t\t<li class=\"current\"><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Home</a></li>
\t\t\t<li><a href=\"products.php\">Gallery</a></li>
                        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                         <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Sign Out</a>
                        
                        ";
        } else {
            // line 32
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Sign in</a>
                         ";
        }
        // line 34
        echo "
                        <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">SignUp</a>
                        
                   
            
\t\t</ul>
        </nav>
       
        

\t</div>

   
  
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
        return array (  93 => 35,  90 => 34,  84 => 32,  77 => 29,  75 => 28,  70 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>TaraFoto</title>
        <!-- Favicon-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/favicon.ico\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.15.3/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"styles/app.css\" rel=\"stylesheet\" />
       

        
    </head>

    <nav id=\"nav\">
        
         <ul>
\t\t\t<li class=\"current\"><a href=\"{{ path(\"main\")}}\">Home</a></li>
\t\t\t<li><a href=\"products.php\">Gallery</a></li>
                        {% if app.user %}
                         <a class=\"nav-link\" href=\"{{ path(\"app_logout\")}}\">Sign Out</a>
                        
                        {% else %}
                        <a class=\"nav-link\" href=\"{{ path(\"app_login\")}}\">Sign in</a>
                         {% endif %}

                        <a class=\"nav-link\" href=\"{{ path(\"app_register\")}}\">SignUp</a>
                        
                   
            
\t\t</ul>
        </nav>
       
        

\t</div>

   
  
\t
", "common/_navbar.html.twig", "/Applications/Ampps/www/tarafoto/templates/common/_navbar.html.twig");
    }
}
