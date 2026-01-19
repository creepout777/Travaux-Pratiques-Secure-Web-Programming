<?php
	$films = ['film1', 'film2', 'film3', 'film4', 'film5'];
	echo "Le 3eme film est : $films[2]<br>";
	foreach($films as $film){
		echo "- $film <br>";
	}
	echo "<hr>";
	////////
	$livres = [[
			"titre" => "titre1",
			"auteur" => "auteur1",
			"annee_publication" => "2025",
			"genre" => "comic"
		],[
			"titre" => "titre2",
			"auteur" => "auteur2",
			"annee_publication" => "1999",
			"genre" => "historique"
		],[
			"titre" => "titre3",
			"auteur" => "auteur3",
			"annee_publication" => "2025",
			"genre" => "theatre"
		]];
	echo "titre : {$livres[0][titre]}";
	echo "auteur : {$livres[0][auteur]}";
	echo  "<br><hr><br>";
	$i = 0;
	foreach($livres as $key => $value){
		i+=1;
		echo "$key : $value";
	}

	echo "<br><hr><br>";
	$tableau = [[
			"nom" => "Alaoui",
			"prenom" => "Hassan"
			"notes" => [10,11,12]
		],[
			"nom" => "Aitaouicha",
			"prenom" => "Yassine"
			"notes" => [13,14,15]
		],[
			"nom" => "Taki",
			"prenom" => "Saad";
			"notes" => [16,17,18]
		]];
	echo "Nom et prenom du 2eme etudiant : {$tableau[1]["nom"]}{$tableau[1]["prenom"]}";
	echo "<br>";
	echo "{$tableau[0]["notes"][0]} <br>";
	foreach($tableau as $etudiant){
		echo "nom et prenom : {$etudiant["nom"]} {$etudiant["prenom"]}<br>";
		echo "moyenne : " . calculateAverage($etudiant["notes"]); 
	}
?>

