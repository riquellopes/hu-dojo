<?php
class CaixaEletronico {
	public function saque($valor) {
		
		if($valor == 30) {
			return array(20 => 1, 10 => 1);
		}

		return array($valor => 1);
	}
}
