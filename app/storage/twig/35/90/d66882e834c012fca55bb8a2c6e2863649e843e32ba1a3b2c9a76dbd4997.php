<?php

/* /home/vagrant/Code/world-elite-october/themes/worldelite/layouts/default.htm */
class __TwigTemplate_3590d66882e834c012fca55bb8a2c6e2863649e843e32ba1a3b2c9a76dbd4997 extends Twig_Template
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
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title"), "html", null, true);
        echo "</title>
        <meta name=\"keywords\" content=\"your, awesome, keywords, here\" />
        <meta name=\"author\" content=\"Jon Doe\" />
        <meta name=\"description\" content=\"Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei.\" />

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <!-- CSS
        ================================================== -->
        <!--
        <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"bootstrap/css/bootstrap-theme.min.css\">
        <link rel=\"stylesheet\" href=\"assets/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"assets/bower_components/animate.css/animate.min.css\">
        <link rel=\"stylesheet\" href=\"assets/css/main.css\">
        -->
        ";
        // line 25
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 26
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/bower_components/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css", 2 => "assets/bower_components/font-awesome/css/font-awesome.min.css", 3 => "assets/vendor/animate/animate.min.css", 4 => "assets/css/main.css"));
        // line 32
        echo "\" rel=\"stylesheet\">

        <style>
        body {
            padding-top: 60px;
        }
        
        @section('styles')
        @show
        
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <!-- Favicons
        ================================================== -->
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/ico/apple-touch-icon-144-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"assets/ico/apple-touch-icon-114-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/ico/apple-touch-icon-72-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"assets/ico/apple-touch-icon-57-precomposed.png\">
        <link rel=\"shortcut icon\" href=\"assets/ico/favicon.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
    </head>

    <body>
        <!-- Fixed navbar -->
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
          <div class=\"container\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"/\">World Elite Gymnastics</a>
            </div>
            <div class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"active\"><a href=\"/\">HOME</a></li>
                <li><a href=\"";
        // line 74
        echo $this->env->getExtension('CMS')->appFilter("/about");
        echo "\">ABOUT US</a></li>
                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('CMS')->appFilter("/classes");
        echo "\">CLASSES</a></li>
                <li><a href=\"#\">TEAMS</a></li>
                <li><a href=\"#\">CAMPS</a></li>
                <li><a href=\"#\">RESOURCES</a></li>
                <!-- Make a dropdown -->
                <li><a href=\"#\">LOGIN</a></li>
                
                <li><a data-toggle=\"modal\" data-target=\"#myModal\" href=\"#myModal\"><i class=\"fa fa-envelope\"></i></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>

        <!-- Content -->
        <section id=\"layout-content\" class=\"container-full\">
            ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 90
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 91
            echo "                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <div class=\"alert alert-";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
                    </div>
                </div>
            ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 97
        echo "            
            ";
        // line 98
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 99
        echo "        </section>


        <!-- Footer -->
        <footer id=\"layout-footer\" class=\"container-full section section-black section-footer\">
            ";
        // line 104
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 105
        echo "        </footer>


        <!-- MODAL FOR CONTACT -->
        <!-- Modal -->
        <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Contact Us</h4>
              </div>
              <div class=\"modal-body\">
                    <div class=\"row centered\">
                        <address>
                            <strong>World Elite Gymnastics</strong><br>
                            23031 Arroyo Vista<br>
                            Rancho Santa Margarita, CA 92688<br>
                            <i class=\"fa fa-phone\"></i> <a href=\"tel:9498881444\">(949) 888-1444</a>
                        </address>
                        <div id=\"mapwrap\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d830.5273526993104!2d-117.60812384394072!3d33.628405012966!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x94e47a2b14af71!2sWorld+Elite+Gymnastics!5e0!3m2!1sen!2sus!4v1401954935520\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0\"></iframe>
                        </div>  
                    </div>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Save & Go</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Javascripts
        ================================================== -->
        <!-- Scripts -->
        <script src=\"";
        // line 140
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/bower_components/jquery/dist/jquery.min.js", 1 => "assets/bower_components/bootstrap/dist/js/bootstrap.min.js", 2 => "assets/javascript/app.js"));
        // line 144
        echo "\"></script>
        ";
        // line 145
        echo '<script src="'. Request::getBaseUrl() .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBaseUrl() .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBaseUrl() .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 146
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 147
        echo "        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/world-elite-october/themes/worldelite/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 147,  200 => 146,  196 => 145,  193 => 144,  191 => 140,  154 => 105,  150 => 104,  143 => 99,  141 => 98,  138 => 97,  129 => 93,  125 => 91,  123 => 90,  105 => 75,  101 => 74,  80 => 56,  54 => 32,  51 => 26,  48 => 25,  27 => 7,  19 => 1,);
    }
}
