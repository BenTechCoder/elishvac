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
	<article class="grid text-left py-3xl text-background intersect-once intersect:motion-preset-fade-lg" style="--min-item-size: 450px;">

		<?php if (have_posts()) :
			while (have_posts()) : the_post();
		?>

				<?php
				// Start the Loop.
				?>
				<div class="p-l stack bg-tertiary items-start intersect-once intersect:motion-translate-y-in-100">
					<div>
						<p><?php echo $post_type ?></p>
						<h2 class="underline highlight"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?><?php get_template_part("template-parts/components/highlight"); ?></a></h2>
					</div>
					<a href="<?php echo get_permalink() ?>" class="btn bg-secondary">See More</a>
				</div>

		<?php
			// Previous/next page navigation
			endwhile;
		else :

			// If no content, include the "No posts found" template.
			get_template_part('template-parts/content/content', 'none');

		endif;
		?>
	</article>
</section><!-- #primary -->



<?php
get_footer();
