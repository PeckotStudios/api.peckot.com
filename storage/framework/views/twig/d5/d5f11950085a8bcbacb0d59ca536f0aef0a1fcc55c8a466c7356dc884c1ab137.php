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

/* /www/wwwroot/mc.peckot.com/resources/views/home.twig */
class __TwigTemplate_712528a425f0ac3c2eee5b963a78753d62949c5007cc641a359bdf00db6c8e19 extends \TwigBridge\Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "\">
  <head>
    ";
        // line 4
        echo twig_include($this->env, $context, "shared.head");
        echo "
    <link rel=\"preload\" as=\"image\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["home_pic_url"] ?? null), "html", null, true);
        echo "\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</title>
    <style>
      .wrapper {
        ";
        // line 9
        if (($context["fixed_bg"] ?? null)) {
            // line 10
            echo "          background-color: rgba(0, 0, 0, 0);
        ";
        } else {
            // line 12
            echo "          background-image: url('";
            echo twig_escape_filter($this->env, ($context["home_pic_url"] ?? null), "html", null, true);
            echo "');
        ";
        }
        // line 14
        echo "      }
    </style>
    ";
        // line 16
        echo twig_include($this->env, $context, "assets.home-css", array(), true, true);
        echo "
  </head>

  <body class=\"hold-transition layout-top-nav\">

    <div id=\"wrapper\">

      ";
        // line 23
        if (($context["fixed_bg"] ?? null)) {
            // line 24
            echo "        <div id=\"fixed-bg\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, ($context["home_pic_url"] ?? null), "html", null, true);
            echo "')\"></div>
      ";
        }
        // line 26
        echo "      
        <!-- subsection close button -->
        <div href=\"\" id=\"btn-exit\">
            <div href=\"#\" class=\"line-1\"></div>
            <div href=\"#\" class=\"line-2\"></div>
        </div>

        <!-- section cutscenst -->
        <div class=\"transition\"></div>

        <!-- header begin -->
        <header class=\"transparent\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"d-flex justify-content-between\">
                            <div class=\"align-self-center header-col-left\">
                                <!-- logo begin -->
                                <div id=\"logo\" style=\"width: 230px;\">
                                    <a href=\"";
        // line 45
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("/");
        echo "\">
                                        <img alt=\"Peckot\" draggable=\"false\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["cdn_base"] ?? null), "html", null, true);
        echo "/img/logo-cc-3.png\" style=\"padding-bottom: 5px; padding-right: 5px; height: 15%; width: 15%\">
                                        <span style=\"color: #e14819;\">P<span style=\"color: #e14819B3;\">eckot</span></span>
                                        <span style=\"color: #e14819;\">MC</span>
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            <div id=\"abc\" class=\"align-self-center ml-auto header-col-mid\">
                                <!-- mainmenu begin -->
                                <ul id=\"mainmenu\" class=\"scrollnav\">
                                
            <div id=\"navlink\" style=\"display:inline;\">
              <li>
                <a class=\"nav-link\" href=\"https://peckot.com\">";
        // line 59
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.mainsite"]), "html", null, true);
        echo "</a>
              </li>
              <li>
                <a class=\"nav-link\" href=\"#section-intro\">";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.intro"]), "html", null, true);
        echo "</a>
              </li>
              <li>
                <a class=\"nav-link\" href=\"#section-screenshot\">";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.screenshot"]), "html", null, true);
        echo "</a>
              </li>
              <li>
                <a class=\"nav-link\" href=\"https://docs.peckot.com\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.docs"]), "html", null, true);
        echo "</a>
              </li>
              <li>
                <a class=\"nav-link\" href=\"";
        // line 71
        echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("skinlib");
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.skinlib"]), "html", null, true);
        echo "</a>
              </li>
            </div>
            
              ";
        // line 75
        echo twig_include($this->env, $context, "shared.languages");
        echo "
              
              ";
        // line 77
        if (call_user_func_array($this->env->getFunction('auth_check')->getCallable(), [])) {
            // line 78
            echo "                ";
            echo twig_include($this->env, $context, "shared.user-menu");
            echo "
              ";
        } else {
            // line 80
            echo "                <li class=\"nav-item\">
                  <a style=\"color:#fff;\" class=\"nav-link\" href=\"";
            // line 81
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("auth/login");
            echo "\">
                    <i class=\"icon fas fa-sign-in-alt\"></i>
                    ";
            // line 83
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.login"]), "html", null, true);
            echo "
                  </a>
                </li>
              ";
        }
        // line 87
        echo "                                </ul>
                                <!-- mainmenu close -->
                            </div>
                            <div class=\"align-self-center ml-auto header-col-right\">
                                <div class=\"social-icons sc-plain\">
                                    <a href=\"https://github.com/Pectics/peckot-websites\" title=\"查看仓库\"><i class=\"fa fa-git fa-lg\"></i></a>
                                </div>
                                <span id=\"menu-btn\"></span>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        
        <!-- content begin -->
        <div class=\"no-bottom no-top\" id=\"content\">
            <div id=\"top\"></div>

            <!--首页-->
            <section id=\"section-main\" class=\"vertical-center text-light\" data-bgimage=\"\">
                <!--侧边栏电话号码-->
                <!-- <div id=\"v-wrap\">
                    <div class=\"vw-inner\">
                        <div class=\"vw-col\"><i class=\"fa fa-mobile id-color\"></i>+0 1145141919810</div>
                    </div>
                </div> -->
                <div id=\"particles-js\"></div>
                <div class=\"container\">
                    <div class=\"row wow fadeIn\" data-wow-delay=\".3s\">
                        <div class=\"col-lg-10 offset-lg-1 text-center\">
                          <h1 class=\"splash-head\">";
        // line 120
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</h1>
                            <p class=\"splash-subhead\">
                              ";
        // line 122
        echo twig_escape_filter($this->env, ($context["site_description"] ?? null), "html", null, true);
        echo "
                            </p>
                        <div>
                        
            ";
        // line 126
        if (call_user_func_array($this->env->getFunction('auth_check')->getCallable(), [])) {
            // line 127
            echo "<!--                            <a href=\"javascript:\$('#dl-c').modal();\" class=\"btninfo mgtop\" title=\"点击查看\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-center"]), "html", null, true);
            echo "</a>&nbsp;&nbsp; --!>
                            <a href=\"https://mc.peckot.com/user\" class=\"btninfo mgtop\" title=\"点击跳转\">";
            // line 128
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.user-center"]), "html", null, true);
            echo "</a>&nbsp;&nbsp;
                            <a href=\"https://mc.peckot.com\" class=\"btndl mgtop\" title=\"点击跳转\">";
            // line 129
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.mainsite"]), "html", null, true);
            echo "</a>&nbsp;&nbsp;
                            <a href=\"https://docs.peckot.com\" class=\"main-button mgtop\" title=\"点击跳转\">";
            // line 130
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.read-docs"]), "html", null, true);
            echo "</a>&nbsp;&nbsp;
            ";
        } else {
            // line 132
            echo "              <a href=\"";
            echo $this->extensions['TwigBridge\Extension\Laravel\Url']->url("auth/register");
            echo "\" class=\"main-button mgtop\">
                ";
            // line 133
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('trans')->getCallable(), ["general.register"]), "html", null, true);
            echo "
              </a>
            ";
        }
        // line 136
        echo "                        </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 团队简介 -->
            <section id=\"section-intro\" class=\"vertical-center dark text-light\">
                <div class=\"container\">
                    <div class=\"row wow fadeInDown\">
                        <div class=\"col-lg-12 text-center\">
                            <h2 class=\"title\">团队<span class=\"id-color\">简介</span></h2>
                        </div>
                    </div>

                    <div class=\"row wow fadeInUp\">
                        <div class=\"fb-text\">
                            <p>
                                <strong>Peckot Studios</strong> 诞生于 2021 年 6 月 27 日，早期主营 Minecraft 游戏服务器以及 Paper/Spigot/Bukkit 插件编写等项目。自成立以来，我们一直致力于 Minecraft 游戏服务器的开发和维护，
                                但单一化的项目满足不了我们的需求，因此我们开始了其他业务的经营，包括网站开发、Minecraft 插件/服务器开发、独立游戏开发、软件开发等。
                            </p>
                        </div>
                        <!-- Pectics -->
                        <div class=\"col-lg-4 col-md-4 col-sm-4\">
                            <div class=\"f-profile text-center\">
                                <div class=\"fp-wrap f-invert\">
                                    <div class=\"fpw-overlay\">
                                        <div class=\"fpwo-wrap\"></div>
                                    </div>
                                    <div class=\"fpw-overlay-btm\"></div>
                                    <img src=\"https://q1.qlogo.cn/g?b=qq&nk=2671876934&s=640\" class=\"fp-image img-fluid img-rounded\" style=\"width:55%\" alt=\"\">
                                </div>
                                <h4>Pectics</h4>
                                Peckot Studios 主创
                                <div class=\"fpwow-icons\">
                                    <a href=\"http://wpa.qq.com/msgrd?v=3&uin=2671876934&site=qq&menu=yes\" target=\"_blank\"><i class=\"fa fa-qq fa-lg\"></i></a>
                                    <a href=\"mailto:pectics@outlook.com\"><i class=\"fa fa-envelope-o fa-lg\"></i></a>
                                </div>
                            </div>
                        </div>
                      </div>
            </section>

            
            <!-- 项目截图 -->
            <section id=\"section-screenshot\" class=\"vertical-center dark text-light\">
                <div class=\"container\">
                    <!-- portfolio filter begin -->
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center wow fadeInDown\">
                            <h2 class=\"title\"><span class=\"id-color\">项目</span>截图</h2>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"zoom-gallery row sequence\">
                                <!-- gallery item -->
                                <div class=\"col-md-4 mb30 gallery-item\">
                                    <div class=\"pf_item wow\">
                                        <div class=\"picframe\">
                                            <a href=\"https://store-g1.seewo.com/068d68e6d60a498495a5b1a71021b386161846227567711\" title=\"\">
                                                <span class=\"overlay\">
                                                    <span class=\"pf_text\">
                                                        <span class=\"project-name\">项目名称</span>
                                                    </span>
                                                </span>
                                                <img src=\"img/006MpbfMgy1gt9g9sanxoj31hc0s9qv5.jpg\" alt=\"\" class=\"img-fluid\">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- close gallery item -->
                            </div>
                        </div>
                        <!-- portfolio filter close -->
                    </div>
                </div>
            </section>

            <!-- 更新日志 -->
            <section id=\"section-update\" class=\"vertical-center dark text-light\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center wow fadeInDown\">
                            <h2 class=\"title\">更新<span class=\"id-color\">日志</span></h2>
                        </div>
                    </div>

                    <div class=\"row wow fadeInUp\">
                        <div class=\"fb-text\">
                            <h4>2022年6月7日</h4>
                            <p>
                                [+] 官网源码更新
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 关于我们 -->
            <section id=\"section-aboutus\" class=\"vertical-center dark text-light\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center wow fadeInDown\">
                            <h2 class=\"title\">关于<span class=\"id-color\">我们</span></h2>
                        </div>
                    </div>
                    <!--<div class=\"spacer-double\"></div>-->
                    <div class=\"row wow fadeInUp\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"fb-text\">
                                <p>
                                    待编辑……
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 版权信息 -->
            <div id=\"copyright\" class=\"with-intro\" style=\"background: 0% 0% / cover rgb(0 0 0 / 0%);padding: 15px;color: rgb(255, 255, 255);position: absolute;bottom: 0;width: 100%;\">
                <div class=\"container\" style=\"background-size: cover;\">
                    Modified by <a href=\"https://pectics.peckot.com\" target=\"_blank\">Pectics</a> on <a href=\"https://www.lazy.ink\" target=\"_blank\">Lazy</a> | 
                    <a href=\"https://beian.miit.gov.cn\" target=\"_blank\">渝ICP备2022006862号</a><br>
                    <strong>Copyright © 2021-";
        // line 259
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 259), "Y", "Asia/Shanghai"), "html", null, true);
        echo " <a href=\"https://peckot.com\">Peckot Studios</a>.</strong> All rights reserved. | 
                    <strong>Powered with ❤ by <a href=\"https://github.com/bs-community/blessing-skin-server\">Blessing Skin Server</a>.</strong>
                </div>
            </div>
            <!-- content close -->

            <!--Download Client Modal-->
            <div id=\"dl-c\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
                <div class=\"modal-dialog modal-dialog-centered\" style=\"color: #232323;\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Peckot 子项目</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">x</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <button type=\"button\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"window.open('https\\://mc.peckot.com')\">PeckotMC Minecraft 服务器</button>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-secondary\" data-dismiss=\"modal\">返回</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    <script type=\"application/json\" id=\"blessing-extra\">
      ";
        // line 289
        echo json_encode(["transparent_navbar" => ($context["transparent_navbar"] ?? null)]);
        echo "
    </script>
    ";
        // line 291
        echo twig_include($this->env, $context, "assets.home", array(), true, true);
        echo "
    ";
        // line 292
        echo twig_include($this->env, $context, "shared.foot");
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/www/wwwroot/mc.peckot.com/resources/views/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 292,  436 => 291,  431 => 289,  398 => 259,  273 => 136,  267 => 133,  262 => 132,  257 => 130,  253 => 129,  249 => 128,  244 => 127,  242 => 126,  235 => 122,  230 => 120,  195 => 87,  188 => 83,  183 => 81,  180 => 80,  174 => 78,  172 => 77,  167 => 75,  158 => 71,  152 => 68,  146 => 65,  140 => 62,  134 => 59,  118 => 46,  114 => 45,  93 => 26,  87 => 24,  85 => 23,  75 => 16,  71 => 14,  65 => 12,  61 => 10,  59 => 9,  53 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/www/wwwroot/mc.peckot.com/resources/views/home.twig", "/www/wwwroot/mc.peckot.com/resources/views/home.twig");
    }
}
