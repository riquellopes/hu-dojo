<?php
class CaixaEletronico {
	
	private $_notas = array(100, 50, 20, 10);

	public function saque($valor) {
		$return = array();

		foreach ($this->_notas as $nota) {
			if ($valor >= $nota) {
				$qtdNotasUsadas = ($valor / $nota);
				$return[$nota] = $qtdNotasUsadas;

				$valor = $valor - ($nota * $qtdNotasUsadas);
			}

			if ($valor == 0) {
				break;
			}
		}

		return $return;
	}
}
