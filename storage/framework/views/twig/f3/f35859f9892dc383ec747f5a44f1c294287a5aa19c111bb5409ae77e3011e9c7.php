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

/* assets.home */
class __TwigTemplate_bb262092539f97fef68fc738254e08fe79a77e26c016da76ad4c523445b7d1fd extends \TwigBridge\Twig\Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/app/home.a41d59d.js\" crossorigin=\"anonymous\"></script>

<!-- customize part -->

<!--Google Fonts-->
<script src=\"https://cdn.bootcss.com/popper.js/1.14.7/umd/popper.min.js\"></script>

<!-- Javascript Files -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.6/enquire.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/jpreLoader.min.js\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/jquery.plugin.js\"></script>
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/app.js\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/customize/designesia.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "assets.home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  67 => 21,  63 => 20,  59 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "assets.home", "/www/wwwroot/mc.peckot.com/resources/views/assets/home.twig");
    }
}
