<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_48d7cdf76325fff870f0272cc4eec516835b25868ec0e92a3e554a73ea1b8738 extends Twig_Template
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
        $__internal_a1393e8e4fce455a4bc32050846eaae98b0097d13eaaf61bd182c3a0a0e59edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1393e8e4fce455a4bc32050846eaae98b0097d13eaaf61bd182c3a0a0e59edd->enter($__internal_a1393e8e4fce455a4bc32050846eaae98b0097d13eaaf61bd182c3a0a0e59edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a1393e8e4fce455a4bc32050846eaae98b0097d13eaaf61bd182c3a0a0e59edd->leave($__internal_a1393e8e4fce455a4bc32050846eaae98b0097d13eaaf61bd182c3a0a0e59edd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
