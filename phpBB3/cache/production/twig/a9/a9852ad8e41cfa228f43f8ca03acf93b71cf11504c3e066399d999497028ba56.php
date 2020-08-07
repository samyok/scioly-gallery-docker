<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @phpbb_viglink/event/acp_help_phpbb_stats_after.html */
class __TwigTemplate_5ba3d49a4377477da66cfad48977390d917d856b9b58af0e85ac507c75391506 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"send-stats-tile\">
    <h2 class=\"viglink-header-h2\"><span class=\"viglink-header\"></span></h2>
    <p>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_VIGLINK_SETTINGS_EXPLAIN");
        echo "<br /><br />";
        echo ($context["ACP_VIGLINK_SETTINGS_CHANGE"] ?? null);
        echo "</p>
    <dl class=\"send-stats-settings\">
        <dt>
            <input name=\"enable-viglink\" id=\"enable-viglink\" type=\"checkbox\" ";
        // line 6
        if ((($context["S_ENABLE_VIGLINK"] ?? null) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "/>
            <label for=\"enable-viglink\"></label>
        </dt>
        <dd>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLE");
        echo "</dd>
    </dl>
</div>

";
        // line 13
        $asset_file = "@phpbb_viglink/viglink.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('2');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);    }

    public function getTemplateName()
    {
        return "@phpbb_viglink/event/acp_help_phpbb_stats_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  50 => 9,  42 => 6,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_viglink/event/acp_help_phpbb_stats_after.html", "");
    }
}
