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

/* question/second.html.twig */
class __TwigTemplate_8a6876d4a8571d34c46e7409002276ba57496365e26c1cfaa8b88ffdef4858c4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/second.html.twig"));

        // line 1
        echo "<h1> ";
        echo (((isset($context["var2"]) || array_key_exists("var2", $context) ? $context["var2"] : (function () { throw new RuntimeError('Variable "var2" does not exist.', 1, $this->source); })())) ? ("yes") : ("no"));
        echo " </h1>

<div>
    fkljdlakj 
</div>

<h1> ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["var1"]) || array_key_exists("var1", $context) ? $context["var1"] : (function () { throw new RuntimeError('Variable "var1" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " </h1>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "question/second.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> {{ var2 ? 'yes' : 'no' }} </h1>

<div>
    fkljdlakj 
</div>

<h1> {{ var1 }} </h1>", "question/second.html.twig", "/home/bsbos/Desktop/EveryThing/currentWorking/symf-vue/my_project_name/templates/question/second.html.twig");
    }
}
