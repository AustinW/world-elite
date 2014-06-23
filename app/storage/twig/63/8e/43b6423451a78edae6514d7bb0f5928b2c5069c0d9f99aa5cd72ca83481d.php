<?php

/* /home/vagrant/Code/world-elite-october/themes/travu/layouts/contact.htm */
class __TwigTemplate_638e43b6423451a78edae6514d7bb0f5928b2c5069c0d9f99aa5cd72ca83481d extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
    <header id=\"head\" class=\"secondary\"></header>

    <!-- container -->
    <div class=\"container\">
        <ol class=\"breadcrumb\">
            <li><a href=\"/\">Home</a></li>
            ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title") != "Home")) {
            // line 10
            echo "            <li class=\"active\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title"), "html", null, true);
            echo "</li>
            ";
        }
        // line 12
        echo "        </ol>

        <div class=\"row\">
            <!-- Article main content -->
            <article class=\"col-sm-9 maincontent\">
                ";
        // line 17
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 18
        echo "            </article>
            <!-- /Article -->
            
            <!-- Sidebar -->
            <aside class=\"col-sm-3 sidebar sidebar-right\">

                <div class=\"widget\">
                    <h4>Address</h4>
                    <address>
                        409 Claranna Ave, Dayton, OH 77030, USA
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        (713) 791-1414
                    </address>
                </div>

            </aside>
            <!-- /Sidebar -->
        </div>
    </div>  <!-- /container -->

    <section class=\"container-full top-space\">
        <div id=\"map\"></div>
    </section>

    <!-- Google Maps -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js\"></script> 
    <script src=\"";
        // line 46
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/google-map.js");
        echo "\"></script>

";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/world-elite-october/themes/travu/layouts/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 48,  79 => 46,  49 => 18,  47 => 17,  40 => 12,  34 => 10,  32 => 9,  23 => 2,  19 => 1,);
    }
}
