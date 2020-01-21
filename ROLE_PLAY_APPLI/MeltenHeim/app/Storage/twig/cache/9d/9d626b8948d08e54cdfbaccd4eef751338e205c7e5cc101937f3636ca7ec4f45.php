<?php

/* backoffice/classroom/edit.html.twig */
class __TwigTemplate_3a37138aecfe22cd32a5b7c1786cad9f552a39a05fc1822d0146e2a3993ce813 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/edit.html.twig", 1);
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
        echo "BackOffice | Editer la classe";
    }

    // line 4
    public function block_specific_css($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/editClassroom.css")), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<h1>Editer les informations d'une classe</h1>
<p>Consulter les données pour cette classe.</p>

<section id=\"verify\" style=\"display:none\">
    <div>
      <p>Etes vous sur de vouloir continuer?</p>
    </div>
    <div>
      <button id=\"verifyYes\">Oui</button>
      <button id=\"verifyNo\">Non</button>
    </div>
</section>

<form action=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/classroom/edit/" . twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\">

\t  <div class=\"row\">
\t\t
\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"teacherName\">Nom de l'enseignant :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"teacherName\" id=\"teacherName\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "teacherName", array()), "html", null, true);
        echo "\">
\t\t\t</div>

\t\t</div>

\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"desc\">Description :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"desc\" id=\"desc\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "description", array()), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"code\">Code de la classe :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"code\" id=\"code\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array()), "html", null, true);
        echo "\" disabled>
\t\t\t</div>
\t\t\t
\t\t</div>

\t\t<div class=\"col-12 form-group\">
\t\t\t<button class=\"btn btn-secondary\">Mettre à jour les données de la classe</button>
 \t\t\t<button class=\"btn btn-link\">annuler</button>
\t\t</div>

\t</div>
</form>

<section  id=\"addChild\">
\t
\t\t<h5>Ajouter un enfant</h5>

\t\t<form action=\"";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/add_child")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" >

\t\t\t<input type=\"hidden\" name=\"classroom_id\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t\t
\t\t\t<div class=\"form-group \">
\t\t\t\t<label  for=\"child\">Pseudo : </label>
\t\t\t\t<input class=\" form-control w-50\" type=\"text\" name=\"child\" id=\"child\" placeholder=\"pseudo\">
\t\t\t</div>


\t\t\t<div class=\"custom-file \">
\t\t\t\t<input type=\"file\" name=\"image\" class=\"custom-file-input \">
\t\t\t\t<label for=\"avatar\" class=\"custom-file-label col-6\"></label>
\t\t\t</div>

\t\t\t<button class=\"btn btn-primary mt-2\" id=\"add\">Ajouter le nouvel enfant</button>

\t\t</form>
</section>

\t

<section id=\"listChild\">
\t<h5>Liste des enfants</h5>

\t<div class=\"row\">
\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 89
            echo "\t \t\t<div class=\"col-4\">
\t \t\t\t<img src=\"";
            // line 90
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["child"], "avatar", array())))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "\">
\t \t\t\t<p>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "</p>
\t \t\t\t<button class='delete btn btn-secondary' id=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", array()), "html", null, true);
            echo "\" > Effacer </button>
\t \t\t</div>
 \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t</div>

 \t
</section>
\t



";
    }

    // line 106
    public function block_specific_js($context, array $blocks = array())
    {
        // line 107
        echo "\t<script>

\$(document).ready(function(){
//--------------------------------------------------TO DELETE
var deleteId;

\$( \".delete\" ).click( function () {
\t\$('#verify').css(\"display\",\"flex\");
\tdeleteId = \$(this).attr(\"id\");

});

\$('#verify button').click(function(){
\tif(\$(this).attr(\"id\")===\"verifyYes\")
\t{
\t\t\$.post(
\t\t\t'";
        // line 123
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom")), "html", null, true);
        echo "'+'/deleteImage/' + deleteId,
\t\t\tfunction( ) {
\t\t\t\t\$('#'+deleteId).parent(\"div\").remove();
\t\t\t}
\t\t);
\t\t\$('#verify').css(\"display\",\"none\");
\t}

\tif (\$(this).attr(\"id\")===\"verifyNo\")
\t{
\t\t\$('#verify').css(\"display\",\"none\");\t
\t}

});

});

\t</script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/classroom/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 123,  194 => 107,  191 => 106,  179 => 95,  170 => 92,  166 => 91,  160 => 90,  157 => 89,  153 => 88,  126 => 64,  121 => 62,  101 => 45,  91 => 38,  80 => 30,  70 => 23,  54 => 9,  51 => 8,  44 => 5,  41 => 4,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | Editer la classe{% endblock %}

{% block specific_css %}
<link rel=\"stylesheet\" href=\"{{ url( '/assets/css/editClassroom.css' ) }}\">
{% endblock %}

{% block content %}

<h1>Editer les informations d'une classe</h1>
<p>Consulter les données pour cette classe.</p>

<section id=\"verify\" style=\"display:none\">
    <div>
      <p>Etes vous sur de vouloir continuer?</p>
    </div>
    <div>
      <button id=\"verifyYes\">Oui</button>
      <button id=\"verifyNo\">Non</button>
    </div>
</section>

<form action=\"{{ url( '/backoffice/classroom/edit/' ~ classroom.id )}}\" method=\"post\">

\t  <div class=\"row\">
\t\t
\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"teacherName\">Nom de l'enseignant :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"teacherName\" id=\"teacherName\" value=\"{{classroom.teacherName}}\">
\t\t\t</div>

\t\t</div>

\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"desc\">Description :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"desc\" id=\"desc\" value=\"{{classroom.description}}\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"code\">Code de la classe :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"code\" id=\"code\" value=\"{{classroom.code}}\" disabled>
\t\t\t</div>
\t\t\t
\t\t</div>

\t\t<div class=\"col-12 form-group\">
\t\t\t<button class=\"btn btn-secondary\">Mettre à jour les données de la classe</button>
 \t\t\t<button class=\"btn btn-link\">annuler</button>
\t\t</div>

\t</div>
</form>

<section  id=\"addChild\">
\t
\t\t<h5>Ajouter un enfant</h5>

\t\t<form action=\"{{url('/backoffice/classroom/add_child')}}\" method=\"post\" enctype=\"multipart/form-data\" >

\t\t\t<input type=\"hidden\" name=\"classroom_id\" value=\"{{classroom.id}}\">
\t\t\t
\t\t\t<div class=\"form-group \">
\t\t\t\t<label  for=\"child\">Pseudo : </label>
\t\t\t\t<input class=\" form-control w-50\" type=\"text\" name=\"child\" id=\"child\" placeholder=\"pseudo\">
\t\t\t</div>


\t\t\t<div class=\"custom-file \">
\t\t\t\t<input type=\"file\" name=\"image\" class=\"custom-file-input \">
\t\t\t\t<label for=\"avatar\" class=\"custom-file-label col-6\"></label>
\t\t\t</div>

\t\t\t<button class=\"btn btn-primary mt-2\" id=\"add\">Ajouter le nouvel enfant</button>

\t\t</form>
</section>

\t

<section id=\"listChild\">
\t<h5>Liste des enfants</h5>

\t<div class=\"row\">
\t\t{% for key, child in children %}
\t \t\t<div class=\"col-4\">
\t \t\t\t<img src=\"{{ url( '/assets/img/avatar/' ~ child.avatar ) }}\" alt=\"{{child.pseudo}}\">
\t \t\t\t<p>{{child.pseudo}}</p>
\t \t\t\t<button class='delete btn btn-secondary' id=\"{{child.id}}\" > Effacer </button>
\t \t\t</div>
 \t\t{%endfor%}
\t</div>

 \t
</section>
\t



{% endblock %}


{% block specific_js %}
\t<script>

\$(document).ready(function(){
//--------------------------------------------------TO DELETE
var deleteId;

\$( \".delete\" ).click( function () {
\t\$('#verify').css(\"display\",\"flex\");
\tdeleteId = \$(this).attr(\"id\");

});

\$('#verify button').click(function(){
\tif(\$(this).attr(\"id\")===\"verifyYes\")
\t{
\t\t\$.post(
\t\t\t'{{ url( \"/backoffice/classroom\")}}'+'/deleteImage/' + deleteId,
\t\t\tfunction( ) {
\t\t\t\t\$('#'+deleteId).parent(\"div\").remove();
\t\t\t}
\t\t);
\t\t\$('#verify').css(\"display\",\"none\");
\t}

\tif (\$(this).attr(\"id\")===\"verifyNo\")
\t{
\t\t\$('#verify').css(\"display\",\"none\");\t
\t}

});

});

\t</script>
{% endblock %}", "backoffice/classroom/edit.html.twig", "I:\\xampp-www\\alphacorp\\app\\Views\\backoffice\\classroom\\edit.html.twig");
    }
}
