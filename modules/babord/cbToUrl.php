<?php 

function cbToUrl($cb) 																								//Fonction permettant d'obtenir l'URL à partir du codebarre
{
	$url = 'http://babordplus.univ-bordeaux.fr/notice.php?q=cab:('.$cb.')&ct=bx3_ws';
	return $url;
}

?>