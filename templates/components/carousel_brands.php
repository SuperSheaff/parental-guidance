<?php
    // General.
    $componentId            = get_sub_field('component_carousel_brands_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_carousel_brands_class');
    $enableComponent        = get_sub_field('component_carousel_brands_enable');
    $globalComponent        = get_sub_field('component_carousel_brands_global_component');

    //Settings.
    $carousel               = klyp_get_the_field_values($globalComponent, 'carousel_brands', 'carousel_brands_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-carousel pg-section <?php echo $componentClass; ?>">
        <div class="pg-container">
            <?php if ($carousel) : ?>
                <div class="pg-brands-carousel owl-carousel owl-theme">
                    <?php foreach ($carousel as $carouselItem) : ?>
                        <img src="<?php echo $carouselItem['image']; ?>" class="pg-brands-carousel__item" alt="Brand Image">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
