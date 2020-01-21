<?php

/* backoffice/collection/edit.html.twig */
class __TwigTemplate_af38e6e792dc6f9a5aa64a2427d6de6567d4853d9d3baa8267564b3bca8f4caf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "backoffice/collection/edit.html.twig", 1);
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
        echo "BackOffice | Editer les abécédaires";
    }

    // line 4
    public function block_specific_css($context, array $blocks = array())
    {
        // line 5
        echo "<style>
\t#AddLetter
\t{
\t\tpadding:2% 5% 2% 5%;
\t}
</style>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<h1>Editer un abécédaire</h1>
<p>Indiquer les données pour cet abécédaire.</p>

<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/backoffice/collections/edit/" . twig_get_attribute($this->env, $this->source, ($context["collections"] ?? null), "id", array())))), "html", null, true);
        echo "\" method=\"post\">

\t<label for=\"name\">Nom :</label>
 \t<input type=\"text\" name=\"name\" id=\"name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collections"] ?? null), "name", array()), "html", null, true);
        echo "\">

 \t<button class=\"btn btn-secondary\">Mettre à jour l'abécédaire</button>
 \t<button class=\"btn btn-link\">annuler</button>

</form>

\t<h5>Ajouter une LETTRE</h5>
\t<form action=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections/add_letter")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<input type=\"hidden\" name=\"collection_id\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collections"] ?? null), "id", array()), "html", null, true);
        echo "\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"letter\">Lettre</label>
\t\t\t<select name=\"letter\" id=\"letter\" class=\"form-control w-50\">
\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('chr')->getCallable(), array($context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('chr')->getCallable(), array($context["i"])), "html", null, true);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"custom-file\">
\t\t\t<input type=\"file\" name=\"image\" class=\"custom-file-input\" id=\"abe\">
\t\t\t<label for=\"abe\" class=\"custom-file-label\">Choisir une image</label>
\t\t</div>
\t\t<button class=\"btn btn-primary mt-2\" id=\"add\">Ajouter</button>
\t</form>

 \t<p>Voici l'organisation des lettres pour cet abécédaire.</p>

<div class=\"row AddLetter\">
 \t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 50
            echo " 
 \t\t\t<div class=\"col-3\">
 \t\t\t\t<img class=\"img-fluid\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array(("/assets/img/abécédaire/" . twig_get_attribute($this->env, $this->source, $context["image"], "image", array())))), "html", null, true);
            echo "\" alt='#'>
 \t\t\t\t<p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "letter", array()), "html", null, true);
            echo "</p>
 \t\t\t\t<button class='delete btn btn-primary' id=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", array()), "html", null, true);
            echo "\" > X </button>
 \t\t\t</div>
 
 \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</div>


";
    }

    // line 64
    public function block_specific_js($context, array $blocks = array())
    {
        // line 65
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
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/collections")), "html", null, true);
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

\$(\"input[type=file]\").change(function() {
  filename = this.files[0].name
  \$(\"label[for=abe]\").text(filename);
});


});

\t</script>
";
    }

    public function getTemplateName()
    {
        return "backoffice/collection/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 81,  156 => 65,  153 => 64,  146 => 58,  136 => 54,  132 => 53,  128 => 52,  124 => 50,  120 => 49,  106 => 37,  95 => 35,  91 => 34,  84 => 30,  80 => 29,  69 => 21,  63 => 18,  57 => 14,  54 => 13,  44 => 5,  41 => 4,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}BackOffice | Editer les abécédaires{% endblock %}

{% block specific_css %}
<style>
\t#AddLetter
\t{
\t\tpadding:2% 5% 2% 5%;
\t}
</style>
{% endblock %}

{% block content %}

<h1>Editer un abécédaire</h1>
<p>Indiquer les données pour cet abécédaire.</p>

<form action=\"{{ url( '/backoffice/collections/edit/' ~ collections.id )}}\" method=\"post\">

\t<label for=\"name\">Nom :</label>
 \t<input type=\"text\" name=\"name\" id=\"name\" value=\"{{collections.name}}\">

 \t<button class=\"btn btn-secondary\">Mettre à jour l'abécédaire</button>
 \t<button class=\"btn btn-link\">annuler</button>

</form>

\t<h5>Ajouter une LETTRE</h5>
\t<form action=\"{{url('/backoffice/collections/add_letter')}}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t<input type=\"hidden\" name=\"collection_id\" value=\"{{collections.id}}\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"letter\">Lettre</label>
\t\t\t<select name=\"letter\" id=\"letter\" class=\"form-control w-50\">
\t\t\t\t{% for i in 1..26 %}
\t\t\t\t<option value=\"{{chr(i)}}\">{{chr(i)}}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"custom-file\">
\t\t\t<input type=\"file\" name=\"image\" class=\"custom-file-input\" id=\"abe\">
\t\t\t<label for=\"abe\" class=\"custom-file-label\">Choisir une image</label>
\t\t</div>
\t\t<button class=\"btn btn-primary mt-2\" id=\"add\">Ajouter</button>
\t</form>

 \t<p>Voici l'organisation des lettres pour cet abécédaire.</p>

<div class=\"row AddLetter\">
 \t{% for key, image in images %}
 
 \t\t\t<div class=\"col-3\">
 \t\t\t\t<img class=\"img-fluid\" src=\"{{ url( '/assets/img/abécédaire/' ~ image.image ) }}\" alt='#'>
 \t\t\t\t<p>{{image.letter}}</p>
 \t\t\t\t<button class='delete btn btn-primary' id=\"{{image.id}}\" > X </button>
 \t\t\t</div>
 
 \t\t{%endfor%}
</div>


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
\t\t\t'{{ url( \"/backoffice/collections\")}}'+'/deleteImage/' + deleteId,
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

\$(\"input[type=file]\").change(function() {
  filename = this.files[0].name
  \$(\"label[for=abe]\").text(filename);
});


});

\t</script>
{%endblock%}", "backoffice/collection/edit.html.twig", "C:\\xampp\\htdocs\\dashboard\\__Alphacorp\\alphacorp\\app\\Views\\backoffice\\collection\\edit.html.twig");
    }
}
