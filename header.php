<!DOCTYPE html>
<?php 

function fmg_theme_assets(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fmg_theme_assets');
?>
    <html lang="pt-br">
        <head>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/bootstrap-4.6.0/css/bootstrap.min.css"/>            
            <script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/js/jquery-3.3.1.slim.min.js"></script>           
            <script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/bootstrap5/js/bootstrap.min.js"></script>
        	<!--Chama head do wordpress para css customizado-->
            <script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/js/scrollreveal.js"></script>
            <script src="<?php echo get_bloginfo('template_url') ?>/assets/splide/js/splide.min.js"></script>
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/splide/css/splide.min.css">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/splide/css/splide-core.min.css">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/fontawesome/fontawesome-free-6.0.0-beta2-web/css/all.css"/>
            <script>
                document.addEventListener( 'DOMContentLoaded', function () {
                    var splide = new Splide( '#slidebanner', {
                        type   : 'loop',
                        focus  : 'left',
                        autoplay: true	
                    } );

                    splide.mount();
                } );
            </script>
            <?php wp_head(); ?>
        </head>
        <body <?php body_class() ?> data-url="<?php echo get_site_url(); ?>">
            <header>
                <div class="container container-header-mobile">
                    <div class="row containermenutop">
                        <div class="col-6 col-md-2">
                            <a class="menutop" href="tel:(41) 3018-0646">
                                <i class="fas fa-phone-alt iconstop"></i> (41) 3018-0646
                            </a>
                        </div>
                        <div class="col-6 col-md-2">
                            <a href="tel:(41) 98497-5483" class="menutop"><i class="fab fa-whatsapp iconstop"></i> (41) 98497-5483</a>
                        </div>
                        <div class="col-md-4">
                            <p class="menutop address"><i class="fas fa-map-marker-alt iconstop"></i> AV. DO BATEL, 1230 TORRE B, SALA 901 - CURITIBA-PR</p>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="container social">
                                <a href=""><i class="fab fa-whatsapp iconstop"></i></a>
                                <a href=""><i class="fab fa-facebook iconstop"></i></a>
                            </div>
                        </div>                                                
                    </div>
                </div>
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light menu-topo">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?php echo site_url() ?>">
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/icons/logo.png" class="logo" alt="" title="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link menu-principal" aria-current="page" href="<?php echo site_url() ?>">HOME</a>
                                    <?php
                                        if($_SERVER['REQUEST_URI'] == '/'){
                                    ?>
                                        <div class="active-menu"></div>
                                    <?php
                                        }
                                    ?>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-principal" href="<?php the_permalink(135) ?>">QUEM SOMOS</a>
                                    <?php
                                        if($_SERVER['REQUEST_URI'] == '/quem-somos/'){
                                    ?>
                                        <div class="active-menu"></div>
                                    <?php
                                        }
                                    ?>
                                </li>
                                <li class="nav-item nav-drop">
                                    <a class="nav-link menu-principal" href="#" class="dropservice">SERVIÇOS</a>
                                    <div class="dropservice">
                                        <ul>
                                            <a href="<?php echo site_url() ?>/aparelhos-auditivos"><li>Aparelhos auditivos</li></a>
                                            <a href="<?php echo site_url() ?>/implantes-cocleares"><li>Implantes</li></a>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link menu-principal" href="<?php echo site_url() ?>/blog">BLOG</a>
                                    <?php
                                        if($_SERVER['REQUEST_URI'] == '/blog/'){
                                    ?>
                                        <div class="active-menu"></div>
                                    <?php
                                        }
                                    ?>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link menu-principal" href="<?php echo site_url() ?>/contato">CONTATOS</a>
                                    <?php
                                        if($_SERVER['REQUEST_URI'] == '/contato/'){
                                    ?>
                                        <div class="active-menu"></div>
                                    <?php
                                        }
                                    ?>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <a href="<?php echo site_url() ?>/contato" class="btn bluebutton">
                                    FALE COM UM
                                    <br/>
                                    <b>PROFISSIONAL</b>
                                    </a>
                            </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>