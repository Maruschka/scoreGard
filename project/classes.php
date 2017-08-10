<?php

class Element {

	public $id;
	public $baseValue;
	public $name;
	public $type;
	public $goeNr;


	public function __construct($id, $name, $type, $baseValue) {
		$this -> name = $name; 
		$this -> id = $id; 
		$this -> type = $type; 
		$this -> baseValue = $baseValue; 

	}

}


class Goe {
	
	public $goeNr;
	public $min3;
	public $min2;
	public $min1;
	public $plus1;
	public $plus2;
	public $plus3;

	public function __construct($min3, $min2, $min1, $plus1, $plus2, $plus3) {
		$this -> min3 = $min3; 
		$this -> min2 = $min2; 
		$this -> min1 = $min1; 
		$this -> plus1 = $plus1; 
		$this -> plus2 = $plus2; 
		$this -> plus3 = $plus3; 
	}

}

class Row {

	public $rowNumber;
	public $rowID = '';
	public $rowValue = 0.00;
	public $rowTotal = 0.00;

	public function __construct($nr) {
		$this -> rowNumber = $nr;

	}

}



?>