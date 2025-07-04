<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
$post_type = strtoupper(str_replace("_", " ", get_post_type()));
?>

<?php
get_template_part("template-parts/components/hero", null, array(
	"hero_text" => $post_type,
	"hero_eyebrow" => '',
	"buttons" => false
));
?>

<section class="wrapper">
	<article class="grid text-left py-3xl text-background">

		<?php if (have_posts()) : ?>

			<?php
			// Start the Loop.
			?>
			<div class="p-l stack bg-tertiary items-start">
				<div>
					<p><?php echo $post_type ?></p>
					<h2 class="underline highlight"><?php echo get_the_title() ?><?php get_template_part("template-parts/components/highlight"); ?></h2>
				</div>
				<a href="<?php echo get_permalink() ?>" class="btn bg-secondary">See More</a>
			</div>

		<?php
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
