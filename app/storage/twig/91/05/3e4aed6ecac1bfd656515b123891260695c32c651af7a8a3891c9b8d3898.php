<?php

/* /home/vagrant/Code/world-elite-october/themes/travu/partials/header.htm */
class __TwigTemplate_91053e4aed6ecac1bfd656515b123891260695c32c651af7a8a3891c9b8d3898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\"    content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\"      content=\"radiantweb.com\">
    
    <title>Travu - Free bootstrap theme for October CMS</title>

    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("favicon.ico");
        echo "\">
    
    <link rel=\"stylesheet\" media=\"screen\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/font-awesome.min.css");
        echo "\">

    <!-- Custom styles for our template -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/bootstrap-theme.css");
        echo "\" media=\"screen\" >
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->themeFilter("assets/css/main.css");
        echo "\">
    
    ";
        // line 21
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 22
        echo "    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"home\">
    <!-- Fixed navbar -->
    <div class=\"navbar navbar-inverse navbar-fixed-top headroom\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <!-- Button for smallest screens -->
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
                <a class=\"navbar-brand\" href=\"/\"></a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav pull-right\">
                    <li ";
        // line 41
        if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title")) == "home")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\">Home</a></li>
                    <li ";
        // line 42
        if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title")) == "blog")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/blog\">Blog</a></li>
                    <!-- Sample Dropdown nav --

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">More Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"sidebar-left.html\">Left Sidebar</a></li>
                            <li class=\"active\"><a href=\"sidebar-right.html\">Right Sidebar</a></li>
                        </ul>
                    </li>

                    -- end Sample Dropdown nav -->
                    <li ";
        // line 54
        if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title")) == "contact")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/contact\">Contact</a></li>
                    <li ";
        // line 55
        if ((twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title")) == "download")) {
            echo "class=\"active\"";
        }
        echo "><a class=\"btn\" href=\"/download\">DOWNLOAD NOW</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/world-elite-october/themes/travu/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 55,  103 => 54,  86 => 42,  80 => 41,  59 => 22,  56 => 21,  51 => 19,  47 => 18,  41 => 15,  37 => 14,  31 => 11,  129 => 106,  23 => 2,  19 => 1,  175 => 98,  169 => 94,  161 => 121,  135 => 98,  128 => 94,  106 => 75,  88 => 60,  69 => 44,  27 => 4,  25 => 3,  21 => 1,);
    }
}
