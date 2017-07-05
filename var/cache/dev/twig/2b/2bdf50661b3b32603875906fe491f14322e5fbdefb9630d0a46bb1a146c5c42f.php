<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_401320bf1a123d31af5ec3be6afe4af9f28e9e7cb6ce0b5f9dab18727ce18acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_767ebfe9375733226768d48c31fc9a1d79ae7568cc7e36ff6ce5d7d9a78d86c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767ebfe9375733226768d48c31fc9a1d79ae7568cc7e36ff6ce5d7d9a78d86c7->enter($__internal_767ebfe9375733226768d48c31fc9a1d79ae7568cc7e36ff6ce5d7d9a78d86c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_62eb4601bd402870db027342b90aa4bb2611e6055541dfc2be8962d5e9984d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62eb4601bd402870db027342b90aa4bb2611e6055541dfc2be8962d5e9984d34->enter($__internal_62eb4601bd402870db027342b90aa4bb2611e6055541dfc2be8962d5e9984d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767ebfe9375733226768d48c31fc9a1d79ae7568cc7e36ff6ce5d7d9a78d86c7->leave($__internal_767ebfe9375733226768d48c31fc9a1d79ae7568cc7e36ff6ce5d7d9a78d86c7_prof);

        
        $__internal_62eb4601bd402870db027342b90aa4bb2611e6055541dfc2be8962d5e9984d34->leave($__internal_62eb4601bd402870db027342b90aa4bb2611e6055541dfc2be8962d5e9984d34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98650f715db432c7e852d642278551d758ecda2c0833b740edc4f034f8b9a179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98650f715db432c7e852d642278551d758ecda2c0833b740edc4f034f8b9a179->enter($__internal_98650f715db432c7e852d642278551d758ecda2c0833b740edc4f034f8b9a179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f774f81515fe4c3b9d39e19e0273d065fe5e41f316b21af9c9b92dd10fedb34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f774f81515fe4c3b9d39e19e0273d065fe5e41f316b21af9c9b92dd10fedb34c->enter($__internal_f774f81515fe4c3b9d39e19e0273d065fe5e41f316b21af9c9b92dd10fedb34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f774f81515fe4c3b9d39e19e0273d065fe5e41f316b21af9c9b92dd10fedb34c->leave($__internal_f774f81515fe4c3b9d39e19e0273d065fe5e41f316b21af9c9b92dd10fedb34c_prof);

        
        $__internal_98650f715db432c7e852d642278551d758ecda2c0833b740edc4f034f8b9a179->leave($__internal_98650f715db432c7e852d642278551d758ecda2c0833b740edc4f034f8b9a179_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc7c0e3886f20cfef798c7e9a41f3f3e6e0e55c8f061a19677f2a61f5750c543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7c0e3886f20cfef798c7e9a41f3f3e6e0e55c8f061a19677f2a61f5750c543->enter($__internal_cc7c0e3886f20cfef798c7e9a41f3f3e6e0e55c8f061a19677f2a61f5750c543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37f9e8cebfa7cdea1b8922d4fdd3c312e98a39082d30a3e6e3b7cdf5e82464fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f9e8cebfa7cdea1b8922d4fdd3c312e98a39082d30a3e6e3b7cdf5e82464fc->enter($__internal_37f9e8cebfa7cdea1b8922d4fdd3c312e98a39082d30a3e6e3b7cdf5e82464fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37f9e8cebfa7cdea1b8922d4fdd3c312e98a39082d30a3e6e3b7cdf5e82464fc->leave($__internal_37f9e8cebfa7cdea1b8922d4fdd3c312e98a39082d30a3e6e3b7cdf5e82464fc_prof);

        
        $__internal_cc7c0e3886f20cfef798c7e9a41f3f3e6e0e55c8f061a19677f2a61f5750c543->leave($__internal_cc7c0e3886f20cfef798c7e9a41f3f3e6e0e55c8f061a19677f2a61f5750c543_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1a9d535ee34eb052d6ff4d60b90122d3addc150a449d196bc6d60f9cae15e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a9d535ee34eb052d6ff4d60b90122d3addc150a449d196bc6d60f9cae15e83->enter($__internal_a1a9d535ee34eb052d6ff4d60b90122d3addc150a449d196bc6d60f9cae15e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_03bec7608ed1e61a7696287b4ff78cf00832394051e895f38a113a7e4d277202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bec7608ed1e61a7696287b4ff78cf00832394051e895f38a113a7e4d277202->enter($__internal_03bec7608ed1e61a7696287b4ff78cf00832394051e895f38a113a7e4d277202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_03bec7608ed1e61a7696287b4ff78cf00832394051e895f38a113a7e4d277202->leave($__internal_03bec7608ed1e61a7696287b4ff78cf00832394051e895f38a113a7e4d277202_prof);

        
        $__internal_a1a9d535ee34eb052d6ff4d60b90122d3addc150a449d196bc6d60f9cae15e83->leave($__internal_a1a9d535ee34eb052d6ff4d60b90122d3addc150a449d196bc6d60f9cae15e83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
