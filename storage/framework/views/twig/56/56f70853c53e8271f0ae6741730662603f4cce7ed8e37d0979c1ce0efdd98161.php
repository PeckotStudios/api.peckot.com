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

/* /www/wwwroot/mc.peckot.com/resources/views/user/profile.twig */
class __TwigTemplate_114e1e88c2f3a1323436ad62b732310b8e55a7e647bbf9f768096fb0e29b0351 extends \TwigBridge\Twig\Template
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
        return "user.base";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("user.base", "/www/wwwroot/mc.peckot.com/resources/views/user/profile.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.profile"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        echo twig_include($this->env, $context, "shared.grid");
        echo "

  <form id=\"modal-delete-account\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content bg-danger\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            ";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.modal-title"]), "html", null, true);
        echo "
          </h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div>";
        // line 20
        echo nl2br(twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.modal-notice"]), "html", null, true));
        echo "</div>
          <br>
          <input type=\"password\" class=\"form-control\" required name=\"password\"
            placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["user.profile.delete.password"]), "html", null, true);
        echo "\" autocomplete=\"current-password\">
        </div>
        <div class=\"modal-footer d-flex justify-content-between\">
          <button type=\"button\" class=\"btn btn-outline-light\" data-dismiss=\"modal\">
            ";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.close"]), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-outline-light\">
            ";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.submit"]), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>
  </form>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/user/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  92 => 27,  85 => 23,  79 => 20,  69 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/user/profile.twig", "/www/wwwroot/mc.peckot.com/resources/views/user/profile.twig");
    }
}
