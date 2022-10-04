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

/* /www/wwwroot/mc.peckot.com/resources/views/auth/verify.twig */
class __TwigTemplate_6b03d99c50fdb2c14966713c38c8a9e75160fddd73841655ff42f63b6ea19dd3 extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("auth.base", "/www/wwwroot/mc.peckot.com/resources/views/auth/verify.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["auth.verify.title"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <p class=\"login-box-msg\">
    ";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["auth.bind.message"]), "html", null, true);
        echo "
  </p>
  <form method=\"post\">
    ";
        // line 10
        echo csrf_field();
        echo "
    <div class=\"input-group mb-3\">
      <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["auth.email"]), "html", null, true);
        echo " required>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"fas fa-envelope\"></i>
        </div>
      </div>
    </div>
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "any", [], "any", false, false, false, 19)) {
            // line 20
            echo "      <div class=\"alert alert-danger\">
        <i class=\"icon fas fa-exclamation-triangle\"></i>
        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", [], "any", false, false, false, 22), "html", null, true);
            echo "
      </div>
    ";
        } elseif (call_user_func_array($this->env->getFunction('session_has')->getCallable(), ["errorMessage"])) {
            // line 25
            echo "      <div class=\"alert alert-danger\">
        <i class=\"icon fas fa-exclamation-triangle\"></i>
        ";
            // line 27
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), ["errorMessage"]), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 30
        echo "    <button type=\"submit\" class=\"btn btn-primary btn-block\">
      ";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.submit"]), "html", null, true);
        echo "
    </button>
  </form>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/auth/verify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  104 => 30,  98 => 27,  94 => 25,  88 => 22,  84 => 20,  82 => 19,  72 => 12,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/auth/verify.twig", "/www/wwwroot/mc.peckot.com/resources/views/auth/verify.twig");
    }
}
