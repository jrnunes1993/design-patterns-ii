<?php
	class Novo implements TipoDeContrato {
		public function avanca(Contrato $contrato){
			$contrato->setTipo(new EmAndamento());
		}
	}