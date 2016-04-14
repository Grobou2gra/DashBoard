<?php 

require_once "getInfoLivre.php";
require_once "getNbLivres.php";
require_once("getZone.php");	
require_once("cbToUrl.php");	


set_time_limit(300);
global $html;



	global $nbLivres;
	$nbLivres = getNbLivres();


	for ($i=1; $i<=$nbLivres; $i++){
		$arraytest[] = getInfoLivre($i);
		$content = $arraytest[$i-1][0];
		if ($content=="vide"){
			$nbLivres = $nbLivres + 1 ;	
		} 	
		else {
			$array[] = getInfoLivre($i);
		}												
	}


	$nblignes= count($array);
	$array[$nblignes+1]=$array[0];
	$array[$nblignes+2]=$array[1];
	$array[$nblignes+3]]=$array[2];

	file_put_contents("babordcache", serialize($array));


?>	