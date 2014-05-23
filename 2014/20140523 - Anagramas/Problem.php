<?php
class Anagrama {

	private $string;
	private $array;

	function Anagrama($string){
		$this->string = $string;
		$this->array = array("baeta", "abeta", 'aebta');
	}

	public function get() {
		$tmp = explode("", $this->string);
		for ($i=0; $i < 5; $i++) {
			/*for($j = 0; $j < 5; $j++){
				if($i==$j){
					continue;
				} else {

				}
			}*/
			$string = $this->string;
			unset($this->string[$i]);
			$this->array[] = $tmp.$string;
			// unset
		}

		return $this->array;
	}

	
}