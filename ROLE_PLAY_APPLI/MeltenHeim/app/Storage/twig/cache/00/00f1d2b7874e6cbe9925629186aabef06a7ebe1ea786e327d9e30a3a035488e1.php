<?php

/* backoffice/classroom/edit.html.twig */
class __TwigTemplate_0c740aa1a8ba337560db02e84c0689b711fe492cb8d885fef2782e2723ca136a extends Twig_Template
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
        echo "<h1>Editer les informations d'une classe</h1>
<p>Consulter les données pour cette classe.</p>
<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/classroom/edit/" . twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\">

\t  <div class=\"row\">
\t\t
\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"teacherName\">Nom de l'enseignant :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"teacherName\" id=\"teacherName\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "teacherName", array()), "html", null, true);
        echo "\">
\t\t\t</div>

\t\t</div>

\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"desc\">Description :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"description\" id=\"desc\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "description", array()), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"code\">Code de la classe :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"code\" id=\"code\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array()), "html", null, true);
        echo "\" disabled>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-12 form-group\">
\t\t\t<button class=\"btn btn-secondary\">Mettre à jour les données de la classe</button>
 \t\t\t<button class=\"btn btn-link\">annuler</button>
\t\t</div>

\t</div>
</form>
<section  id=\"addChild\">
\t<form action=\"";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/addChild")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<h5>Ajouter un enfant</h5>

\t\t\t<input type=\"hidden\" name=\"classroom_id\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t\t
\t\t\t<div class=\"form-group \">
\t\t\t\t<label  for=\"pseudo\">Pseudo : </label>
\t\t\t\t<input class=\" form-control w-50 removeText\" type=\"text\" name=\"pseudo\" placeholder=\"pseudo\">
\t\t\t</div>


\t\t\t<div class=\"custom-file \">
\t\t\t\t<input type=\"file\" name=\"avatar\" class=\"custom-file-input\">
\t\t\t\t<label for=\"avatar\" class=\"custom-file-label col-6 removeText\">Selectionnez une image</label>
\t\t\t</div>

\t\t\t<button type=\"button\" class=\"btn btn-primary mt-2\" id=\"addChildButton\">Ajouter le nouvel enfant</button>
\t\t</form>
</section>

<section id=\"listChild\">
\t<h5>Liste des enfants</h5>

\t<div class=\"row\" id=\"childrenDiv\">
\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["children"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 70
            echo "\t \t\t<div class=\"col-4\">
\t \t\t\t<img src=\"";
            // line 71
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/avatar/" . twig_get_attribute($this->env, $this->source, $context["child"], "avatar", array())))), "html", null, true);
            echo "\" style=\"height:149px;\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "\">
\t \t\t\t<p>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "pseudo", array()), "html", null, true);
            echo "</p>
\t \t\t\t<button class='delete btn btn-secondary' id=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "id", array()), "html", null, true);
            echo "\" > Effacer </button>
\t \t\t</div>
 \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t</div>
</section>

";
    }

    // line 82
    public function block_specific_js($context, array $blocks = array())
    {
        // line 83
        echo "\t<script>

\$(document).ready(function(){
//--------------------------------------------------TO DELETE
var deleteId;

\$( \"#childrenDiv\" ).on('click','.delete', function () {
\t\$('#verify').css(\"display\",\"flex\");
\tdeleteId = \$(this).attr(\"id\");
\tconsole.log(deleteId);
});

\$('#verify button').click(function(){
\tif(\$(this).attr(\"id\")===\"verifyYes\")
\t{
\t\t\$.post(
\t\t\t'";
        // line 99
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom")), "html", null, true);
        echo "'+'/deleteChild/' + deleteId,
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
//--------------------------------------------------TO ADD A CHILD


\$('#addChildButton').click(function()
{
\tvar form = \$('#addChild form').get(0);
\tvar formData = new FormData(form);

\$.ajax({
\turl: '";
        // line 122
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/classroom/addChild")), "html", null, true);
        echo "',
\ttype: 'POST',
\tdata: formData,
\tprocessData:false,
\tcontentType:false,
\tsuccess:function(data)
\t{
\t\tconsole.log(data);
\t\tarrayData = data.split(\"||\");
\t\tconsole.log(arrayData);

\t\tvar text = \"<div class=\\\"col-4\\\"><img src=\\\"";
        // line 133
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/img/avatar/")), "html", null, true);
        echo "\"+arrayData[2]+\" \\\" alt=\\\"\"+arrayData[1]+\"\\\"><p>\"+arrayData[1]+\"</p><button class='delete btn btn-secondary' id=\\\"\"+arrayData[0]+\"\\\" > Effacer </button></div>\";
\t\t\$(\"#listChild>div\").append(text);

\t\talert(\"L'enfant a été correctement ajouté a la classe\");
\t\t\$('.removeText').val(\"\").text(\"Selectionnez une image\");

\t}
});

});

\$(\"input[type=file]\").change(function() {
  filename = this.files[0].name
  \$(\"label[for=avatar]\").text(filename);
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
        return array (  228 => 133,  214 => 122,  188 => 99,  170 => 83,  167 => 82,  160 => 76,  151 => 73,  147 => 72,  141 => 71,  138 => 70,  134 => 69,  110 => 48,  104 => 45,  89 => 33,  79 => 26,  68 => 18,  58 => 11,  54 => 9,  51 => 8,  44 => 5,  41 => 4,  35 => 2,  15 => 1,);
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
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"description\" id=\"desc\" value=\"{{classroom.description}}\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-12 form-group \">
\t\t\t<div class=\"row\">
\t\t\t\t<label class=\"col-3\" for=\"code\">Code de la classe :</label>
 \t\t\t\t<input class=\"col-3 form-control \" type=\"text\" name=\"code\" id=\"code\" value=\"{{classroom.code}}\" disabled>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-12 form-group\">
\t\t\t<button class=\"btn btn-secondary\">Mettre à jour les données de la classe</button>
 \t\t\t<button class=\"btn btn-link\">annuler</button>
\t\t</div>

\t</div>
</form>
<section  id=\"addChild\">
\t<form action=\"{{url('/backoffice/classroom/addChild')}}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<h5>Ajouter un enfant</h5>

\t\t\t<input type=\"hidden\" name=\"classroom_id\" value=\"{{classroom.id}}\">
\t\t\t
\t\t\t<div class=\"form-group \">
\t\t\t\t<label  for=\"pseudo\">Pseudo : </label>
\t\t\t\t<input class=\" form-control w-50 removeText\" type=\"text\" name=\"pseudo\" placeholder=\"pseudo\">
\t\t\t</div>


\t\t\t<div class=\"custom-file \">
\t\t\t\t<input type=\"file\" name=\"avatar\" class=\"custom-file-input\">
\t\t\t\t<label for=\"avatar\" class=\"custom-file-label col-6 removeText\">Selectionnez une image</label>
\t\t\t</div>

\t\t\t<button type=\"button\" class=\"btn btn-primary mt-2\" id=\"addChildButton\">Ajouter le nouvel enfant</button>
\t\t</form>
</section>

<section id=\"listChild\">
\t<h5>Liste des enfants</h5>

\t<div class=\"row\" id=\"childrenDiv\">
\t\t{% for key, child in children %}
\t \t\t<div class=\"col-4\">
\t \t\t\t<img src=\"{{ url( '/assets/img/avatar/' ~ child.avatar ) }}\" style=\"height:149px;\" alt=\"{{child.pseudo}}\">
\t \t\t\t<p>{{child.pseudo}}</p>
\t \t\t\t<button class='delete btn btn-secondary' id=\"{{child.id}}\" > Effacer </button>
\t \t\t</div>
 \t\t{%endfor%}
\t</div>
</section>

{% endblock %}


{% block specific_js %}
\t<script>

\$(document).ready(function(){
//--------------------------------------------------TO DELETE
var deleteId;

\$( \"#childrenDiv\" ).on('click','.delete', function () {
\t\$('#verify').css(\"display\",\"flex\");
\tdeleteId = \$(this).attr(\"id\");
\tconsole.log(deleteId);
});

\$('#verify button').click(function(){
\tif(\$(this).attr(\"id\")===\"verifyYes\")
\t{
\t\t\$.post(
\t\t\t'{{ url( \"/backoffice/classroom\")}}'+'/deleteChild/' + deleteId,
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
//--------------------------------------------------TO ADD A CHILD


\$('#addChildButton').click(function()
{
\tvar form = \$('#addChild form').get(0);
\tvar formData = new FormData(form);

\$.ajax({
\turl: '{{ url( \"/backoffice/classroom/addChild\")}}',
\ttype: 'POST',
\tdata: formData,
\tprocessData:false,
\tcontentType:false,
\tsuccess:function(data)
\t{
\t\tconsole.log(data);
\t\tarrayData = data.split(\"||\");
\t\tconsole.log(arrayData);

\t\tvar text = \"<div class=\\\"col-4\\\"><img src=\\\"{{ url( '/assets/img/avatar/') }}\"+arrayData[2]+\" \\\" alt=\\\"\"+arrayData[1]+\"\\\"><p>\"+arrayData[1]+\"</p><button class='delete btn btn-secondary' id=\\\"\"+arrayData[0]+\"\\\" > Effacer </button></div>\";
\t\t\$(\"#listChild>div\").append(text);

\t\talert(\"L'enfant a été correctement ajouté a la classe\");
\t\t\$('.removeText').val(\"\").text(\"Selectionnez une image\");

\t}
});

});

\$(\"input[type=file]\").change(function() {
  filename = this.files[0].name
  \$(\"label[for=avatar]\").text(filename);
});




});

\t</script>
{% endblock %}
", "backoffice/classroom/edit.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\classroom\\edit.html.twig");
    }
}
