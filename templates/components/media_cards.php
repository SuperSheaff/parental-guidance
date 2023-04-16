<?php
    // General.
    $componentId            = get_sub_field('component_media_cards_id') ?: 'random_' . rand();
    $componentClass         = get_sub_field('component_media_cards_class');
    $enableComponent        = get_sub_field('component_media_cards_enable');
    $globalComponent        = get_sub_field('component_media_cards_global_component');

    //Settings.
    $mediaCards             = klyp_get_the_field_values($globalComponent, 'media_cards', 'media_cards_repeater');
?>

<?php if ($enableComponent): ?>
    <section id="<?php echo $componentId; ?>" class="pg-media-cards pg-section pg-color-navy <?php echo $componentClass; ?>">
        <div class="pg-container">
            <?php if ($mediaCards) : ?>
                <div class="pg-row">
                    <?php foreach ($mediaCards as $mediaCardsItem) : 
                        $title          = $mediaCardsItem['title'];
                        $description    = $mediaCardsItem['description'];
                        $icons          = $mediaCardsItem['icon_repeater'];
                        $cta            = $mediaCardsItem['cta'];
                    ?>
                        <div class="col-md-6 mb-4">
                            <div class="pg-media-cards__item">
                                <?php if ($title) : ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>
                                <?php if ($description) : ?>
                                    <h5><?php echo $description; ?></h5>
                                <?php endif; ?>
                                <?php if ($icons) : ?>
                                    <div class="pg-media-cards__icons d-flex">
                                        <?php foreach ($icons as $icon) : 
                                        $iconCta    = $icon['cta'];
                                        $iconImage  = $icon['icon'];
                                        ?>
                                        <a href="<?php echo $iconCta['url']; ?>" class="mx-3" target="<?php echo $iconCta['target']; ?>">
                                            <img src="<?php echo $iconImage; ?>" alt="Media Icon">
                                        </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($cta) : ?>
                                    <a href="<?php echo $cta['url']; ?>" class="pg-btn-primary--outline mx-auto" target="<?php echo $cta['target']; ?>">
                                        <?php echo $cta['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <svg class="w-100 pg-svg-wave" viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_189_115)"><path d="M0 160l48-21.3C96 117 192 75 288 58.7c96-15.7 192-5.7 288 16 96 21.3 192 53.3 288 80 96 26.3 192 48.3 288 53.3s192-5 240-10.7l48-5.3v128H0V160z" fill="#28344A"/></g><defs><clipPath id="clip0_189_115"><path fill="#fff" d="M0 0h1440v320H0z"/></clipPath></defs></svg>
    </section>
<?php endif; ?>
