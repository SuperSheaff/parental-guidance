<?php
    // General.
    $componentId            = get_sub_field('component_post_image_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_post_image_class');
    $enableComponent        = get_sub_field('component_post_image_enable');
    $globalComponent        = get_sub_field('component_post_image_global_component');

    //Settings.
    $image                = klyp_get_the_field_values($globalComponent, 'post_image', 'image');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-single-section <?php echo $componentClass; ?>">
        <div class="pg-container">
            <div class="pg-row">
                <div class="col-lg-10 mx-lg-auto">
                    <?php if ($image) : ?>
                        <img class="pg-single-image" src="<?php echo $image; ?>" alt="Full Width Image">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
