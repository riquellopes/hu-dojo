<?php
class Anagrama {
	private $string;
	private $result = array();
	
	public function __construct($string){
		$this->string = $string;
		$this->result = $this->processAnagrama($this->string);
	}
	
	private function processAnagrama($string){
		$result = array();
		
		if( !$string ){
			$result[] = $string;
		}else{	
			foreach( str_split($string) as $s){
				$p = preg_replace("/".$s."/", "", $string, 1);
				
				foreach( $this->processAnagrama($p) as $ana ){
					$result[] = trim($s."".$ana);
				}
				
			}
		}
		
		return $result;
	}
	
	public function get() {
		return $this->result;
	}
}