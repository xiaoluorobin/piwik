<?php

/* @CoreHome/_dataTableFooter.twig */
class __TwigTemplate_4f4319b25443a0eced4b06166762a7f0c31f230e1d8343425fd5afb0b10790cf extends Twig_Template
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
        echo "<div class=\"dataTableFeatures\">

    <div class=\"dataTableFooterNavigation\">
        ";
        // line 4
        if ($this->getAttribute($this->getContext($context, "properties"), "show_offset_information", array())) {
            // line 5
            echo "            <span>
                <span class=\"dataTablePages\"></span>
            </span>
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ($this->getAttribute($this->getContext($context, "properties"), "show_pagination_control", array())) {
            // line 11
            echo "            <span>
                <span class=\"dataTablePrevious\">&lsaquo; ";
            // line 12
            if ($this->getAttribute($this->getContext($context, "clientSideParameters", true), "dataTablePreviousIsFirst", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_First")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Previous")), "html", null, true);
            }
            echo " </span>
                <span class=\"dataTableNext\">";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Next")), "html", null, true);
            echo " &rsaquo;</span>
            </span>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "properties"), "show_search", array())) {
            // line 18
            echo "            <span class=\"dataTableSearchPattern\">
                <input type=\"text\" class=\"searchInput\" length=\"15\" />
                <input type=\"submit\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
            echo "\" />
            </span>
        ";
        }
        // line 23
        echo "    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
        echo "</span>

    ";
        // line 27
        if ($this->getAttribute($this->getContext($context, "properties"), "show_footer_icons", array())) {
            // line 28
            echo "        <div class=\"dataTableFooterIcons\">
            <div class=\"dataTableFooterWrap\">
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "footerIcons"));
            foreach ($context['_seq'] as $context["_key"] => $context["footerIconGroup"]) {
                // line 31
                echo "                    <div class=\"tableIconsGroup\">
                    <span class=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["footerIconGroup"], "class", array()), "html", null, true);
                echo "\">
                    ";
                // line 33
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["footerIconGroup"], "buttons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["footerIcon"]) {
                    // line 34
                    echo "                        ";
                    $context["isActiveEcommerceView"] = ($this->getAttribute($this->getContext($context, "clientSideParameters", true), "abandonedCarts", array(), "any", true, true) && ((($this->getAttribute($context["footerIcon"], "id", array()) == "ecommerceOrder") && ($this->getAttribute($this->getContext($context, "clientSideParameters"), "abandonedCarts", array()) == 0)) || (($this->getAttribute($context["footerIcon"], "id", array()) == "ecommerceAbandonedCart") && ($this->getAttribute($this->getContext($context, "clientSideParameters"), "abandonedCarts", array()) == 1))));
                    // line 37
                    echo "                        <span>
                            ";
                    // line 38
                    if (($this->getAttribute($this->getContext($context, "properties"), "show_active_view_icon", array()) && (($this->getAttribute($this->getContext($context, "clientSideParameters"), "viewDataTable", array()) == $this->getAttribute($context["footerIcon"], "id", array())) || $this->getContext($context, "isActiveEcommerceView")))) {
                        // line 39
                        echo "                                <img src=\"plugins/Morpheus/images/data_table_footer_active_item.png\" class=\"dataTableFooterActiveItem\"/>
                            ";
                    }
                    // line 41
                    echo "                            <a class=\"tableIcon ";
                    if ((($this->getAttribute($this->getContext($context, "clientSideParameters"), "viewDataTable", array()) == $this->getAttribute($context["footerIcon"], "id", array())) || $this->getContext($context, "isActiveEcommerceView"))) {
                        echo "activeIcon";
                    }
                    echo "\" data-footer-icon-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "id", array()), "html", null, true);
                    echo "\">
                                <img width=\"16\" height=\"16\" title=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "title", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "icon", array()), "html", null, true);
                    echo "\"/>
                                ";
                    // line 43
                    if ($this->getAttribute($context["footerIcon"], "text", array(), "any", true, true)) {
                        echo "<span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "text", array()), "html", null, true);
                        echo "</span>";
                    }
                    // line 44
                    echo "                            </a>
                        </span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    </span>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIconGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                <div class=\"tableIconsGroup\">
                    ";
            // line 51
            if (twig_test_empty($this->getContext($context, "footerIcons"))) {
                // line 52
                echo "                        <img src=\"plugins/Morpheus/images/data_table_footer_active_item.png\" class=\"dataTableFooterActiveItem\"/>
                    ";
            }
            // line 54
            echo "                    <span class=\"exportToFormatIcons\">
                        <a class=\"tableIcon\" var=\"export\">
                            <img width=\"16\" height=\"16\" src=\"plugins/Morpheus/images/export.png\" title=\"";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportThisReport")), "html", null, true);
            echo "\"/>
                        </a>
                    </span>
\t\t\t\t    <span class=\"exportToFormatItems\" style=\"display:none;\">
\t\t\t\t\t";
            // line 60
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Export")), "html", null, true);
            echo ":
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable", array()), "html", null, true);
            echo "\" format=\"CSV\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit", array()), "html", null, true);
            echo "\">CSV</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable", array()), "html", null, true);
            echo "\" format=\"TSV\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit", array()), "html", null, true);
            echo "\">TSV (Excel)</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable", array()), "html", null, true);
            echo "\" format=\"XML\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit", array()), "html", null, true);
            echo "\">XML</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable", array()), "html", null, true);
            echo "\" format=\"JSON\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit", array()), "html", null, true);
            echo "\">Json</a> |
\t\t\t\t\t<a target=\"_blank\" methodToCall=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable", array()), "html", null, true);
            echo "\" format=\"PHP\" filter_limit=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit", array()), "html", null, true);
            echo "\">Php</a>
                        ";
            // line 66
            if ($this->getAttribute($this->getContext($context, "properties"), "show_export_as_rss_feed", array())) {
                // line 67
                echo "                            |
                            <a target=\"_blank\" methodToCall=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "apiMethodToRequestDataTable", array()), "html", null, true);
                echo "\" format=\"RSS\" filter_limit=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "export_limit", array()), "html", null, true);
                echo "\" date=\"last10\">
                                <img border=\"0\" src=\"plugins/Morpheus/images/feed.png\"/>
                            </a>
                        ";
            }
            // line 72
            echo "\t\t\t\t    </span>
                    ";
            // line 73
            if ($this->getAttribute($this->getContext($context, "properties"), "show_export_as_image_icon", array())) {
                // line 74
                echo "                        <span id=\"dataTableFooterExportAsImageIcon\">
                            <a class=\"tableIcon\" href=\"#\" onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\">
                                <img title=\"";
                // line 76
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportAsImage")), "html", null, true);
                echo "\" src=\"plugins/Morpheus/images/image.png\"/>
                            </a>
                        </span>
                    ";
            }
            // line 80
            echo "                </div>

            </div>
            <div class=\"limitSelection ";
            // line 83
            if (( !$this->getAttribute($this->getContext($context, "properties"), "show_pagination_control", array()) &&  !$this->getAttribute($this->getContext($context, "properties"), "show_limit_control", array()))) {
                echo " hidden";
            }
            echo "\"
                 title=\"";
            // line 84
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RowsToDisplay")), "html", null, true);
            echo "\"></div>
            <div class=\"tableConfiguration\">
                <a class=\"tableConfigurationIcon\" href=\"#\"></a>
                <ul>
                    ";
            // line 88
            if ($this->getAttribute($this->getContext($context, "properties"), "show_flatten_table", array())) {
                // line 89
                echo "                        ";
                if (($this->getAttribute($this->getContext($context, "clientSideParameters", true), "flat", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "clientSideParameters"), "flat", array()) == 1))) {
                    // line 90
                    echo "                            <li>
                                <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                            </li>
                        ";
                }
                // line 94
                echo "                        <li>
                            <div class=\"configItem dataTableFlatten\"></div>
                        </li>
                    ";
            }
            // line 98
            echo "                    ";
            if ($this->getAttribute($this->getContext($context, "properties"), "show_exclude_low_population", array())) {
                // line 99
                echo "                        <li>
                            <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                        </li>
                    ";
            }
            // line 103
            echo "                    ";
            if ( !twig_test_empty((($this->getAttribute($this->getContext($context, "properties", true), "show_pivot_by_subtable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "properties", true), "show_pivot_by_subtable", array()))) : ("")))) {
                // line 104
                echo "                        <li>
                            <div class=\"configItem dataTablePivotBySubtable\"></div>
                        </li>
                    ";
            }
            // line 108
            echo "                </ul>
            </div>
            ";
            // line 110
            if ((call_user_func_array($this->env->getFunction('isPluginLoaded')->getCallable(), array("Annotations")) &&  !$this->getAttribute($this->getContext($context, "properties"), "hide_annotations_view", array()))) {
                // line 111
                echo "                <div class=\"annotationView\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_IconDesc")), "html", null, true);
                echo "\">
                    <a class=\"tableIcon\">
                        <img width=\"16\" height=\"16\" src=\"plugins/Morpheus/images/annotations.png\"/>
                    </a>
                    <span>";
                // line 115
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_Annotations")), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 118
            echo "
            <div class=\"foldDataTableFooterDrawer\" title=\"";
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Close")), "html_attr");
            echo "\"
                    ><img width=\"7\" height=\"4\" src=\"plugins/Morpheus/images/sortasc_dark.png\"></div>

        </div>
        <div class=\"expandDataTableFooterDrawer\" title=\"";
            // line 123
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExpandDataTableFooter")), "html_attr");
            echo "\"
                ><img width=\"7\" height=\"4\" src=\"plugins/Morpheus/images/sortdesc_dark.png\" style=\"\"></div>
    ";
        }
        // line 126
        echo "
    <div class=\"datatableRelatedReports\">
        ";
        // line 128
        if (( !twig_test_empty($this->getAttribute($this->getContext($context, "properties"), "related_reports", array())) && $this->getAttribute($this->getContext($context, "properties"), "show_related_reports", array()))) {
            // line 129
            echo "            ";
            echo $this->getAttribute($this->getContext($context, "properties"), "related_reports_title", array());
            echo "
            <ul style=\"list-style:none;";
            // line 130
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "related_reports", array())) == 1)) {
                echo "display:inline-block;";
            }
            echo "}\">
                <li><span href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "self_url", array()), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "properties"), "title", array()), "html", null, true);
            echo "</span></li>

                ";
            // line 133
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "properties"), "related_reports", array()));
            foreach ($context['_seq'] as $context["reportUrl"] => $context["reportTitle"]) {
                // line 134
                echo "                    <li><span href=\"";
                echo twig_escape_filter($this->env, $context["reportUrl"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["reportTitle"], "html", null, true);
                echo "</span></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reportUrl'], $context['reportTitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "            </ul>
        ";
        }
        // line 138
        echo "    </div>

    ";
        // line 140
        if (($this->getAttribute($this->getContext($context, "properties", true), "show_footer_message", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getContext($context, "properties"), "show_footer_message", array())))) {
            // line 141
            echo "        <div class='datatableFooterMessage'>";
            echo $this->getAttribute($this->getContext($context, "properties"), "show_footer_message", array());
            echo "</div>
    ";
        }
        // line 143
        echo "
</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 146
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
        echo "</span>

<div class=\"dataTableSpacer\"></div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 146,  376 => 143,  370 => 141,  368 => 140,  364 => 138,  360 => 136,  349 => 134,  345 => 133,  338 => 131,  332 => 130,  327 => 129,  325 => 128,  321 => 126,  315 => 123,  308 => 119,  305 => 118,  299 => 115,  291 => 111,  289 => 110,  285 => 108,  279 => 104,  276 => 103,  270 => 99,  267 => 98,  261 => 94,  255 => 90,  252 => 89,  250 => 88,  243 => 84,  237 => 83,  232 => 80,  225 => 76,  221 => 74,  219 => 73,  216 => 72,  207 => 68,  204 => 67,  202 => 66,  196 => 65,  190 => 64,  184 => 63,  178 => 62,  172 => 61,  168 => 60,  161 => 56,  157 => 54,  153 => 52,  151 => 51,  148 => 50,  140 => 47,  132 => 44,  126 => 43,  120 => 42,  111 => 41,  107 => 39,  105 => 38,  102 => 37,  99 => 34,  95 => 33,  91 => 32,  88 => 31,  84 => 30,  80 => 28,  78 => 27,  73 => 25,  69 => 23,  63 => 20,  59 => 18,  57 => 17,  54 => 16,  48 => 13,  40 => 12,  37 => 11,  35 => 10,  32 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }
}
