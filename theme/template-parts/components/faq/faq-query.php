<?php
$get_all_faqs = false;
$faq_ids = array(0);
if ($args) {
    if (array_key_exists('get_all_faqs', $args)) {
        $get_all_faqs = $args['get_all_faqs'];
    }
}
if (get_post_type() === "page") {
    $faq_ids = (array) pods('page', get_the_ID())->field("page_faqs.ID");
}

if (get_post_type() === "service") {
    $faq_ids = (array) pods('service', get_the_ID())->field("service_faqs.ID");
}

// Generate meta_query arrays based on tags selected
$query = array(
    'post_type'      => 'faq',
    'posts_per_page' => ($args["faq_amount"]) ? $args["faq_amount"] : 5
);

if (!$get_all_faqs) {
    $query['post__in'] =  $faq_ids;
}




// Query the posts:
$faq_query = new WP_Query($query);
while ($faq_query->have_posts()) :
    $faq_query->the_post();
?>
    <details-utils animate>
        <details class="faq bg-tertiary text-background p-m rounded-sm">
            <summary><?php echo get_the_title(); ?></summary>
            <div class="py-s">
                <p><?php echo get_the_content(); ?></p>
            </div>
        </details>
    </details-utils>
<?php
endwhile;

// Reset Post Data
wp_reset_postdata();
?>