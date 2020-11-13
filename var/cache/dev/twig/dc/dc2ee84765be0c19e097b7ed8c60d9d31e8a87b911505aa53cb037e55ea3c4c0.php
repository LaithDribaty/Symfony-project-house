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

/* secondary/about.html.twig */
class __TwigTemplate_dfc6332d92214e522d7612f37ef4d1d94729dc70d3509b544856193f6c82d0ac extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secondary/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "secondary/about.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body{
            background-image: url('img/about.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #cont{
            color: white;
            background-color: rgba(0 , 0 , 0 , 0.65);
        }

        #SmallCont{
            border: solid 2px black;
            border-radius: 8%;
            padding: 9px;
            background-color: rgba(0 , 0 , 0 , 0.80);
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    <div id=\"cont\">

        <br><br><br>
        <center>
            <div id=\"SmallCont\">

                <strong style=\"color:tan\">developer:</strong> laith drebaty,web developer <br>
                <strong style=\"color:tan\">explain: </strong>this is just a demo to show our house in <strong style=\"color:tomato\"> syria lattakia zoobar </strong>
                , the website shows some stuff from the house, you may also traverse through the house
                by clicking some doors or areas <br>
                <strong style=\"color:tan\"> some features are not responsive </strong> <br>
                <strong style=\"color:tan\">Contact:</strong> <a href=\"mailTo:laith.drebaty@gmail.com\" style=\"color:tomato\"> laith.drebaty@gmail.com </a>  <br>

            </div>
        </center>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script>
        var div = document.getElementById('cont');
        div.style.height = window.innerHeight + \"px\";

        var smallCont = document.getElementById('SmallCont');
        smallCont.style.height = (window.innerHeight/3) + \"px\";
        smallCont.style.width = (window.innerWidth/3.7) + \"px\";

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "secondary/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  122 => 47,  96 => 26,  89 => 25,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body{
            background-image: url('img/about.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        #cont{
            color: white;
            background-color: rgba(0 , 0 , 0 , 0.65);
        }

        #SmallCont{
            border: solid 2px black;
            border-radius: 8%;
            padding: 9px;
            background-color: rgba(0 , 0 , 0 , 0.80);
        }
    </style>
{% endblock stylesheets %}

{% block body %}

    <div id=\"cont\">

        <br><br><br>
        <center>
            <div id=\"SmallCont\">

                <strong style=\"color:tan\">developer:</strong> laith drebaty,web developer <br>
                <strong style=\"color:tan\">explain: </strong>this is just a demo to show our house in <strong style=\"color:tomato\"> syria lattakia zoobar </strong>
                , the website shows some stuff from the house, you may also traverse through the house
                by clicking some doors or areas <br>
                <strong style=\"color:tan\"> some features are not responsive </strong> <br>
                <strong style=\"color:tan\">Contact:</strong> <a href=\"mailTo:laith.drebaty@gmail.com\" style=\"color:tomato\"> laith.drebaty@gmail.com </a>  <br>

            </div>
        </center>

    </div>

{% endblock body %}

{% block javascripts %}
    <script>
        var div = document.getElementById('cont');
        div.style.height = window.innerHeight + \"px\";

        var smallCont = document.getElementById('SmallCont');
        smallCont.style.height = (window.innerHeight/3) + \"px\";
        smallCont.style.width = (window.innerWidth/3.7) + \"px\";

    </script>
{% endblock javascripts %}", "secondary/about.html.twig", "/home/bsbos/Desktop/EveryThing/currentWorking/symf-vue/house(test)/templates/secondary/about.html.twig");
    }
}
