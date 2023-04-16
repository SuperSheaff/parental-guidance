<?php
/**
 * The template for displaying blog posts
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ParentalGuidance 2022
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="pg-blog-hero pg-bg-navy">
            <div class="pg-container">
                <h1 class="pg-color-white mb-4">Our Blog</h1>
            </div>
            <svg class="pg-blog-hero__svg d-none d-md-block" viewBox="0 0 1440 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_757_3)">
                <path d="M0 41.3168L80 47.045C160 53.2055 320 64.0134 480 52.8812C640 41.3168 800 6.73135 960 1.00314C1120 -5.15739 1280 18.6201 1360 29.7523L1440 41.3168V318H1360C1280 318 1120 318 960 318C800 318 640 318 480 318C320 318 160 318 80 318H0V41.3168Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_757_3">
                <rect width="1440" height="62" fill="white"/>
                </clipPath>
                </defs>
            </svg>
        </section>
        <section class="pg-blog pg-section">
            <div class="pg-container">
                <div class="pg-row">
                    <div class="col-md-7 col-xl-9 offset-md-5 offset-xl-3 order-2 order-md-1">
                        <h2 class="mb-4">Articles</h2>
                    </div>
                    <div class="col-md-5 col-xl-3 px-0 px-md-3 order-1 order-md-2">
                        <div class="pg-blog__filter-menu--mobile d-md-none">
                            <div class="pg-blog__filter-menu--mobile--btn collapsed" type="button" data-toggle="collapse" data-target="#pg-blog__filter-menu--mobile" aria-expanded="false" aria-controls="pg-blog__filter-menu--mobile">
                                <div class="mr-auto my-auto">Filter</div>
                                <svg class="my-auto" width="21" height="12" viewBox="0 0 21 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.40961 0.439367C9.99341 -0.146456 10.9415 -0.146456 11.5253 0.439367L20.4924 9.43761C21.0762 10.0234 21.0762 10.9748 20.4924 11.5606C19.9086 12.1465 18.9605 12.1465 18.3767 11.5606L10.4651 3.62156L2.55352 11.5559C1.96973 12.1418 1.02164 12.1418 0.437847 11.5559C-0.145949 10.9701 -0.145949 10.0187 0.437847 9.43292L9.40494 0.434681L9.40961 0.439367Z" fill="#28344A"/>
                                </svg>
                            </div>
                            <div class="collapse" id="pg-blog__filter-menu--mobile">
                                <form action="" method=""  class="pg-blog__filter-menu--mobile--body">
                                    <h4>Sort By</h4>
                                    <label class="pg-blog__checkbox--label" for="pg-blog__sortby-mobile--newest">
                                        Newest to Oldest
                                        <input class="pg-blog__sortby" type="checkbox"  name="pg-blog__sortby-mobile--newest" id="pg-blog__sortby-mobile--newest" data-order="DESC" data-category="" checked>  
                                        <span class="pg-blog__checkbox--checkmark"></span>
                                    </label>
                                    <label class="pg-blog__checkbox--label" for="pg-blog__sortby-mobile--oldest">
                                        Oldest to Newest
                                        <input class="pg-blog__sortby" type="checkbox"  name="pg-blog__sortby-mobile--oldest" id="pg-blog__sortby-mobile--oldest" data-order="ASC" data-category="">  
                                        <span class="pg-blog__checkbox--checkmark"></span>
                                    </label>
                                    <h4 class="mt-5">Type of Article</h4>

                                    <?php $categories = get_categories(); ?>

                                    <label class="pg-blog__checkbox--label" for="pg-blog__filterby-mobile--all">
                                        All
                                        <input class="pg-blog__filterby" type="checkbox"  name="pg-blog__filterby-mobile--all" id="pg-blog__filterby-mobile--all" data-order="DESC" data-category="" checked>  
                                        <span class="pg-blog__checkbox--checkmark"></span>
                                    </label>

                                    <?php foreach($categories as $category) : ?>
                                        <label class="pg-blog__checkbox--label" for="pg-blog__filterby-mobile--<?= $category->slug; ?>">
                                            <?= $category->name; ?>
                                            <input class="pg-blog__filterby" type="checkbox"  name="pg-blog__filterby-mobile--<?= $category->slug; ?>" id="pg-blog__filterby-mobile--<?= $category->slug; ?>" data-order="DESC" data-category="<?= $category->slug; ?>">  
                                            <span class="pg-blog__checkbox--checkmark"></span>
                                        </label>
                                    <?php endforeach; ?>

                                </form>
                            </div>  
                        </div>
                        <form action="" method="" class="pg-blog__filter-menu d-none d-md-block">
                            <h4>Sort By</h4>
                            <label class="pg-blog__checkbox--label" for="pg-blog__sortby--newest">
                                Newest to Oldest
                                <input class="pg-blog__sortby" type="checkbox"  name="pg-blog__sortby--newest" id="pg-blog__sortby--newest" data-order="DESC" data-category="" checked>  
                                <span class="pg-blog__checkbox--checkmark"></span>
                            </label>
                            <label class="pg-blog__checkbox--label" for="pg-blog__sortby--oldest">
                                Oldest to Newest
                                <input class="pg-blog__sortby" type="checkbox"  name="pg-blog__sortby--oldest" id="pg-blog__sortby--oldest" data-order="ASC" data-category="">  
                                <span class="pg-blog__checkbox--checkmark"></span>
                            </label>
                            <h4 class="mt-5">Type of Article</h4>

                            <?php $categories = get_categories(); ?>

                            <label class="pg-blog__checkbox--label" for="pg-blog__filterby--all">
                                All
                                <input class="pg-blog__filterby" type="checkbox"  name="pg-blog__filterby--all" id="pg-blog__filterby--all" data-order="DESC" data-category="" checked>  
                                <span class="pg-blog__checkbox--checkmark"></span>
                            </label>

                            <?php foreach($categories as $category) : ?>
                                <label class="pg-blog__checkbox--label" for="pg-blog__filterby--<?= $category->slug; ?>">
                                <?= $category->name; ?>
                                <input class="pg-blog__filterby" type="checkbox"  name="pg-blog__filterby--<?= $category->slug; ?>" id="pg-blog__filterby--<?= $category->slug; ?>" data-order="DESC" data-category="<?= $category->slug; ?>">  
                                <span class="pg-blog__checkbox--checkmark"></span>
                            </label>
                            <?php endforeach; ?>

                        </form>
                    </div>
                    <div class="col-md-7 col-xl-9 order-3">
                        <div class="pg-row load_html">
                            <?php 
                            
                            $args = array(
                                'posts_per_page'    => 9,
                                'order'             => $sortBy,
                                'post_type'         => 'post',
                                'paged'             => get_query_var('paged'),
                            );

                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) :
                                    $query->the_post();
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
                                    <?php echo the_posts_pagination(); ?>
                                </div>
                                <?php
                            endif;
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
