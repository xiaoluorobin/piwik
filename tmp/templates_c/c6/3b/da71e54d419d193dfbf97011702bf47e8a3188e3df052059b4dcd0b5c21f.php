<?php

/* @Installation/setupSuperUser.twig */
class __TwigTemplate_c63bda71e54d419d193dfbf97011702bf47e8a3188e3df052059b4dcd0b5c21f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("@Installation/layout.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Installation/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h2>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUser")), "html", null, true);
        echo "</h2>

";
        // line 6
        if (array_key_exists("errorMessage", $context)) {
            // line 7
            echo "    <div class=\"error\">
        <img src=\"plugins/Morpheus/images/error_medium.png\"/>
        ";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUserSetupError")), "html", null, true);
            echo ":
        <br/>- ";
            // line 10
            echo $this->getContext($context, "errorMessage");
            echo "

    </div>
";
        }
        // line 14
        echo "
";
        // line 15
        if (array_key_exists("form_data", $context)) {
            // line 16
            echo "    ";
            $this->env->loadTemplate("genericForm.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@Installation/setupSuperUser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  65 => 15,  62 => 14,  55 => 10,  51 => 9,  47 => 7,  45 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
