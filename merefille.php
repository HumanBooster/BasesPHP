<?php

class GrandMere {
	function sePresenter() {
		echo "Je suis la classe Grand-Mere.";
	}
}

class Mere extends GrandMere {
	
	function saluer() {
		parent::sePresenter();
	}
	
	function sePresenter() {
		echo "Je suis la classe Mere.";
	}
}

class Fille extends Mere {
	function sePresenter() {
		echo "Je suis la classe Fille.";
	}
}

//Fille::saluer();

$fille = new Fille();
$fille->saluer();

Fille::saluer();

// self représente la classe où le code est saisi

// static représente la classe où le code est executé

