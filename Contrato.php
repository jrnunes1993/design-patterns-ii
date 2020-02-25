<?php
	class Contrato {
		private $nome;
		private $data;
		private $tipo;

		function __construct($novoNome, $data,$tipo = null){
			$this->nome = $novoNome;
			$this->data = $data;
			$this->tipo = $tipo != null ? $tipo : new Novo();
		}

		public function setTipo(TipoDeContrato $novoTipo){
			$this->tipo = $novoTipo;
		}

		public function avanca() {
			$this->tipo->avanca($this);
		}

		public function salvaEstado() {
			return new Estado(new Contrato($this->nome,$this->data,$this->tipo));
		}
	}