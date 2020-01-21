<?php

/* /backoffice/video/list.html.twig */
class __TwigTemplate_0a6fdabc5b196710784f43703f864eae6818bbb8968337a2061d4d489937283a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "/backoffice/video/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1 class=\"text-light text-center\">Les Videos</h1>
<p class=\"text-light\">Voici la liste des <b>Videos</b> déjà existantes dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une autre Video</a>
<table class=\"table table-dark mt-2 table-striped\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col-8\">Titre</th>
      <th scope=\"col-8\">Resume</th>
      <th scope=\"col-8\">Image</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 20
            echo "    <tr>
      <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "titre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "resume", array()), "html", null, true);
            echo "</td>
      <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/image/" . twig_get_attribute($this->env, $this->source, $context["video"], "image", array())))), "html", null, true);
            echo "\" style=\"width:100px;height:auto;\" alt=\"#\"></td>
      <td class=\"d-flex justify-content-end\">
        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/edit/" . twig_get_attribute($this->env, $this->source, $context["video"], "id", array())))), "html", null, true);
            echo " \" class=\"mr-5\">Modifier</a>
        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/video/watch/" . twig_get_attribute($this->env, $this->source, $context["video"], "id", array())))), "html", null, true);
            echo " \" class=\"mr-5\">Visionner</a>
        <button class=\"btn btn-danger delete\" id=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#exampleModal\">supprimer</button>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 34
    public function block_specific_js($context, array $blocks = array())
    {
        // line 35
        echo "<script type=\"text/javascript\">

\$(document).ready(function(){
  var deleteId;

\$( \".delete\" ).click( function () {
  \$('#verify').css(\"display\",\"flex\");
  deleteId = \$(this).attr(\"id\");

});

\$('#exampleModal button').click(function(){
  if(\$(this).attr(\"id\")===\"verifyYes\")
  {
    \$.post(
      '";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video/delete/")), "html", null, true);
        echo "' + deleteId,
      function( ) {
        \$('#'+deleteId).parent(\"td\").parent(\"tr\").remove();
      }
    );
  }
});

});
</script>
";
    }

    public function getTemplateName()
    {
        return "/backoffice/video/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  110 => 35,  107 => 34,  95 => 28,  91 => 27,  87 => 26,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  67 => 20,  63 => 19,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les Videos{% endblock %}
{% block content %}

<h1 class=\"text-light text-center\">Les Videos</h1>
<p class=\"text-light\">Voici la liste des <b>Videos</b> déjà existantes dans l'application.</p>
<a href=\"{{ url( '/backoffice/video/add' )}}\" class=\"btn btn-primary\">Ajouter une autre Video</a>
<table class=\"table table-dark mt-2 table-striped\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col-8\">Titre</th>
      <th scope=\"col-8\">Resume</th>
      <th scope=\"col-8\">Image</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for video in videos %}
    <tr>
      <th scope=\"row\">{{ video.id}}</th>
      <td>{{ video.titre }}</td>
      <td>{{ video.resume }}</td>
      <td><img src=\"{{ url( '/assets/image/' ~ video.image) }}\" style=\"width:100px;height:auto;\" alt=\"#\"></td>
      <td class=\"d-flex justify-content-end\">
        <a href=\"{{ url( '/backoffice/video/edit/' ~ video.id )}} \" class=\"mr-5\">Modifier</a>
        <a href=\"{{ url( '/backoffice/video/watch/' ~ video.id )}} \" class=\"mr-5\">Visionner</a>
        <button class=\"btn btn-danger delete\" id=\"{{video.id}}\" data-toggle=\"modal\" data-target=\"#exampleModal\">supprimer</button>
      </td>
    </tr>
{% endfor %}
{% endblock %}

{% block specific_js %}
<script type=\"text/javascript\">

\$(document).ready(function(){
  var deleteId;

\$( \".delete\" ).click( function () {
  \$('#verify').css(\"display\",\"flex\");
  deleteId = \$(this).attr(\"id\");

});

\$('#exampleModal button').click(function(){
  if(\$(this).attr(\"id\")===\"verifyYes\")
  {
    \$.post(
      '{{ url( \"/backoffice/video/delete/\")}}' + deleteId,
      function( ) {
        \$('#'+deleteId).parent(\"td\").parent(\"tr\").remove();
      }
    );
  }
});

});
</script>
{% endblock %}", "/backoffice/video/list.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\video\\list.html.twig");
    }
}
