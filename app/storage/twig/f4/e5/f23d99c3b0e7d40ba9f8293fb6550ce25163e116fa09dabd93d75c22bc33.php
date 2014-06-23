<?php

/* /home/vagrant/Code/world-elite-october/themes/demo/layouts/fallback */
class __TwigTemplate_f4e5f23d99c3b0e7d40ba9f8293fb6550ce25163e116fa09dabd93d75c22bc33 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/world-elite-october/themes/demo/layouts/fallback";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
