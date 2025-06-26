<ul class="grid">
    <?php
    $grid_level = 0;
    $grid_amount = 4;
    $parent_page_ID = 0;
    if ($args) {
        if ($args['depth'] = 'sub_page') {
            $grid_level = $post->ID;
            $parent_page_ID = $post->ID;
            $grid_amount = -1;
        }
    }
    $params = array(
        'post_type'  => 'service',
        'posts_per_page' => $grid_amount,
        'post_parent' => $grid_level,
        // Several more arguments could go here. Last one without a comma.
    );

    // Query the posts:
    $services_query = new WP_Query($params);

    // Loop through the Service:
    while ($services_query->have_posts()) :
        $services_query->the_post();
        $page_ID = ($parent_page_ID) ? $parent_page_ID : $post->ID;
        get_template_part("template-parts/components/service-item", null, array(
            'service_name' => get_the_title(),
            'icon' => reset(get_post_meta($page_ID, 'service_icon'))
        ));

    endwhile;

    // Reset Post Data
    wp_reset_postdata();

    ?>
</ul>