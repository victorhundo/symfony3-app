<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cdcc69e2cab1e0f9dbe7f07cabd52668c9b5d59ed43eea95e34d40bb6ddb1538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e11ad591372270ad674057bc301215cc1aaedb516088b1a1462ef7db3d5ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e11ad591372270ad674057bc301215cc1aaedb516088b1a1462ef7db3d5ee3->enter($__internal_18e11ad591372270ad674057bc301215cc1aaedb516088b1a1462ef7db3d5ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8483ab3687da62cca94696de706ba06fc9348aea1d78e453d195c971d69ad931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8483ab3687da62cca94696de706ba06fc9348aea1d78e453d195c971d69ad931->enter($__internal_8483ab3687da62cca94696de706ba06fc9348aea1d78e453d195c971d69ad931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_18e11ad591372270ad674057bc301215cc1aaedb516088b1a1462ef7db3d5ee3->leave($__internal_18e11ad591372270ad674057bc301215cc1aaedb516088b1a1462ef7db3d5ee3_prof);

        
        $__internal_8483ab3687da62cca94696de706ba06fc9348aea1d78e453d195c971d69ad931->leave($__internal_8483ab3687da62cca94696de706ba06fc9348aea1d78e453d195c971d69ad931_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e59a62ca89de0f3ac09ddfc7803df2e2efef5e59cae2352a64193ee613a315a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59a62ca89de0f3ac09ddfc7803df2e2efef5e59cae2352a64193ee613a315a9->enter($__internal_e59a62ca89de0f3ac09ddfc7803df2e2efef5e59cae2352a64193ee613a315a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3766e6a4e851e7e0450a0af54e5f0780ddf7497e56e9ed920282b8736da9853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3766e6a4e851e7e0450a0af54e5f0780ddf7497e56e9ed920282b8736da9853->enter($__internal_a3766e6a4e851e7e0450a0af54e5f0780ddf7497e56e9ed920282b8736da9853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a3766e6a4e851e7e0450a0af54e5f0780ddf7497e56e9ed920282b8736da9853->leave($__internal_a3766e6a4e851e7e0450a0af54e5f0780ddf7497e56e9ed920282b8736da9853_prof);

        
        $__internal_e59a62ca89de0f3ac09ddfc7803df2e2efef5e59cae2352a64193ee613a315a9->leave($__internal_e59a62ca89de0f3ac09ddfc7803df2e2efef5e59cae2352a64193ee613a315a9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f566ce1eeab88746a4d94a69f5360636701811fe3e5fc981cdf3ebd4c05a217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f566ce1eeab88746a4d94a69f5360636701811fe3e5fc981cdf3ebd4c05a217->enter($__internal_0f566ce1eeab88746a4d94a69f5360636701811fe3e5fc981cdf3ebd4c05a217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3ef18782f2eca4ee315bb380a66bfe2ff83837e1ed18c21a14e3b1da6170f3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef18782f2eca4ee315bb380a66bfe2ff83837e1ed18c21a14e3b1da6170f3d5->enter($__internal_3ef18782f2eca4ee315bb380a66bfe2ff83837e1ed18c21a14e3b1da6170f3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3ef18782f2eca4ee315bb380a66bfe2ff83837e1ed18c21a14e3b1da6170f3d5->leave($__internal_3ef18782f2eca4ee315bb380a66bfe2ff83837e1ed18c21a14e3b1da6170f3d5_prof);

        
        $__internal_0f566ce1eeab88746a4d94a69f5360636701811fe3e5fc981cdf3ebd4c05a217->leave($__internal_0f566ce1eeab88746a4d94a69f5360636701811fe3e5fc981cdf3ebd4c05a217_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3f9a333add665913d9b223bcc04a643404c909fe79d157338c6884ce8aa5071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f9a333add665913d9b223bcc04a643404c909fe79d157338c6884ce8aa5071->enter($__internal_c3f9a333add665913d9b223bcc04a643404c909fe79d157338c6884ce8aa5071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5520d78de9b7f3e6b3d0d66699e9ec63285bc3b41b1b9ceb0fb2e294b75faf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5520d78de9b7f3e6b3d0d66699e9ec63285bc3b41b1b9ceb0fb2e294b75faf47->enter($__internal_5520d78de9b7f3e6b3d0d66699e9ec63285bc3b41b1b9ceb0fb2e294b75faf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5520d78de9b7f3e6b3d0d66699e9ec63285bc3b41b1b9ceb0fb2e294b75faf47->leave($__internal_5520d78de9b7f3e6b3d0d66699e9ec63285bc3b41b1b9ceb0fb2e294b75faf47_prof);

        
        $__internal_c3f9a333add665913d9b223bcc04a643404c909fe79d157338c6884ce8aa5071->leave($__internal_c3f9a333add665913d9b223bcc04a643404c909fe79d157338c6884ce8aa5071_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
