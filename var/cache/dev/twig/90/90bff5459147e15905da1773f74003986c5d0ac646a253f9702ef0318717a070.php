<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ef2863c8e707ee99f107bd24f91bc77860e6c545f536aaf8a46589d9fe42d0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5852fd4f66309ae7b071296cc07f12b719697a367f2e6c9f5c4d8e9db4c0d85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5852fd4f66309ae7b071296cc07f12b719697a367f2e6c9f5c4d8e9db4c0d85b->enter($__internal_5852fd4f66309ae7b071296cc07f12b719697a367f2e6c9f5c4d8e9db4c0d85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d7863459930d2f307a1cb95b240a887c02a7c85a255d23cc05738d6e0fcc1099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7863459930d2f307a1cb95b240a887c02a7c85a255d23cc05738d6e0fcc1099->enter($__internal_d7863459930d2f307a1cb95b240a887c02a7c85a255d23cc05738d6e0fcc1099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5852fd4f66309ae7b071296cc07f12b719697a367f2e6c9f5c4d8e9db4c0d85b->leave($__internal_5852fd4f66309ae7b071296cc07f12b719697a367f2e6c9f5c4d8e9db4c0d85b_prof);

        
        $__internal_d7863459930d2f307a1cb95b240a887c02a7c85a255d23cc05738d6e0fcc1099->leave($__internal_d7863459930d2f307a1cb95b240a887c02a7c85a255d23cc05738d6e0fcc1099_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e5e2aeeb1fb4220b023c2a467bbb6a038c417155bc456b26584a6144425c4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e5e2aeeb1fb4220b023c2a467bbb6a038c417155bc456b26584a6144425c4a9->enter($__internal_5e5e2aeeb1fb4220b023c2a467bbb6a038c417155bc456b26584a6144425c4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_150c3437a078420b424cb2eb9a3d4d5bc6a9e424796dd176e5a9b8635b3d0ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150c3437a078420b424cb2eb9a3d4d5bc6a9e424796dd176e5a9b8635b3d0ba3->enter($__internal_150c3437a078420b424cb2eb9a3d4d5bc6a9e424796dd176e5a9b8635b3d0ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_150c3437a078420b424cb2eb9a3d4d5bc6a9e424796dd176e5a9b8635b3d0ba3->leave($__internal_150c3437a078420b424cb2eb9a3d4d5bc6a9e424796dd176e5a9b8635b3d0ba3_prof);

        
        $__internal_5e5e2aeeb1fb4220b023c2a467bbb6a038c417155bc456b26584a6144425c4a9->leave($__internal_5e5e2aeeb1fb4220b023c2a467bbb6a038c417155bc456b26584a6144425c4a9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_187b540db747ee7d26a9bfc742890102cd048d271c9759b71d5dea9b03b4a63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187b540db747ee7d26a9bfc742890102cd048d271c9759b71d5dea9b03b4a63a->enter($__internal_187b540db747ee7d26a9bfc742890102cd048d271c9759b71d5dea9b03b4a63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63808a36bfdb70f92f35e6984e3c6c1e3b8d4212d9ffad0db76a71cdc62d2a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63808a36bfdb70f92f35e6984e3c6c1e3b8d4212d9ffad0db76a71cdc62d2a84->enter($__internal_63808a36bfdb70f92f35e6984e3c6c1e3b8d4212d9ffad0db76a71cdc62d2a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_63808a36bfdb70f92f35e6984e3c6c1e3b8d4212d9ffad0db76a71cdc62d2a84->leave($__internal_63808a36bfdb70f92f35e6984e3c6c1e3b8d4212d9ffad0db76a71cdc62d2a84_prof);

        
        $__internal_187b540db747ee7d26a9bfc742890102cd048d271c9759b71d5dea9b03b4a63a->leave($__internal_187b540db747ee7d26a9bfc742890102cd048d271c9759b71d5dea9b03b4a63a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6329be068d2416d2b51a7267faa5d3e7ad67f28789e45f92c4eb01c8c036558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6329be068d2416d2b51a7267faa5d3e7ad67f28789e45f92c4eb01c8c036558->enter($__internal_f6329be068d2416d2b51a7267faa5d3e7ad67f28789e45f92c4eb01c8c036558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fe2f1cdfe7fdfc45bef312d25adab98608f06d2f542b891c4ff9f5d6ddfebf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe2f1cdfe7fdfc45bef312d25adab98608f06d2f542b891c4ff9f5d6ddfebf4->enter($__internal_9fe2f1cdfe7fdfc45bef312d25adab98608f06d2f542b891c4ff9f5d6ddfebf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9fe2f1cdfe7fdfc45bef312d25adab98608f06d2f542b891c4ff9f5d6ddfebf4->leave($__internal_9fe2f1cdfe7fdfc45bef312d25adab98608f06d2f542b891c4ff9f5d6ddfebf4_prof);

        
        $__internal_f6329be068d2416d2b51a7267faa5d3e7ad67f28789e45f92c4eb01c8c036558->leave($__internal_f6329be068d2416d2b51a7267faa5d3e7ad67f28789e45f92c4eb01c8c036558_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
