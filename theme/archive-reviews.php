<?php

/**
 * The template for displaying all reviews
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
$post_type = strtoupper(str_replace("_", " ", get_post_type()));
$email = get_option("business_details_business_email");
$google_maps_page = get_option("business_details_google_maps_page");
?>

<?php
get_template_part("template-parts/components/hero", null, array(
    "hero_text" => $post_type,
    "hero_eyebrow" => '',
    "buttons" => false
));
?>

<section class="wrapper py-xl">
    <article class="prose">
        <h2>Leave us a review!</h2>
        <p>Send us an <a href="mailto:<?php echo $email; ?>">Email</a> or leave a review on our <a href="<?php echo $google_maps_page ?>">Google Maps</a></p>
    </article>
    <article class="grid text-left py-xl text-background intersect-once intersect:motion-preset-fade-lg" style="--min-item-size: 450px;">

        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>

                <?php
                // Start the Loop.
                $stars = get_post_meta($post->ID, 'review_stars')[0];
                $link = get_post_meta($post->ID, 'review_link')[0];
                get_template_part('template-parts/components/reviews/review', null, array(
                    'stars' => $stars,
                    'quote' => get_the_content(),
                    'name' => get_the_title(),
                    'link' => ($link) ? $link : get_permalink($post->ID)
                ));
                ?>


        <?php
            // Previous/next page navigation
            endwhile;
        else :

            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content/content', 'none');

        endif;
        ?>
    </article>
</section><!-- #primary -->



<?php
get_footer();
