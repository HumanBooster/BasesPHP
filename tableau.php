<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Les tableaux</title>
	</head>

	<body><p>
		<?php

	$tab_int = array(1, 4, 5, 6, 8);
	$tab_strings = array("Michel", "Paul", "Didier");

	echo $tab_strings[1];

	$tab_strings[] = "Jeremy";


	echo '<pre>';
	print_r($tab_strings);
	echo '</pre>';
?>
<ul>
<?php
	$longueur = sizeof($tab_strings);

	for ($i=0; $i<$longueur; $i++) {
		echo '<li>'.$tab_strings[$i].'</li>';
	}

	?>
</ul>
</p>
	</body>
</html>