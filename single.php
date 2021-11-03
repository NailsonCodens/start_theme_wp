<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <figure class="banner">
        <img src="<?php echo get_field('banner_article')['url'] ?>" alt="<?php echo the_field('basico_preview')['alt']; ?>" title="<?php echo get_field('banner_article')['title']; ?>">
    </figure>
    <div class="container">
        <div class="box-info">
           <p class="publish-text">Publicado em: <?php echo get_the_date() ?></p>
            <h1 class="titlepages title-blog"><?php the_title() ?></h1>
            <p class="introduction"><?php echo get_field('introduction') ?></p>

        </div><!--/ box-info -->
    </div><!--/ container -->
    <div class="content-text"><!--CONTENT-->
        <div class="container div-text">
            <?php the_content() ?>
        </div>        
        <div class="author">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-3 col-md-1">
                                <img src="<?php echo get_field('avatar')['url'] ?>" alt="<?php echo the_field('basico_preview')['alt']; ?>" title="<?php echo get_field('author')['title']; ?>" class="avathor">
                            </div>
                            <div class="col-9 col-md">
                                <p class="author-name">AUTOR: <?php echo get_field('author') ?></p>
                            </div>   
                        </div>                 
                    </div>
                </div>
            </div>        
        </div>   
    </div><!--FIM CONTENT-->
</article>
<section class="associated">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="titlepages title-blog associated-title">RELACIONADOS</h1>                
            </div>
            <div class="col col-back-blog">
                <a href="" class="back-blog">VOLTAR AO BLOG</a>
            </div>                        
        </div>
        <div class="row">
            <?php
                $args = new WP_Query([
                    'post_type'			=> 'post',
                    'post_status'		=> 'publish',
                    'orderby'			=> 'rand',
                    'post__not_in'		=> [$post -> ID]
                ]);
                if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
            ?>   
            <div class="col-12 col-md col-img-blog-img">
                <a href="<?php the_permalink() ?>" target="_blank" class="">
                    <img src="<?php echo get_field('banner_article')['url'] ?>" alt="<?php echo the_field('basico_preview')['alt']; ?>" title="<?php echo get_field('banner_article')['title']; ?> " class="img-associetade">           
                    <li class="category_blog blog-associetade">
                        <?php
                        $id = get_the_ID();
                        $cats = get_the_category($id);
                        echo $cats[0]->name;
                        ?>
                    </li>                
                    <h1 class="title-associetade-blog"><?php the_title() ?></h1>      
                    <p class="introduction-associetade-blog"><?php echo excerpt(15) ?></p>
                    <a href="" class="leiamais">LEIA MAIS</a>
                </a>                                
            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>         
        </div>
    </div>
</section>
<section><!--INTEREST-->   
    <?php get_template_part( 'template/interest');?>
</section><!--FIM INTEREST-->   
<section class="map"><!--INTEREST-->   
    <?php get_template_part( 'template/map');?>
</section><!--FIM INTEREST-->
<?php get_footer(); ?>