<?php

	include_once('Internaute.class.php');
	//public class main(){
		$internaut = new Internaute('Nsangou', 'Andamou', 690264775,'yaounde','Adams','Alim');
		$internaut->enregistrer('Nsangou', 'Andamou', 690264775,'yaounde','Adam','Alim');
		$valeur = $internaut->authentifier('Adam','Alim');
		if($valeur){
			echo "bienvenu";
			echo $valeur;
		}
		else{
			echo $valeur;
			echo "byby";
		}
	//}
?>