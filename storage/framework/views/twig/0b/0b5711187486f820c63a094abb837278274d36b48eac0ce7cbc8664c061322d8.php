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

/* auth.rows.login.registration-link */
class __TwigTemplate_d944aee1e379272d1dae91d04d36f9ac8ef9409b20a84b808814e5d0a0742860 extends \TwigBridge\Twig\Template
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
        echo "<div class=\"mt-3\">
  <a href=\"";
        // line 2
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("auth/register");
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["auth.register-link"]), "html", null, true);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "auth.rows.login.registration-link";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth.rows.login.registration-link", "/www/wwwroot/mc.peckot.com/resources/views/auth/rows/login/registration-link.twig");
    }
}
