<?php

function getTime($nb_livres) {
	if ($nb_livres < 20){
		return $time = 20 ;
	}
	elseif ($nb_livres < 40){
		return $time = 15 ;
	}
	else {
		return $time = 12 ;
	}
}


?>