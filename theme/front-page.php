<?php

/**
 * The Homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _tw
 */

get_header();


?>

<?php get_template_part("template-parts/components/hero"); ?>
<?php get_template_part("template-parts/components/services-snippet"); ?>
<?php get_template_part("template-parts/components/solutions-snippet"); ?>
<?php get_template_part("template-parts/components/reviews/snippet"); ?>
<?php get_template_part("template-parts/components/cta/cta", "about"); ?>
<?php get_footer(); ?>