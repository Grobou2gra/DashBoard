<?php
include("connexion.php");

global $cnx;
    
include("connexion.php");
    $str = 'SELECT id,cb FROM code_barre ORDER BY id DESC';

    
    $req = $cnx->prepare($str);
    $req->execute();
    $cdbar = $req->fetchAll();
    
    foreach($cdbar as $cle=>$cb)
{
    $codes[$cle]['cb'] = $cb['cb'];
    $codes[$cle]['id'] = $cb['id'];
}
include_once('index.php');


?>