<?php

function get_tram(){

	$fichier = file("../../ressources/Keolis_tram/stop_times.txt");

	$total = count($fichier);

	date_default_timezone_set('Europe/Paris');
	$heure = date('H:i:s');
	$jour = date('D');

	switch ($jour) {
		case "Mon":
		$jour = "Lun-Mer";
		break;
		case "Tue":
		$jour = "Lun-Mer";
		break;
		case "Wed":
		$jour = "Lun-Mer";
		break;
		case "Thu":
		$jour = "Jeudi";
		break;
		case "Fri":
		$jour = "Vendredi";
		break;
		case "Sat":
		$jour = "Samedi";
		break;
		case "Sun":
		$jour = "Dimanche";
		break;
	}

	$arretPC = "24:59:59";
	$arretBC = "24:59:59";

	
	if ($jour = "Lun-Mer") {
		// Boucle parcourant le fichier (Exception Tiret)
		for($i = 1; $i < $total; $i++) 
		{ 
			
			// Vers Pessac Centre
			$bob = explode(",", $fichier[$i]);

			if ($bob[2] >= $heure ) {
				if($bob[3] == 3730 && $bob[2] <= $arretPC) {
					$arretPC = $bob[2] ;
				}

				// Vers Bordeaux Claveau / Bordeaux Bassins à flot
				else if($bob[3] == 3729 && $bob[2] <= $arretBC) {
					$arretBC = $bob[2] ;
				}
			}
		}
	} else {
		// Boucle parcourant le fichier 
		for($i = 1; $i < $total; $i++) 
		{ 
			
			// Vers Pessac Centre
			$bob = explode(",", $fichier[$i]);

			if ($bob[2] >= $heure ) {
				if($bob[3] == 3730 && $bob[2] <= $arretPC) {
					$pop = explode("-", $bob[0]);
					if($pop[3] == $jour) {
						$arretPC = $bob[2] ;
					}
				}

				// Vers Bordeaux Claveau / Bordeaux Bassins à flot
				else if($bob[3] == 3729 && $bob[2] <= $arretBC) {
					$pop = explode("-", $bob[0]);
					if($pop[3] == $jour) {
						$arretBC = $bob[2] ;
					}
				}
			}
		}
	}

	$mom = explode(":", $arretPC);
	$arretPC = $mom[0].":".$mom[1];

	$mom = explode(":", $arretBC);
	$arretBC = $mom[0].":".$mom[1];
	
	return array($arretPC, $arretBC);
}
?>