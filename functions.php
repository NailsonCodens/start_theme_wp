<?php
	@ini_set( 'upload_max_size' , '12M' );
	@ini_set( 'post_max_size', '12M');
	@ini_set( 'max_execution_time', '300' );

	// Menu do site no painel
	add_theme_support('menus');

	// Oculta barra do admin
	add_filter('show_admin_bar', '__return_false');


	function excerpt($num) {
		$limit = $num+1;
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt)."... <a href='" .get_permalink($post->ID) ." '>...</a>";
		echo $excerpt;
	}


	function title_filter( $where, &$wp_query ){
		global $wpdb;
		if ( $search_term = $wp_query->get( 's' ) ) {
			$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
		}

		return $where;
	}	
?>