<?php
    // General.
    $componentId            = get_sub_field('component_hero_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_hero_class');
    $enableComponent        = get_sub_field('component_hero_enable');
    $globalComponent        = get_sub_field('component_hero_global_component');

    //Settings.
    $bgImage                = klyp_get_the_field_values($globalComponent, 'hero', 'bg_image');
    $heading                = klyp_get_the_field_values($globalComponent, 'hero', 'heading');
    $cta                    = klyp_get_the_field_values($globalComponent, 'hero', 'cta');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-hero pg-bg-navy position-relative <?php echo $componentClass; ?>" style="background-image: url('<?php echo $bgImage; ?>');">
        <div class="pg-row pg-hero__height">
            <div class="col-12 mb-auto mt-auto mb-lg-0">
                <div class="pg-container">
                    <div class="pg-row">
                        <div class="col-md-10 col-lg-8 pg-hero__content">
                            <?php if ($heading) : ?>
                                <h1 class="pg-hero__heading">
                                    <?php echo $heading; ?>
                                </h1>
                            <?php endif; ?>
                            <?php if ($cta) : ?>
                                <a href="<?php echo $cta['url']; ?>" class="pg-btn-white--outline js-video__popup-link" target="<?php echo $cta['target']; ?>">
                                    <div class="d-flex">
                                        <span class="my-auto mr-2"><?php echo $cta['title']; ?></span><svg class="my-auto" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0s10 4.477 10 10zM6.875 6.562v6.875c0 .34.184.653.48.817.293.168.657.16.946-.016l5.625-3.437a.943.943 0 00.449-.801.943.943 0 00-.45-.8L8.302 5.761c-.29-.211-.653-.184-.946-.016a.932.932 0 00-.48.816z"/></svg>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <svg class="w-100 mt-auto" viewBox="0 0 1440 184" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 151.417l48-5.3c48-5.7 144-15.7 240-48 96-31.7 192-85.7 288-96 96-10.7 192 21.3 288 48 96 26.3 192 48.3 288 42.6 96-5.3 192-37.3 240-53.3l48-16v160H0v-32z" fill="#fff"/></svg>
        </div>
    </section>
<?php endif; ?>
