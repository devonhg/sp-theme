<?php 
/*
	Custom functions file
*/

function dhg_title(){
		if ( is_page() ){
			$page_id = $post;
			$page_title = get_the_title( $page_id ); 

			if ( $page_title != "" ){
				echo "<h1 class='entry-title page-title'> " . $page_title . "</h1>";
			}
		}
}