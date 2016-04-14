<?php

	try{
		$vcub = new DOMDocument();
		$vcub->load('http://data.lacub.fr/wfs?key=BOB2RNI0JK&REQUEST=GetFeature&SERVICE=WFS&SRSNAME=EPSG%3A3945&TYPENAME=CI_VCUB_P&VERSION=1.1.0&Filter=%3CFilter%3E%3CPropertyIsEqualTo%3E%3CPropertyName%3EGID%3C%2FPropertyName%3E%3CLiteral%3E16%3C%2FLiteral%3E%3C%2FPropertyIsEqualTo%3E%3C%2FFilter%3E');

		$xpath = new DOMXPath($vcub);
		$xpath->registerNamespace("ms", "http://mapserver.gis.umn.edu/mapserver");

	$queryNbvelos = '//ms:NBVELOS';
	$nbvelos = $xpath->query($queryNbvelos, $vcub);

	foreach($nbvelos as $node) {
		echo $node->nodeValue;
	}
}

	catch(exeption $e){
		throw new Exception( 'wait!', 0, $e);
	}
	
?>