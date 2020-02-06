<?php
/*
Plugin Name: The Extract
Description: A simple and lightweight plugin that allows you to customize the excerpt length. Instead of using the_excerpt() you use the_extract() in your WordPress theme with optional parameters.
Author: TanManWeb
Author URI: https://github.com/TanManWeb/
Version: 1.0.0
Text Domain: the-extract
*/

function the_extract( $length = 100, $ending = NULL, $hyperlink = TRUE ) {
	 
	$content 		= get_the_content();	
	$string_length 	= strlen($content);
	
	if ( $string_length > $length ) {	
		$space = strpos($content, ' ', $length);
		$content = substr($content, 0, $space); 	
		
		if( isset($ending) && $hyperlink == TRUE ) {			
		$ending = wp_strip_all_tags($ending);
			if( strlen($ending) < 50 ) {	
				echo $content . ' ' . '<a href="' . get_permalink() . '">' . $ending . '</a>';			
			}
		} elseif( isset($ending) && $hyperlink == FALSE ) {
			if( strlen($ending) < 50 ) {	
				echo $content . ' ' . $ending;			
			}			
		} else {
			echo $content;
		} 
		
	} else {	
		echo $content;
	} 
	
}


function get_the_extract( $length = 100, $ending = NULL, $hyperlink = TRUE ) {
	
	$content 		= get_the_content();	
	$string_length 	= strlen($content);
	
	if ( $string_length > $length ) {	
		$space = strpos($content, ' ', $length);
		$content = substr($content, 0, $space); 	
		
		if( isset($ending) && $hyperlink == TRUE ) {			
		$ending = wp_strip_all_tags($ending);
			if( strlen($ending) < 50 ) {	
				$extract = $content . ' ' . '<a href="' . get_permalink() . '">' . $ending . '</a>';			
				return $extract;
			}
		} elseif( isset($ending) && $hyperlink == FALSE ) {
			if( strlen($ending) < 50 ) {	
				$extract = $content . ' ' . $ending;
				return $extract;
			}			
		} else {
			$extract = $content;
			return $extract;
		} 
		
	} else {	
		$extract = $content;
		return $extract;
	} 
	
}

function get_extract( $length = 100, $ending = NULL, $hyperlink = TRUE ) { // same function as above but different function name
	
	$content 		= get_the_content();	
	$string_length 	= strlen($content);
	
	if ( $string_length > $length ) {	
		$space = strpos($content, ' ', $length);
		$content = substr($content, 0, $space); 	
		
		if( isset($ending) && $hyperlink == TRUE ) {			
		$ending = wp_strip_all_tags($ending);
			if( strlen($ending) < 50 ) {	
				$extract = $content . ' ' . '<a href="' . get_permalink() . '">' . $ending . '</a>';			
				return $extract;
			}
		} elseif( isset($ending) && $hyperlink == FALSE ) {
			if( strlen($ending) < 50 ) {	
				$extract = $content . ' ' . $ending;
				return $extract;
			}			
		} else {
			$extract = $content;
			return $extract;
		} 
		
	} else {	
		$extract = $content;
		return $extract;
	} 
	
}


