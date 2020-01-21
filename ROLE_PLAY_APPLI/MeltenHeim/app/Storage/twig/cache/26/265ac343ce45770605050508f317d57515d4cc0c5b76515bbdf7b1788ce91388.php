<?php

/* layout.html.twig */
class __TwigTemplate_af57d2fb490fade6ad12679230a165f810f088dfe5e76a8f7b3e8f59302cf6cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'additional_css' => array($this, 'block_additional_css'),
            'layout' => array($this, 'block_layout'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
            'additional_js' => array($this, 'block_additional_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>MeltenHeim - : ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/img/favicon.ico")), "html", null, true);
        echo "\">
  ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "</head>
<body>
";
        // line 19
        $this->displayBlock('layout', $context, $blocks);
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "
  ";
        // line 22
        $this->displayBlock('js', $context, $blocks);
        // line 31
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        // line 10
        echo "  <!-- @@@ CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/animation.css")), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/reset.css")), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
  ";
        // line 14
        $this->displayBlock('additional_css', $context, $blocks);
        // line 15
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/css/app.css")), "html", null, true);
        echo "\">
  ";
    }

    // line 14
    public function block_additional_css($context, array $blocks = array())
    {
    }

    // line 19
    public function block_layout($context, array $blocks = array())
    {
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
    }

    // line 22
    public function block_js($context, array $blocks = array())
    {
        // line 23
        echo "  <!-- @@@ JS -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
  ";
        // line 27
        $this->displayBlock('additional_js', $context, $blocks);
        // line 28
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/app.js")), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array("/assets/js/change_page.js")), "html", null, true);
        echo "\"></script>
  ";
    }

    // line 27
    public function block_additional_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 27,  126 => 29,  121 => 28,  119 => 27,  113 => 23,  110 => 22,  105 => 20,  100 => 19,  95 => 14,  88 => 15,  86 => 14,  81 => 12,  77 => 11,  74 => 10,  71 => 9,  66 => 6,  61 => 31,  59 => 22,  56 => 21,  54 => 20,  52 => 19,  48 => 17,  46 => 9,  42 => 8,  37 => 6,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>MeltenHeim - : {% block title %}{% endblock %}</title>
  <!-- Favicon-->
  <link rel=\"shortcut icon\" href=\"{{ url( '/assets/img/favicon.ico' ) }}\">
  {% block css %}
  <!-- @@@ CSS -->
  <link rel=\"stylesheet\" href=\"{{ url( '/assets/css/animation.css' )  }}\">
  <link rel=\"stylesheet\" href=\"{{ url( '/assets/css/reset.css' )  }}\">
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">
  {% block additional_css %}{% endblock %}
  <link rel=\"stylesheet\" href=\"{{ url( '/assets/css/app.css' )  }}\">
  {% endblock %}
</head>
<body>
{% block layout %}{% endblock %}
{% block content %}{% endblock %}

  {% block js %}
  <!-- @@@ JS -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
  {% block additional_js %}{% endblock %}
  <script src=\"{{ url( '/assets/js/app.js' )  }}\"></script>
  <script src=\"{{ url( '/assets/js/change_page.js' )  }}\"></script>
  {% endblock %}
</body>
</html>", "layout.html.twig", "C:\\xampp\\htdocs\\dashboard\\MeltenHeim\\app\\Views\\layout.html.twig");
    }
}
