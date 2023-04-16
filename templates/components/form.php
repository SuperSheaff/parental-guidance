<?php
    // General.
    $componentId        = get_sub_field('component_form_id') ?: 'section-contact';
    $componentClass     = get_sub_field('component_form_class');
    $enableComponent    = get_sub_field('component_form_enable');
    $globalComponent    = get_sub_field('component_form_global_component');

    //Settings.
    $subheading         = klyp_get_the_field_values($globalComponent, 'form', 'subheading');
    $heading            = klyp_get_the_field_values($globalComponent, 'form', 'heading') ;
    $description        = klyp_get_the_field_values($globalComponent, 'form', 'description') ;
    $image              = klyp_get_the_field_values($globalComponent, 'form', 'image');
    $shortcode          = klyp_get_the_field_values($globalComponent, 'form', 'shortcode');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-bg-special pg-form <?php echo $componentClass; ?>">
        <svg class="w-100" viewBox="0 0 1440 141" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_189_56)"><path d="M0 109l80-5.3c80-5.7 240-15.7 400-16 160 .3 320 10.3 480 0C1120 77 1280 45 1360 29l80-16v-192H0v288z" fill="#fff"/></g><defs><clipPath id="clip0_189_56"><path fill="#fff" transform="matrix(1 0 0 -1 0 141)" d="M0 0h1440v141H0z"/></clipPath></defs></svg>
        <div class="pg-container pg-section">
            <div class="pg-row">
                <div class="col-lg-7 mb-3 my-lg-auto">
                    <?php if ($subheading) : ?>
                        <h5 class="pg-form__subheading pg-color-white">
                            <?php echo $subheading; ?>
                        </h5>
                    <?php endif; ?>
                    <?php if ($heading) : ?>
                        <h2 class="pg-form__heading pg-color-white">
                            <?php echo $heading; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($description) : ?>
                        <div class="pg-form__description pg-color-white">
                            <?php echo $description; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-5 my-lg-auto">
                    <?php if ($shortcode) : ?>
                        <div class="pg-form__form">
                            <?php echo do_shortcode($shortcode); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <svg class="w-100" viewBox="0 0 1440 109" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_189_58)"><path d="M1440 64l-80 5.3c-80 5.7-240 15.7-400 5.4C800 64 640 32 480 26.7 320 21 160 43 80 53.3L0 64v256h1440V64z" fill="#fff"/></g><defs><clipPath id="clip0_189_58"><path fill="#fff" transform="matrix(-1 0 0 1 1440 0)" d="M0 0h1440v109H0z"/></clipPath></defs></svg>
    </section>
<?php endif; ?>
