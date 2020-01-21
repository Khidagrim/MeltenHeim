<?php

/* backoffice/video/select.html.twig */
class __TwigTemplate_9588d6771ef04ac488ba7e141fc288e2ca28fd20dbea4749a969b53a0ca50634 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/video/select.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'specific_css' => array($this, 'block_specific_css'),
            'content' => array($this, 'block_content'),
            'specific_js' => array($this, 'block_specific_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "BackOffice | les Videos";
    }

    // line 3
    public function block_specific_css($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<h1 class=\"text-light\">Visionner la Video : <b>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "titre", array()), "html", null, true);
        echo "</b></h1>
<p class=\"text-light\">Indiquer les données à modifier de cette Video.</p>

<div class=\"col-6 embed-responsive embed-responsive-16by9\">
  <iframe class=\"embed-responsive-item text-light\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/video/" . twig_get_attribute($this->env, $this->source, ($context["video"] ?? null), "lienVideo", array())))), "html", null, true);
        echo "\" onloadstart=\"false\" allowfullscreen></iframe>
</div>
";
    }

    // line 16
    public function block_specific_js($context, array $blocks = array())
    {
        // line 17
        echo "<script>


  </script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/video/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  71 => 16,  64 => 12,  57 => 8,  54 => 7,  51 => 6,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les Videos{% endblock %}
{% block specific_css %}
  <link href=\"{{url('/assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block content %}

<h1 class=\"text-light\">Visionner la Video : <b>{{video.titre}}</b></h1>
<p class=\"text-light\">Indiquer les données à modifier de cette Video.</p>

<div class=\"col-6 embed-responsive embed-responsive-16by9\">
  <iframe class=\"embed-responsive-item text-light\" src=\"{{url('/assets/video/' ~ video.lienVideo)}}\" onloadstart=\"false\" allowfullscreen></iframe>
</div>
{% endblock %}

{% block specific_js %}
<script>


  </script>
{% endblock %}", "backoffice/video/select.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\video\\select.html.twig");
    }
}
