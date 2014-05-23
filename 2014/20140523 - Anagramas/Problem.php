<?php
class Anagrama {

	private $string;
	private $array;
	private $index = 0;

	function Anagrama($string){
		$this->string = $string;
		$this->array = array();
		$this->string_to_array = str_split($this->string);
		$this->inverse = array_reverse($this->string_to_array);
	}

	public function get() {
		if($this->index < count($this->string_to_array)-1) {
			$vtemp = $this->string_to_array[$this->index+1];
			$this->string_to_array[$this->index+1] = $this->string_to_array[$this->index];
			$this->string_to_array[$this->index] = $vtemp;
			$str = implode("", $this->string_to_array);
			if($this->inverse != $str) {
				$this->index++;
				$this->array[] = $str;
				$this->get();
			}
		} else {
			$this->index = 0;
			$this->get();
		}
		return $this->array;
	}
}