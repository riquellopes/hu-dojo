<?php
class Anagrama {

	private $string;
	private $array;
	private $index = 0;

	function Anagrama($string){
		$this->string = $string;
		$this->array = array();
	}

	public function get() {
		$tmp = str_split($this->string);
		$this->inverso = array_reverse($tmp);
		if($this->index < count($tmp)-1){
			$vtemp = $tmp[$this->index+1];
			$tmp[$this->index+1] = $tmp[$this->index];
			$tmp[$this->index] = $vtemp;
			$str = implode("", $tmp);
			$this->array[] =  $str;
			$this->get();
		}

		for ($i=0; $i < count($tmp); $i++) {
			for($j = 0; $j < 5; $j++){
				if($i==$j){
					continue;
				} 
			}

			$string = str_split($this->string);
			unset($string[$i]);
			$string[$i] = $tmp[0];
			$this->array[] = implode($string);
			// unset
		}

		return $this->array;
	}

	
}