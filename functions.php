<?php

require get_stylesheet_directory() . '/includes/index.php';

/**
 * Adding new menus
 */
function jc_custom_menus() {
    register_nav_menu('brands-menu',__('Brands Menu'));
    register_nav_menu('policy-menu',__('Policy Menu'));
}
add_action('init', 'jc_custom_menus');

/**
 * Adding Footer Widgets
 */
function theme_widgets_init()
{

    register_sidebar(array(
        'name' => __('Theme Footer Links', 'pg-footer-menu'),
        'id' => 'footer-col-1',
        'before_widget' => '<div class="pg-footer__widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="pg-footer__item fw-600">',
        'after_title' => '</div>',
   ));

    register_sidebar(array(
        'name' => __('Theme Brand Links', 'pg-brands'),
        'id' => 'footer-col-2',
        'before_widget' => '<div class="pg-footer__widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="pg-footer__item fw-600">',
        'after_title' => '</div>',
   ));

    register_sidebar(array(
        'name' => __('Theme Policy Links', 'pg-brands'),
        'id' => 'footer-col-3',
        'before_widget' => '<div class="pg-footer__widget">',
        'after_widget' => '</div>',
        'before_title' => '<div class="pg-footer__item fw-600">',
        'after_title' => '</div>',
   ));
    
}
add_action('widgets_init', 'theme_widgets_init');

function filter_posts() {
    
    $category   = $_POST['category'];
    $order      = $_POST['order'];

    if ($order == null) {
        $order = 'DESC';
    }
  
    $args = new WP_Query([
        'category_name'     => $category,
        'posts_per_page'    => 9,
        'order'             => $order,
        'post_type'         => 'post',
        'paged'             => get_query_var( 'paged' ),
    ]);

    if($args->have_posts()) {
        while($args->have_posts()) : $args->the_post();
        ?>
            <div class="col-lg-6 col-xl-4 mb-4">
                <div class="pg-blog-post h-100 d-flex flex-column">
                    <div class="pg-blog-post__image">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                        <div class="pg-blog-post__category">
                            <?php
                                foreach((get_the_category()) as $category) { 
                                    echo $category->cat_name . ' '; 
                                }
                            ?>
                        </div>
                    </div>
                    <div class="pg-blog-post--inner h-100 d-flex flex-column">
                        <div class="pg-blog-post__author">
                            <?php echo get_the_author_firstname() . ' ' .  get_the_author_lastname(); ?>
                        </div>
                        <h4 class="pg-blog-post__heading">
                            <?php echo the_title(); ?>
                        </h4>
                        <a href="<?php echo the_permalink(); ?>" class="pg-blog-post__link mt-auto">View Article</a>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        ?>
        <div class="col-12">
            <?php the_posts_pagination(); ?>
        </div>
        <?php
    } else {
        ?>
        <h5>Sorry... No posts</h5>
        <?php
    }
    
    exit;
}

    add_action('wp_ajax_filter_posts', 'filter_posts');
    add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');
