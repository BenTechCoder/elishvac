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
    "hero_text" => "Services",
    "hero_eyebrow" => "",
    "buttons" => array(
        [
            'link' => '/contact/',
            'text' => 'Get a Quote',
            'color' => 'secondary',
        ],
        [
            'link' => '/service-areas/',
            'text' => 'See Service Area',
            'color' => 'primary',
        ]
    )
));
?>
<div class="md:bg-tertiary">
    <section class="wrapper py-xl-2xl">
        <div class="bg-background md:p-s rounded-2xl" style="--space:var(--spacing-l);">
            <?php
            $params = array(
                'post_type'  => 'service',
                'posts_per_page' => -1,
                'post_parent' => 0,
                // Several more arguments could go here. Last one without a comma.
            );

            // Query the posts:
            $services_query = new WP_Query($params);

            // Loop through the Service:
            while ($services_query->have_posts()) :
                $services_query->the_post();
                $page_ID = $post->ID;
            ?>
                <section class="switcher py-xl-2xl" style="--space: var(--spacing-xl)">

                    <article class="prose intersect-once intersect:motion-preset-fade-lg">
                        <h2><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h2>
                        <?php
                        the_content();
                        ?>
                    </article>
                    <?php
                    get_template_part("template-parts/components/services-grid", null, array(
                        "depth" => "sub_page"
                    ));
                    ?>

                </section>

            <?php
            endwhile;

            // Reset Post Data
            wp_reset_postdata();

            ?>
        </div>
    </section>
</div>
<?php get_template_part("template-parts/components/reviews/snippet"); ?>


<?php
get_footer();
