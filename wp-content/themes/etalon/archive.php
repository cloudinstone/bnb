<?php
/**
 * The template for displaying Archive pages.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package etalon
 * by KeyDesign
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<div id="posts-content" class="container" >
<div class="custom-cat-detail-wrapper col-xs-12 col-sm-12 col-md-8 col-md-offset-2"><h1 class="custom-category-title-page"><?php single_cat_title(); ?></h1><div class="custom-category-description">
	<?php the_archive_description(); ?>
</div></div>

	<?php if ( $redux_ThemeTek['tek-blog-sidebar'] ) { ?>
<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
   <?php } else { ?>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  <?php } ?>
	  <?php
		while ( have_posts() ) :
			the_post();
			?>
			<?php get_template_part( 'template-parts/blog-item' ); ?>

			<?php
	  endwhile;
		?>
	  <?php
		the_posts_pagination(
			array(
				'mid_size'  => 1,
				'prev_text' => esc_html__( 'Previous', 'etalon' ),
				'next_text' => esc_html__(
					'Next',
					'etalon'
				),
			)
		);
		?>
   </div>
	<?php if ( $redux_ThemeTek['tek-blog-sidebar'] ) { ?>
   <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<?php get_sidebar(); ?>
   </div>
   <?php } ?>
</div>
	<?php
	else :
		?>
<div id="posts-content"  class="container" >
   <h2 class="section-title"><?php esc_html_e( 'Nothing Found', 'etalon' ); ?></h2>
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
   <p><?php printf( esc_html__( 'Ready to publish your first post?', 'etalon' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
   <?php elseif ( is_search() ) : ?>
   <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again using different keywords.', 'etalon' ); ?></p>
	   <?php get_search_form(); ?>
   <?php else : ?>
   <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'etalon' ); ?></p>
	   <?php get_search_form(); ?>
   <?php endif; ?>
</div>
<?php endif; ?>
<?php get_footer(); ?>
