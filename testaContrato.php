<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

function carregaClasse ($nomeClasse) {
	require $nomeClasse.".php";
}

spl_autoload_register("carregaClasse");

$historico = new Historico();
$contrato = new Contrato("Alura", date("Y-m-d"));
echo "<pre>";
var_dump($contrato);
echo "<br>";
$historico->addEstado($contrato->salvaEstado());
$contrato->avanca();
echo "<pre>";
var_dump($contrato);
$historico->addEstado($contrato->salvaEstado());
$contrato->avanca();
echo "<pre>";
var_dump($contrato);
echo "<pre>";
$contratoAntigo = $historico->getEstado(1);
var_dump($contratoAntigo);