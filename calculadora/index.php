<?php
	date_default_timezone_set("Brazil/East");

	function carregaClasse($classe) {
		require $classe.".php";
	}

	spl_autoload_register("carregaClasse");

	$esquerdo = new Soma(new Numero(1),new Numero(3));
	$direito = new Subtracao(new Numero(2),new Numero(2));

	$soma = new Soma($esquerdo,$direito);

	$impressora = new Impressora();

	$data = new Relogio();
	echo $data->getDia()."/".$data->getMes();
	echo "<br />";

	$soma->aceita($impressora);

	echo "=";

	echo $soma->avalia();

	$mapa = new GoogleMaps();
	
	echo "<br />";
	echo $mapa->getMapa();