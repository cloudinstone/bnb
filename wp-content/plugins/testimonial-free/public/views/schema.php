<?php
/**
 * Schema file.
 *
 * @link http://shapedplugin.com
 * @since 2.0.0
 *
 * @package Testimonial_free.
 * @subpackage Testimonial_free/views.
 */

if ( $post_query->have_posts() ) {
	$sc_title          = get_the_title( $post_id ) ? get_the_title( $post_id ) : 'Testimonial';
	$outline          .= '<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "name": "' . $sc_title . '",
  "aggregateRating": {
    "@type": "AggregateRating",
    "bestRating": "5",
	"ratingValue": "' . $aggregate_rating . '",
	"worstRating": "1",
    "reviewCount": "' . $total_rated_testimonials . '"
  },
  "review": [';
	$testimonial_count = 0;

	while ( $post_query->have_posts() ) :
		$post_query->the_post();

		$testimonial_data  = get_post_meta( get_the_ID(), 'sp_tpro_meta_options', true );
		$tfree_name        = ( isset( $testimonial_data['tpro_name'] ) ? $testimonial_data['tpro_name'] : '' );
		$tfree_rating_star = ( isset( $testimonial_data['tpro_rating'] ) ? $testimonial_data['tpro_rating'] : 'five_star' );

		switch ( $tfree_rating_star ) {
			case 'five_star':
				$rating_value = '5';
				break;
			case 'four_star':
				$rating_value = '4';
				break;
			case 'three_star':
				$rating_value = '3';
				break;
			case 'two_star':
				$rating_value = '2';
				break;
			case 'one_star':
				$rating_value = '1';
				break;
		}

		$name        = get_the_title() ? esc_attr( wp_strip_all_tags( get_the_title() ) ) : '';
		$review_body = get_the_content() ? esc_attr( wp_strip_all_tags( get_the_content() ) ) : '';
		$date        = get_the_date( 'F j, Y' );
		$outline    .= '{
			"@type": "Review",
			"datePublished": "' . $date . '",
			"name": "' . $name . '",
			"reviewBody": "' . $review_body . '",
			"reviewRating": {
				"@type": "Rating",
				"bestRating": "5",
				"ratingValue": "' . $rating_value . '",
				"worstRating": "1"
			},
			"author": {
				"@type": "Person", 
				"name": "' . $tfree_name . '"
			}
			}';
		if ( ++$testimonial_count !== $total_rated_testimonials ) {
			$outline .= ',';
		}
	endwhile;

	$outline .= ']
}
</script>';
}
