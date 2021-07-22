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

/* post/show.html.twig */
class __TwigTemplate_a4d4277a47efdf624afb3b3005947ea931cdfe7fcd39bd8e49aafa5276b1c63b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProductController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "\t<div class=\"alert alert-success\">
\t\t";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<div class=\" hero \">
\t<h1>Lise des produits</h1>
\t<p>
\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo "\">Ajouter un produit</a>
\t</p>

\t<div class=\" hero \">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>photo</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 30
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "descripstion", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "price", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "images", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t
\t\t\t\t\t    <a class=\"btn-primary\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">delete</a>
                        \t\t\t\t\t    <a class=\"btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">update</a>

\t\t\t\t    </td>
                    

\t\t\t\t</tbody>
\t\t\t\t
\t\t\t</tbody>
\t\t</div>

\t</table>
</div>




    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 37,  155 => 36,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  133 => 30,  129 => 29,  113 => 16,  108 => 13,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProductController!{% endblock %}

{% block body %}

{% for message in app.flashes('success') %}
\t<div class=\"alert alert-success\">
\t\t{{ message }}
\t</div>

{% endfor %}
<div class=\" hero \">
\t<h1>Lise des produits</h1>
\t<p>
\t\t<a href=\"{{ path('create') }}\">Ajouter un produit</a>
\t</p>

\t<div class=\" hero \">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Title</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th>photo</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for post in posts %}
\t\t\t\t\t<td>{{ post.id }}</td>
\t\t\t\t\t<td>{{ post.title }}</td>
\t\t\t\t\t<td>{{ post.descripstion }}</td>
\t\t\t\t\t<td>{{ post.price }}</td>
\t\t\t\t\t<td>{{ post.images }}</td>
\t\t\t\t\t
\t\t\t\t\t    <a class=\"btn-primary\" href=\"{{ path('delete', {'id': post.id}) }}\">delete</a>
                        \t\t\t\t\t    <a class=\"btn-primary\" href=\"{{ path('delete', {'id': post.id}) }}\">update</a>

\t\t\t\t    </td>
                    

\t\t\t\t</tbody>
\t\t\t\t
\t\t\t</tbody>
\t\t</div>

\t</table>
</div>




    
{% endfor %}
{% endblock %}
", "post/show.html.twig", "/Users/test/Documents/project final/tarafoto-1/templates/post/show.html.twig");
    }
}
