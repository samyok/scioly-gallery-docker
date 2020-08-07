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

/* acp_users.html */
class __TwigTemplate_a8b907687c0a3ac0a7aaddd183cdd2bf55e8fcfd34713717e3d93be211ac56bf extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_users.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_SELECT_USER"] ?? null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_EXPLAIN");
            echo "</p>

\t<form id=\"select_user\" method=\"post\" action=\"";
            // line 11
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_USER");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENTER_USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"username\" name=\"username\" /></dd>
\t\t<dd>[ <a href=\"";
            // line 18
            echo ($context["U_FIND_USERNAME"] ?? null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
            echo "</a> ]</dd>
\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"u\" value=\"";
            // line 19
            echo ($context["ANONYMOUS_USER_ID"] ?? null);
            echo "\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_ANONYMOUS");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" name=\"submituser\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t</p>
\t</fieldset>

\t</form>

";
        } elseif (        // line 29
($context["S_SELECT_FORUM"] ?? null)) {
            // line 30
            echo "
\t<a href=\"";
            // line 31
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN");
            echo "</h1>

\t<p>";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_EXPLAIN");
            echo "</p>

\t<form id=\"select_forum\" method=\"post\" action=\"";
            // line 37
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 40
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_MOVE_POSTS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"new_forum\">";
            // line 42
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_MOVE_POSTS");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE_POSTS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"new_forum\" name=\"new_f\">";
            // line 43
            echo ($context["S_FORUM_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset class=\"quick\">
\t\t<input type=\"submit\" name=\"update\" value=\"";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t\t";
            // line 49
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 54
            echo "
\t<a href=\"";
            // line 55
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 57
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN");
            echo " :: ";
            echo ($context["MANAGED_USERNAME"] ?? null);
            echo "</h1>

\t<p>";
            // line 59
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_EXPLAIN");
            echo "</p>

\t";
            // line 61
            if (($context["S_ERROR"] ?? null)) {
                // line 62
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 64
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 67
            echo "
\t<form id=\"mode_select\" method=\"post\" action=\"";
            // line 68
            echo ($context["U_MODE_SELECT"] ?? null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_FORM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"mode\" onchange=\"if (this.options[this.selectedIndex].value != '') this.form.submit();\">";
            echo ($context["S_FORM_OPTIONS"] ?? null);
            echo "</select> <input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" />
\t\t";
            // line 72
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 77
        echo "
";
        // line 78
        if (($context["S_OVERVIEW"] ?? null)) {
            // line 79
            echo "
";
            // line 80
            $location = "acp_users_overview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_users_overview.html", "acp_users.html", 80)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 81
            echo "
";
        } elseif (        // line 82
($context["S_FEEDBACK"] ?? null)) {
            // line 83
            echo "
";
            // line 84
            $location = "acp_users_feedback.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_users_feedback.html", "acp_users.html", 84)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 85
            echo "
";
        } elseif (        // line 86
($context["S_WARNINGS"] ?? null)) {
            // line 87
            echo "
";
            // line 88
            $location = "acp_users_warnings.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_users_warnings.html", "acp_users.html", 88)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 89
            echo "
";
        } elseif (        // line 90
($context["S_PROFILE"] ?? null)) {
            // line 91
            echo "
";
            // line 92
            $location = "acp_users_profile.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_users_profile.html", "acp_users.html", 92)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 93
            echo "
";
        } elseif (        // line 94
($context["S_PREFS"] ?? null)) {
            // line 95
            echo "
";
            // line 96
            $location = "acp_users_prefs.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_users_prefs.html", "acp_users.html", 96)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 97
            echo "
";
        } elseif (        // line 98
($context["S_AVATAR"] ?? null)) {
            // line 99
            echo "
";
            // line 100
            $location = "acp_users_avatar.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_users_avatar.html", "acp_users.html", 100)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 101
            echo "
";
        } elseif (        // line 102
($context["S_RANK"] ?? null)) {
            // line 103
            echo "
\t<form id=\"user_prefs\" method=\"post\" action=\"";
            // line 104
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 107
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_USER_RANK");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"user_rank\">";
            // line 109
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_RANK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"user_rank\" id=\"user_rank\">";
            // line 110
            echo ($context["S_RANK_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t";
            // line 116
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 120
($context["S_SIGNATURE"] ?? null)) {
            // line 121
            echo "
";
            // line 122
            $location = "acp_users_signature.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("acp_users_signature.html", "acp_users.html", 122)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 123
            echo "
";
        } elseif (        // line 124
($context["S_GROUPS"] ?? null)) {
            // line 125
            echo "
\t<form id=\"user_groups\" method=\"post\" action=\"";
            // line 126
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<table class=\"table1 zebra-table\">
\t<tbody>
\t";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "group", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 131
                echo "\t\t";
                if ($this->getAttribute($context["group"], "S_NEW_GROUP_TYPE", [])) {
                    // line 132
                    echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"4\"><strong>";
                    // line 133
                    echo $this->getAttribute($context["group"], "GROUP_TYPE", []);
                    echo "</strong></td>
\t\t</tr>
\t\t";
                } else {
                    // line 136
                    echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                    // line 137
                    echo $this->getAttribute($context["group"], "U_EDIT_GROUP", []);
                    echo "\">";
                    echo $this->getAttribute($context["group"], "GROUP_NAME", []);
                    echo "</a></td>
\t\t\t\t<td>";
                    // line 138
                    if ($this->getAttribute($context["group"], "S_IS_MEMBER", [])) {
                        if ($this->getAttribute($context["group"], "S_NO_DEFAULT", [])) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["group"], "U_DEFAULT", []);
                            echo "\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DEFAULT");
                            echo "</a>";
                        } else {
                            echo "<strong>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DEFAULT");
                            echo "</strong>";
                        }
                    } elseif (( !$this->getAttribute($context["group"], "S_IS_MEMBER", []) && $this->getAttribute($context["group"], "U_APPROVE", []))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["group"], "U_APPROVE", []);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_APPROVE");
                        echo "</a>";
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>
\t\t\t\t<td>";
                    // line 139
                    if (($this->getAttribute($context["group"], "S_IS_MEMBER", []) &&  !$this->getAttribute($context["group"], "S_SPECIAL_GROUP", []))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["group"], "U_DEMOTE_PROMOTE", []);
                        echo "\">";
                        echo $this->getAttribute($context["group"], "L_DEMOTE_PROMOTE", []);
                        echo "</a>";
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>
\t\t\t\t<td><a href=\"";
                    // line 140
                    echo $this->getAttribute($context["group"], "U_DELETE", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DELETE");
                    echo "</a></td>
\t\t\t</tr>
\t\t";
                }
                // line 143
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t</tbody>
\t</table>

\t";
            // line 147
            if (($context["S_GROUP_OPTIONS"] ?? null)) {
                // line 148
                echo "\t\t<fieldset class=\"quick\">
\t\t\t";
                // line 149
                // line 150
                echo "\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_GROUP_ADD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <select name=\"g\">";
                echo ($context["S_GROUP_OPTIONS"] ?? null);
                echo "</select> <input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t\t";
                // line 151
                // line 152
                echo "\t\t\t";
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>
\t";
            }
            // line 155
            echo "\t</form>

";
        } elseif (        // line 157
($context["S_ATTACHMENTS"] ?? null)) {
            // line 158
            echo "
\t<form id=\"user_attachments\" method=\"post\" action=\"";
            // line 159
            echo ($context["U_ACTION"] ?? null);
            echo "\">


\t<div class=\"pagination\">
\t";
            // line 163
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 164
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "acp_users.html", 164)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 165
                echo "\t";
            }
            // line 166
            echo "\t</div>

\t";
            // line 168
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "attach", []))) {
                // line 169
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 172
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 20%;\">";
                // line 173
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TIME");
                echo "</th>
\t\t<th style=\"width: 20%;\">";
                // line 174
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 20%;\">";
                // line 175
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOADS");
                echo "</th>
\t\t<th style=\"width: 50px;\">";
                // line 176
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "attach", []));
                foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                    // line 181
                    echo "\t<tr>
\t\t<td><a href=\"";
                    // line 182
                    echo $this->getAttribute($context["attach"], "U_DOWNLOAD", []);
                    echo "\">";
                    echo $this->getAttribute($context["attach"], "REAL_FILENAME", []);
                    echo "</a><br /><span class=\"small\">";
                    if ($this->getAttribute($context["attach"], "S_IN_MESSAGE", [])) {
                        echo "<strong>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " </strong>";
                    } else {
                        echo "<strong>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " </strong>";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["attach"], "U_VIEW_TOPIC", []);
                    echo "\">";
                    echo $this->getAttribute($context["attach"], "TOPIC_TITLE", []);
                    echo "</a></span></td>
\t\t<td style=\"text-align: center\">";
                    // line 183
                    echo $this->getAttribute($context["attach"], "POST_TIME", []);
                    echo "</td>
\t\t<td style=\"text-align: center\">";
                    // line 184
                    echo $this->getAttribute($context["attach"], "SIZE", []);
                    echo "</td>
\t\t<td style=\"text-align: center\">";
                    // line 185
                    echo $this->getAttribute($context["attach"], "DOWNLOAD_COUNT", []);
                    echo "</td>
\t\t<td style=\"text-align: center\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                    // line 186
                    echo $this->getAttribute($context["attach"], "ATTACH_ID", []);
                    echo "\" /></td>
\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "\t</tbody>
\t</table>
\t";
            } else {
                // line 192
                echo "\t<div class=\"errorbox\">
\t\t<p>";
                // line 193
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_NO_ATTACHMENTS");
                echo "</p>
\t</div>
\t";
            }
            // line 196
            echo "\t<fieldset class=\"display-options\">
\t\t";
            // line 197
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"sk\">";
            echo ($context["S_SORT_KEY"] ?? null);
            echo "</select> <select name=\"sd\">";
            echo ($context["S_SORT_DIR"] ?? null);
            echo "</select>
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 198
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>
\t<hr />
\t<div class=\"pagination\">
\t";
            // line 202
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 203
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "acp_users.html", 203)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 204
                echo "\t";
            }
            // line 205
            echo "\t</div>

\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"delmarked\" value=\"";
            // line 208
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MARKED");
            echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('user_attachments', 'mark', true);\">";
            // line 209
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('user_attachments', 'mark', false);\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></p>
\t\t";
            // line 210
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 214
($context["S_PERMISSIONS"] ?? null)) {
            // line 215
            echo "
\t<div style=\"float: ";
            // line 216
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">
\t\t<a href=\"";
            // line 217
            echo ($context["U_USER_PERMISSIONS"] ?? null);
            echo "\">&raquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SET_USERS_PERMISSIONS");
            echo "</a><br />
\t\t<a href=\"";
            // line 218
            echo ($context["U_USER_FORUM_PERMISSIONS"] ?? null);
            echo "\">&raquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SET_USERS_FORUM_PERMISSIONS");
            echo "</a>
\t</div>

\t<form id=\"select_forum\" method=\"post\" action=\"";
            // line 221
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t\t<fieldset class=\"quick\" style=\"text-align: left;\">
\t\t\t";
            // line 224
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"f\">";
            echo ($context["S_FORUM_OPTIONS"] ?? null);
            echo "</select>
\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 225
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" name=\"select\" />
\t\t\t";
            // line 226
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>

\t<div class=\"clearfix\">&nbsp;</div>

\t";
            // line 232
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("permission_mask.html", "acp_users.html", 232)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 233
            echo "
";
        } else {
            // line 235
            echo "
\t";
            // line 236
            // line 237
            echo "
";
        }
        // line 239
        echo "
";
        // line 240
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_users.html", 240)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  795 => 240,  792 => 239,  788 => 237,  787 => 236,  784 => 235,  780 => 233,  768 => 232,  759 => 226,  755 => 225,  748 => 224,  742 => 221,  734 => 218,  728 => 217,  724 => 216,  721 => 215,  719 => 214,  712 => 210,  706 => 209,  702 => 208,  697 => 205,  694 => 204,  681 => 203,  679 => 202,  672 => 198,  663 => 197,  660 => 196,  654 => 193,  651 => 192,  646 => 189,  637 => 186,  633 => 185,  629 => 184,  625 => 183,  603 => 182,  600 => 181,  596 => 180,  589 => 176,  585 => 175,  581 => 174,  577 => 173,  573 => 172,  568 => 169,  566 => 168,  562 => 166,  559 => 165,  546 => 164,  544 => 163,  537 => 159,  534 => 158,  532 => 157,  528 => 155,  521 => 152,  520 => 151,  510 => 150,  509 => 149,  506 => 148,  504 => 147,  499 => 144,  493 => 143,  485 => 140,  473 => 139,  449 => 138,  443 => 137,  440 => 136,  434 => 133,  431 => 132,  428 => 131,  424 => 130,  417 => 126,  414 => 125,  412 => 124,  409 => 123,  397 => 122,  394 => 121,  392 => 120,  385 => 116,  381 => 115,  373 => 110,  368 => 109,  363 => 107,  357 => 104,  354 => 103,  352 => 102,  349 => 101,  337 => 100,  334 => 99,  332 => 98,  329 => 97,  317 => 96,  314 => 95,  312 => 94,  309 => 93,  297 => 92,  294 => 91,  292 => 90,  289 => 89,  277 => 88,  274 => 87,  272 => 86,  269 => 85,  257 => 84,  254 => 83,  252 => 82,  249 => 81,  237 => 80,  234 => 79,  232 => 78,  229 => 77,  221 => 72,  212 => 71,  206 => 68,  203 => 67,  197 => 64,  193 => 63,  190 => 62,  188 => 61,  183 => 59,  176 => 57,  167 => 55,  164 => 54,  156 => 49,  152 => 48,  144 => 43,  138 => 42,  133 => 40,  127 => 37,  122 => 35,  117 => 33,  108 => 31,  105 => 30,  103 => 29,  94 => 23,  85 => 19,  79 => 18,  73 => 16,  68 => 14,  62 => 11,  57 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_users.html", "");
    }
}
