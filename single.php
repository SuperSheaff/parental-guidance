<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ParentalGuidance 2022
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <section class="pg-single-hero pg-bg-navy position-relative">
                    <div class="pg-container">
                        <div class="pg-row">
                            <div class="col-12">
                                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="pg-single-hero__backlink">Back to Blog</a>
                                <div class="pg-single-hero__image">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                    <div class="pg-single-hero__category">
                                        <?php
                                            foreach((get_the_category()) as $category) { 
                                                echo $category->cat_name . ' '; 
                                            }   
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 mx-lg-auto">
                                <div class="d-flex">
                                    <div class="pg-single-hero__author">
                                        <?php echo get_the_author_firstname() . ' ' .  get_the_author_lastname(); ?>
                                    </div>
                                    <div class="pg-single-hero__dot"></div>
                                    <div class="pg-single-hero__date">
                                        <?php echo get_the_date('d/m/Y'); ?>
                                    </div>
                                </div>
                                <h1 class="pg-single-hero__heading h2">
                                    <?php echo the_title(); ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <svg class="pg-single-hero__svg d-none d-md-block" viewBox="0 0 1440 294" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1440 38.2281L1360 43.5282C1280 49.2282 1120 59.2281 960 48.9281C800 38.2281 640 6.22815 480 0.928151C320 -4.77185 160 17.2282 80 27.5282L0 38.2281V294.228H80C160 294.228 320 294.228 480 294.228C640 294.228 800 294.228 960 294.228C1120 294.228 1280 294.228 1360 294.228H1440V38.2281Z" fill="white"/>
                    </svg>
                    <svg class="pg-single-hero__svg d-md-none" viewBox="0 0 414 294" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M414 38.1985L391 43.4944C368 49.19 322 59.1822 276 48.8902C230 38.1985 184 6.22332 138 0.927432C92 -4.76815 46 17.2148 23 27.5068L0 38.1985V294H23C46 294 92 294 138 294C184 294 230 294 276 294C322 294 368 294 391 294H414V38.1985Z" fill="white"/>
                    </svg>
                </section>
                <?php
                    if (have_rows('components')) {
                        while (have_rows('components')) {
                            the_row();
                            $layoutName = get_row_layout();
                            get_template_part('/templates/components/' . $layoutName);
                        }
                    }
                ?>
                <section class="pg-single-section">
                    <div class="pg-container">
                        <div class="pg-row">
                            <div class="col-lg-10 mx-lg-auto">
                                <div class="pg-single-author mb-3">
                                    <div class="d-flex flex-column flex-lg-row">
                                        <img src="<?php echo get_avatar_url(get_the_author_ID(), ['size' => '256']); ?>" alt="Author Avatar" class="pg-single-author--image mb-3 mb-lg-0">
                                        <div class="pg-single-author--info">
                                            <div>About the Author</div>
                                            <h4 class="pg-single-author--name mb-0"> <?php echo get_the_author_firstname() . ' ' .  get_the_author_lastname(); ?></h4>
                                            <div><?php echo the_author_description(); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pg-single-section position-relative">
                    <div class="pg-container">
                        <?php 
                            $related_posts_query = new WP_Query(array(
                                'post_type' => 'post',
                                'category__in' => wp_get_post_categories(get_the_ID()),
                                'post__not_in' => array(get_the_ID()),
                                'posts_per_page' => 3,
                                'orderby' => 'date',
                            ));

                            if ($related_posts_query->have_posts()) :
                        ?>
                                <div class="pg-row">
                                    <div class="col-lg-10 mx-lg-auto">
                                        <h4 class="text-center mb-4">Related Articles</h4>
                                        <div class="pg-row">
                                            <?php while ($related_posts_query->have_posts()) : ?>
                                                <?php $related_posts_query->the_post(); ?>
                                                    <div class="col-md-6 col-lg-4 mx-lg-auto">
                                                        <div class="pg-single__related-post">
                                                            <div class="pg-single__related-post__image">
                                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                                                                <div class="pg-single__related-post__category">
                                                                    <?php
                                                                        foreach((get_the_category()) as $category) { 
                                                                            echo $category->cat_name . ' '; 
                                                                        }   
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="pg-single__related-post--inner">
                                                                <div class="pg-single__related-post__author">
                                                                    <?php echo get_the_author_firstname() . ' ' .  get_the_author_lastname(); ?>
                                                                </div>
                                                                <h4 class="pg-single__related-post__heading">
                                                                    <?php echo the_title(); ?>
                                                                </h4>
                                                                <a href="<?php echo the_permalink(); ?>" class="pg-single__related-post__link">View Article</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                    <svg class="pg-single__svg d-none d-md-block" viewBox="0 0 1439 269" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 109L48 87.7C96 66 192 24 288 7.69999C384 -8.00001 480 1.99999 576 23.7C672 45 768 77 864 103.7C960 130 1056 152 1152 157C1248 162 1344 152 1392 146.3L1440 141V269H1392C1344 269 1248 269 1152 269C1056 269 960 269 864 269C768 269 672 269 576 269C480 269 384 269 288 269C192 269 96 269 48 269H0V109Z" fill="#28344A"/>
                    </svg>
                </section>
                <?php
            endwhile;
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
