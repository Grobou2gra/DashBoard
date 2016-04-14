<?php 

require_once "getInfoLivre.php";
require_once "getNbLivres.php";
require_once("getZone.php");	
require_once("cbToUrl.php");	


set_time_limit(300);
global $html;

function getTabLivres() {

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

	return $array;
}


$arraytest = getTabLivres();
print_r($arraytest);

?>	