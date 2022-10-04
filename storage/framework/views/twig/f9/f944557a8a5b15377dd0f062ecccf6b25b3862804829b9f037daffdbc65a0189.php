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

/* admin.widgets.dashboard.chart */
class __TwigTemplate_3544f2dc26c6b4a0a3d83a39128ae63cb875a712df04c36792d44208939b20fc extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card card-primary\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.index.overview"]), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"card-body\">
    <div class=\"chart\" id=\"chart-users-registration\"></div>
    <div class=\"chart\" id=\"chart-textures-upload\"></div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.widgets.dashboard.chart";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.widgets.dashboard.chart", "/www/wwwroot/mc.peckot.com/resources/views/admin/widgets/dashboard/chart.twig");
    }
}
