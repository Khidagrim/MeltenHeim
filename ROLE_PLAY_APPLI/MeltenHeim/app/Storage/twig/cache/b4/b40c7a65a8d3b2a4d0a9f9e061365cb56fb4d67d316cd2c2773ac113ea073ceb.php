<?php

/* test.html.twig */
class __TwigTemplate_0b360d7a8a6d286435074be6bba86503346b13249e2054fa05bf8dad77342ab1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>compléter le titre de la page ...</title>
  <!-- @@@ CSS -->
  <link href=\"assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trucs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["truc"]) {
            // line 12
            echo "    <p>";
            echo twig_escape_filter($this->env, $context["truc"], "html", null, true);
            echo "</p>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['truc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "


<!-- @@@ JS -->
<script src=\"https://code.jquery.com/jquery-3.0.0.min.js\"></script>
<script src=\"assets/js/app.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  39 => 12,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>compléter le titre de la page ...</title>
  <!-- @@@ CSS -->
  <link href=\"assets/css/app.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>

{% for truc in trucs %}
    <p>{{truc}}</p>


{% endfor %}



<!-- @@@ JS -->
<script src=\"https://code.jquery.com/jquery-3.0.0.min.js\"></script>
<script src=\"assets/js/app.js\"></script>
</body>
</html>", "test.html.twig", "C:\\xampp\\htdocs\\dashboard\\Lanius\\app\\Views\\test.html.twig");
    }
}
