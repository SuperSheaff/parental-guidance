<?php
    // General.
    $componentId            = get_sub_field('component_post_general_content_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_post_general_content_class');
    $enableComponent        = get_sub_field('component_post_general_content_enable');
    $globalComponent        = get_sub_field('component_post_general_content_global_component');

    //Settings.
    $content                = klyp_get_the_field_values($globalComponent, 'post_general_content', 'content');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-single-section <?php echo $componentClass; ?>">
        <div class="pg-container">
            <div class="pg-row">
                <div class="col-lg-10 mx-lg-auto">
                    <?php if ($content) : ?>
                        <div class="pg-general-content__content">
                            <?php echo $content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
