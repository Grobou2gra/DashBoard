<?php
include("connexion.php");
	$ajout = $_POST["codebarre"] ;
	$id=2;
	$sql = "INSERT INTO code_barre(cb) VALUES('$ajout') ";
    
    $req = $cnx->prepare($sql);
    $req->execute();

	if($req)
	{
		$reponse = ("L'insertion a été correctement effectuée  ") ;
	}
	else
	{
		$reponse = ("L'insertion à échouée");
	}

?>
  <html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="styleint.css" /> 
      <title>Code barre ajouté</title>
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


