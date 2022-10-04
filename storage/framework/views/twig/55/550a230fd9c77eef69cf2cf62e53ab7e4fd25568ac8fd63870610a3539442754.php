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

/* /www/wwwroot/mc.peckot.com/resources/views/auth/forgot.twig */
class __TwigTemplate_417a8deaabbfd946feb012b669942463d07de4a62a36319ff40158f56ec1d12a extends \TwigBridge\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'before_foot' => [$this, 'block_before_foot'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "auth.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("auth.base", "/www/wwwroot/mc.peckot.com/resources/views/auth/forgot.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["auth.forgot.title"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["auth.forgot.message"]), "html", null, true);
        echo "</p>
  ";
        // line 7
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), ["msg"])) {
            // line 8
            echo "    <div class=\"alert alert-warning\">
      ";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), ["msg"]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 12
        echo "  <main></main>
";
    }

    // line 15
    public function block_before_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  <script id=\"blessing-extra\" type=\"application/json\">
    ";
        // line 17
        echo json_encode(($context["extra"] ?? null));
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/auth/forgot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  84 => 16,  80 => 15,  75 => 12,  69 => 9,  66 => 8,  64 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/auth/forgot.twig", "/www/wwwroot/mc.peckot.com/resources/views/auth/forgot.twig");
    }
}
