<?php 
	// initialisation du prenom
	$prenom = "Benjamin";

	function multiplier($a, $b = 2) {
		return $a * $b;
	}

	$r = multiplier(5, 3);


	function direBonjour($prenom) {
		echo "Bonjour $prenom !";
	}

	function aireCercle($rayon) {
		return M_PI * $rayon * $rayon;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Mon premier Hello World</title>
	</head>

	<body>
		<h1>Ma page web</h1>
		<p> 
			<?php
			$condition = true;

			if ($condition) { ?>
				Bonjour
			<?php } else { ?>
				Au revoir
			<?php } 


			//exemple fonction perso
			$a = 5; $b = 6;

			echo "La multiplication de $a par $b donne "
				. multiplier($a, $b) . ".";
				?>
		</p>

		<p>
				<?php
				$rayon = 5;

				echo "Pour un rayon de ".$rayon.", l'aire est ".aireCercle($rayon);
				//$aire = aireCercle($rayon);
							?>
		</p>

		<p> 
			<?php
			//exemple strlen();
			$phrase = "Bonjour tout le monde !";
			$longueur = strlen($phrase);
			echo "La phrase '".$phrase."' fait ".$longueur." caractères.<br/>";

			?>
		</p>

		<p> 
			<?php
			//exemple strtolower() et ucfirst();
			$phrase = "JE CRIE TROP FORT.";
			echo $phrase."<br/>";
			$phrase = strtolower($phrase);
			echo "En minuscule : ".$phrase."<br/>";
			$phrase = ucfirst($phrase);
			echo "Avec une capitale : ".$phrase."<br/>";

			?>
		</p>

		<p> 
			<?php
			//exemple str_replace();
			$phrase = "bim bam boum!";
			echo $phrase."<br/>";
			$phrase = str_replace("b", "p", $phrase);

			echo $phrase."<br/>";
		
			?>
		</p>

		<p> 
			<?php
			//exemple str_shuffle();
			$phrase = "bim bam boum!";
			echo $phrase."<br/>";
			$phrase = str_shuffle($phrase);
			echo $phrase."<br/>";
		
			?>
		</p>

		<p> 
			<?php
			//exemple date();
			$date = date('d/m/Y');
			echo "La date est : ".$date."<br/>";
		
			?>
		</p>

	</body>
</html>