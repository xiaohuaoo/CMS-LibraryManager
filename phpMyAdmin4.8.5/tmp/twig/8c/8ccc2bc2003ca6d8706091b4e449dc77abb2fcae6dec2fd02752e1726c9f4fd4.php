<?php

/* server/engines/engines.twig */
class __TwigTemplate_7b10a09e112ce57446e02e66a8aa24c33bd2bb91b60b8534af6073ae56999f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<table class=\"noclick\">
    <thead>
        <tr>
            <th>";
        // line 4
        echo _gettext("Storage Engine");
        echo "</th>
            <th>";
        // line 5
        echo _gettext("Description");
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["engines"] ?? null));
        foreach ($context['_seq'] as $context["engine"] => $context["details"]) {
            // line 10
            echo "            <tr class=\"";
            // line 11
            echo (((($this->getAttribute($context["details"], "Support", [], "array") == "NO") || ($this->getAttribute($context["details"], "Support", [], "array") == "DISABLED"))) ? (" disabled") : (""));
            echo "
                ";
            // line 12
            echo ((($this->getAttribute($context["details"], "Support", [], "array") == "DEFAULT")) ? (" marked") : (""));
            echo "\">
                <td>
                    <a rel=\"newpage\" href=\"server_engines.php";
            // line 14
            echo PhpMyAdmin\Url::getCommon(["engine" => $context["engine"]]);
            echo "\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "Engine", [], "array"), "html", null, true);
            echo "
                    </a>
                </td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "Comment", [], "array"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['engine'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "server/engines/engines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  60 => 18,  54 => 15,  50 => 14,  45 => 12,  41 => 11,  39 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/engines/engines.twig", "D:\\CMS-2022word-competition\\phpMyAdmin4.8.5\\templates\\server\\engines\\engines.twig");
    }
}
