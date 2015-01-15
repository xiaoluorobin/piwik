<?php

/* @Installation/welcome.twig */
class __TwigTemplate_4fd513e86ac14077a553a36b00e4dac968f5c581b29d4bb814af770cf61fc3ba extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_Welcome")), "html", null, true);
        echo "</h2>

";
        // line 6
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_WelcomeHelp", $this->getContext($context, "totalNumberOfSteps")));
        echo "

<script type=\"text/javascript\">
    <!--
    \$(function () {
        // client-side test for broken tracker (e.g., mod_security rule)
        \$('p.nextStep').hide();
        \$.ajax({
            url: 'piwik.php',
            data: 'url=http://example.com',
            complete: function () {
                \$('p.nextStep').show();
            },
            error: function (req) {
                \$('p.nextStep a').attr('href', \$('p.nextStep a').attr('href') + '&trackerStatus=' + req.status);
            }
        });
    });
    //-->
</script>

";
        // line 27
        if ( !$this->getContext($context, "showNextStep")) {
            // line 28
            echo "    <p class=\"nextStep\">
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RefreshPage")), "html", null, true);
            echo " &raquo;</a>
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "@Installation/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  71 => 28,  69 => 27,  45 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
