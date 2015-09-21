<?php 
/*
	Custom functions file
*/

function dhg_title(){
		$page_id = get_the_ID();
		$page_title = get_the_title( $page_id ); 

		if ( $page_title != "" ){
			echo "<h1 class='entry-title page-title'> " . $page_title . "</h1>";
		}
}