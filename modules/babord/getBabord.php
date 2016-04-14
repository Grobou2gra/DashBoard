<?php


function getBabord() {
	try{
		$livres = unserialize(file_get_contents("babordcache"));
	}
	catch(exeption $e){
		throw new Exception( 'wait for it !', 0, $e);
	}
	return $livres;	
}

?>