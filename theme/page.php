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
$has_faq = pods('page', get_the_ID())->field("page_faqs.ID");
?>

<?php
get_template_part("template-parts/components/hero", null, array(
	"hero_text" => get_the_title(),
	"hero_eyebrow" => '',
	"buttons" => false
));
?>

<section class="py-xl-2xl <?php echo ($has_faq) ? 'sidebar':''?> wrapper" <?php echo ($has_faq) ? 'style="--sidebar-basis: 45ch;"': '' ?>>
	<article class="prose intersect-once intersect:motion-preset-fade-lg">
		<?php the_content(); ?>
	</article>
	<?php if ($has_faq) { ?>
		<div class="stack">
			<?php
			get_template_part("template-parts/components/faq/faq", 'query', array(
				'faq_amount' => null,
			));
			?>
		</div>
	<?php }; ?>

</section>
<?php
get_footer();
