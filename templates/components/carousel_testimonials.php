<?php
    // General.
    $componentId            = get_sub_field('component_carousel_testimonials_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_carousel_testimonials_class');
    $enableComponent        = get_sub_field('component_carousel_testimonials_enable');
    $globalComponent        = get_sub_field('component_carousel_testimonials_global_component');

    //Settings.
    $heading                = klyp_get_the_field_values($globalComponent, 'carousel_testimonials', 'heading');
    $carousel               = klyp_get_the_field_values($globalComponent, 'carousel_testimonials', 'carousel_testimonials_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-carousel pg-section pg-bg-light pg-color-navy <?php echo $componentClass; ?>">
        <div class="pg-container">
            <?php if ($heading) : ?>
                <h3 class="text-left"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php if ($carousel) : ?>
                <div class="pg-testimonials-carousel owl-carousel owl-theme">
                    <?php foreach ($carousel as $carouselItem) : 
                        $quote          = $carouselItem['quote'];
                        $name           = $carouselItem['name'];
                        $organisation   = $carouselItem['organisation'];
                    ?>
                        <div class="pg-testimonials-carousel__item">
                            <?php if ($quote) : ?>
                                <h5><?php echo $quote; ?></h5>
                            <?php endif; ?>
                            <?php if ($name) : ?>
                                <h6><?php echo $name; ?></h6>
                            <?php endif; ?>
                            <?php if ($organisation) : ?>
                                <p><?php echo $organisation; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
