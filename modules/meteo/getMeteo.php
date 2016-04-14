<?php

function febo($c){
	switch($c){
		case 0:
		case 1:
		case 2:
		return "tornade";
		break;
		case 3:
		return "orages_violents";
		break;
		case 4:
		case 45:
		case 37:
		case 38:
		case 39:
		return "orages";
		break;
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		case 10:	
		return "pluie_neige";
		break;
		case 11:
		case 12:
		case 35:
		case 40:
		return "pluie";
		break;
		case 14:
		case 18:
		case 16:
		case 17:
		case 42:
		case 47:
		return "neige_leger";
		break;
		case 13:
		case 15:
		case 41:
		case 43:
		case 46:
		return "neige_fort";
		break;
		case 26:
		case 27:
		case 28:
		return "nuageux";
		break;
		case 29:
		case 30:
		case 44:
		case 31:
		return "eclaircies";
		break;
		case 32:
		case 33:
		case 34:
		case 36:
		return "soleil";
		break;
		case 19:
		case 22:
		return "poussiere";
		break;
		case 20:
		case 21:
		return "brume";
		break;
		case 23:
		case 24:
		return "vent";
		break;
		case 25:
		return "polaire";
		break;
		case 3200:
		return "indisponible";
		break;
	}
}

function translateDay($j){
	switch($j){
		case "Mon":
		return "Lundi";
		break;
		case "Tue":
		return "Mardi";
		break;
		case "Wed":
		return "Mercredi";
		break;
		case "Thu":
		return "Jeudi";
		break;
		case "Fri":
		return "Vendredi";
		break;
		case "Sat":
		return "Samedi";
		break;
		case "Sun":
		return "Dimanche";
		break;
	}
}

function get_meteo(){
	$meteodoc = new DOMDocument();
	$meteodoc->load('http://weather.yahooapis.com/forecastrss?w=580778&u=c');
	$xpath = new DOMXpath($meteodoc);
	$xpath->registerNamespace("yweather", "http://xml.weather.yahoo.com/ns/rss/1.0");

	/* requetes dans namespace condition*/
	$qcondition = "//yweather:condition";
	$condition = $xpath->query($qcondition, $meteodoc);

	/* requetes dans namespace forecast*/
	$qforecast = "//yweather:forecast";
	$forecast = $xpath->query($qforecast, $meteodoc);

	foreach($condition as $resultc) {
		$datatemp = $resultc->getAttribute('temp');
		$datacodej = $resultc->getAttribute('code');
		$weazerd = febo($datacodej);
		//echo "Aujourd'hui, il fait ".$datatemp." °C</br>".$weazerd."</br>";
	}
	
	$meteotab = array();
	$meteotab[0] = $datatemp ;
	$meteotab[1] = $weazerd ;

	$i = 2 ;

	foreach($forecast as $resultf) {
		
		//Récupe les données
		$dataday = $resultf->getAttribute('day');
		$datalow = $resultf->getAttribute('low');
		$datahigh = $resultf->getAttribute('high');
		$datacode = $resultf->getAttribute('code');


		//traite les données
		$jour = translateDay($dataday);
		$moyTemp = ($datalow+$datahigh)/2;
		$weazer = febo($datacode);


		$meteotab[$i] = $jour ;
		$meteotab[$i+1] = $moyTemp ;
		$meteotab[$i+2] = $weazer ;

		$i = $i + 3 ;
		//echo $semaine;
	}

	return $meteotab ;
}
?>