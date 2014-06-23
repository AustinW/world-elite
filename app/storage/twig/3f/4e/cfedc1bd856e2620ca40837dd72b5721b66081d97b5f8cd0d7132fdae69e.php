<?php

/* /home/vagrant/Code/world-elite-october/themes/travu/pages/contact.htm */
class __TwigTemplate_3f4ecfedc1bd856e2620ca40837dd72b5721b66081d97b5f8cd0d7132fdae69e extends Twig_Template
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
        echo "<header class=\"page-header\">
                    <h1 class=\"page-title\">Contact us</h1>
                </header>
                
                <p>
                    We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can. Please allow a couple days for me to respond.
                </p>
                <br>
                    <form>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Name\">
                            </div>
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Email\">
                            </div>
                            <div class=\"col-sm-4\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Phone\">
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <textarea placeholder=\"Type your message here...\" class=\"form-control\" rows=\"9\"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <label class=\"checkbox\"><input type=\"checkbox\"> Sign up for newsletter</label>
                            </div>
                            <div class=\"col-sm-6 text-right\">
                                <input class=\"btn btn-action\" type=\"submit\" value=\"Send message\">
                            </div>
                        </div>
                    </form>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/world-elite-october/themes/travu/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
