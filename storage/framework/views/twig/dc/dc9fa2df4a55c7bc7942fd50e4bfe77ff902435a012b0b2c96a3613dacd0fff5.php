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

/* GPlane\ShareRegistrationLink::generate */
class __TwigTemplate_5eb321c006158b2e9beacf8c65fd97a96818668290b9f106d91a2206fcd1c09d extends \TwigBridge\Twig\Template
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
        echo "<div id=\"registration-links\"></div>
";
    }

    public function getTemplateName()
    {
        return "GPlane\\ShareRegistrationLink::generate";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "GPlane\\ShareRegistrationLink::generate", "/www/wwwroot/mc.peckot.com/plugins/share-registration-link/views/generate.twig");
    }
}
