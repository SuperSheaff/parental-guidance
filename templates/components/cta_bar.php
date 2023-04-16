<?php
    // General.
    $componentId            = get_sub_field('component_cta_bar_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_cta_bar_class');
    $enableComponent        = get_sub_field('component_cta_bar_enable');
    $globalComponent        = get_sub_field('component_cta_bar_global_component');

    //Settings.
    $heading                = klyp_get_the_field_values($globalComponent, 'cta_bar', 'heading');
    $cta                    = klyp_get_the_field_values($globalComponent, 'cta_bar', 'cta');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-cta-bar pg-section pg-bg-orange <?php echo $componentClass; ?>">
        <div class="pg-container text-center">
            <?php if ($heading) : ?>
                <h3 class="pg-cta-bar__heading pg-color-white">
                    <?php echo $heading; ?>
                </h3>
            <?php endif; ?>
            <?php if ($cta) : ?>
                <a href="<?php echo $cta['url']; ?>" class="pg-btn-white--outline" target="<?php echo $cta['target']; ?>">
                    <?php echo $cta['title']; ?>
                </a>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
