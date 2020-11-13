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

/* secondary/header.html.twig */
class __TwigTemplate_9dc0e86d6aec2407f5cee81f602e479aede1368a6acbb7cd0e106fa01c2998bb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secondary/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light shadow fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"/\">Rural House</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"/\">Home
                  <span class=\"sr-only\">(current)</span>
                </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/about\">About</a> <!-- put in about the photo of your laptop there-->
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/\">Go To Map</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "secondary/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light shadow fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"/\">Rural House</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"/\">Home
                  <span class=\"sr-only\">(current)</span>
                </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/about\">About</a> <!-- put in about the photo of your laptop there-->
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/\">Go To Map</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>", "secondary/header.html.twig", "/home/bsbos/Desktop/EveryThing/currentWorking/symf-vue/house(test)/templates/secondary/header.html.twig");
    }
}
