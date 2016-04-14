<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/style.css" />			<!-- Appel style css -->
        <link rel="stylesheet" href="style/font.css" />				<!-- Appel font css -->
        <title>Board</title>
        <script src="jquery.js"></script>
		<script src="functions.js"></script>
		<script src="heure.js"></script>
    </head>
    <body>
    	<span id="sideleft">
	    	<!-- Module horloge -->
			<div id="horloge" class="module noir">										
				<div class="inner_horloge">								<!-- Container horloge -->
					<div id="js_date" class="date"></div>
					<div id="js_heure" class="heure"></div>
				</div>
			</div>
			<div id="stan" class="blockstan">
				<!-- Module STAN -->
				<div id="tram" class="module">
				</div>

				<!-- Module VCub -->
				<div id="vcub" class="module">
							<div class="vcub">Vcub restants :</div>	
							<div class="nb_vcub"></div>
				</div>
			</div>
		</span>
		<span id="sideright">
			<div id="top">
				<!-- Module actualités -->
				<div id="actualites" class="module blanc">
					<?php include("modules/actualite/actualite.php"); ?>
				</div>
				<!-- Module diaporama -->
				<div id="diaporama" class="module">
					<?php include("modules/diaporama/diaporama.php"); ?>

				</div>
			</div>
			<span id="bottom">
				<!-- Module babord -->
				<div id="babord" class="module">
				</div>
				<!-- Module météo -->
				<div id="meteo" class="module">
				</div>
			</span>
		</span>
    </body>
</html>
