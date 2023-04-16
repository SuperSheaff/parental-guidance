<?php
    // General.
    $componentId            = get_sub_field('component_post_quote_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_post_quote_class');
    $enableComponent        = get_sub_field('component_post_quote_enable');
    $globalComponent        = get_sub_field('component_post_quote_global_component');

    //Settings.
    $quote                  = klyp_get_the_field_values($globalComponent, 'post_quote', 'quote');
    $name                   = klyp_get_the_field_values($globalComponent, 'post_quote', 'name');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-single-section <?php echo $componentClass; ?>">
        <div class="pg-container">
            <div class="pg-row">
                <div class="col-lg-8 mx-lg-auto">
                    <?php if ($quote) : ?>
                        <div class="pg-single__quote">
                            <em>
                                <?php echo $quote; ?>
                            </em>
                        </div>
                    <?php endif; ?>
                    <?php if ($name) : ?>
                        <div class="pg-single__name">
                            <?php echo $name; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
