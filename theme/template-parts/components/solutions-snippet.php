<section class="py-xl center stack text-center intersect:motion-preset-fade">
    <h2><?php echo strtoupper("Affordable, Quality, Solutions"); ?></h2>
    <p>Partnering with the industry’s best brands to bring North Carolina top-tier heating and cooling solutions.</p>
    <div class="cluster justify-center" style="--space: var(--spacing-xl);">
        <?php

        $args = array(
            'post_type'      => 'solution',
            'posts_per_page' => 4
        );

        // Query the posts:
        $solution_query = new WP_Query($args);

        while ($solution_query->have_posts()) :
            $solution_query->the_post();

            $solution_image = get_post_meta($post->ID, 'solution_logo', true);
            echo wp_get_attachment_image($solution_image, 'full');
        endwhile;

        // Reset Post Data
        wp_reset_postdata();

        ?>
    </div>
</section>