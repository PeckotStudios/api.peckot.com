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

/* shared.dark-mode */
class __TwigTemplate_7cc3c46b1ba68e79a9e426312154c8a4803328eef8956fb1017c577908dbbbd4 extends \TwigBridge\Twig\Template
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
        if (call_user_func_array($this->env->getFunction('auth_check')->getCallable(), [])) {
            // line 2
            echo "  <li class=\"nav-item\" id=\"toggle-dark-mode\">
    <a class=\"nav-link\" href=\"#\" role=\"button\">
      <i class=\"fas fa-";
            // line 4
            echo ((($context["dark_mode"] ?? null)) ? ("moon") : ("sun"));
            echo "\"></i>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "shared.dark-mode";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared.dark-mode", "/www/wwwroot/mc.peckot.com/resources/views/shared/dark-mode.twig");
    }
}
