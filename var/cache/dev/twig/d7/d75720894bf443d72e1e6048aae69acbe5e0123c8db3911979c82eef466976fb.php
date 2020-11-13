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

/* question/showHouse.html.twig */
class __TwigTemplate_faf1884bef704792e787bc9cd6c9f77dd47011259054db346304592839370e09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/showHouse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/showHouse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style type=\"text/css\">
\t\t.img-overlay-wrap {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block; /* <= shrinks container to image size */
\t\t\ttransition: transform 150ms ease-in-out;
\t\t\twidth:100%;
\t\t\theight:100%;
\t\t}

\t\t.img-overlay-wrap img { /* <= optional, for responsiveness */
\t\t\tdisplay: block;
\t\t\twidth:100%;
\t\t\theight:auto;
\t\t\tposition:relative;
\t\t}

\t\t.img-overlay-wrap svg {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t    height: auto;
\t\t}
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "    <center>
        <section>
            <div class=\"img-overlay-wrap\">
                <img src=\"img/frontSide.jpg\" alt=\"\" id=\"img\">
            </div>
        </section>
    </center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "
    ";
        // line 42
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script> 
        function show(strId) {
            document.getElementById(strId).style.opacity = \"0.3\";
        }
        function hide(strId) {
            document.getElementById(strId).style.opacity = \"0.00\";
        }
    </script>
    <script src=\"js/storage.js\"></script>
    <script src=\"js/app.js\"></script>
    <script>
        addTheRightPathes('frontSide');
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/showHouse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  120 => 41,  113 => 40,  99 => 31,  92 => 30,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
    <style type=\"text/css\">
\t\t.img-overlay-wrap {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block; /* <= shrinks container to image size */
\t\t\ttransition: transform 150ms ease-in-out;
\t\t\twidth:100%;
\t\t\theight:100%;
\t\t}

\t\t.img-overlay-wrap img { /* <= optional, for responsiveness */
\t\t\tdisplay: block;
\t\t\twidth:100%;
\t\t\theight:auto;
\t\t\tposition:relative;
\t\t}

\t\t.img-overlay-wrap svg {
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t    height: auto;
\t\t}
    </style>
{% endblock stylesheets %}

{% block body %}
    <center>
        <section>
            <div class=\"img-overlay-wrap\">
                <img src=\"img/frontSide.jpg\" alt=\"\" id=\"img\">
            </div>
        </section>
    </center>
{% endblock body %}

{% block javascripts %}

    {{ parent() }}
    <script> 
        function show(strId) {
            document.getElementById(strId).style.opacity = \"0.3\";
        }
        function hide(strId) {
            document.getElementById(strId).style.opacity = \"0.00\";
        }
    </script>
    <script src=\"js/storage.js\"></script>
    <script src=\"js/app.js\"></script>
    <script>
        addTheRightPathes('frontSide');
    </script>

{% endblock javascripts %}", "question/showHouse.html.twig", "/home/bsbos/Desktop/EveryThing/currentWorking/symf-vue/house(test)/templates/question/showHouse.html.twig");
    }
}
