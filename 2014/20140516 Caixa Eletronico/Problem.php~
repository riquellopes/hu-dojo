<?php
class CaixaEletronico {
	
	private $_notas = array(100, 50, 20, 10);

	public function saque($valor) {
		$valorOriginal = $valor;
		$return = array();

		if (in_array($valor, $this->_notas)) {
			return array($valor => 1);
		}

		foreach ($this->_notas as $nota) {
			if ($valor >= $nota) {
				$qtdNotasUsadas = (int) ($valor / $nota);
				if ($qtdNotasUsadas > 0) {
					$return[$nota] = $qtdNotasUsadas;
					$valor = $valor - ($nota * $qtdNotasUsadas);
				}
			}

			if ($valor == 0) {
				break;
			}
		}

		if ($valor != 0) {
			throw new InvalidArgumentException("Valor {$valorOriginal} inválido.");
		}

		return $return;
	}
}
