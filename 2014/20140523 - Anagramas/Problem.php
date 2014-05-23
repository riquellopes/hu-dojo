<?php
class Anagrama {

	private $string;
	private $array;

	function Anagrama($string){
		$this->string = $string;
		$this->array = array("baeta", "abeta", 'aebta');
	}

	public function get() {
		for ($i=0; $i < 5; $i++) { 
			$tmp = $this->string[$i];
			// $this->array[] = ;
			// unset
		}

		return $this->array;
	}

	
}