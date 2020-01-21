<?php

/* backoffice/classroom/singleChild.html.twig */
class __TwigTemplate_1a7a5c5146f7441ff3c3913a7589a107936f1d592b24abd291541711594203c4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/classroom/singleChild.html.twig", 1);
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
        if ((($context["order"] ?? null) == "ADD")) {
            // line 10
            echo "<h1>Ajout d'un nouvel enfant à votre classe</h1>
";
        } elseif ((        // line 11
($context["order"] ?? null) == "EDIT")) {
            // line 12
            echo "<h1>Modification de l'enfant ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "pseudo", array()), "html", null, true);
            echo "</h1>
";
        }
        // line 14
        echo "
<section  id=\"child\">
\t<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(((("/classe/" . twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "code", array())) . "/classroom/saveChild/") . twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<h5>Ajouter un enfant</h5>

\t\t\t<input type=\"hidden\" name=\"classroom_id\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["classroom"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t\t
\t\t\t<div class=\"form-group \">
\t\t\t\t<label  for=\"pseudo\">Pseudo : </label>
\t\t\t\t<input class=\" form-control w-50 removeText\" type=\"text\" name=\"pseudo\" placeholder=\"Pseudo\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "pseudo", array()), "html", null, true);
        echo "\">
\t\t\t</div>

\t\t\t<div class=\"custom-file \">
\t\t\t\t<input type=\"file\" name=\"avatar\" class=\"custom-file-input\">
\t\t\t\t<label for=\"avatar\" class=\"custom-file-label col-6 removeText\">";
        // line 28
        if ((($context["order"] ?? null) == "EDIT")) {
            echo "Image actuelle : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "avatar", array()), "html", null, true);
        } else {
            echo " Choisir une image ";
        }
        echo "</label>
\t\t\t</div>
\t\t\t";
        // line 30
        if ((($context["order"] ?? null) == "ADD")) {
            // line 31
            echo "\t\t\t<button type=\"button\" class=\"btn btn-primary mt-2\" id=\"addChildButton\">Ajouter le nouvel enfant</button>
\t\t\t";
        } elseif ((        // line 32
($context["order"] ?? null) == "EDIT")) {
            // line 33
            echo "\t\t\t<button class=\"btn btn-primary mt-2\" id=\"editChildButton\">Editer l'enfant</button>
\t\t\t";
        }
        // line 35
        echo "\t\t</form>
</section>
";
    }

    // line 39
    public function block_specific_js($context, array $blocks = array())
    {
        // line 40
        echo "<script>

\$(document).ready(function(){
//--------------------------------------------------TO ADD A CHILD


\$('#addChildButton').click(function()
{
\tvar form = \$('#child form').get(0);
\tvar formData = new FormData(form);

\$.ajax({
\turl: '";
        // line 52
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
        // line 63
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
        return "backoffice/classroom/singleChild.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  136 => 52,  122 => 40,  119 => 39,  113 => 35,  109 => 33,  107 => 32,  104 => 31,  102 => 30,  92 => 28,  84 => 23,  77 => 19,  71 => 16,  67 => 14,  61 => 12,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  44 => 5,  41 => 4,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | Editer la classe{% endblock %}

{% block specific_css %}
<link rel=\"stylesheet\" href=\"{{ url( '/assets/css/editClassroom.css' ) }}\">
{% endblock %}

{% block content %}
{% if order == \"ADD\" %}
<h1>Ajout d'un nouvel enfant à votre classe</h1>
{% elseif order == \"EDIT\" %}
<h1>Modification de l'enfant {{child.pseudo}}</h1>
{% endif %}

<section  id=\"child\">
\t<form action=\"{{url('/classe/' ~ classroom.code ~ '/classroom/saveChild/' ~ child.id )}}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<h5>Ajouter un enfant</h5>

\t\t\t<input type=\"hidden\" name=\"classroom_id\" value=\"{{classroom.id}}\">
\t\t\t
\t\t\t<div class=\"form-group \">
\t\t\t\t<label  for=\"pseudo\">Pseudo : </label>
\t\t\t\t<input class=\" form-control w-50 removeText\" type=\"text\" name=\"pseudo\" placeholder=\"Pseudo\" value=\"{{child.pseudo}}\">
\t\t\t</div>

\t\t\t<div class=\"custom-file \">
\t\t\t\t<input type=\"file\" name=\"avatar\" class=\"custom-file-input\">
\t\t\t\t<label for=\"avatar\" class=\"custom-file-label col-6 removeText\">{% if order == \"EDIT\" %}Image actuelle : {{child.avatar}}{% else %} Choisir une image {% endif %}</label>
\t\t\t</div>
\t\t\t{% if order == \"ADD\" %}
\t\t\t<button type=\"button\" class=\"btn btn-primary mt-2\" id=\"addChildButton\">Ajouter le nouvel enfant</button>
\t\t\t{% elseif order == \"EDIT\" %}
\t\t\t<button class=\"btn btn-primary mt-2\" id=\"editChildButton\">Editer l'enfant</button>
\t\t\t{% endif %}
\t\t</form>
</section>
{% endblock %}

{% block specific_js %}
<script>

\$(document).ready(function(){
//--------------------------------------------------TO ADD A CHILD


\$('#addChildButton').click(function()
{
\tvar form = \$('#child form').get(0);
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
", "backoffice/classroom/singleChild.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\classroom\\singleChild.html.twig");
    }
}
