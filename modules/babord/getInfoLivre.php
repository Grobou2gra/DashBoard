<?php

require_once("../../ressources/simple_html_dom.php");
require_once("getZone.php");        
require_once("cbToUrl.php");        


function getInfoLivre($id)
{
        $cnx = mysql_connect( "db4free.net", "raspberry", "raspberry" );

        $db = mysql_select_db( "biblio" );

        $sql = 'SELECT * FROM code_barre WHERE id='.$id.'';

        $requete = mysql_query( $sql, $cnx ) or die( "ERREUR MYSQL num�ro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
        $result = mysql_fetch_object( $requete );

        global $html;
        if (is_object($result)){
                $html = file_get_html(cbToUrl($result->cb));                                                                                                                                //Version pour la r�cup�ration en base de donne�s
                $title = getZone("h1[class=book_title]",$html);
                $title = utf8_decode($title);                                                                                                                                                                // utf8_decode pour g�rer les caract�res sp�ciaux


                $creator = getZone("dd[class=auteur_principal]",$html);                                                                                                                // g�re le cas o� le nom de la classe est "auteur_principal"
                if (empty($creator)){                
                        $creator = getZone("dd[class=stat_rebond_auteur]",$html);                                                                                                // g�re le cas o� le nom de la classe est "stat_rebond_auteur"
                }
                $creator = utf8_decode($creator);
                $collection = $html->find('img');                                                                                                                                                        //R�cup�re toutes les images pr�sentes dans la page (icones + couverture)
                
                $src = "";                                                                                                                                                                                                        //Initialisation

                foreach($collection as $image){                                                                                                                                                                //Boucle pour faire d�rouler les images obtenues avec le find                                                                                                                                                                                        //Condition permettant de s�lectionner uniquement la couverture (et �viter les 4 icones)
                        $src = $image->getAttribute('src');                                                                                                                                                
                        $pos = strpos($src, 'vignette');                                                                                                                                                //Verifie la position de vignette dans la source de l'image, permet de verifier qu'il s'agit de la couverture
                        if ($pos !== false) {                                                                                                                                                                        
                                $src = 'http://babordplus.univ-bordeaux.fr/'.$src.'';                                                                                                //reconstitution de l'URL
                        }
                        else{
                                $src ="style/images/unknow_book.jpg";
                        }
                }
                return $infosLivre = array($title, $creator, $src);
        }
        else {
                return $infosLivre = array($title="vide",$creator="vide", $src="vide");
        }
}

?>