<?php
$etudiants = [["nom" => "etudiant1",
	       "note" => 10],
	       ["nom" => "etudiant2",
	       	"note" => 14],
	       ["nom" => "etudiant3",
	       "note" => 16]];


foreach($etudiants as $etudiant){
	echo $etudiant["nom"]. " : ";
	echo $etudiant["note"] . "<br>";
}

$etudiants[] = ["nom" => "nouveau_etudiant",
		"note" => 17];



?>
