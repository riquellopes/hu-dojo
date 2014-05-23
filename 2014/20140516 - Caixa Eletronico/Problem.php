<?php
class CaixaEletronico {
	
	private $_notas;

	public function __construct(array $notas) {
		$this->_notas = $notas;
	}
	
	public function saque($valor) {
		$valorOriginal = $valor;
		$return = array();

		if (in_array($valor, $this->_notas)) {
			return array($valor => 1);
		}

		foreach ($this->_notas as $nota => &$qtdNotas) {
			if ($valor >= $nota) {
				$qtdNotasAUsar = (int) ($valor / $nota);
				
				if ($qtdNotasAUsar <= $qtdNotas) {
					$qtdNotas -= $qtdNotasAUsar;
				} elseif ($qtdNotasAUsar > 0 and $qtdNotas > 0 ) {
					$qtdNotasAUsar = $qtdNotas;
					$qtdNotas = 0;
				}

				if ($qtdNotasAUsar > 0) {
					$return[$nota] = $qtdNotasAUsar;
					$valor = $valor - ($nota * $qtdNotasAUsar);
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
