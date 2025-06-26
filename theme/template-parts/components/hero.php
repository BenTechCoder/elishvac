<?php

/**
 * Hero Component
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */
if ($args) {
    # code...
    $hero_text = $args['hero_text'];
    $hero_eyebrow = $args['hero_eyebrow'];
}

?>

<section class="hero stack wrapper py-xl">
    <div class="hero-text stack text-center mx-auto">
        <?php if (is_front_page()) {
        ?>
            <h1 class="eyebrow text-step-0 font-content mx-auto">HVAC Installation and Maintenance in North Carolina</h1>
            <p class="header text-step-5 font-display"><span class="underline"><?php echo strtoupper("FULL-SERVICE"); ?></span> <?php echo strtoupper("HVAC FOR YOUR HOME AND BUSINESS"); ?></p>
        <?php }
        if ($args) {
        ?>

            <p class="eyebrow text-step-0 font-content mx-auto"><?php echo $hero_eyebrow ?></p>
            <h1 class="header text-step-5 font-display"><span class="underline"><?php echo strtoupper($hero_text); ?></span></h1>
        <?php } ?>
    </div>
    <div class="hero__buttons mx-auto">
        <a href="https://www.lebronconsulting.tech" class="btn outline-2 outline-primary">Lebron Consulting</a>
        <a href="https://www.lebronconsulting.tech" class="btn bg-foreground text-background">Lebron Consulting</a>
    </div>
</section>
<?php get_template_part("template-parts/components/hero-divider"); 
?>