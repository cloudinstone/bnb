<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package etalon
 * by KeyDesign
 */
?>
<?php get_header(); ?>
<main id="front-page">
<div class="container">
<?php
while ( have_posts() ) :
	the_post();
	?>
	
	<?php the_content(); ?>
<?php endwhile; ?>
</div>
</main>
<?php
get_footer();
