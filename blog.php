<?php /* Template Name: Blog externa */?>
<?php get_header(); ?>
                <form  method="GET">
                    <div class="div-form-search" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                        <input type="text" placeholder="Pesquisar" name="search" value="" class="search-input"/>
                        <button type="submit" class="btn-sub">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>                    
                </form>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = new WP_Query([
                    'post_type'			=> 'post',
                    'post_status'		=> 'publish',
                    'orderby'			=> 'rand',
                    'posts_per_page'    => '6',
                    'paged' => $paged,
                    's' => $_GET['search'],
                ]);
                add_filter( 'posts_where', 'title_filter', 10, 2 );
                $query = new WP_Query($args);
                remove_filter( 'posts_where', 'title_filter', 10, 2 );                
                if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
            ?>   
            <div class="col-12 col-md-6 col-img-blog-img">
                <a href="<?php the_permalink() ?>" target="_blank" class="">
                    <img src="<?php echo get_field('banner_article')['url'] ?>" alt="<?php echo the_field('basico_preview')['alt']; ?>" title="<?php echo get_field('banner_article')['title']; ?> " class="img-associetade-blog">           
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
    <?php
        $total_pages = $args->max_num_pages;

            if ($total_pages > 1){

                $current_page = max(1, get_query_var('paged'));
    ?>
    <div class="container linkpc">
        <div class="linkpage">
        <?php
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '/page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text'    => __('«'),
                        'next_text'    => __('»'),
                    ));
        ?>
        </div>
    </div>
    <?php
            }            
    ?>    
<?php get_footer(); ?>