<?php
	date_default_timezone_set("Brazil/East");
	function carregaClasse($nomeClasse){
			require $nomeClasse.".php";
	}
	spl_autoload_register("carregaClasse");

	$historico = new Historico();
	$contrato = new Contrato("Caelum", date("Y-m-d"));

	echo "<pre>";
	var_dump($contrato);

	$historico->addEstado($contrato->salvaEstado());
	$contrato->avanca();

	var_dump($contrato);

	$historico->addEstado($contrato->salvaEstado());
	$contrato->avanca();

	var_dump($contrato);
	$contratoAntigo = $historico->restaura(0);
	var_dump($contratoAntigo);

	$contratoAntigo = $historico->restaura(1);
	var_dump($contratoAntigo);