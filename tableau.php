<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Les tableaux</title>
	</head>

	<body><p>
		<?php

	$tab_personnes = array(
			array(  "prenom" => "Michel",
					"age" => 44),
			array(  "prenom" => "Paul",
					"age" => 32),
			array(  "prenom" => "Marie",
					"age" => 50)
		);


	echo '<pre>';
	print_r($tab_personnes);
	echo '</pre>';
?>
<ul>
<?php
	$longueur = sizeof($tab_personnes);

	for ($i=0; $i<$longueur; $i++) {
		echo '<li>'.$tab_personnes[$i]["prenom"]." a "
			.$tab_personnes[$i]["age"].' ans</li>';

		/*echo '<li>';

		for ($j=0; $j<sizeof($tab_personnes[$i]); $j++) {
			echo "[".$tab_personnes[$i][$j]."]";
		}

		echo '</li>';*/
	}

	?>
</ul>
</p>
	</body>
</html>