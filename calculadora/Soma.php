<?php
	class Soma implements Expressao{
		private $esquerdo;
		private $direito;

		function __construct(Expressao $ladoEsquerdo,Expressao $ladoDireito) {
			$this->esquerdo = $ladoEsquerdo;
			$this->direito = $ladoDireito;
		}

		public function getEsquerdo(){
			return $this->esquerdo;
		}

		public function getDireito(){
			return $this->direito;
		}

		public function avalia() {
			$valorEsquerda = $this->esquerdo->avalia();
			$valorDireita = $this->direito->avalia();

			return $valorEsquerda + $valorDireita;
		}

		public function aceita(Impressora $impressora) {
			$impressora->visitaSoma($this);
		}
	}