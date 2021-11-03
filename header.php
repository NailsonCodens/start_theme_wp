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
                /*document.addEventListener( 'DOMContentLoaded', function () {
                    var splide = new Splide( '#slidebanner', {
                        type   : 'loop',
                        focus  : 'left',
                        autoplay: true	
                    } );

                    splide.mount();
                } );*/
            </script>
            <?php wp_head(); ?>
        </head>
        <body <?php body_class() ?> data-url="<?php echo get_site_url(); ?>">
            <header>
            </header