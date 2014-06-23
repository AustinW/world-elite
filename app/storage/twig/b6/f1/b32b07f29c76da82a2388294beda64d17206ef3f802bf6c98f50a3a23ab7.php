<?php

/* /home/vagrant/Code/world-elite-october/themes/travu/layouts/home.htm */
class __TwigTemplate_b6f1b32b07f29c76da82a2388294beda64d17206ef3f802bf6c98f50a3a23ab7 extends Twig_Template
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
<!-- Header -->
    <header id=\"head\">
        <div class=\"container\">
            <div class=\"row\">
                <h1 class=\"lead\">AWESOME, CUSTOMIZABLE, FREE</h1>
                <p class=\"tagline\">simple bootstrap design for <a href=\"http://octobercms.com\">October CMS</a></p>
                <p><a class=\"btn btn-default btn-lg\" role=\"button\">MORE INFO</a> <a class=\"btn btn-action btn-lg\" role=\"button\">DOWNLOAD NOW</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class=\"container text-center\">
        <br> <br>
        <h2 class=\"thin\">The best place to tell people why they are here</h2>
        <p class=\"text-muted\">
            The difference between involvement and commitment is like an eggs-and-ham breakfast:<br> 
            the chicken was involved; the pig was committed.
        </p>
    </div>
    <!-- /Intro-->
        
    <!-- Highlights - jumbotron -->
    <div class=\"jumbotron top-space\">
        <div class=\"container\">
            
            <h3 class=\"text-center thin\">Reasons to use this template</h3>
            
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-cogs fa-5\"></i>Bootstrap-powered</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-flash fa-5\"></i>Fat-free</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-heart fa-5\"></i>Creative Commons</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-6 highlight\">
                    <div class=\"h-caption\"><h4><i class=\"fa fa-smile-o fa-5\"></i>Author's support</h4></div>
                    <div class=\"h-body text-center\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                    </div>
                </div>
            </div> <!-- /row  -->
        
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class=\"container\">

        <h2 class=\"text-center top-space\">Frequently Asked Questions</h2>
        <br>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h4>Which code editor would you recommend?</h4>
                <p>I'd highly recommend you <a href=\"http://www.sublimetext.com/\">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
            </div>
            <div class=\"col-sm-6\">
                <h4>Nice header. Where do I find more images like that one?</h4>
                <p>
                    Well, there are thousands of stock art galleries, but personally, 
                    I prefer to use photos from these sites: <a href=\"http://unsplash.com\">Unsplash.com</a> 
                    and <a href=\"http://www.flickr.com/creativecommons/by-2.0/tags/\">Flickr - Creative Commons</a></p>
            </div>
        </div> <!-- /row -->

        <div class=\"row\">
            <div class=\"col-sm-6\">
                <h4>Can I use it to build a site for my client?</h4>
                <p>
                    Yes, you can. You may use this template for any purpose, just don't forget about the <a href=\"http://creativecommons.org/licenses/by/3.0/\">license</a>, 
                    which says: \"You must give appropriate credit\", i.e. you must provide the name of the creator and a link to the original template in your work. 
                </p>
            </div>
            <div class=\"col-sm-6\">
                <h4>Can you customize this template for me?</h4>
                <p>Yes, I can. Please drop us a line @ <a href=\"http://goradiantweb.com\">goradiantweb.com</a> and describe your needs in details. Please note, my services are not cheap.</p>
            </div>
        </div> <!-- /row -->

        <div class=\"jumbotron top-space\">
            <p>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</p>
            <br />
            <p class=\"text-center\"><a class=\"btn btn-primary btn-large\">Learn more »</a></p>
        </div>

    </div>  <!-- /container -->
    
    <section class=\"container-full top-space\"></section>
";
        // line 106
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/world-elite-october/themes/travu/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 106,  23 => 2,  19 => 1,  175 => 98,  169 => 94,  161 => 121,  135 => 98,  128 => 94,  106 => 75,  88 => 60,  69 => 44,  27 => 4,  25 => 3,  21 => 1,);
    }
}
