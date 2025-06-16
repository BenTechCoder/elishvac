<section class="py-2xl wrapper stack" style="--space: var(--spacing-l);">
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
                $link = get_post_meta($post->ID, 'area_link');
            ?>
                <a href="<?php echo $link ?>" class="font-display">
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
            $stars = get_post_meta($post->ID, 'review_stars');
            $link = get_post_meta($post->ID, 'review_link');
            get_template_part('template-parts/components/reviews/review', null, array(
                'stars' => get_post_meta($post->ID, 'review_stars'),
                'quote' => get_the_content(),
                'name' => get_the_title(),
                'link' => ($link) ? $link : get_permalink($post->ID)
            ));


        endwhile;

        // Reset Post Data
        wp_reset_postdata();

        ?>
    </ul>
</section>