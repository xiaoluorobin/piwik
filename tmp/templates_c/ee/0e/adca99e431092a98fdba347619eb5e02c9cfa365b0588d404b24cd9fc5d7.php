<?php

/* dashboard.twig */
class __TwigTemplate_ee0eadca99e431092a98fdba347619eb5e02c9cfa365b0588d404b24cd9fc5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'notification' => array($this, 'block_notification'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "    </head>
    <!--[if lt IE 9 ]>
    <body ng-app=\"app\" class=\"old-ie ";
        // line 25
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.bodyClass", "dashboard"));
        echo "\"> <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <body ng-app=\"app\" class=\"";
        // line 27
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.bodyClass", "dashboard"));
        echo "\"><!--<![endif]-->
    ";
        // line 28
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 29
        echo "    ";
        $this->env->loadTemplate("@CoreHome/_javaScriptDisabled.twig")->display($context);
        // line 30
        echo "
    <div id=\"root\">
        ";
        // line 32
        $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
        // line 33
        echo "        ";
        $this->env->loadTemplate("@CoreHome/_topScreen.twig")->display($context);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('notification', $context, $blocks);
        // line 38
        echo "
        <div class=\"ui-confirm\" id=\"alert\">
            <h2></h2>
            <input role=\"yes\" type=\"button\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
        </div>

    ";
        // line 44
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "dashboard", $this->getContext($context, "currentModule")));
        echo "
        ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "    </div>
    ";
        // line 48
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.footer"));
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 6
        echo $this->getContext($context, "siteName");
        echo " - ";
        if (($this->getContext($context, "isCustomLogo") == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_WebAnalyticsReports")), "html", null, true);
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\" />
            <meta name=\"generator\" content=\"Piwik - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"Web Analytics report for '";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "siteName"), "html_attr");
        echo "' - Piwik\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
";
        // line 12
        $this->env->loadTemplate("@CoreHome/_favicon.twig")->display($context);
        // line 13
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 14
        $this->env->loadTemplate("_piwikTag.twig")->display($context);
        // line 15
        echo "            <!--[if lt IE 9]>
            <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
            <![endif]-->
";
        // line 18
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 19
        echo "            <!--[if IE]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/ieonly.css\"/>
            <![endif]-->
        ";
    }

    // line 35
    public function block_notification($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 37
        echo "        ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "        ";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  143 => 45,  139 => 37,  136 => 36,  133 => 35,  126 => 19,  124 => 18,  119 => 15,  117 => 14,  115 => 13,  113 => 12,  108 => 10,  95 => 6,  92 => 5,  89 => 4,  81 => 48,  78 => 47,  76 => 45,  72 => 44,  66 => 41,  61 => 38,  59 => 35,  56 => 34,  53 => 33,  51 => 32,  47 => 30,  44 => 29,  42 => 28,  38 => 27,  33 => 25,  29 => 23,  27 => 4,  22 => 1,);
    }
}
