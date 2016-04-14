$(document).ready(function(){
	/*init actus*/
	$.ajax({url: 'modules/actualite/getActus.php'});
	var blbl=0;
	$.post( "modules/actualite/actualite.php", {na: blbl}, function( returned ) {$( "#actualites" ).html( returned );});

	/*init babord*/
	$.ajax({url: 'modules/babord/gettablivres.php'});
	var glgl=0;
	$.post( "modules/babord/babord.php", {na: glgl}, function( returned ) {$( "#babord" ).html( returned );});

	
	/*actualise fichier cache actus toutes les heures*/
	setInterval(function(){
		$.ajax({url: 'modules/actualite/getActus.php'});
	},3600000);

	/*balayage du tableau + effets*/
	setInterval(function(){
		$( ".cadre_blanc_actu" ).animate({top:"-=233"},1500, function(){	
			$( "#actualites" ).remove;	
			$.post( "modules/actualite/actualite.php", {na: blbl}, function( returned ) {
				$( "#actualites" ).html( returned );
			});
		});
		if(blbl>=9){
			blbl=0;
		}
		else{
			blbl++;
		}
	},15000);

	$.post( "modules/tbc/tram.php", function( returnedtbc ) {
		$( "#tram" ).html( returnedtbc );
	});
	setInterval(function(){
		$( "#tram" ).remove;
		$.post( "modules/tbc/tram.php", function( returnedtbc ) {
			$( "#tram" ).html( returnedtbc );
		});
		return false;
	},60000);



	$.post( "modules/tbc/getVcub.php", function( returnedtbc ) {
		$( ".nb_vcub" ).html( returnedtbc );
	});
	setInterval(function(){
		$( "#nb_vcub" ).remove;
		$.post( "modules/tbc/getVcub.php", function( returnedtbc ) {
			$( ".nb_vcub" ).html( returnedtbc );
		});
		return false;
	},60000);



	$.post( "modules/meteo/meteo.php", function( returnedmeteo ) {
		$( "#meteo" ).html( returnedmeteo );
	});
	setInterval(function(){
		$( "#meteo" ).remove;
		$.post( "modules/meteo/meteo.php", function( returnedmeteo ) {
			$( "#meteo" ).html( returnedmeteo );
		});
		return false;
	},120000);



$.post( "modules/babord/getNblignes.php", function( nob ) {var nb = nob;});

	/*BABORD*/
	/*actualise fichier cache babord toutes les heures*/
	setInterval(function(){
		$.ajax({url: 'modules/babord/gettablivres.php'});

	},3600000);

	/*balayage du tableau + effets*/
	setInterval(function(){
		$(".livre" ).animate({top:"-=145"},1500, function(){

			$(".cadre_blanc_babord_gauche").animate({left:"-=768"},1500, function(){

				$.post( "modules/babord/babord.php", {na: glgl}, function( returnedbabord ) {
				
					$( "#babord" ).html( returnedbabord );
				});
			});				
		});
		var nb=60;
		$.post( "modules/babord/getNblignes.php", function( nob ) {
			nb = parseInt(nob);
		});

		if(glgl>=nb){
			glgl=0;
		}
		else{
			glgl++;
		}
	},12000);
});
