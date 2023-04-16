<?php
    // General.
    $componentId            = get_sub_field('component_general_content_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_general_content_class');
    $enableComponent        = get_sub_field('component_general_content_enable');
    $globalComponent        = get_sub_field('component_general_content_global_component');

    //Settings.
    $bgColor                = klyp_get_the_field_values($globalComponent, 'general_content', 'bg_color') ?: '#FFFFFF';
    $subheading             = klyp_get_the_field_values($globalComponent, 'general_content', 'subheading');
    $heading                = klyp_get_the_field_values($globalComponent, 'general_content', 'heading');
    $content                = klyp_get_the_field_values($globalComponent, 'general_content', 'content');

    // generate css
    $customCss[$componentId]['desktop'] = array (
        'background-color' => $bgColor
    );
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-general-content pg-section <?php echo $componentClass; ?>">
        <div class="pg-container">
            <?php if ($subheading) : ?>
                <h5 class="pg-general-content__subheading pg-subtitle pg-color__secondary">
                    <?php echo $subheading; ?>
                </h5>
            <?php endif; ?>
            <?php if ($heading) : ?>
                <h2 class="pg-general-content__heading">
                    <?php echo $heading; ?>
                </h2>
            <?php endif; ?>
            <?php if ($content) : ?>
                <div class="pg-general-content__content">
                    <?php echo $content; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php echo klyp_minimize_css(klyp_process_css($customCss)); ?>
<?php endif; ?>
