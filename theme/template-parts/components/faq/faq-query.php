<?php
$faq_ids;
if (get_post_type() === "page") {
    $faq_ids = pods('page', get_the_ID())->field("page_faqs.ID");
}

if (get_post_type() === "service") {
    $faq_ids = pods('service', get_the_ID())->field("service_faqs.ID");
}
// Generate meta_query arrays based on tags selected
$query = array(
    'post_type'      => 'faq',
    'post__in' => $faq_ids,
    'posts_per_page' => ($args["faq_amount"]) ? $args["faq_amount"] : 5
);

// Query the posts:
$faq_query = new WP_Query($query);  

while ($faq_query->have_posts()) :
    $faq_query->the_post();
    ?>
     <details-utils animate close-click-outside>
            <details>
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