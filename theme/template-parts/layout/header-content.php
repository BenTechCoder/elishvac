<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>
<header id="masthead" class="py-s-m text-foreground mb-xs">

	<div class="wrapper pt-s-m">
		<div class="nav__inner flex">


			<?php the_custom_logo(); ?>


			<burger-menu max-width="600">
				<nav id="site-navigation"
					aria-label="<?php esc_attr_e('Main Navigation', 'ramirez-contractor'); ?>"
					class="nav">
					<!-- <button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'ramirez-contractor'); ?></button> -->
					<?php
					wp_nav_menu(
						array(
							'menu' => 'main-nav',
							'theme_location' => 'Primary',
							'menu_class' => '',
							'menu_id'        => 'primary-menu',
							'walker' => new Details_Walker_Nav_Menu(),
							'container_class' => 'sub-menu stack',
							'depth' => 2
						)
					);
					?>
				</nav><!-- #site-navigation -->

			</burger-menu>
		</div>
	</div>
</header><!-- #masthead -->