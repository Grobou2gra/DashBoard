<?php include("getTram.php");
	
$heure = date('H:i');
$trams=get_tram();
list ($arretPC, $arretBC) = $trams;

?>

<div class="logo_stan"><img src="style/images/logo_stan.png" alt="logo_stan"/></div>
<div class="trait"></div>
<div class="tram">Tram<img src="style/images/icone_tram_2.png" alt="icone tram 2"/></div>		<!-- tram -->
<!--<div class="voyant_tram"><img src="style/images/sprite_voyant.png" alt="icone voyant"/>En retard</div>-->
<div class="nextTram">Prochains passages :</div>
<div class="arret1">Arrêt St-Jacques II</br>vers Laxou</div>
<div class="horaire1"><?php echo $arretPC; ?></div>
<div class="arret2">Arrêt St-Jacques II</br>vers Laneuveville</div>
<div class="horaire2"><?php echo $arretBC; ?></div>