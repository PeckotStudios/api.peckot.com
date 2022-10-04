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

/* admin.widgets.status.info */
class __TwigTemplate_bcc25a9441c87572ca9c4ca0ed4a805a2bd55f1f784e17f3995a13dc5bbca6ad extends \TwigBridge\Twig\Template
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
        echo "<div class=\"card card-info\">
  <div class=\"card-header\">
    <h3 class=\"card-title\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["admin.status.info"]), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"card-body\">
    <table class=\"table table-bordered table-striped\">
      <tbody>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? null));
        foreach ($context['_seq'] as $context["category"] => $context["info"]) {
            // line 9
            echo "          <tr>
            <th colspan=\"2\">";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), [(("admin.status." . $context["category"]) . ".name")]), "html", null, true);
            echo "</th>
          </tr>
          ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["info"]);
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 13
                echo "            <tr>
              <td>";
                // line 14
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), [((("admin.status." . $context["category"]) . ".") . $context["key"])]), "html", null, true);
                echo "</td>
              <td>";
                // line 15
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin.widgets.status.info";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  81 => 18,  72 => 15,  68 => 14,  65 => 13,  61 => 12,  56 => 10,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin.widgets.status.info", "/www/wwwroot/mc.peckot.com/resources/views/admin/widgets/status/info.twig");
    }
}
