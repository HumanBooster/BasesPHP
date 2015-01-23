<?php 


	interface Deplacement {
		function seDeplacer();
	}

	class Marche implements Deplacement {
		public function seDeplacer() {
			return $this->marcher();
		}

		public function marcher() {
			echo "Je me deplace en marchant.<br/>";
		}
	}

	class Vol implements Deplacement {
		public function seDeplacer() {
			return $this->voler();
		}

		public function voler() {
			echo "Je me deplace en volant.<br/>";
		}
	}

	class Nage implements Deplacement {
		public function seDeplacer() {
			return $this->nager();
		}

		public function nager() {
			echo "Je me deplace en nageant.<br/>";
		}
	}

	abstract class Animal {

		protected $nom;
		public $espece;
		public $deplacement;

		public static $nbAnimaux = 0;

		public function __construct( $nom ) {
			$this->nom = $nom;
			self::$nbAnimaux++;
		}

		public function __destruct() {
			self::$nbAnimaux--;
		}

		abstract public function manger();
		abstract public function dormir();

	}

	abstract class Espece {
		const FELIN = 0;
		const URSIDE = 1;
	}

	class Lion extends Animal {

		public function __construct ($nom) {
			$this->espece = Espece::FELIN;
			$this->deplacement = new Marche();
			Animal::__construct($nom);
		}

		public function manger() {
			echo "Je suis un Lion, je m'appelle " . $this->nom
				. " et je mange de la viande.<br/>";
		}

		public function dormir() {
			echo "Je suis un Lion, je m'appelle " . $this->nom
				. " et je dors dans la plaine.<br/>";
		}
	}

	class OursBrun extends Animal {

		public function __construct ($nom) {
			$this->espece = Espece::URSIDE;
			$this->deplacement = new Marche();
			Animal::__construct($nom);
		}

		public function manger() {
			echo "Je suis un Ours, je m'appelle " . $this->nom
				. " et je mange des fruits et de la viande.<br/>";
		}

		public function dormir() {
			echo "Je suis un Ours, je m'appelle " . $this->nom
				. " et je dors dans une grotte.<br/>";
		}

	}

	class OursPolaire extends Animal {
		public function __construct ($nom) {
			$this->espece = Espece::URSIDE;
			$this->deplacement = new Nage();
			Animal::__construct($nom);
		}

		public function manger() {
			echo "Je suis un Ours polaire, je m'appelle " . $this->nom
				. " et je mange surtout du poisson.<br/>";
		}

		public function dormir() {
			echo "Je suis un Ours polaire, je m'appelle " . $this->nom
				. " et je dors sur la banquise .<br/>";
		}
	}

/*
	$animaux = array(new Lion("Zoe"),
					 new Lion("Zoa"),
					 new OursBrun("Winny"),
					 new OursPolaire("Thor"),
					 new OursPolaire("Vladimir")
					 );

	foreach ($animaux as $a) {
		$a->manger();
	}

	foreach ($animaux as $a) {
		$a->dormir();
	}

	echo "Il y a ".Animal::$nbAnimaux." animaux dans le zoo.<br/>";
*/

	


	class Zoo {
		public $animaux = array();

		public function charger() {
			$this->animaux[] = new Lion("Zoe");
			$this->animaux[] = new Lion("Zoa");
			$this->animaux[] = new OursBrun("Winny");
			$this->animaux[] = new OursPolaire("Thor");
			$this->animaux[] = new OursPolaire("Vladimir");
		}

		public function faireDormir() {
			foreach ($this->animaux as $a) {
				$a->dormir();
			}
		}

		public function faireManger() {
			foreach ($this->animaux as $a) {
				$a->manger();
			}
		}

		public function faireDeplacer() {
			foreach ($this->animaux as $a) {
				$a->deplacement->seDeplacer();
			}
		}

		private function getNombre() {
			return Animal::$nbAnimaux;
		}

		public function afficherNombre() {
			echo "Il y a ".$this->getNombre() . " animaux dans le zoo.<br/>";
		}
	}




	$zoo = new Zoo();

	$zoo->animaux[] = new Lion("Simba");

	$zoo->charger();

	$zoo->faireManger();

	$zoo->faireDeplacer();

	$zoo->faireDormir();

	$zoo->afficherNombre();