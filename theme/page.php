<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>

<?php
get_template_part("template-parts/components/hero", null, array(
	"hero_text" => get_the_title(),
	"hero_eyebrow" => '',
	"buttons" => false
));
?>

<section class="py-xl-2xl sidebar wrapper" style="--sidebar-basis: 45ch;">
	<article class="prose intersect:motion-preset-fade">
		<?php the_content(); ?>
	</article>
	<div class="stack">
		<?php
		get_template_part("template-parts/components/faq/faq", 'query', array(
			'faq_amount' => null,
		));
		?>
	</div>
</section>

<?php
get_footer();
