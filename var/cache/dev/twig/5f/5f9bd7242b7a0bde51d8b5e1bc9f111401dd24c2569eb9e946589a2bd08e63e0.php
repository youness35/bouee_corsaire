<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4aca9f989d643d7278614d3ace26135b0e90f00585a4fb663ce7c7db6972fcaf extends Twig_Template
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
        $__internal_a160ce57dcabf3e6c1b794ed33e811a9fb39084bc96acd9aad192832c3b130c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a160ce57dcabf3e6c1b794ed33e811a9fb39084bc96acd9aad192832c3b130c4->enter($__internal_a160ce57dcabf3e6c1b794ed33e811a9fb39084bc96acd9aad192832c3b130c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a160ce57dcabf3e6c1b794ed33e811a9fb39084bc96acd9aad192832c3b130c4->leave($__internal_a160ce57dcabf3e6c1b794ed33e811a9fb39084bc96acd9aad192832c3b130c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/pcapprenant17/Documents/Bou-e_corsaire_projet/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
