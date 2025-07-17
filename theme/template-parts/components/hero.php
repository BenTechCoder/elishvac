<?php

/**
 * Hero Component
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

$buttons = false;

$buttons_default = array(
    [
        'link' => '/contact/',
        'text' => 'Get a Quote',
        'color' => 'secondary',
    ],
    [
        'link' => '/services/',
        'text' => 'See all Services',
        'color' => 'primary',
    ]
);

if ($args) {
    # code...
    $hero_text = $args['hero_text'];
    $hero_eyebrow = $args['hero_eyebrow'];
    $buttons = $args['buttons'];
}

?>

<section class="hero stack wrapper py-l intersect-once intersect:motion-preset-fade-lg">
    <div class="hero-text stack text-center mx-auto">
        <?php if (is_front_page()) {

        ?>
            <h1 class="eyebrow text-step-0 font-content mx-auto">HVAC Installation and Maintenance in North Carolina</h1>
            <p class="header text-step-5 font-display"><span class="highlight"><?php echo strtoupper("FULL-SERVICE");
                                                                                get_template_part("template-parts/components/highlight"); ?></span> <?php echo strtoupper("HVAC FOR YOUR HOME AND BUSINESS"); ?></p>
        <?php }
        if ($args) {
        ?>

            <p class="eyebrow text-step-0 font-content mx-auto"><?php echo strtoupper($hero_eyebrow) ?></p>
            <h1 class="header text-step-5 font-display highlight"><?php echo strtoupper($hero_text); ?><?php get_template_part("template-parts/components/highlight"); ?></h1>
        <?php } ?>
    </div>
    <div class="hero__buttons cluster justify-center">
        <?php
        $loop_buttons = ($buttons) ? $buttons : $buttons_default;
        foreach ($loop_buttons as $button) {
        ?>

            <a href="<?php echo $button['link'] ?>" class="btn outline-2 outline-<?php echo $button['color'] ?> no-underline"><?php echo $button['text'] ?></a>

        <?php
        }
        ?>
    </div>
</section>
<?php get_template_part("template-parts/components/hero-divider");
?>