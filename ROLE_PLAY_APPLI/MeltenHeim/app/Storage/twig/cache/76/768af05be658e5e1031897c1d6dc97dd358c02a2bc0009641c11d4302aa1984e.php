<?php

/* backoffice/classroom/add.html.twig */
class __TwigTemplate_b27972e727fb91028b8c716f6358d3f22b38b29f7a288f06d190bc5ea4f570b6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/add.html.twig", 1);
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
        echo "BackOffice | les Classes";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h1>Ajouter une Classe</h1>
<p>Indiquer les données pour cette nouvelle classe.</p>
<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/save")), "html", null, true);
        echo "\" method=\"post\">

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Nom de L'enseignant:</label>
    <div class=\"col-sm-2\">
      <input name=\"teacherName\" type=\"text\" class=\"form-control\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\"> Description</label>
    <div class=\"col-sm-2\">
      <textarea name=\"description\" cols=\"30\" rows=\"10\"></textarea>
    </div>
  </div>
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code de la classe :</label>
    <div class=\"col-sm-2\">
      <input name=\"code\" type=\"text\" class=\"form-control\" readonly>
    </div>
    <div class=\"col-sm-2\">
      <button type=\"button\" class=\"btn btn-dark\" id=\"generer\" >générer</button>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle classe</button>
      <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom")), "html", null, true);
        echo "\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
";
    }

    // line 40
    public function block_specific_js($context, array $blocks = array())
    {
        // line 41
        echo "  <script>

\$(document).ready(function(){

  \$( \"#generer\" ).click( function () {
    \$.post(
      '";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/getCode")), "html", null, true);
        echo "',
      function(data) {
        \$(\"input[name='code']\").val(data);
      }
    );
  });

});

  </script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/classroom/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  91 => 41,  88 => 40,  78 => 34,  48 => 7,  43 => 4,  40 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | les Classes{% endblock %}
{% block content %}

<h1>Ajouter une Classe</h1>
<p>Indiquer les données pour cette nouvelle classe.</p>
<form action=\"{{ url( '/backoffice/classroom/save' )}}\" method=\"post\">

  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Nom de L'enseignant:</label>
    <div class=\"col-sm-2\">
      <input name=\"teacherName\" type=\"text\" class=\"form-control\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\"> Description</label>
    <div class=\"col-sm-2\">
      <textarea name=\"description\" cols=\"30\" rows=\"10\"></textarea>
    </div>
  </div>
  <div class=\"form-group row\">
    <label class=\"col-sm-3 col-form-label\">Code de la classe :</label>
    <div class=\"col-sm-2\">
      <input name=\"code\" type=\"text\" class=\"form-control\" readonly>
    </div>
    <div class=\"col-sm-2\">
      <button type=\"button\" class=\"btn btn-dark\" id=\"generer\" >générer</button>
    </div>
  </div>

  <div class=\"form-group row\">
    <div class=\"offset-3\">
      <button class=\"btn btn-secondary\">Enregistrer la nouvelle classe</button>
      <a href=\"{{ url( '/backoffice/classroom' )}}\" class=\"btn btn-link\">annuler</a>
    </div>
  </div>

</form>
{% endblock %}
{% block specific_js %}
  <script>

\$(document).ready(function(){

  \$( \"#generer\" ).click( function () {
    \$.post(
      '{{ url( \"/backoffice/classroom/getCode\")}}',
      function(data) {
        \$(\"input[name='code']\").val(data);
      }
    );
  });

});

  </script>
{%endblock%}", "backoffice/classroom/add.html.twig", "I:\\xampp-www\\alphacorp\\app\\Views\\backoffice\\classroom\\add.html.twig");
    }
}
