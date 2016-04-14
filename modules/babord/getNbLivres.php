<?php

function getNbLivres() {

	mysql_connect( "db4free.net", "raspberry", "raspberry" ) or die ("impossible de se connecter au serveur" ); 
	$db = mysql_select_db( "biblio" );
	$sql_count = 'SELECT COUNT(*) as nbid FROM code_barre';
	$row = mysql_query($sql_count) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	
	while($data = mysql_fetch_array($row)) {
		$nb_id = $data["nbid"];
		return $nb_id;
	}
}

?>