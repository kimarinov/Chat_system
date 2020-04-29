<?php 

function replace_to_emoji($string){
	
	if ($string == ":)" || $string == ":D" || $string == ":P" || $string == ":(" || $string == "lion" ){
		$chars =array(":D", ":)", ":P", "lion", ":(" );
		$icons = array("&#128512", "&#128522", "&#128523", "&#129409" , "&#128543");
		$str_string = str_replace($chars, $icons, $string);

		return $str_string;
	}else{
		$chars =array(":D ", " :D", " :)", ":) ", " :P",":P ", " lion", "lion ", " :(", ":( " );
		$icons = array("&#128512 "," &#128512","&#128522 "," &#128522","&#128523 "," &#128523" ,"&#129409 "," &#129409","&#128543 "," &#128543");
		$str_string = str_replace($chars, $icons, $string);
		
		return $str_string;
		}
}

?>