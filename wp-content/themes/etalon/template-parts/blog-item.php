<?php
 $redux_ThemeTek = get_option( 'redux_ThemeTek' );
if ( ( $redux_ThemeTek['tek-blog-minimal'] ) == 1 ) {
	$post_class = 'BlogMinimal';
} else {
	$post_class = 'section'; }
?>
	  <div <?php post_class( $post_class ); ?> id="post-<?php the_ID(); ?>" >
	

		
		 <a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
		
		 <div class="post-main-row">
			 <div class="post-content">
			 <div class="entry-content">
			 

		
		 <div class="entry-meta">
				<?php
				if ( is_sticky() ) {
					echo '<span class="fa fa-thumb-tack"></span> Sticky <span class="blog-separator">|</span>  ';}
				?>


<span class="blog-label"><span class="fa fa-pencil"></span><?php the_category( ', ' ); ?></span>
			

			<span class="published"><span class="fa fa-clock-o"></span><a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a></span>
				<?php if ( ( $redux_ThemeTek['tek-blog-minimal'] ) == 0 ) { ?>
			
					<span class="author">Written by <?php the_author_posts_link(); ?></span>
		
			<span class="comment-count"><span class="fa fa-comment-o"></span><?php comments_popup_link( esc_html__( 'No comments yet', 'etalon' ), esc_html__( '1 comment', 'etalon' ), esc_html__( '% comments', 'etalon' ) ); ?></span>
			<?php } ?>
		 </div>

		 <h2 class="blog-single-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h2>
		 
				
		 <?php wp_ulike(); ?>
		 <?php the_excerpt(); ?>
					
			<a class="tt_button" href="<?php esc_url( the_permalink() ); ?>">Read More<span class="fa fa-chevron-right"></span></a>

		 </div>
				</div>
				</div>
	  </div>
