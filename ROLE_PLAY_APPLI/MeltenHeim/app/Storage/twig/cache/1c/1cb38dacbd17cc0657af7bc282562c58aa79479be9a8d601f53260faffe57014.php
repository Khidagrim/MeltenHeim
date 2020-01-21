<?php

/* backoffice/classroom/list.html.twig */
class __TwigTemplate_f5d0ae2d50b09665a40decf85deceb7895f7a00877775c6569230012334d0fb8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/list.html.twig", 1);
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
        echo "BackOffice | les classes";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Les classes</h1>
<p>Voici la liste des <b>classes</b> déjà mises en place dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter une nouvelle classe</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Enseignant</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 21
            echo "    <tr>
      <th scope=\"row\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "description", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "teacherName", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "code", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "createdAt", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/classroom/edit/" . twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classroom"], "id", array()), "html", null, true);
            echo "\">supprimer</button>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</tbody>
";
    }

    // line 36
    public function block_specific_js($context, array $blocks = array())
    {
        // line 37
        echo "<script type=\"text/javascript\">

\$(document).ready(function(){
  var deleteId;

\$( \".delete\" ).click( function () {
  \$('#verify').css(\"display\",\"flex\");
  deleteId = \$(this).attr(\"id\");

});

\$('#verify button').click(function(){
  if(\$(this).attr(\"id\")===\"verifyYes\")
  {
    \$.post(
      '";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/delete/")), "html", null, true);
        echo "' + deleteId,
      function( ) {
        \$('#'+deleteId).parent(\"td\").parent(\"tr\").remove();
      }
    );
    \$('#verify').css(\"display\",\"none\");
  }

  if (\$(this).attr(\"id\")===\"verifyNo\")
  {
    \$('#verify').css(\"display\",\"none\"); 
  }

});

});
</script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/classroom/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  114 => 37,  111 => 36,  106 => 33,  96 => 29,  92 => 28,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  68 => 21,  64 => 20,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les classes{% endblock %}
{% block content %}

<h1>Les classes</h1>
<p>Voici la liste des <b>classes</b> déjà mises en place dans l'application.</p>
<a href=\"{{ url( '/backoffice/classroom/add' )}}\" class=\"btn btn-primary\">Ajouter une nouvelle classe</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Enseignant</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for classroom in classrooms %}
    <tr>
      <th scope=\"row\">{{ classroom.id }}</th>
      <td>{{ classroom.description }}</td>
      <td>{{ classroom.teacherName }}</td>
      <td>{{ classroom.code }}</td>
      <td>{{ classroom.createdAt }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/classroom/edit/' ~ classroom.id )}}\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"{{classroom.id}}\">supprimer</button>
      </td>
    </tr>
{% endfor %}
</tbody>
{% endblock %}

{% block specific_js %}
<script type=\"text/javascript\">

\$(document).ready(function(){
  var deleteId;

\$( \".delete\" ).click( function () {
  \$('#verify').css(\"display\",\"flex\");
  deleteId = \$(this).attr(\"id\");

});

\$('#verify button').click(function(){
  if(\$(this).attr(\"id\")===\"verifyYes\")
  {
    \$.post(
      '{{ url( \"/backoffice/classroom/delete/\")}}' + deleteId,
      function( ) {
        \$('#'+deleteId).parent(\"td\").parent(\"tr\").remove();
      }
    );
    \$('#verify').css(\"display\",\"none\");
  }

  if (\$(this).attr(\"id\")===\"verifyNo\")
  {
    \$('#verify').css(\"display\",\"none\"); 
  }

});

});
</script>
{% endblock %}", "backoffice/classroom/list.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\classroom\\list.html.twig");
    }
}
