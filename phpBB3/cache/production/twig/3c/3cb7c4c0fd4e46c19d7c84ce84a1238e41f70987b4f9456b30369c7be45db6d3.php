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

/* auth_provider_oauth.html */
class __TwigTemplate_44105200fcb71277f5d6a5e620c609639e7b622f676ea19fc9055785e73db835 extends \Twig\Template
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
        echo "
<div id=\"auth_oauth_settings\">
\t<p>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTH_PROVIDER_OAUTH_EXPLAIN");
        echo "</p>

\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "oauth_services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["oauth_services"]) {
            // line 6
            echo "\t<fieldset>
\t\t<legend>";
            // line 7
            echo $this->getAttribute($context["oauth_services"], "ACTUAL_NAME", []);
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"oauth_service_";
            // line 9
            echo $this->getAttribute($context["oauth_services"], "NAME", []);
            echo "_key\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTH_PROVIDER_OAUTH_KEY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"oauth_service_";
            // line 10
            echo $this->getAttribute($context["oauth_services"], "NAME", []);
            echo "_key\" size=\"40\" name=\"config[auth_oauth_";
            echo $this->getAttribute($context["oauth_services"], "NAME", []);
            echo "_key]\" value=\"";
            echo $this->getAttribute($context["oauth_services"], "KEY", []);
            echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"oauth_service_";
            // line 13
            echo $this->getAttribute($context["oauth_services"], "NAME", []);
            echo "_secret\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTH_PROVIDER_OAUTH_SECRET");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"oauth_service_";
            // line 14
            echo $this->getAttribute($context["oauth_services"], "NAME", []);
            echo "_secret\" size=\"40\" name=\"config[auth_oauth_";
            echo $this->getAttribute($context["oauth_services"], "NAME", []);
            echo "_secret]\" value=\"";
            echo $this->getAttribute($context["oauth_services"], "SECRET", []);
            echo "\" /></dd>
\t\t</dl>
\t</fieldset>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oauth_services'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "auth_provider_oauth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  75 => 14,  68 => 13,  58 => 10,  51 => 9,  46 => 7,  43 => 6,  39 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "auth_provider_oauth.html", "");
    }
}
