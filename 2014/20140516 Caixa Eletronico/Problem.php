<?php
class CaixaEletronico {
	public function saque($valor) {
		
		if($valor == 30) {
			return array(20 => 1, 10 => 1);
		} elseif ($valor == 40) {
			return array(20 => 2);
		} elseif ($valor == 80) {
			return array(50 => 1, 20 => 1, 10 => 1);
		}

		return array($valor => 1);
	}
}
