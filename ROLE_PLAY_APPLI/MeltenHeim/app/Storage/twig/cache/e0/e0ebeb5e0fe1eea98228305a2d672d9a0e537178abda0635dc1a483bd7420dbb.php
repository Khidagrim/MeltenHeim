<?php

/* backoffice/template.html.twig */
class __TwigTemplate_adc1b7c97f19de290d9a2cca7f33b0a77455cad51c04e5d552d35ce7b011b02a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "backoffice/template.html.twig", 1);
        $this->blocks = array(
            'specific_css' => array($this, 'block_specific_css'),
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_specific_css($context, array $blocks = array())
    {
        // line 3
        echo "  
";
    }

    // line 6
    public function block_layout($context, array $blocks = array())
    {
        // line 7
        echo "  <div id=\"load\"></div>
";
    }

    public function getTemplateName()
    {
        return "backoffice/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block specific_css %}
  
{% endblock %}

{% block layout %}
  <div id=\"load\"></div>
{% endblock %}
", "backoffice/template.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\backoffice\\template.html.twig");
    }
}
