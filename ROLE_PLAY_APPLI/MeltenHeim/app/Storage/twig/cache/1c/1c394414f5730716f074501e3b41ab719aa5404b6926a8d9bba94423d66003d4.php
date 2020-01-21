<?php

/* backoffice/collection/list.html.twig */
class __TwigTemplate_e332c3b5c843f4b173f8bd7bd6a4c929746e1918d169e71d35948aff188e05cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/collection/list.html.twig", 1);
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
        echo "BackOffice | les défis";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Les Abécédaires</h1>
<p>Voici la liste des <b>abécédaires</b> déjà existantes dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un nouvel abécédaire</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["collection"]) {
            // line 18
            echo "    <tr>
      <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "name", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/collections/edit/" . twig_get_attribute($this->env, $this->source, $context["collection"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["collection"], "id", array()), "html", null, true);
            echo "\">supprimer</button>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collection'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 29
    public function block_specific_js($context, array $blocks = array())
    {
        // line 30
        echo "<script>
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
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections")), "html", null, true);
        echo "'+'/delete/' + deleteId,
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
</script>";
    }

    public function getTemplateName()
    {
        return "backoffice/collection/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  96 => 30,  93 => 29,  81 => 23,  77 => 22,  72 => 20,  68 => 19,  65 => 18,  61 => 17,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les défis{% endblock %}
{% block content %}

<h1>Les Abécédaires</h1>
<p>Voici la liste des <b>abécédaires</b> déjà existantes dans l'application.</p>
<a href=\"{{ url( '/backoffice/collections/add' )}}\" class=\"btn btn-primary\">Ajouter un nouvel abécédaire</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nom</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for collection in collections %}
    <tr>
      <th scope=\"row\">{{ collection.id }}</th>
      <td>{{ collection.name }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/collections/edit/' ~ collection.id )}}\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"{{collection.id}}\">supprimer</button>
      </td>
    </tr>
{% endfor %}
{% endblock %}

{% block specific_js %}
<script>
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
        '{{ url( \"/backoffice/collections\")}}'+'/delete/' + deleteId,
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
</script>{% endblock %}", "backoffice/collection/list.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\collection\\list.html.twig");
    }
}
