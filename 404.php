<?php
/**
 * The template for the 404 error page
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
        <section class="pg-404 pg-bg-navy pg-color-white">
            <div class="pg-container">
                <h1>Error 404</h1>
                <p class="pg-intro-p">Uh oh... looks like that page doesn't exist.</p>
                <a href="<?php echo get_site_url(); ?>" class="pg-btn-primary">Take me home</a>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
