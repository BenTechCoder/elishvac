<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<footer id="colophon">

	<?php if (has_nav_menu('menu-2')) : ?>
		<nav aria-label="<?php esc_attr_e('Footer Menu', '_tw'); ?>" class="wrapper switcher py-xl-2xl">
			<div>
				<?php the_custom_logo(); ?>
			</div>
			<div>
				<h2><?php echo strtoupper("contact"); ?></h2>
				<ul class="stack">
					<?php
					$phone_number = get_option("business_details_phone_number");
					$email = get_option("business_details_business_email");
					$google_maps_page = get_option("business_details_google_maps_page");
					?>
					<li><a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></li>
					<li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
					<li><a href="<?php echo $google_maps_page; ?>">Google Maps</a></li>
				</ul>
			</div>
			<div>
				<h2><?php echo strtoupper("Links"); ?></h2>
				<ul class="stack">
					<?php
					$footer_menu = wp_get_nav_menu_items("footer_menu");
					foreach ($footer_menu as $item => $value) {
					?>
						<li><a href="<?php echo $value->url; ?>"><?php echo $value->title; ?></a></li>
					<?php
					}
					?>
				</ul>
			</div>
		</nav>
	<?php endif; ?>
	<div class="py-s bg-tertiary text-background">
		<div class="wrapper stack text-center">
			<p>®<?php echo date('Y'); ?> <?php echo get_option('business_details_legal_name'); ?></p>
			<p>Built By <a href="https://www.lebronconsulting.tech/">Lebron Consulting</a></p>
		</div>
	</div>
</footer><!-- #colophon -->