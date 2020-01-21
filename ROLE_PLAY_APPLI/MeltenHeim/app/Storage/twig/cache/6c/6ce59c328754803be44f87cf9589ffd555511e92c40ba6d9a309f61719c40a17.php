<?php

/* backoffice/classroom/ensEdit.html.twig */
class __TwigTemplate_e4988355f0e8cb535864eb89b87ffc6dd9fd9f889c54c76565b9245c6e17c08b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/ensEdit.html.twig", 1);
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
        echo "BackOffice | Ajouter un enfant";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>La classe : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "description", array()), "html", null, true);
        echo "</h1>
<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array((("/classe/" . twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array())) . "/addSingleChild"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ajouter un autre enfant</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Pseudo</th>
      <th scope=\"col\">Avatar</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 20
            echo "    <tr>
      <th scope=\"row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", array()), "html", null, true);
            echo "</th>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "</td>
      <td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["child"], "avatar", array())))), "html", null, true);
            echo "\" style=\"height:149px;\" alt=\"#\"></img></td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "createdAt", array()), "html", null, true);
            echo "</td>
      <td>
        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(((("/classe/" . twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array())) . "/editSingleChild/") . twig_get_attribute($this->env, $this->source, $context["child"], "id", array())))), "html", null, true);
            echo "\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", array()), "html", null, true);
            echo "\">supprimer</button>
      </td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</tbody>



";
    }

    // line 36
    public function block_specific_js($context, array $blocks = array())
    {
        // line 37
        echo "  <script>

\$(document).ready(function(){
//--------------------------------------------------TO DELETE
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
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom")), "html", null, true);
        echo "'+'/deleteChild/' + deleteId,
      function( ) {
        \$('#'+deleteId).parent().parent().remove();
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
        return "backoffice/classroom/ensEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  114 => 37,  111 => 36,  103 => 31,  93 => 27,  89 => 26,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  69 => 20,  65 => 19,  50 => 7,  46 => 6,  43 => 5,  40 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | Ajouter un enfant{% endblock %}

{% block content %}

<h1>La classe : {{classroom.description}}</h1>
<a href=\"{{ url('/classe/' ~ classroom.code ~ '/addSingleChild')}}\" class=\"btn btn-primary\">Ajouter un autre enfant</a>
<table class=\"table mt-2\">
  <thead class=\"thead-light\">
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Pseudo</th>
      <th scope=\"col\">Avatar</th>
      <th scope=\"col\">Création</th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>
  {% for child in children %}
    <tr>
      <th scope=\"row\">{{ child.id }}</th>
      <td>{{ child.pseudo }}</td>
      <td><img src=\"{{ url( '/assets/img/avatar/' ~ child.avatar) }}\" style=\"height:149px;\" alt=\"#\"></img></td>
      <td>{{ classroom.createdAt }}</td>
      <td>
        <a href=\"{{ url( '/classe/' ~ classroom.code ~ '/editSingleChild/' ~ child.id )}}\">éditer</a>
        <button class=\"btn btn-primary delete\" id=\"{{child.id}}\">supprimer</button>
      </td>
    </tr>
{% endfor %}
</tbody>



{% endblock %}
{% block specific_js %}
  <script>

\$(document).ready(function(){
//--------------------------------------------------TO DELETE
var deleteId;

\$( \".delete\" ).click( function () {
  \$('#verify').css(\"display\",\"flex\");
  deleteId = \$(this).attr(\"id\");

});

\$('#verify button').click(function(){
  if(\$(this).attr(\"id\")===\"verifyYes\")
  {
    \$.post(
      '{{ url( \"/backoffice/classroom\")}}'+'/deleteChild/' + deleteId,
      function( ) {
        \$('#'+deleteId).parent().parent().remove();
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
{% endblock %}
", "backoffice/classroom/ensEdit.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\classroom\\ensEdit.html.twig");
    }
}
