<?php 

include("getMeteo.php");
$meteos=get_meteo();

if ($meteos!=""){
	list ($tempAjd, $meteoAjd, 
		$jour1, $temp1, $meteo1, 
		$jour2, $temp2, $meteo2, 
		$jour3, $temp3, $meteo3, 
		$jour4, $temp4, $meteo4, 
		$jour5, $temp5, $meteo5) 
	= $meteos;
}
else{
	list ($tempAjd, $meteoAjd, 
		$jour1, $temp1, $meteo1, 
		$jour2, $temp2, $meteo2, 
		$jour3, $temp3, $meteo3, 
		$jour4, $temp4, $meteo4, 
		$jour5, $temp5, $meteo5)= array("indisponible","indisponible", "indisponible", "?", "#","indisponible", "?", "","indisponible", "?", "","indisponible", "?", "","indisponible", "?", "");
}
?>


<div class="ville">Bordeaux</div>
<div class="temps"><?php echo $tempAjd.'°C <img src="style/images/'.htmlentities($meteoAjd).'.png" />'; ?></div>
<div class="semaine" id="semaine">
	<ul>
		<li><?php echo $jour2; ?></li>
		<li><?php echo $jour3; ?></li>
		<li><?php echo $jour4; ?></li>
		<li><?php echo $jour5; ?></li>
	</ul>
</div>
<div class="semaine" id="temps_semaine">
	<ul>
		<li><span> <?php echo $temp2; ?> °C</span></li>
		<li><span> <?php echo $temp3; ?> °C</span></li>
		<li><span> <?php echo $temp4; ?> °C</span></li>
		<li><span> <?php echo $temp5; ?> °C</span></li>
	</ul>
</div>
<div class="semaine" id="picto_semaine">
	<ul>
		<li><span> <img src="style/images/<?php echo htmlentities($meteo2);?>.png"/></span></li>
		<li><span> <img src="style/images/<?php echo htmlentities($meteo3);?>.png"/></span></li>
		<li><span> <img src="style/images/<?php echo htmlentities($meteo4);?>.png"/></span></li>
		<li><span> <img src="style/images/<?php echo htmlentities($meteo5);?>.png"/></span></li>
	</ul>
</div>