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

/* /www/wwwroot/mc.peckot.com/plugins/config-generator/views/generator.twig */
class __TwigTemplate_28a57f3de1d6a0e85a9f3468d1e9978315ef46c90ddd389840cca67994890a90 extends \TwigBridge\Twig\Template
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
        $this->parent = $this->loadTemplate("user.base", "/www/wwwroot/mc.peckot.com/plugins/config-generator/views/generator.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Blessing\\ConfigGenerator::config.generate-config"]), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  <link rel=\"stylesheet\"
      href=\"//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.16.2/build/styles/atom-one-light.min.css\"
      crossorigin=\"anonymous\">

  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"card card-primary\">
        <div class=\"card-header\">
          <h3 class=\"card-title\">Mod</h3>
        </div>
        <div class=\"card-body\">
          ";
        // line 17
        if (($context["custom_intro"] ?? null)) {
            // line 18
            echo "            ";
            echo ($context["custom_intro"] ?? null);
            echo "
          ";
        } else {
            // line 20
            echo "            <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Blessing\\ConfigGenerator::config.mod-intro"]), "html", null, true);
            echo "</p>
            <ul>
              <li>
                <a href=\"https://www.mcbbs.net/thread-269807-1-1.html\" target=\"_blank\" rel=\"noopener noreferrer\">CustomSkinLoader</a>
              </li>
              ";
            // line 25
            if (($context["has_usm"] ?? null)) {
                // line 26
                echo "                <li>
                  <a href=\"https://www.mcbbs.net/thread-358932-1-1.html\" target=\"_blank\" rel=\"noopener noreferrer\">Universal Skin Mod</a>
                </li>
              ";
            }
            // line 30
            echo "              ";
            if (($context["has_legacy"] ?? null)) {
                // line 31
                echo "                <li>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Blessing\\ConfigGenerator::config.legacy"]), "html", null, true);
                echo "</li>
              ";
            }
            // line 33
            echo "            </ul>
          ";
        }
        // line 35
        echo "        </div>
        <div class=\"card-footer\">
          <a
            href=\"https://github.com/xfl03/MCCustomSkinLoader/releases\"
            target=\"_blank\"
            class=\"btn bg-primary\"
          >
            CustomSkinLoader
          </a>
          ";
        // line 44
        if (($context["has_usm"] ?? null)) {
            // line 45
            echo "            <a
              href=\"https://github.com/RecursiveG/UniSkinMod/releases\"
              target=\"_blank\"
              class=\"btn bg-secondary\"
            >
              UniSkinMod
            </a>
          ";
        }
        // line 53
        echo "        </div>
      </div>
      <div class=\"card card-secondary\">
        <div class=\"card-header\">
          <h3 class=\"card-title\">CustomSkinLoader ExtraList</h3>
        </div>
        <div class=\"card-body\">
          ";
        // line 60
        echo nl2br(call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Blessing\\ConfigGenerator::config.extra-list-intro", ["site" => ($context["site"] ?? null)]]));
        echo "
        </div>
        <div class=\"card-footer\">
          <button class=\"btn bg-primary\" id=\"download-extra-list\">
            ";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["Blessing\\ConfigGenerator::config.extra-list-download"]), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>

    <div class=\"col-lg-6\">
      <div class=\"card card-teal\">
        <div class=\"card-header\">
          <h3 class=\"card-title\">CustomSkinLoader</h3>
        </div>
        <div class=\"card-body\">
          <pre>";
        // line 76
        echo twig_escape_filter($this->env, ($context["csl"] ?? null), "html", null, true);
        echo "</pre>
        </div>
      </div>
      ";
        // line 79
        if (($context["has_usm"] ?? null)) {
            // line 80
            echo "        <div class=\"card card-maroon\">
          <div class=\"card-header\">
            <h3 class=\"card-title\">Universal Skin Mod</h3>
          </div>
          <div class=\"card-body\">
            <pre>";
            // line 85
            echo twig_escape_filter($this->env, ($context["usm"] ?? null), "html", null, true);
            echo "</pre>
          </div>
        </div>
      ";
        }
        // line 89
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/plugins/config-generator/views/generator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 89,  178 => 85,  171 => 80,  169 => 79,  163 => 76,  148 => 64,  141 => 60,  132 => 53,  122 => 45,  120 => 44,  109 => 35,  105 => 33,  99 => 31,  96 => 30,  90 => 26,  88 => 25,  79 => 20,  73 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/plugins/config-generator/views/generator.twig", "/www/wwwroot/mc.peckot.com/plugins/config-generator/views/generator.twig");
    }
}
