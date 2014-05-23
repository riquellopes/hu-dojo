<?php
class Anagrama {

	private $string;
	private $array;

	function Anagrama($string){
		$this->string = $string;
		$this->array = array("baeta", "abeta", 'aebta');
	}

	public function get() {
		return $this->array;
	}

	
}