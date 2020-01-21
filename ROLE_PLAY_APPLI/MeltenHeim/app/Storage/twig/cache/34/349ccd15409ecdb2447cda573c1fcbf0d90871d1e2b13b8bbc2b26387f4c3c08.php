<?php

/* backoffice/challenge/list.html.twig */
class __TwigTemplate_72d7b6c1a3f32f8c34e6cf9f6de0f53670b7745011c75490da3e4d037b177399 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/challenge/list.html.twig", 1);
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
<h1>Les défis</h1>
<p>Voici la liste des <b>défis</b> déjà existants dans l'application.</p>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges/add")), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un autre défi</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 20
            echo "    <tr>
      <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "description", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "code", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "created_at", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/challenges/edit/" . twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "id", array()), "html", null, true);
            echo "\">supprimer</button>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
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

\$('#verify button').click(function(){
  if(\$(this).attr(\"id\")===\"verifyYes\")
  {
    \$.post(
      '";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/challenges/delete/")), "html", null, true);
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
        return "backoffice/challenge/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  109 => 35,  106 => 34,  101 => 31,  91 => 27,  87 => 26,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  67 => 20,  63 => 19,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les défis{% endblock %}
{% block content %}

<h1>Les défis</h1>
<p>Voici la liste des <b>défis</b> déjà existants dans l'application.</p>
<a href=\"{{ url( '/backoffice/challenges/add' )}}\" class=\"btn btn-primary\">Ajouter un autre défi</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Code</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for challenge in challenges %}
    <tr>
      <th scope=\"row\">{{ challenge.id }}</th>
      <td>{{ challenge.description }}</td>
      <td>{{ challenge.code }}</td>
      <td>{{ challenge.created_at }}</td>
      <td>
        <a href=\"{{ url( '/backoffice/challenges/edit/' ~ challenge.id )}}\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"{{challenge.id}}\">supprimer</button>
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

\$('#verify button').click(function(){
  if(\$(this).attr(\"id\")===\"verifyYes\")
  {
    \$.post(
      '{{ url( \"/backoffice/challenges/delete/\")}}' + deleteId,
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
{% endblock %}", "backoffice/challenge/list.html.twig", "I:\\xampp-www\\alphacorp\\app\\Views\\backoffice\\challenge\\list.html.twig");
    }
}
