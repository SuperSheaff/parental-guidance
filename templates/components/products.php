<?php
    // General.
    $componentId            = get_sub_field('component_products_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_products_class');
    $enableComponent        = get_sub_field('component_products_enable');
    $globalComponent        = get_sub_field('component_products_global_component');

    //Settings.
    $heading                = klyp_get_the_field_values($globalComponent, 'products', 'heading');
    $carousel               = klyp_get_the_field_values($globalComponent, 'products', 'products_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-products pg-section <?php echo $componentClass; ?>">
        <div class="pg-container">
            <?php if ($heading) : ?>
                <h3 class="pg-color-navy"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php if ($carousel) : ?>
                <div class="pg-row">
                    <?php foreach ($carousel as $carouselItem) : 
                        $image  = $carouselItem['image'];
                        $price  = $carouselItem['price'];
                        $title  = $carouselItem['title'];
                        $cta    = $carouselItem['cta'];
                    ?>
                        <div class="col-md-6 col-lg-4 pg-product mb-4">
                            <?php if ($image) : ?>
                                <div class="pg-product__image">
                                    <img src="<?php echo $image; ?>" alt="Product Image">
                                </div>
                            <?php endif; ?>
                            <?php if ($price) : ?>
                                <h6 class="pg-product__price"><?php echo $price; ?></h6>
                            <?php endif; ?>
                            <?php if ($title) : ?>
                                <h5 class="pg-product__title"><?php echo $title; ?></h5>
                            <?php endif; ?>
                            <?php if ($cta) : ?>
                                <a href="<?php echo $cta['url']; ?>" class="pg-product__cta" target="<?php echo $cta['target']; ?>">
                                    <?php echo $cta['title']; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
