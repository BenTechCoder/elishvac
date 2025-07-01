<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _tw
 */

get_header();
?>

<?php
get_template_part("template-parts/components/hero", null, array(
    "hero_text" => get_the_title(),
    "hero_eyebrow" => "Services",
    "buttons" => false
));
?>
<div class="md:bg-tertiary">
    <section class="wrapper py-xl-2xl">
        <div class="sidebar bg-background md:p-s rounded-2xl" style="--sidebar-basis: 45ch;">
            <div class="stack" style="--space: var(--spacing-xl)">
                <article class="prose"><?php the_content(); ?>
                </article>
                <?php
                if (!$post->post_parent) {
                    get_template_part("template-parts/components/services-grid", null, array(
                        "depth" => "sub_page"
                    ));
                }
                ?>
            </div>
            <div class="stack">
                <?php
                get_template_part("template-parts/components/faq/faq", 'query', array(
                    'faq_amount' => null
                ));
                get_template_part("template-parts/components/solutions-snippet");
                ?>

            </div>
        </div>
    </section>
</div>
<?php get_template_part("template-parts/components/reviews/snippet"); ?>


<?php
get_footer();
