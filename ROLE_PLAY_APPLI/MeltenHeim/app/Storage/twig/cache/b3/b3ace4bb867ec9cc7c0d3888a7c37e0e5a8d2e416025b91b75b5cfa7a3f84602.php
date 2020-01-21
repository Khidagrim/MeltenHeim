<?php

/* /backoffice/tag/list.html.twig */
class __TwigTemplate_ff0e311781c6e5411dae4e682d4d83045761a8b271837c3f0bdca3ab936e5671 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "/backoffice/tag/list.html.twig", 1);
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
        echo "BackOffice | les Tags";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1 class=\"text-light\">Les Tags</h1>
<p class=\"text-light\">Voici la liste des <b>Tags</b> déjà existants dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/tag/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un autre tag</a>
<table class=\"table table-dark mt-2 table-striped\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col-8\">Nom</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "    <tr>
      <th scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", array()), "html", null, true);
            echo "</td>
      <td class=\"d-flex justify-content-end\">
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/tag/edit/" . twig_get_attribute($this->env, $this->source, $context["tag"], "id", array())))), "html", null, true);
            echo " \" class=\"mr-5\">Modifier</a>
        <button class=\"btn btn-primary delete\" id=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#exampleModal\">supprimer</button>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 29
    public function block_specific_js($context, array $blocks = array())
    {
        // line 30
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
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/tag/delete/")), "html", null, true);
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
        return "/backoffice/tag/list.html.twig";
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
{% block title %}BackOffice | les Tags{% endblock %}
{% block content %}

<h1 class=\"text-light\">Les Tags</h1>
<p class=\"text-light\">Voici la liste des <b>Tags</b> déjà existants dans l'application.</p>
<a href=\"{{ url( '/backoffice/tag/add' )}}\" class=\"btn btn-primary\">Ajouter un autre tag</a>
<table class=\"table table-dark mt-2 table-striped\">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col-8\">Nom</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for tag in tags %}
    <tr>
      <th scope=\"row\">{{ tag.id}}</th>
      <td>{{ tag.nom }}</td>
      <td class=\"d-flex justify-content-end\">
        <a href=\"{{ url( '/backoffice/tag/edit/' ~ tag.id )}} \" class=\"mr-5\">Modifier</a>
        <button class=\"btn btn-primary delete\" id=\"{{tag.id}}\" data-toggle=\"modal\" data-target=\"#exampleModal\">supprimer</button>
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
      '{{ url( \"/backoffice/tag/delete/\")}}' + deleteId,
      function( ) {
        \$('#'+deleteId).parent(\"td\").parent(\"tr\").remove();
      }
    );
  }

});

});
</script>
{% endblock %}", "/backoffice/tag/list.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\backoffice\\tag\\list.html.twig");
    }
}
