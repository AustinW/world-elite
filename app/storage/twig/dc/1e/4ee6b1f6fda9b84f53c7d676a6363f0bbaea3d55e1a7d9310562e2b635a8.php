<?php

/* /home/vagrant/Code/world-elite-october/themes/travu/layouts/default.htm */
class __TwigTemplate_dc1e4ee6b1f6fda9b84f53c7d676a6363f0bbaea3d55e1a7d9310562e2b635a8 extends Twig_Template
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
            ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title") != "Home")) {
            // line 10
            echo "            <li><a href=\"/\">Home</a></li>
            <li class=\"active\">";
            // line 11
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page"), "title")), "html", null, true);
            echo "</li>
            ";
        }
        // line 13
        echo "        </ol>

        <div class=\"row\">
            
            <!-- Article main content -->
            <article class=\"col-sm-12 maincontent\">
                ";
        // line 19
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 20
        echo "            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
    
    <section class=\"container-full top-space\"></section>
";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/world-elite-october/themes/travu/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  52 => 20,  50 => 19,  42 => 13,  37 => 11,  34 => 10,  32 => 9,  23 => 2,  19 => 1,);
    }
}
