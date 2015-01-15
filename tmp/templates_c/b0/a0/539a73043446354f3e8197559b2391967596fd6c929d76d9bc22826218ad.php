<?php

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_b0a0539a73043446354f3e8197559b2391967596fd6c929d76d9bc22826218ad extends Twig_Template
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
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        echo "
<ul id='visitsLive'>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "visitors"));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 6
            echo "        <li id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", array()), "html", null, true);
            echo "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", array()), "html", null, true);
            echo "</div>
            <div title=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "actionDetails", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
            // line 9
            echo $this->getAttribute($context["visitor"], "serverTimestamp", array());
            echo "</span>
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "serverDatePretty", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "serverTimePretty", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["visitor"], "visitDuration", array()) > 0)) {
                echo "<em>(";
                echo $this->getAttribute($context["visitor"], "visitDurationPretty", array());
                echo ")</em>";
            }
            // line 11
            echo "                ";
            if ($this->getAttribute($context["visitor"], "countryFlag", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "countryFlag", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "location", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["visitor"], "providerName", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "providerName", array()), "html", null, true);
                }
                echo "\"/>";
            }
            // line 12
            echo "                ";
            if ($this->getAttribute($context["visitor"], "browserIcon", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "browserIcon", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "browserName", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "plugins", array()), "html", null, true);
                echo "\"/>";
            }
            // line 13
            echo "                ";
            if ($this->getAttribute($context["visitor"], "operatingSystemIcon", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "operatingSystemIcon", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "operatingSystem", array()), "html", null, true);
                if ($this->getAttribute($context["visitor"], "resolution", array(), "any", true, true)) {
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "resolution", array()), "html", null, true);
                }
                echo "\"/>";
            }
            // line 14
            echo "                &nbsp;
                ";
            // line 15
            if ($this->getAttribute($context["visitor"], "visitConverted", array())) {
                // line 16
                echo "                <span title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitConvertedNGoals", $this->getAttribute($context["visitor"], "goalConversions", array()))), "html", null, true);
                echo "\" class='visitorRank'>
                    <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitConvertedIcon", array()), "html", null, true);
                echo "\" />
                    <span class='hash'>#</span>
                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "goalConversions", array()), "html", null, true);
                echo "
                    ";
                // line 20
                if ($this->getAttribute($context["visitor"], "visitEcommerceStatusIcon", array())) {
                    // line 21
                    echo "                        &nbsp;-
                        <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitEcommerceStatusIcon", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitEcommerceStatus", array()), "html", null, true);
                    echo "\"/>
                    ";
                }
                // line 24
                echo "                </span>
                ";
            }
            // line 26
            echo "                ";
            if ($this->getAttribute($context["visitor"], "visitorTypeIcon", array())) {
                // line 27
                echo "                    &nbsp;- <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitorTypeIcon", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReturningVisitor")), "html", null, true);
                echo "\"/>
                ";
            }
            // line 29
            echo "                ";
            if ( !twig_test_empty((($this->getAttribute($context["visitor"], "visitorId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "visitorId", array()), false)) : (false)))) {
                // line 30
                echo "                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                echo " ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "userId", array()))) {
                    echo $this->getAttribute($context["visitor"], "userId", array());
                }
                echo "\" data-visitor-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitorId", array()), "html", null, true);
                echo "\">
                    ";
                // line 31
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "userId", array()))) {
                    echo "<br/>";
                }
                // line 32
                echo "                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/>
                    ";
                // line 33
                echo (($this->getAttribute($context["visitor"], "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["visitor"], "userId", array()), "")) : (""));
                echo "
                </a>
                ";
            }
            // line 36
            echo "                ";
            if ($this->getAttribute($context["visitor"], "visitIp", array())) {
                echo "- <span title=\"";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "visitorId", array()))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitorID")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitorId", array()), "html", null, true);
                }
                echo "\">
                    IP: ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "visitIp", array()), "html", null, true);
                echo "</span>
                ";
            }
            // line 39
            echo "            </div>
            <!--<div class=\"settings\"></div>-->
            <div class=\"referrer\">
                ";
            // line 42
            if (($this->getAttribute($context["visitor"], "referrerType", array(), "any", true, true) && ($this->getAttribute($context["visitor"], "referrerType", array()) != "direct"))) {
                // line 43
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
                echo "
                    ";
                // line 44
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerUrl", array()))) {
                    // line 45
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerUrl", array()), "html", null, true);
                    echo "\" rel=\"noreferrer\"  target=\"_blank\">
                    ";
                }
                // line 47
                echo "                    ";
                if ($this->getAttribute($context["visitor"], "searchEngineIcon", array(), "any", true, true)) {
                    // line 48
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "searchEngineIcon", array()), "html", null, true);
                    echo "\" />
                    ";
                }
                // line 50
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerName", array()), "html", null, true);
                echo "
                    ";
                // line 51
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerUrl", array()))) {
                    // line 52
                    echo "                        </a>
                    ";
                }
                // line 54
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerKeyword", array()))) {
                    echo " - \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeyword", array()), "html", null, true);
                    echo "\"";
                }
                // line 55
                echo "                    ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeyword", array()), "html", null, true);
                $context["keyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 56
                echo "                    ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerName", array()), "html", null, true);
                $context["searchName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 57
                echo "                    ";
                ob_start();
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeywordPosition", array()), "html", null, true);
                $context["position"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 58
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["visitor"], "referrerKeywordPosition", array()))) {
                    // line 59
                    echo "                        <span title='";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_KeywordRankedOnSearchResultForThisVisitor", $this->getContext($context, "keyword"), $this->getContext($context, "position"), $this->getContext($context, "searchName"))), "html", null, true);
                    echo "' class='visitorRank'>
                            <span class='hash'>#</span> ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "referrerKeywordPosition", array()), "html", null, true);
                    echo "
                        </span>
                    ";
                }
                // line 63
                echo "                ";
            } elseif ($this->getAttribute($context["visitor"], "referrerType", array(), "any", true, true)) {
                // line 64
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DirectEntry")), "html", null, true);
                echo "
                ";
            }
            // line 66
            echo "            </div>
            <div id=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["visitor"], "idVisit", array()), "html", null, true);
            echo "_actions\" class=\"settings\">
                <span class=\"pagesTitle\" title=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["visitor"], "actionDetails", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Pages")), "html", null, true);
            echo ":</span>&nbsp;
                ";
            // line 69
            $context["col"] = 0;
            // line 70
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["visitor"], "actionDetails", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 71
                echo "                    ";
                if (($this->getAttribute($context["loop"], "index", array()) <= $this->getContext($context, "maxPagesDisplayedByVisitor"))) {
                    // line 72
                    echo "                        ";
                    if ((($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder") || ($this->getAttribute($context["action"], "type", array()) == "ecommerceAbandonedCart"))) {
                        // line 73
                        echo "                            ";
                        ob_start();
                        // line 74
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 75
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceOrder")), "html", null, true);
                        } else {
                            // line 77
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
                        }
                        // line 79
                        echo "
 - ";
                        // line 80
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 81
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ":";
                        } else {
                            // line 83
                            ob_start();
                            // line 84
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 86
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", $this->getContext($context, "revenueLeft"))), "html", null, true);
                            echo ":";
                        }
                        // line 87
                        echo " ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), $this->getContext($context, "idSite")));
                        // line 89
                        echo "
 - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                        // line 90
                        echo "
";
                        // line 91
                        if ( !twig_test_empty($this->getAttribute($context["action"], "itemDetails", array()))) {
                            // line 92
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "itemDetails", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 93
                                echo "
# ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemSKU", array()), "html", null, true);
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemName", array()))) {
                                    echo ": ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemName", array()), "html", null, true);
                                }
                                if ( !twig_test_empty($this->getAttribute($context["product"], "itemCategory", array()))) {
                                    echo " (";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "itemCategory", array()), "html", null, true);
                                    echo ")";
                                }
                                echo ", ";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                                echo ": ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantity", array()), "html", null, true);
                                echo ", ";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Price")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["product"], "price", array()), $this->getContext($context, "idSite")));
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                        // line 96
                        echo "                            ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 97
                        echo "                            <span title=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                        // line 98
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                        echo "\"/>
                                ";
                        // line 99
                        if (($this->getAttribute($context["action"], "type", array()) == "ecommerceOrder")) {
                            // line 100
                            echo "                                    ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), $this->getContext($context, "idSite")));
                            echo "
                                ";
                        }
                        // line 102
                        echo "                            </span>
                        ";
                    } else {
                        // line 104
                        echo "                            ";
                        $context["col"] = ($this->getContext($context, "col") + 1);
                        // line 105
                        echo "                            ";
                        if (($this->getContext($context, "col") >= 9)) {
                            // line 106
                            echo "                                ";
                            $context["col"] = 0;
                            // line 107
                            echo "                            ";
                        }
                        // line 108
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                        echo "\" target=\"_blank\">
                                ";
                        // line 109
                        if (($this->getAttribute($context["action"], "type", array()) == "action")) {
                            // line 111
                            ob_start();
                            // line 112
                            if ( !twig_test_empty($this->getAttribute($context["action"], "pageTitle", array()))) {
                                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($context["action"], "pageTitle", array())));
                            }
                            // line 113
                            echo "
";
                            // line 114
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "
";
                            // line 115
                            if ($this->getAttribute($context["action"], "timeSpentPretty", array(), "any", true, true)) {
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeOnPage")), "html", null, true);
                                echo ": ";
                                echo $this->getAttribute($context["action"], "timeSpentPretty", array());
                            }
                            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 117
                            echo "                                    <img src=\"plugins/Live/images/file";
                            echo twig_escape_filter($this->env, $this->getContext($context, "col"), "html", null, true);
                            echo ".png\" title=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ((($this->getAttribute($context["action"], "type", array()) == "outlink") || ($this->getAttribute($context["action"], "type", array()) == "download"))) {
                            // line 119
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 120
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif (($this->getAttribute($context["action"], "type", array()) == "search")) {
                            // line 122
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 123
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                            echo ": ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "siteSearchKeyword", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ( !twig_test_empty((($this->getAttribute($context["action"], "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "eventCategory", array()), false)) : (false)))) {
                            // line 125
                            echo "                                    <img  class=\"iconPadding\" src='";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "'
                                        title=\"";
                            // line 126
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventCategory", array()), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventAction", array()), "html", null, true);
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventName", array(), "any", true, true)) {
                                echo "- ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventName", array()), "html", null, true);
                            }
                            echo " ";
                            if ($this->getAttribute($context["action"], "eventValue", array(), "any", true, true)) {
                                echo "- ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "eventValue", array()), "html", null, true);
                            }
                            echo "\"/>
                                ";
                        } else {
                            // line 128
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 129
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "goalName", array()), "html", null, true);
                            echo " - ";
                            if (($this->getAttribute($context["action"], "revenue", array()) > 0)) {
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($context["action"], "revenue", array()), $this->getContext($context, "idSite")));
                                echo " - ";
                            }
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "serverTimePretty", array()), "html", null, true);
                            echo "\"/>
                                ";
                        }
                        // line 131
                        echo "                            </a>
                        ";
                    }
                    // line 133
                    echo "                    ";
                }
                // line 134
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["visitor"], "actionDetails", array())) > $this->getContext($context, "maxPagesDisplayedByVisitor"))) {
                // line 136
                echo "                    <em>(";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_MorePagesNotDisplayed")), "html", null, true);
                echo ")</em>
                ";
            }
            // line 138
            echo "            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "</ul>
<script type=\"text/javascript\">
\$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
    e.preventDefault();
    broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
    return false;
});
</script>";
    }

    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 141,  558 => 138,  552 => 136,  549 => 135,  535 => 134,  532 => 133,  528 => 131,  514 => 129,  509 => 128,  490 => 126,  485 => 125,  476 => 123,  471 => 122,  464 => 120,  459 => 119,  451 => 117,  444 => 115,  440 => 114,  437 => 113,  433 => 112,  431 => 111,  429 => 109,  424 => 108,  421 => 107,  418 => 106,  415 => 105,  412 => 104,  408 => 102,  400 => 100,  398 => 99,  394 => 98,  389 => 97,  386 => 96,  360 => 93,  356 => 92,  354 => 91,  351 => 90,  347 => 89,  344 => 87,  340 => 86,  337 => 84,  335 => 83,  331 => 81,  329 => 80,  326 => 79,  323 => 77,  320 => 75,  318 => 74,  315 => 73,  312 => 72,  309 => 71,  291 => 70,  289 => 69,  281 => 68,  277 => 67,  274 => 66,  268 => 64,  265 => 63,  259 => 60,  254 => 59,  251 => 58,  245 => 57,  240 => 56,  235 => 55,  228 => 54,  224 => 52,  222 => 51,  217 => 50,  211 => 48,  208 => 47,  202 => 45,  200 => 44,  195 => 43,  193 => 42,  188 => 39,  183 => 37,  172 => 36,  166 => 33,  163 => 32,  159 => 31,  148 => 30,  145 => 29,  137 => 27,  134 => 26,  130 => 24,  123 => 22,  120 => 21,  118 => 20,  114 => 19,  109 => 17,  104 => 16,  102 => 15,  99 => 14,  86 => 13,  73 => 12,  58 => 11,  48 => 10,  44 => 9,  38 => 8,  34 => 7,  29 => 6,  25 => 5,  21 => 3,  19 => 2,);
    }
}
