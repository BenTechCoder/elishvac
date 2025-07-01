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
	"hero_eyebrow" => str_replace("_", " ", get_post_type()),
	"buttons" => false
));
?>

<section id="primary" class="py-2xl">

	<article class="prose wrapper">
		<?php
		the_content()
		?>
	</article>

</section><!-- #primary -->

<?php
get_footer();
