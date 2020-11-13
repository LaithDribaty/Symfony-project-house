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

/* secondary/showHouse.html.twig */
class __TwigTemplate_525ae0f09cb4710f0659d95900799ea510f178af74b23e59b14b4c807d36d39f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secondary/showHouse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "secondary/showHouse.html.twig", 1);
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
        echo "    <center >
        <section>
            <div style=\"border: solid 3px rgb(37, 113, 156);\" class=\"img-overlay-wrap\" id=\"img-overlay-wrap\">
                <!--<img src=\"img/frontSide.jpg\" alt=\"\" id=\"img\">-->
                <img src=\"img/firstOutSide.jpg\" alt=\"\" id=\"img\">
            </div>
        </section>
    </center>

    <section id=\"secion_dialogs\">
        
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "
    ";
        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        var windowHeight = window.innerHeight; // taking the width and height of the device
        var windowWidth = window.innerWidth; 
        function show(strId) {
            document.getElementById(strId).style.opacity = \"0.3\";
        }

        function hide(strId) {
            document.getElementById(strId).style.opacity = \"0.00\";
        }

        function showIcon(strId , iconName) {
            \$(document.getElementById(strId)).css({'cursor' : 'url(/img/icons/'+iconName+'.png) , default'});
        }
        
        function hideIcon(strId , iconName) {
            document.getElementById(strId).cursor = \"default\";
        }

        function updateWrap(callback) {
            var img = document.getElementById('img');
            var imgWrap = document.getElementById('img-overlay-wrap');
            if(windowWidth > windowHeight) {
                var newH = windowHeight;
                var oldH = img.height; // this is causing problems with time of uploading the img
                //setTimeout(function() {                    
                    imgWrap.style.height = newH + \"px\";
                    imgWrap.style.width = ( img.width * (newH / oldH) ) + \"px\";
                //}, 200);
            } else {
                var newW = windowWidth;
                var oldW = img.width; // this is causing problems with time of uploading the img
                //setTimeout(function() {
                    imgWrap.style.width = newW + \"px\";
                    imgWrap.style.height = ( img.height * (newW / oldW) ) + \"px\";
                //}, 200);
            }
            imgWrap.style.textAlign = \"center\";
            callback(); // to run in sequese with some other functions
        }

        var currentPosition = \"firstOutSide\"; // to know where is my location
    </script>

    <script src=\"js/storage.js\"></script>
    <script src=\"js/dialog.js\"></script>
    <script src=\"js/pathes.js\"></script>

    <script>
        // to run in sequese , i passed the function as callback , since we can pass functions as parameters
        updateWrap(
            function(){
                addTheRightPathes(
                    addRightDialog
                );
            }
        );
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "secondary/showHouse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 47,  125 => 46,  118 => 45,  99 => 31,  92 => 30,  61 => 4,  54 => 3,  37 => 1,);
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
    <center >
        <section>
            <div style=\"border: solid 3px rgb(37, 113, 156);\" class=\"img-overlay-wrap\" id=\"img-overlay-wrap\">
                <!--<img src=\"img/frontSide.jpg\" alt=\"\" id=\"img\">-->
                <img src=\"img/firstOutSide.jpg\" alt=\"\" id=\"img\">
            </div>
        </section>
    </center>

    <section id=\"secion_dialogs\">
        
    </section>
{% endblock body %}

{% block javascripts %}

    {{ parent() }}
    <script>

        var windowHeight = window.innerHeight; // taking the width and height of the device
        var windowWidth = window.innerWidth; 
        function show(strId) {
            document.getElementById(strId).style.opacity = \"0.3\";
        }

        function hide(strId) {
            document.getElementById(strId).style.opacity = \"0.00\";
        }

        function showIcon(strId , iconName) {
            \$(document.getElementById(strId)).css({'cursor' : 'url(/img/icons/'+iconName+'.png) , default'});
        }
        
        function hideIcon(strId , iconName) {
            document.getElementById(strId).cursor = \"default\";
        }

        function updateWrap(callback) {
            var img = document.getElementById('img');
            var imgWrap = document.getElementById('img-overlay-wrap');
            if(windowWidth > windowHeight) {
                var newH = windowHeight;
                var oldH = img.height; // this is causing problems with time of uploading the img
                //setTimeout(function() {                    
                    imgWrap.style.height = newH + \"px\";
                    imgWrap.style.width = ( img.width * (newH / oldH) ) + \"px\";
                //}, 200);
            } else {
                var newW = windowWidth;
                var oldW = img.width; // this is causing problems with time of uploading the img
                //setTimeout(function() {
                    imgWrap.style.width = newW + \"px\";
                    imgWrap.style.height = ( img.height * (newW / oldW) ) + \"px\";
                //}, 200);
            }
            imgWrap.style.textAlign = \"center\";
            callback(); // to run in sequese with some other functions
        }

        var currentPosition = \"firstOutSide\"; // to know where is my location
    </script>

    <script src=\"js/storage.js\"></script>
    <script src=\"js/dialog.js\"></script>
    <script src=\"js/pathes.js\"></script>

    <script>
        // to run in sequese , i passed the function as callback , since we can pass functions as parameters
        updateWrap(
            function(){
                addTheRightPathes(
                    addRightDialog
                );
            }
        );
    </script>

{% endblock javascripts %}", "secondary/showHouse.html.twig", "/home/bsbos/Desktop/EveryThing/currentWorking/symf-vue/house(test)/templates/secondary/showHouse.html.twig");
    }
}
