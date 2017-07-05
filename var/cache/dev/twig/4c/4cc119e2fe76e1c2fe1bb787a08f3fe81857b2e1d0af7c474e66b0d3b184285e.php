<?php

/* base.html.twig */
class __TwigTemplate_1176c2173d635a3ce343a3bb0206a4ad260f74bdb386f2fd9a80ad278f4b2a04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1ef6e3d089ee218308dcfdd05f921786e30c50c9432e1bc39c389e0c67ae7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ef6e3d089ee218308dcfdd05f921786e30c50c9432e1bc39c389e0c67ae7b9->enter($__internal_f1ef6e3d089ee218308dcfdd05f921786e30c50c9432e1bc39c389e0c67ae7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5f8e33ff281bb08222a7142e4518099e1400c594df0a16145d86e475e5769513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8e33ff281bb08222a7142e4518099e1400c594df0a16145d86e475e5769513->enter($__internal_5f8e33ff281bb08222a7142e4518099e1400c594df0a16145d86e475e5769513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f1ef6e3d089ee218308dcfdd05f921786e30c50c9432e1bc39c389e0c67ae7b9->leave($__internal_f1ef6e3d089ee218308dcfdd05f921786e30c50c9432e1bc39c389e0c67ae7b9_prof);

        
        $__internal_5f8e33ff281bb08222a7142e4518099e1400c594df0a16145d86e475e5769513->leave($__internal_5f8e33ff281bb08222a7142e4518099e1400c594df0a16145d86e475e5769513_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ce61f295377a79202e757b0dda42d249db6f5bfbe10e47b77e3a3b558ae8fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce61f295377a79202e757b0dda42d249db6f5bfbe10e47b77e3a3b558ae8fa3->enter($__internal_2ce61f295377a79202e757b0dda42d249db6f5bfbe10e47b77e3a3b558ae8fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2da159afc7c5284642bc72f59d66f6cfb09b262ffda736c9f153da3ad1c8ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2da159afc7c5284642bc72f59d66f6cfb09b262ffda736c9f153da3ad1c8ec8->enter($__internal_c2da159afc7c5284642bc72f59d66f6cfb09b262ffda736c9f153da3ad1c8ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c2da159afc7c5284642bc72f59d66f6cfb09b262ffda736c9f153da3ad1c8ec8->leave($__internal_c2da159afc7c5284642bc72f59d66f6cfb09b262ffda736c9f153da3ad1c8ec8_prof);

        
        $__internal_2ce61f295377a79202e757b0dda42d249db6f5bfbe10e47b77e3a3b558ae8fa3->leave($__internal_2ce61f295377a79202e757b0dda42d249db6f5bfbe10e47b77e3a3b558ae8fa3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34dfedaa885c2ab6827c59783ecd73f9cb7044d90e2d8bdbfeed5525a251ecce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34dfedaa885c2ab6827c59783ecd73f9cb7044d90e2d8bdbfeed5525a251ecce->enter($__internal_34dfedaa885c2ab6827c59783ecd73f9cb7044d90e2d8bdbfeed5525a251ecce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d4c8d1de2dfec12994c55bdf41c581c32f245e0b0f20d8c2eaef0a3909b1aa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c8d1de2dfec12994c55bdf41c581c32f245e0b0f20d8c2eaef0a3909b1aa74->enter($__internal_d4c8d1de2dfec12994c55bdf41c581c32f245e0b0f20d8c2eaef0a3909b1aa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d4c8d1de2dfec12994c55bdf41c581c32f245e0b0f20d8c2eaef0a3909b1aa74->leave($__internal_d4c8d1de2dfec12994c55bdf41c581c32f245e0b0f20d8c2eaef0a3909b1aa74_prof);

        
        $__internal_34dfedaa885c2ab6827c59783ecd73f9cb7044d90e2d8bdbfeed5525a251ecce->leave($__internal_34dfedaa885c2ab6827c59783ecd73f9cb7044d90e2d8bdbfeed5525a251ecce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b910a1e04f4fef4cb72bcea973af419efdd914da3bd01613de904fd9abb95a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b910a1e04f4fef4cb72bcea973af419efdd914da3bd01613de904fd9abb95a95->enter($__internal_b910a1e04f4fef4cb72bcea973af419efdd914da3bd01613de904fd9abb95a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4445b85316303e8af430933059351be3d493493bfcbfa8b642c2806bf40a1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4445b85316303e8af430933059351be3d493493bfcbfa8b642c2806bf40a1c1->enter($__internal_b4445b85316303e8af430933059351be3d493493bfcbfa8b642c2806bf40a1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4445b85316303e8af430933059351be3d493493bfcbfa8b642c2806bf40a1c1->leave($__internal_b4445b85316303e8af430933059351be3d493493bfcbfa8b642c2806bf40a1c1_prof);

        
        $__internal_b910a1e04f4fef4cb72bcea973af419efdd914da3bd01613de904fd9abb95a95->leave($__internal_b910a1e04f4fef4cb72bcea973af419efdd914da3bd01613de904fd9abb95a95_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2926d91503576c4b5d568f24c0d9ca745527a104b8afa1b3c2ea24ed237846c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2926d91503576c4b5d568f24c0d9ca745527a104b8afa1b3c2ea24ed237846c0->enter($__internal_2926d91503576c4b5d568f24c0d9ca745527a104b8afa1b3c2ea24ed237846c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a730affbffde96d11c0f217cce7943b67cf7bd95a1d8003463760726e99abbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a730affbffde96d11c0f217cce7943b67cf7bd95a1d8003463760726e99abbeb->enter($__internal_a730affbffde96d11c0f217cce7943b67cf7bd95a1d8003463760726e99abbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a730affbffde96d11c0f217cce7943b67cf7bd95a1d8003463760726e99abbeb->leave($__internal_a730affbffde96d11c0f217cce7943b67cf7bd95a1d8003463760726e99abbeb_prof);

        
        $__internal_2926d91503576c4b5d568f24c0d9ca745527a104b8afa1b3c2ea24ed237846c0->leave($__internal_2926d91503576c4b5d568f24c0d9ca745527a104b8afa1b3c2ea24ed237846c0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/app/app/Resources/views/base.html.twig");
    }
}
