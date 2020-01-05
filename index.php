<?php
error_reporting(0);

require "ConnectionFactory.php";

$factory = new ConnectionFactory();
$con = $factory->getConnection();


$select = "select * from cursos";

var_dump($con)

?>