<?php

/* @Login/login.twig */
class __TwigTemplate_d6f43eb0a6d03035e789527ba3a4c0424781fe5ef3642224a9deac904a241e0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
    <title>";
        // line 6
        if (($this->getContext($context, "isCustomLogo") == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        echo "</title>

    ";
        // line 8
        $this->env->loadTemplate("@CoreHome/_favicon.twig")->display($context);
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        echo call_user_func_array($this->env->getFunction('includeAssets')->getCallable(), array(array("type" => "css")));
        echo "
    ";
        // line 12
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Login/stylesheets/login.css\"/>
    <meta name=\"description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "\"/>
    <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
    <meta name=\"google-play-app\" content=\"app-id=org.piwik.mobile2\">
    ";
        // line 16
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 17
        echo "    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-placeholder/jquery.placeholder.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"libs/bower_components/html5shiv/dist/html5shiv.min.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", hideOnInstall: false, layer: true, icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
\t</script>
\t</head>
\t<!--[if lt IE 9 ]>
\t<body id=\"loginPage\" class=\"old-ie\"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <body id=\"loginPage\"><!--<![endif]-->
    ";
        // line 36
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeTopBar", "login"));
        echo "
    ";
        // line 37
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "login"));
        echo "

    ";
        // line 39
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 40
        echo "
    <div id=\"notificationContainer\">
    </div>

    <div id=\"logo\">
        ";
        // line 45
        if (($this->getContext($context, "isCustomLogo") == false)) {
            // line 46
            echo "            <a href=\"http://piwik.org\" title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\">
        ";
        }
        // line 48
        echo "        ";
        if ($this->getContext($context, "hasSVGLogo")) {
            // line 49
            echo "            <img src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "logoSVG"), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\" alt=\"Piwik\" class=\"ie-hide\"/>
            <!--[if lt IE 9]>
        ";
        }
        // line 52
        echo "        <img src='";
        echo twig_escape_filter($this->env, $this->getContext($context, "logoLarge"), "html", null, true);
        echo "' title=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
        echo "\" alt=\"Piwik\" />
        ";
        // line 53
        if ($this->getContext($context, "hasSVGLogo")) {
            echo "<![endif]-->";
        }
        // line 54
        echo "
        ";
        // line 55
        if ($this->getContext($context, "isCustomLogo")) {
            // line 56
            echo "            ";
            ob_start();
            // line 57
            echo "            <i><a href=\"http://piwik.org/\" rel=\"noreferrer\"  target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "</a></i>
            ";
            $context["poweredByPiwik"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (($this->getContext($context, "isCustomLogo") == false)) {
            // line 62
            echo "            </a>
            <div class=\"description\">
                <a href=\"http://piwik.org\" title=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "</a>
                <div class=\"arrow\"></div>
            </div>
        ";
        }
        // line 68
        echo "    </div>

    <section class=\"loginSection\">

        ";
        // line 73
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ($this->getContext($context, "isValidHost") == false))) {
            // line 74
            echo "            ";
            $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "            <div id=\"message_container\">

                ";
            // line 78
            echo twig_include($this->env, $context, "@Login/_formErrors.twig", array("formErrors" => $this->getAttribute($this->getContext($context, "form_data"), "errors", array())));
            echo "

                ";
            // line 80
            if ($this->getContext($context, "AccessErrorString")) {
                // line 81
                echo "                    <div class=\"message_error\">
                        <strong>";
                // line 82
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                echo "</strong>: ";
                echo $this->getContext($context, "AccessErrorString");
                echo "<br/>
                    </div>
                ";
            }
            // line 85
            echo "
                ";
            // line 86
            if ($this->getContext($context, "infoMessage")) {
                // line 87
                echo "                    <p class=\"message\">";
                echo $this->getContext($context, "infoMessage");
                echo "</p>
                ";
            }
            // line 89
            echo "            </div>
            <form ";
            // line 90
            echo $this->getAttribute($this->getContext($context, "form_data"), "attributes", array());
            echo ">
                <h1>";
            // line 91
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</h1>
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 95
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "\" autofocus=\"autofocus\"/>
                    <input type=\"password\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\"
                           placeholder=\"";
            // line 98
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getContext($context, "nonce"), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                           ";
            // line 104
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), "form_rememberme", array()), "value", array())) {
                echo "checked=\"checked\" ";
            }
            echo "/>
                    <label for=\"login_form_rememberme\">";
            // line 105
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_RememberMe")), "html", null, true);
            echo "</label>
                    <input class=\"submit\" id='login_form_submit' type=\"submit\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\"
                           tabindex=\"100\"/>
                </fieldset>
            </form>
            <form id=\"reset_form\" style=\"display:none;\">
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 114
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LoginOrEmail")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getContext($context, "nonce"), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\" autocomplete=\"off\"
                           placeholder=\"";
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                           size=\"20\" tabindex=\"30\" autocomplete=\"off\"
                           placeholder=\"";
            // line 123
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_PasswordRepeat")), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <span class=\"loadingPiwik\" style=\"display:none;\">
                        <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    </span>
                    <input class=\"submit\" id='reset_form_submit' type=\"submit\"
                           value=\"";
            // line 131
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo "\" tabindex=\"100\"/>
                </fieldset>

                <input type=\"hidden\" name=\"module\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getContext($context, "loginModule"), "html", null, true);
            echo "\"/>
                <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
            </form>
            <p id=\"nav\">
                <a id=\"login_form_nav\" href=\"#\"
                   title=\"";
            // line 139
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "</a>
                <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 141
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
                <a id=\"reset_form_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 143
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_NavigationBack")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
            echo "</a>
            </p>
            ";
            // line 145
            if (array_key_exists("poweredByPiwik", $context)) {
                // line 146
                echo "                <p id=\"piwik\">
                    ";
                // line 147
                echo twig_escape_filter($this->env, $this->getContext($context, "poweredByPiwik"), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 150
            echo "            <div id=\"lost_password_instructions\" style=\"display:none;\">
                <p class=\"message\">";
            // line 151
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_ResetPasswordInstructions")), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 154
        echo "    </section>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 154,  338 => 151,  335 => 150,  329 => 147,  326 => 146,  324 => 145,  317 => 143,  310 => 141,  303 => 139,  295 => 134,  289 => 131,  278 => 123,  271 => 119,  264 => 115,  260 => 114,  249 => 106,  245 => 105,  239 => 104,  231 => 99,  227 => 98,  221 => 95,  214 => 91,  210 => 90,  207 => 89,  201 => 87,  199 => 86,  196 => 85,  188 => 82,  185 => 81,  183 => 80,  178 => 78,  174 => 76,  171 => 75,  168 => 74,  165 => 73,  159 => 68,  150 => 64,  146 => 62,  144 => 61,  141 => 60,  138 => 59,  132 => 57,  129 => 56,  127 => 55,  124 => 54,  120 => 53,  113 => 52,  104 => 49,  101 => 48,  95 => 46,  93 => 45,  86 => 40,  84 => 39,  79 => 37,  75 => 36,  54 => 17,  52 => 16,  46 => 13,  43 => 12,  38 => 10,  36 => 9,  34 => 8,  26 => 6,  19 => 1,);
    }
}
