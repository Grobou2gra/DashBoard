<?php

try
{
	global $cnx;
    $cnx = new PDO('mysql:host=db4free.net;dbname=biblio', 'raspberry', 'raspberry', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $cnx ->exec("SET CHARACTER SET utf8");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
 ?>