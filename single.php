<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container div-text">
            <?php the_content() ?>
        </div>        

           <p class="publish-text">Publicado em: <?php echo get_the_date() ?></p>
            <h1 class="titlepages title-blog"><?php the_title() ?></h1>
            <p class="introduction"><?php echo get_field('introduction') ?></p>


<?php
    $args = new WP_Query([
        'post_type'			=> 'post',
        'post_status'		=> 'publish',
        'orderby'			=> 'rand',
        'post__not_in'		=> [$post -> ID]
    ]);
    if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
?>   
    <li class="category_blog blog-associetade">
        <?php
        $id = get_the_ID();
        $cats = get_the_category($id);
        echo $cats[0]->name;
        ?>
    </li>                

<?php endwhile; endif; wp_reset_postdata(); ?>         
<?php get_footer(); ?>