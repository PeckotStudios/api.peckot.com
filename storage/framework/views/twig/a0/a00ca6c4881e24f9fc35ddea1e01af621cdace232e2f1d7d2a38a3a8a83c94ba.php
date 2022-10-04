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

/* assets.home-css */
class __TwigTemplate_f98dbf9d45f4d9d4e20c5ebef87c0e68ff5ae686d8da1e5204ab0c7a1547d1dd extends \TwigBridge\Twig\Template
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
        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/app/home-css.bef20ec.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">

<!-- customize part -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://cdn.bootcdn.net/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://cdn.bootcdn.net/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"https://cdn.bootcdn.net/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/jpreloader.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/animate.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/animation.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/nEwinDex.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/home.css\" rel=\"stylesheet\" type=\"text/css\">

<!-- color scheme -->
<link id=\"colors\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/scheme-01.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/coloring.css\" rel=\"stylesheet\" type=\"text/css\">

<!--Google Fonts-->
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/fontsload.css\" rel=\"stylesheet\" type=\"text/css\">";
    }

    public function getTemplateName()
    {
        return "assets.home-css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  75 => 17,  71 => 16,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "assets.home-css", "/www/wwwroot/mc.peckot.com/resources/views/assets/home-css.twig");
    }
}
