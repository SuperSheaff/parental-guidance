<?php
    // General.
    $componentId        = get_sub_field('component_form_subscribe_id') ?: 'section-contact';
    $componentClass     = get_sub_field('component_form_subscribe_class');
    $enableComponent    = get_sub_field('component_form_subscribe_enable');
    $globalComponent    = get_sub_field('component_form_subscribe_global_component');

    //Settings.
    $heading            = klyp_get_the_field_values($globalComponent, 'form_subscribe', 'heading') ;
    $content            = klyp_get_the_field_values($globalComponent, 'form_subscribe', 'content');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-section pg-bg-navy pg-form <?php echo $componentClass; ?>">
        <div class="pg-container ">
            <?php if ($heading) : ?>
                <h3 class="pg-form__heading pg-color-white text-center">
                    <?php echo $heading; ?>
                </h3>
            <?php endif; ?>
            <?php if ($content) : ?>
                <div class="pg-row">
                    <div class="col-lg-5 mx-lg-auto">
                        <div class="pg-form__form_subscribe text-center">
                            <?php echo $content; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
