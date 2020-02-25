<?php
	//error_reporting(0);

	require "ConnectionFactory.php";
	
	$factory = new ConnectionFactory();

	$conexao = $factory->getConnection();

	var_dump($conexao);