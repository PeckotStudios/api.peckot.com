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

/* /www/wwwroot/mc.peckot.com/resources/views/user/report.twig */
class __TwigTemplate_da301415c06712a5806c056c495070850cdf7eced1bd9a1947b515d08cd00f44 extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("user.base", "/www/wwwroot/mc.peckot.com/resources/views/user/report.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.my-reports"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <div class=\"card\">
    <div class=\"card-body p-0\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["front-end.report.tid"]), "html", null, true);
        echo "</th>
            <th>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["front-end.report.reason"]), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["front-end.report.status-title"]), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["front-end.report.time"]), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 19
            echo "            <tr>
              <td>
                ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "tid", [], "any", false, false, false, 21), "html", null, true);
            echo "&nbsp;
                <a href=\"";
            // line 22
            echo call_user_func_array($this->env->getFunction('route')->getCallable(), ["skinlib.show", ["texture" => twig_get_attribute($this->env, $this->source, $context["report"], "tid", [], "any", false, false, false, 22)], false]);
            echo "\" target=\"_blank\">
                  <i class=\"fas fa-share\"></i>
                </a>
              </td>
              <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "reason", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = call_user_func_array($this->env->getFunction('trans')->getCallable(), ["front-end.report.status"])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["report"], "status", [], "any", false, false, false, 27)] ?? null) : null), "html", null, true);
            echo "</td>
              <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "report_at", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
      </table>
    </div>
    <div class=\"card-footer\">
      <div class=\"float-right\">
        ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["reports"] ?? null), "links", [], "method", false, false, false, 36);
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/user/report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  120 => 31,  111 => 28,  107 => 27,  103 => 26,  96 => 22,  92 => 21,  88 => 19,  84 => 18,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/user/report.twig", "/www/wwwroot/mc.peckot.com/resources/views/user/report.twig");
    }
}
