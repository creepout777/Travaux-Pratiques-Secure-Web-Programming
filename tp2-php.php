<?php
	$noms_etudiants = ['etudiant1','etudiant2','etudiant3'];
	$notes_etudiants = [10,20,13];
	foreach($i = 0;$i < count($noms_etudiant);$i++){
		echo "nom: $nom[i]<br>";
		echo "note: $notes_etudiants[i]<br>";
		echo "<hr>";
	}
	$nom_etudiant[] = 'nouveau_etudiant';
	$notes_etudiant[] = 14;
	unset($nom_etudiant[1]);
	
	$moyenne = array_sum($notes_etudiants) / count($notes_etudiants);
	$max = max($notes_etudiants);
	$min = min($notes_etudiants);
	
	echo "<hr>";


?>
