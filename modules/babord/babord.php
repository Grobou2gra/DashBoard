<?php 
include_once('getBabord.php');
if(!empty($_POST['na'])){
	$idlivre=$_POST['na'];
}
else{
	$idlivre=0;
}
$livres= getBabord();
?>
<div class="nouveaux">Nouveaux arrivages</div>
<div id="wrapbabord" >
	<div id ="cadre_blanc_babord_gauche_1" class="cadre_blanc_babord_gauche">
		<div class="grand_livre"><img class="imgbook" src="<?php echo ($livres[$idlivre][2]); ?>" onError="this.onerror=null;this.src='style/images/unknow_book.jpg';" /></div>
		<div class="grand_titre"><?php echo utf8_encode($livres[$idlivre][0]); ?></div>
		<div class="grand_auteur"><?php echo utf8_encode($livres[$idlivre][1]); ?></div>
	</div>
	<div id ="cadre_blanc_babord_gauche_2" class="cadre_blanc_babord_gauche">
		<div class="grand_livre"><img class="imgbook" src="<?php echo ($livres[$idlivre+1][2]); ?>" onError="this.onerror=null;this.src='style/images/unknow_book.jpg';"/></div>
		<div class="grand_titre"><?php echo utf8_encode($livres[$idlivre+1][0]); ?></div>
		<div class="grand_auteur"><?php echo utf8_encode($livres[$idlivre+1][1]); ?></div>
	</div>
</div>
<div class="cadre_blanc_babord_droite">
	<div class="livre" id="livre1">
		<div class="visuel1"><img src="<?php echo ($livres[$idlivre+1][2]); ?>" onError="this.onerror=null;this.src='style/images/unknow_book.jpg';"/></div>
		<div class="titre1"><?php echo utf8_encode($livres[$idlivre+1][0]); ?></div>
		<div class="auteur1"><?php echo utf8_encode($livres[$idlivre+1][1]); ?></div>
	</div>
	<div class="livre" id="livre2">
		<div class="visuel2"><img src="<?php echo ($livres[$idlivre+2][2]); ?>" onError="this.onerror=null;this.src='style/images/unknow_book.jpg';"/></div>
		<div class="titre2"><?php echo utf8_encode($livres[$idlivre+2][0]); ?></div>
		<div class="auteur2"><?php echo utf8_encode($livres[$idlivre+2][1]); ?></div>
	</div>
	<div class="livre" id="livre3">
		<div class="visuel3"><img src="<?php echo ($livres[$idlivre+3][2]); ?>" onError="this.onerror=null;this.src='style/images/unknow_book.jpg';"/></div>
		<div class="titre3"><?php echo utf8_encode($livres[$idlivre+3][0]); ?></div>
		<div class="auteur3"><?php echo utf8_encode($livres[$idlivre+3][1]); ?></div>
	</div>
		<div class="livre" id="livre4">
		<div class="visuel4"><img src="<?php echo ($livres[$idlivre+4][2]); ?>" onError="this.onerror=null;this.src='style/images/unknow_book.jpg';"/></div>
		<div class="titre4"><?php echo utf8_encode($livres[$idlivre+4][0]); ?></div>
		<div class="auteur4"><?php echo utf8_encode($livres[$idlivre+4][1]); ?></div>
	</div>
</div>