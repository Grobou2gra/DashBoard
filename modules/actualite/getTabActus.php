<?php 
function get_tabactu($na){
	try{
		$actutab = unserialize(file_get_contents("cache_file"));
	}
	catch(exeption $e){
		throw new Exception( 'wait for it !', 0, $e);
	}
	if(!empty($actutab[$na])){
		return $actutab[$na];
	}
	else{
		return array("titre"=>'nope', 'info'=>'nope');
	}
} 
?>