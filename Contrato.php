<?php

class Contrato {
	private $nome;
	private $data;
	private $tipo;

	function __construct($novoNome, $data, $tipo = NULL){
		$this->nome = $novoNome;
		$this->data = $data;
		if (!is_null($tipo))
		{
			$this->tipo = $tipo;
		}else{
			$this->tipo = new Novo();
		}
	}

	public function setTipo(TipoDeContrato $novoTipo){
		$this->tipo = $novoTipo;

	}

	public function avanca(){
		$this->tipo->avanca($this);
	}

	public function salvaEstado()
	{
		return new Estado(new Contrato($this->nome, $this->data, $this->tipo));
	}

}

?>
