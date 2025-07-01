<section class="reviews-snippet py-2xl bg-foreground text-background" style="--space: var(--spacing-2xl); --reviews-bg: url('<?php echo get_parent_theme_file_uri("/assets/svg/reviews-bg.svg") ?>');">
    <div class="wrapper stack">
        <div class="switcher">
            <h2>5-Star ❤️ From Wayne County NC</h2>
            <ul class="cluster">
                <?php
                $args = array(
                    'post_type'  => 'service_areas',
                    'posts_per_page' => 6,
                    // Several more arguments could go here. Last one without a comma.
                );

                // Query the posts:
                $reviews_query = new WP_Query($args);

                // Loop through the Service:
                while ($reviews_query->have_posts()) :
                    $reviews_query->the_post();
                    // Echo some markup
                    $link = get_post_permalink();
                ?>
                    <a href="<?php echo $link ?>" class="font-display underline">
                        <?php echo get_the_title(); ?>
                    </a>
                <?php
                endwhile;

                // Reset Post Data
                wp_reset_postdata();

                ?>
            </ul>
        </div>
        <ul class="reel">
            <?php
            $args = array(
                'post_type'  => 'review',
                'posts_per_page' => 6,
                // Several more arguments could go here. Last one without a comma.
            );

            // Query the posts:
            $reviews_query = new WP_Query($args);

            // Loop through the Service:
            while ($reviews_query->have_posts()) :
                $reviews_query->the_post();
                // Echo some markup
                $stars = get_post_meta($post->ID, 'review_stars')[0];
                $link = get_post_meta($post->ID, 'review_link')[0];
                get_template_part('template-parts/components/reviews/review', null, array(
                    'stars' => $stars,
                    'quote' => get_the_content(),
                    'name' => get_the_title(),
                    'link' => ($link) ? $link : get_permalink($post->ID)
                ));


            endwhile;

            // Reset Post Data
            wp_reset_postdata();

            ?>
        </ul>
    </div>
</section>