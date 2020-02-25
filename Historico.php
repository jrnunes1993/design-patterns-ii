<?php
	class Historico {
		private $estadoContrato;

		function __construct() {
			$this->estadoContrato = array();
		}

		public function restaura($index) {
			return $this->estadoContrato[$index];
		}

		public function addEstado(Estado $estado) {
			$this->estadoContrato[] = $estado;
		}
	}