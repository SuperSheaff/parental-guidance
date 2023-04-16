<?php
    // General.
    $componentId            = get_sub_field('component_post_image_content_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_post_image_content_class');
    $enableComponent        = get_sub_field('component_post_image_content_enable');
    $globalComponent        = get_sub_field('component_post_image_content_global_component');

    //Settings.
    $layout                 = klyp_get_the_field_values($globalComponent, 'post_image_content', 'layout');
    $image                  = klyp_get_the_field_values($globalComponent, 'post_image_content', 'image');
    $content                = klyp_get_the_field_values($globalComponent, 'post_image_content', 'content');

    switch ($layout) {
        case 'image_right':
            $contentColumnClass  = 'order-lg-1 offset-lg-1';
            $imageColumnClass    = 'order-lg-2';
            break;
        case 'image_left':
            $contentColumnClass  = '';
            $imageColumnClass    = 'offset-lg-1';
            break;
    }
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-single-section mb-3 <?php echo $componentClass; ?>">
        <div class="pg-container">
            <div class="pg-row">
                <div class="col-lg-5 mb-3 my-lg-auto <?php echo $imageColumnClass; ?>">
                    <?php if ($image) : ?>
                        <img src="<?php echo $image; ?>" alt="Image" class="pg-single-image-content__image">
                    <?php endif; ?>
                </div>
                <div class="col-lg-5 my-lg-auto <?php echo $contentColumnClass; ?>">
                    <?php if ($content) : ?>
                        <div class="pg-post_image_content__content">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
