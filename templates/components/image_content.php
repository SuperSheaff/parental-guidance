<?php
    // General.
    $componentId            = get_sub_field('component_image_content_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_image_content_class');
    $enableComponent        = get_sub_field('component_image_content_enable');
    $globalComponent        = get_sub_field('component_image_content_global_component');

    //Settings.
    $layout                 = klyp_get_the_field_values($globalComponent, 'image_content', 'layout');
    $bgColor                = klyp_get_the_field_values($globalComponent, 'image_content', 'bg_color') ?: '#FFFFFF';
    $headingColor           = klyp_get_the_field_values($globalComponent, 'image_content', 'heading_color') ?: '#28344A';
    $image                  = klyp_get_the_field_values($globalComponent, 'image_content', 'image');
    $subheading             = klyp_get_the_field_values($globalComponent, 'image_content', 'subheading');
    $decalText              = klyp_get_the_field_values($globalComponent, 'image_content', 'decal_text');
    $heading                = klyp_get_the_field_values($globalComponent, 'image_content', 'heading');
    $content                = klyp_get_the_field_values($globalComponent, 'image_content', 'content');
    $cta                    = klyp_get_the_field_values($globalComponent, 'image_content', 'cta');

    switch ($layout) {
        case 'image_left':
            $contentColumnClass  = 'order-lg-2 offset-lg-1';
            $imageColumnClass    = 'order-lg-1';
            $decalClass          = '';
            break;
        case 'image_right':
            $contentColumnClass  = '';
            $imageColumnClass    = 'offset-lg-1';
            $decalClass          = 'right';
            break;
    }

    // generate css
    $customCss[$componentId]['desktop'] = array (
        'background-color' => $bgColor,
        'color' => $headingColor
    );
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-image_content pg-section <?php echo $componentClass; ?>">
        <div class="pg-container">
            <div class="pg-row">
                <div class="col-lg-6 mb-3 my-lg-auto <?php echo $contentColumnClass; ?>">
                    <?php if ($subheading) : ?>
                        <h5 class="pg-image_content__subheading">
                            <?php echo $subheading; ?>
                        </h5>
                    <?php endif; ?>
                    <?php if ($heading) : ?>
                        <h2 class="pg-image_content__heading">
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($content) : ?>
                        <div class="pg-image_content__content">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($cta) : ?>
                        <a href="<?php echo $cta['url']; ?>" class="pg-btn-primary--outline" target="<?php echo $cta['target']; ?>">
                            <?php echo $cta['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5 my-lg-auto <?php echo $imageColumnClass; ?>">
                    <?php if ($image) : ?>
                        <img src="<?php echo $image; ?>" alt="Image">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if ($decalText) : ?>
            <div class="pg-image_content__decal-text <?php echo $decalClass; ?>">
                <h5 class="my-auto">
                    <?php echo $decalText; ?>
                </h5>
            </div>
        <?php endif; ?>
    </section>
    <?php echo klyp_minimize_css(klyp_process_css($customCss)); ?>
<?php endif; ?>
