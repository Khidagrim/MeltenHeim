<?php

/* home.html.twig */
class __TwigTemplate_478d907321ddee0997dc55d19178ab856689998467d165b63c0331ff30fe3c76 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("backoffice/template.html.twig", "home.html.twig", 1);
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
        echo "Consultation";
    }

    // line 3
    public function block_specific_css($context, array $blocks = array())
    {
        // line 4
        echo "\t<link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<header class=\" d-flex align-items-center justify-content-center\"  style=\"background-color:rgb(32,32,32)\" style=\"height:100px\">
\t\t<h6 class=\"text-center text-light display-1\">Consultation</h6>
\t</header>
\t<main>
\t\t<section class=\"container pt-1\" >
\t\t\t<div id=\"tags\" class=\"row h-100 align-items-center\" >
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            echo "\t\t\t\t\t<div class=\"col h-75 tagContainer\">
\t\t\t\t\t\t<select class=\"tags w-75 h-75 form-control\">
\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 17
                echo "\t\t\t\t\t\t  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t<div class=\"mb-3\" id=\"addTagsContainer\">
\t\t\t\t\t\t<button class=\"btn btn-success\" data-action=\"add\">+</button>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-action=\"rm\">-</button>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section style=\"height:100px\" class=\"mt-4 mb-3 d-flex justify-content-center\" >
\t\t\t<input type=\"text\" name=\"search\" class=\"form-control col-6\" placeholder=\"Recherche par mot-clés\">
\t\t</section>\t

\t\t<section class=\"row\" style=\"margin:0px\">
\t\t\t<div class=\"col-1\"></div>
\t\t\t<button id=\"search\" class=\"btn btn-primary col-2\">Rechercher</button>
\t\t</section>

\t\t<section id=\"dataPossessor\">
\t\t</section>\t
\t</main>
";
    }

    // line 43
    public function block_specific_js($context, array $blocks = array())
    {
        // line 44
        echo "<script>
\$(document).ready(function(){

\$number = 0;
\$maxNumber = 0;

//----------------------------------------------------------- || add/remove a select for tag || ------------------------------------------------------------------------//
\$('#addTagsContainer button').click(function(){
\tif( \$(this).attr('data-action') == \"add\")
\t{
\t\tvar txt = '<div class=\"tagContainer col h-75\"><select class=\"tags w-75 h-75 form-control\">";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "nom", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></div>';
\t\t\$('#tags').prepend(txt);
\t}
\telse if(\$('#tags>div').length>2)
\t{
\t\t\$('.tagContainer')[0].remove();
\t}
});

//----------------------------------------------------------- || search || ------------------------------------------------------------------------//
\$('#search').click(function(){

\tvar datas = [],trigger=false;



\t\$('.tags option:selected').each(function(index, el) 
\t{
\t\tdatas.push(\$(el).val());
\t});


\tif(\$('input[name=\"search\"]').val().length === 0)
\t{
\t\tvar url = \"";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/consultation/tag")), "html", null, true);
        echo "\";
\t\t\$.ajax({
\t\t    url:url,
\t\t    type:\"POST\",
\t\t    data: {datas: datas},
\t\t    success:function(data){\t\t
\t\t    \ttraitement(data);
\t\t    },
\t\t    dataType:\"json\"
\t\t});

\t\ttrigger = true;
\t}
\telse if(!trigger)
\t{
\t\tvar url = \"";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/consultation/mot-cles")), "html", null, true);
        echo "\";
\t\tdatasTxt = \$('input[name=search').val();
\t\t\$.ajax({
\t\t    url:url,
\t\t    type:\"POST\",
\t\t    data: {datas: datasTxt},
\t\t    success:function(data){\t\t
\t\t    \ttraitement(data);
\t\t    },
\t\t    dataType:\"json\"
\t\t});
\t}
\ttrigger = false;

});

function addHTML(i,data,n)
{
\tvar text = \"<section id=\\\"\"+i+\"\\\" class=\\\"sectionContent\\\"><div class=\\\"mt-3 d-flex flex-column\\\"><div id=\\\"sec1\\\"><div class=\\\"row\\\"><div class=\\\"col-3 h-25 d-flex\\\"><p class=\\\"btn btn-secondary mr-5 number\\\"> n°x/y</p><p class=\\\"btn btn-secondary up\\\"><i class=\\\"fas fa-arrow-up\\\"></i></p><p class=\\\"btn btn-secondary down\\\"><i class=\\\"fas fa-arrow-down\\\"></i></p></div><div class=\\\"col-1 h-25\\\"></div><div class=\\\"etoiles h-25\\\"><div class=\\\"row\\\"><div class=\\\"col\\\">\";
\tfor(var i=0,n=\$('#tags>div').length;i<n-1;i++)
\t{
\t\tif(data.nbEtoiles>i)
\t\t{
\t\t\ttext+=\"<img class=\\\"img-fluid\\\" src=\\\"./assets/img/etoile.png\\\" alt=\\\"etoile\\\" style=\\\"height:32px\\\">\";
\t\t}
\t\telse
\t\t{
\t\t\ttext+=\"<img class=\\\"img-fluid\\\" src=\\\"./assets/img/etoileG.png\\\" alt=\\\"etoile\\\" style=\\\"height:32px\\\">\";
\t\t}
\t}


\ttext+=\"</div></div></div><div class=\\\"col-4 h-25\\\"></div></div></div><div id=\\\"sec2\\\" class=\\\"row\\\" style=\\\"margin:0px\\\"><div class=\\\"col-3 d-flex flex-wrap\\\">\";
\tfor(var i=0,n=data.tags.length;i<n;i++)
\t{
\t\ttext +=\"<div style=\\\"max-height:25px\\\" class=\\\" mr-1 mt-1 tagDiv badge badge-pill badge-secondary d-flex justify-content-center align-items-center\\\">\"+data.tags[i].nom+\"</div>\";
\t}
\t\tvar url=\"";
        // line 130
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/backoffice/video/watch/")), "html", null, true);
        echo "\";url+=data.video.id;
\t\ttext+=\"</div><div class=\\\"col-6\\\"><a target=\\\"blank\\\" href=\\\"\"+url+\"\\\"><img style=\\\"width:100%;height:auto;\\\" src=\\\"./assets/image/\"+data.video.image+\"\\\"></a></div><div class=\\\"col-3 pl-3\\\"><textarea cols=\\\"30\\\" rows=\\\"20\\\" placeholder=\\\"Résumé :\\\">\"+data.video.resume+\"</textarea></div></div><div id=\\\"sec3\\\" class=\\\"text-light d-flex\\\"><div class=\\\"row w-100\\\" style=\\\"margin:0px\\\"><div class=\\\"col-3\\\">\t<div id=\\\"internetContainer\\\"><p>Lien Internet :</p><input class=\\\"col form-control\\\" type=\\\"text\\\" placeholder=\\\"Aucun lien vers le site web\\\" readonly value=\\\"\"+data.video.lienInternet+\"\\\"></div></div><div class=\\\"col-1\\\"></div><div class=\\\"col-3\\\"><div id=\\\"wordContainer\\\"><p>Liens Words :</p>\";

\tfor(var i=0,n=data.word.length;i<n;i++)
\t{
\t\tif(data.word.length !== 0)
\t\t{
\t\t\ttext +=\"<input class=\\\"col form-control\\\" type=\\\"text\\\" value=\\\"\"+data.word[i].lienOtherWord+\"\\\" readonly>\";
\t\t}
\t}
\t\tif(data.word.length === 0)
\t\t{
\t\t\ttext +=\"<input class=\\\"col form-control\\\" type=\\\"text\\\" value=\\\"Aucun word dans la base\\\" readonly>\";
\t\t}

\t\ttext+=\"</div></div><div class=\\\"col-1\\\"></div><div class=\\\"col\\\"><div class=\\\"mr-2\\\"><p class=\\\"text-light\\\">Utilisations :</p>\";

\tfor(var i=0,n=data.uses.length;i<n;i++)
\t{
\t\tif(data.uses.length !== 0)
\t\t{
\t\t\ttext +=\"<div class=\\\"uses\\\"><p class=\\\"text-light\\\">\"+data.uses[i].Description+\"</p></div>\";
\t\t}
\t}
\t\tif(data.uses.length === 0)
\t\t{
\t\t\ttext +=\"<div class=\\\"uses\\\"><p class=\\\"text-light\\\">Aucune utilisation spécifique dans la base</p></div>\";
\t\t}

\t\ttext+=\"</div></div></div></div></div></section>\";
\treturn text;
}

//----------------------------------------------------------- || go to an other video || ------------------------------------------------------------------------//
function addJs()
{
\t\$('.up').click(function(){
\t\tif(\$number>0)
\t\t{
\t\t\t\$number--;
\t\t\t\$('.sectionContent').each(function(index, el) {
\t\t\t\tif(\$(this).attr('id') != \$number)
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','none');
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','block');
\t\t\t\t}
\t\t\t});
\t\t}
\t});

\t\$('.down').click(function(){
\t\tif(\$number<\$maxNumber-1)
\t\t{
\t\t\t\$number++;
\t\t\t\$('.sectionContent').each(function(index, el) {
\t\t\t\tif(\$(this).attr('id') != \$number)
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','none');
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','block');
\t\t\t\t}
\t\t\t});
\t\t}

\t});
}


function traitement(data)
{
\t\$dataPossessor = \$('#dataPossessor');
\t\$dataPossessor.html(\"\");
\tvar text = [];
\t\t\$maxNumber = data.length;
\t\tfor(var i = 0,n=data.length;i<n;i++)
\t\t{
\t\t\ttext.push( 
\t\t\t\t{
\t\t\t\t\thtml:addHTML(i,data[\"video\"+i],n),
\t\t\t\t\tetoiles:data[\"video\"+i].nbEtoiles
\t\t\t\t}
\t\t\t);
\t\t}
\t\tfor(var i=0,n=text.length;i<n;i++)
\t\t{
\t\t\tfor(var j=0,n=text.length;j<n;j++)
\t\t\t{
\t\t\tif(text[i].etoiles > text[j].etoiles)
\t\t\t\t{
\t\t\t\t\tvar tmp = text[i];
\t\t\t\t\ttext[i] = text[j];
\t\t\t\t\ttext[j] = tmp;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t\t\t\t
\t\tfor(var i = 0,n=text.length;i<n;i++)
\t\t{
\t\t\t\$dataPossessor.append(text[i].html);
\t\t}

\t\t\$('.sectionContent').each(function(index, el) {
\t\t\$(this).attr('id',index);
\t\t\$(this).children('div').children('div').children('div').children('div').children('.number').text(\"n° \"+(index+1)+\" / \"+text.length);
\t\tif(\$(this).attr('id') != \$number)
\t\t{
\t\t\t\$(this).css('display','none');
\t\t}
\t});
\taddJs();
}



});
</script>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 130,  185 => 93,  167 => 78,  129 => 54,  117 => 44,  114 => 43,  91 => 22,  83 => 19,  72 => 17,  68 => 16,  64 => 14,  60 => 13,  52 => 7,  49 => 6,  44 => 4,  41 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"backoffice/template.html.twig\" %}
{% block title %}Consultation{% endblock %}
{% block specific_css %}
\t<link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
{% endblock %}
{% block content %}
\t<header class=\" d-flex align-items-center justify-content-center\"  style=\"background-color:rgb(32,32,32)\" style=\"height:100px\">
\t\t<h6 class=\"text-center text-light display-1\">Consultation</h6>
\t</header>
\t<main>
\t\t<section class=\"container pt-1\" >
\t\t\t<div id=\"tags\" class=\"row h-100 align-items-center\" >
\t\t\t\t{% for i in 0..4 %}
\t\t\t\t\t<div class=\"col h-75 tagContainer\">
\t\t\t\t\t\t<select class=\"tags w-75 h-75 form-control\">
\t\t\t\t\t\t{% for tag in tags %}
\t\t\t\t\t\t  <option value=\"{{tag.id}}\">{{tag.nom}}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t\t<div class=\"mb-3\" id=\"addTagsContainer\">
\t\t\t\t\t\t<button class=\"btn btn-success\" data-action=\"add\">+</button>
\t\t\t\t\t\t<button class=\"btn btn-danger\" data-action=\"rm\">-</button>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section style=\"height:100px\" class=\"mt-4 mb-3 d-flex justify-content-center\" >
\t\t\t<input type=\"text\" name=\"search\" class=\"form-control col-6\" placeholder=\"Recherche par mot-clés\">
\t\t</section>\t

\t\t<section class=\"row\" style=\"margin:0px\">
\t\t\t<div class=\"col-1\"></div>
\t\t\t<button id=\"search\" class=\"btn btn-primary col-2\">Rechercher</button>
\t\t</section>

\t\t<section id=\"dataPossessor\">
\t\t</section>\t
\t</main>
{% endblock %}

{% block specific_js %}
<script>
\$(document).ready(function(){

\$number = 0;
\$maxNumber = 0;

//----------------------------------------------------------- || add/remove a select for tag || ------------------------------------------------------------------------//
\$('#addTagsContainer button').click(function(){
\tif( \$(this).attr('data-action') == \"add\")
\t{
\t\tvar txt = '<div class=\"tagContainer col h-75\"><select class=\"tags w-75 h-75 form-control\">{% for tag in tags %}<option value=\"{{tag.id}}\">{{tag.nom}}</option>{% endfor %}</select></div>';
\t\t\$('#tags').prepend(txt);
\t}
\telse if(\$('#tags>div').length>2)
\t{
\t\t\$('.tagContainer')[0].remove();
\t}
});

//----------------------------------------------------------- || search || ------------------------------------------------------------------------//
\$('#search').click(function(){

\tvar datas = [],trigger=false;



\t\$('.tags option:selected').each(function(index, el) 
\t{
\t\tdatas.push(\$(el).val());
\t});


\tif(\$('input[name=\"search\"]').val().length === 0)
\t{
\t\tvar url = \"{{ url( '/backoffice/consultation/tag')}}\";
\t\t\$.ajax({
\t\t    url:url,
\t\t    type:\"POST\",
\t\t    data: {datas: datas},
\t\t    success:function(data){\t\t
\t\t    \ttraitement(data);
\t\t    },
\t\t    dataType:\"json\"
\t\t});

\t\ttrigger = true;
\t}
\telse if(!trigger)
\t{
\t\tvar url = \"{{ url( '/backoffice/consultation/mot-cles')}}\";
\t\tdatasTxt = \$('input[name=search').val();
\t\t\$.ajax({
\t\t    url:url,
\t\t    type:\"POST\",
\t\t    data: {datas: datasTxt},
\t\t    success:function(data){\t\t
\t\t    \ttraitement(data);
\t\t    },
\t\t    dataType:\"json\"
\t\t});
\t}
\ttrigger = false;

});

function addHTML(i,data,n)
{
\tvar text = \"<section id=\\\"\"+i+\"\\\" class=\\\"sectionContent\\\"><div class=\\\"mt-3 d-flex flex-column\\\"><div id=\\\"sec1\\\"><div class=\\\"row\\\"><div class=\\\"col-3 h-25 d-flex\\\"><p class=\\\"btn btn-secondary mr-5 number\\\"> n°x/y</p><p class=\\\"btn btn-secondary up\\\"><i class=\\\"fas fa-arrow-up\\\"></i></p><p class=\\\"btn btn-secondary down\\\"><i class=\\\"fas fa-arrow-down\\\"></i></p></div><div class=\\\"col-1 h-25\\\"></div><div class=\\\"etoiles h-25\\\"><div class=\\\"row\\\"><div class=\\\"col\\\">\";
\tfor(var i=0,n=\$('#tags>div').length;i<n-1;i++)
\t{
\t\tif(data.nbEtoiles>i)
\t\t{
\t\t\ttext+=\"<img class=\\\"img-fluid\\\" src=\\\"./assets/img/etoile.png\\\" alt=\\\"etoile\\\" style=\\\"height:32px\\\">\";
\t\t}
\t\telse
\t\t{
\t\t\ttext+=\"<img class=\\\"img-fluid\\\" src=\\\"./assets/img/etoileG.png\\\" alt=\\\"etoile\\\" style=\\\"height:32px\\\">\";
\t\t}
\t}


\ttext+=\"</div></div></div><div class=\\\"col-4 h-25\\\"></div></div></div><div id=\\\"sec2\\\" class=\\\"row\\\" style=\\\"margin:0px\\\"><div class=\\\"col-3 d-flex flex-wrap\\\">\";
\tfor(var i=0,n=data.tags.length;i<n;i++)
\t{
\t\ttext +=\"<div style=\\\"max-height:25px\\\" class=\\\" mr-1 mt-1 tagDiv badge badge-pill badge-secondary d-flex justify-content-center align-items-center\\\">\"+data.tags[i].nom+\"</div>\";
\t}
\t\tvar url=\"{{ url( '/backoffice/video/watch/')}}\";url+=data.video.id;
\t\ttext+=\"</div><div class=\\\"col-6\\\"><a target=\\\"blank\\\" href=\\\"\"+url+\"\\\"><img style=\\\"width:100%;height:auto;\\\" src=\\\"./assets/image/\"+data.video.image+\"\\\"></a></div><div class=\\\"col-3 pl-3\\\"><textarea cols=\\\"30\\\" rows=\\\"20\\\" placeholder=\\\"Résumé :\\\">\"+data.video.resume+\"</textarea></div></div><div id=\\\"sec3\\\" class=\\\"text-light d-flex\\\"><div class=\\\"row w-100\\\" style=\\\"margin:0px\\\"><div class=\\\"col-3\\\">\t<div id=\\\"internetContainer\\\"><p>Lien Internet :</p><input class=\\\"col form-control\\\" type=\\\"text\\\" placeholder=\\\"Aucun lien vers le site web\\\" readonly value=\\\"\"+data.video.lienInternet+\"\\\"></div></div><div class=\\\"col-1\\\"></div><div class=\\\"col-3\\\"><div id=\\\"wordContainer\\\"><p>Liens Words :</p>\";

\tfor(var i=0,n=data.word.length;i<n;i++)
\t{
\t\tif(data.word.length !== 0)
\t\t{
\t\t\ttext +=\"<input class=\\\"col form-control\\\" type=\\\"text\\\" value=\\\"\"+data.word[i].lienOtherWord+\"\\\" readonly>\";
\t\t}
\t}
\t\tif(data.word.length === 0)
\t\t{
\t\t\ttext +=\"<input class=\\\"col form-control\\\" type=\\\"text\\\" value=\\\"Aucun word dans la base\\\" readonly>\";
\t\t}

\t\ttext+=\"</div></div><div class=\\\"col-1\\\"></div><div class=\\\"col\\\"><div class=\\\"mr-2\\\"><p class=\\\"text-light\\\">Utilisations :</p>\";

\tfor(var i=0,n=data.uses.length;i<n;i++)
\t{
\t\tif(data.uses.length !== 0)
\t\t{
\t\t\ttext +=\"<div class=\\\"uses\\\"><p class=\\\"text-light\\\">\"+data.uses[i].Description+\"</p></div>\";
\t\t}
\t}
\t\tif(data.uses.length === 0)
\t\t{
\t\t\ttext +=\"<div class=\\\"uses\\\"><p class=\\\"text-light\\\">Aucune utilisation spécifique dans la base</p></div>\";
\t\t}

\t\ttext+=\"</div></div></div></div></div></section>\";
\treturn text;
}

//----------------------------------------------------------- || go to an other video || ------------------------------------------------------------------------//
function addJs()
{
\t\$('.up').click(function(){
\t\tif(\$number>0)
\t\t{
\t\t\t\$number--;
\t\t\t\$('.sectionContent').each(function(index, el) {
\t\t\t\tif(\$(this).attr('id') != \$number)
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','none');
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','block');
\t\t\t\t}
\t\t\t});
\t\t}
\t});

\t\$('.down').click(function(){
\t\tif(\$number<\$maxNumber-1)
\t\t{
\t\t\t\$number++;
\t\t\t\$('.sectionContent').each(function(index, el) {
\t\t\t\tif(\$(this).attr('id') != \$number)
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','none');
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$(this).css('display','block');
\t\t\t\t}
\t\t\t});
\t\t}

\t});
}


function traitement(data)
{
\t\$dataPossessor = \$('#dataPossessor');
\t\$dataPossessor.html(\"\");
\tvar text = [];
\t\t\$maxNumber = data.length;
\t\tfor(var i = 0,n=data.length;i<n;i++)
\t\t{
\t\t\ttext.push( 
\t\t\t\t{
\t\t\t\t\thtml:addHTML(i,data[\"video\"+i],n),
\t\t\t\t\tetoiles:data[\"video\"+i].nbEtoiles
\t\t\t\t}
\t\t\t);
\t\t}
\t\tfor(var i=0,n=text.length;i<n;i++)
\t\t{
\t\t\tfor(var j=0,n=text.length;j<n;j++)
\t\t\t{
\t\t\tif(text[i].etoiles > text[j].etoiles)
\t\t\t\t{
\t\t\t\t\tvar tmp = text[i];
\t\t\t\t\ttext[i] = text[j];
\t\t\t\t\ttext[j] = tmp;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t\t\t\t
\t\tfor(var i = 0,n=text.length;i<n;i++)
\t\t{
\t\t\t\$dataPossessor.append(text[i].html);
\t\t}

\t\t\$('.sectionContent').each(function(index, el) {
\t\t\$(this).attr('id',index);
\t\t\$(this).children('div').children('div').children('div').children('div').children('.number').text(\"n° \"+(index+1)+\" / \"+text.length);
\t\tif(\$(this).attr('id') != \$number)
\t\t{
\t\t\t\$(this).css('display','none');
\t\t}
\t});
\taddJs();
}



});
</script>
{% endblock %}


", "home.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\home.html.twig");
    }
}
