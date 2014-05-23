<?php
class Anagrama {

	private $string;
	private $array;

	function Anagrama($string){
		$this->string = $string;
		$this->array = array();
	}

	public function get() {
		$tmp = str_split($this->string);

		for ($i=0; $i < count($tmp); $i++) {
		/*	for($j = 0; $j < 5; $j++){
				if($i==$j){
					continue;
				} else {

				}
			}*/

			$string = str_split($this->string);
			unset($string[$i]);
			$string[$i] = $tmp[0];
			$this->array[] = implode($string);
			// unset
		}

		return $this->array;
	}

	
}