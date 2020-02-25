<?php
	class EmpresaFacade {
		private static $instance = null;

		private function __construct() {}

		public static function getInstance() {
			if(is_null($this->instance)){
				$this->instance = new EmpresaFacade();
			}

			return $this->instance;
		}

		public function getInstance() {
			return $this->instance;
		}

		public function criaContrato($nome,$valor) {
			// regra de negocio
			return new Contrato($nome,$valor);
		}

		public function criaItem($nomeItem,$valor) {
			return new Item($nomeItem,$valor);
		}

		public function criaPedido($nome,$valor) {
			return new Pedido($nome,$valor);
		}
		public function finalizaPedido(Pedido $pedido) {
			// diversas classes são chamadas
		}
	}