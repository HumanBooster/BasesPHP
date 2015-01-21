<?php
/**
 * Classe abstraite de modèle pour des figures 
 * 
 * @author humanbooster
 */

class Math {
	static function hypothenuse($cote1, $cote2) {
		return sqrt( $cote1*$cote1 + $cote2*$cote2 );
	}
}

abstract class Figure {
	
	abstract public function aire();
	abstract public function perimetre();

	public function afficher() {
		echo "Mon aire est de ".$this->aire().
			" et mon perimetre de ".$this->perimetre().".<br/>";
	}
}

class Rectangle extends Figure {
	
	public $largeur, $longueur;
	public static $compteur = 0;
	
	public function __construct($largeur, $longueur) {
		$this->largeur = $largeur;
		$this->longueur = $longueur;
		self::$compteur++;
	}
	
	public function aire() {
		return $this->largeur * $this->longueur;
	}
	
	public function perimetre() {
		return 2 * ($this->largeur + $this->longueur); 
	}
	
	public function afficher() {
		echo "Je suis un ". get_class($this) . ", ma largeur est de ".$this->largeur
			." et ma longueur est de ".$this->longueur.".<br/>";
		
		echo "Il y a actuellement ".self::$compteur." rectangles instancies.<br/>";
		//parent::afficher();
	}
}

/**
 * Classe Carre 
 * 
 * @author humanbooster
 *
 */
class Carre extends Rectangle {
	public function __construct($cote) {
		parent::__construct($cote, $cote);
	}
}


class TriangleRectangle extends Rectangle {
	public function aire() {
		return ( parent::aire() / 2 );
	}

	public function perimetre() {
		return ($this->largeur + $this->longueur) + Math::hypothenuse($this->largeur, $this->longueur);
	}
}
/*
class Cercle extends Figure {

	public function aire() {
		return ( parent::aire() / 2 );
	}

	public function perimetre() {
		return ($this->largeur + $this->longueur) + sqrt( pow($this->largeur + $this->longueur, 2 ));
	}
}*/

$rectangle = new Rectangle(5, 6);
$rectangle->afficher();

echo '<br/>';

$carre = new Carre(5);
$carre->afficher();

echo '<br/>';

$triangle = new TriangleRectangle(5, 6);
$triangle->afficher();

echo '<br/>';

echo "Il y a actuellement ". Rectangle::$compteur . " rectangles instancies."; 