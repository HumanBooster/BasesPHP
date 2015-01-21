<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Les tableaux</title>
	</head>

	<body><p>
		<?php

	$tab_personnes = array(
			array(  'prenom' => "Michel",
					'age' => 44,
					'taille' => 180),
			array(  'prenom' => "Paul",
					'age' => 32,
					'taille' => 160),
			array(  'prenom' => "Marie",
					'age' => 50,
					'taille' => 170)
		);


	// tableau de 10 * 5
	$largeur = 5;
	$hauteur = 10;

	//$tab = array(); // facultatif

	for ($j = 0; $j<$hauteur; $j++) {
		for ($i = 0; $i<$largeur; $i++) {
			$tab[$i + $j*$largeur] = "$i,$j";
		}
	}


	print_r($tab);


	echo '<pre>';
	print_r($tab_personnes);
	echo '</pre>';
?>
<ul>
<?php
	//$longueur = sizeof($tab_personnes);

	foreach ($tab_personnes as $personne) {

		echo '<li><ul>';
			foreach ($personne as $cle => $valeur) {

				echo '<li>'.$cle." : ".$valeur.'</li>';
			}
		echo '</ul></li>';
	}

	?>
</ul>
</p>
	</body>
</html>