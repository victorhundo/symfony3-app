<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_bac2de80e8fa7f8fb726945dc35461914ec818981b6985bf4ce363537c3e2549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abcb2980fd69a8d0c36a22047a3a7f0b7c5ac7406bd8812c80f2006dd07947a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcb2980fd69a8d0c36a22047a3a7f0b7c5ac7406bd8812c80f2006dd07947a3->enter($__internal_abcb2980fd69a8d0c36a22047a3a7f0b7c5ac7406bd8812c80f2006dd07947a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b7e89423481990a584de034bcdf0a49c5f66eb05163bdbd8536dc0ec38c8fc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e89423481990a584de034bcdf0a49c5f66eb05163bdbd8536dc0ec38c8fc2f->enter($__internal_b7e89423481990a584de034bcdf0a49c5f66eb05163bdbd8536dc0ec38c8fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abcb2980fd69a8d0c36a22047a3a7f0b7c5ac7406bd8812c80f2006dd07947a3->leave($__internal_abcb2980fd69a8d0c36a22047a3a7f0b7c5ac7406bd8812c80f2006dd07947a3_prof);

        
        $__internal_b7e89423481990a584de034bcdf0a49c5f66eb05163bdbd8536dc0ec38c8fc2f->leave($__internal_b7e89423481990a584de034bcdf0a49c5f66eb05163bdbd8536dc0ec38c8fc2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5df86085b9cc0665ea70d126f52e258e0e15a6465c721f1c5bff4642cfbafba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5df86085b9cc0665ea70d126f52e258e0e15a6465c721f1c5bff4642cfbafba6->enter($__internal_5df86085b9cc0665ea70d126f52e258e0e15a6465c721f1c5bff4642cfbafba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_167415d239276dc175064782003f722ca6b49608dbc955a87d396cdd19d1e091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167415d239276dc175064782003f722ca6b49608dbc955a87d396cdd19d1e091->enter($__internal_167415d239276dc175064782003f722ca6b49608dbc955a87d396cdd19d1e091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_167415d239276dc175064782003f722ca6b49608dbc955a87d396cdd19d1e091->leave($__internal_167415d239276dc175064782003f722ca6b49608dbc955a87d396cdd19d1e091_prof);

        
        $__internal_5df86085b9cc0665ea70d126f52e258e0e15a6465c721f1c5bff4642cfbafba6->leave($__internal_5df86085b9cc0665ea70d126f52e258e0e15a6465c721f1c5bff4642cfbafba6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
