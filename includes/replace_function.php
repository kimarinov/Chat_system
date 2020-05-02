<?php 

function replace_to_emoji($string){

		$chars =array(":D", ":)", ":P", "lion", ":(" );
		$icons = array("&#128512", "&#128522", "&#128523", "&#129409" , "&#128543");
		$str_string = str_replace($chars, $icons, $string);

		return $str_string;
	
		}
?>