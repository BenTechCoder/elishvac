<?php

/**
 * The template for displaying all FAQs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>

<?php
get_template_part("template-parts/components/hero", null, array(
	"hero_text" => get_post_type(),
	"hero_eyebrow" => ''
));
?>

<section class="wrapper">
	<article class="center stack text-left py-3xl">

		<?php if (have_posts()) : ?>

		<?php
			// Start the Loop.

			get_template_part("template-parts/components/faq/faq", 'query', array(
				'faq_amount' => null,
				'get_all_faqs' => true,
			));

		// Previous/next page navigation

		else :

			// If no content, include the "No posts found" template.
			get_template_part('template-parts/content/content', 'none');

		endif;
		?>
	</article>
</section><!-- #primary -->



<?php
get_footer();
