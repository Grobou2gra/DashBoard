<?php
include("connexion.php");
    $id=$_POST["supprimer"];
	$sql = "DELETE FROM code_barre WHERE id=".$id;
    $req = $cnx->prepare($sql);
    $req->execute();

	if($req)
	{
		$reponse = ("Code barre supprimé !") ;
	}

	else
	{
		$reponse = ("La suppression a échouée");
	}

?>
  <html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="styleint.css" /> 
      <title>Code barre supprimé</title>
    </head>
  <body>
    <div id="page">
      <h1>Gestion des derniers arrivages</h1>
      <div id="content">
      	<div class="reponse">
        	<p class="pcontent"><?php echo $reponse ?></p>
        	<a href='../index.php'>Retour</a>
        </div>
      </div>
  </div>
  </body>
  </html>