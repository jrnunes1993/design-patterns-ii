<?php
	class Numero implements Expressao {
		private $numero;

		function __construct($inteiro) {
			$this->numero = $inteiro;
		}

		public function avalia() {
			return $this->numero;
		}

		public function getNumero() {
			return $this->numero;
		}

		public function aceita(Impressora $impressora) {
			$impressora->visitaNumero($this);
		}
	}