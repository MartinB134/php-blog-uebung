<?php 

/**
 *  Format the Date
 */


function formatDate($timestamp) {
	return date('F j, Y, g:i a ',strtotime($timestamp));
}

/**
 * Shorten Text
 */

function shorten($text, $chars = 450){
	$text = $text." ";
	$text = substr($text, 0 , $chars);
	$text = substr($text, 0, strrpos($text, ' '));
	return $text;
}

 ?>