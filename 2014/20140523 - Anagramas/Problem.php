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
			$string = $this->string;
			unset($this->string[$i]);
			$this->array[] = $tmp.$string;
			// unset
		}

		return $this->array;
	}

	
}