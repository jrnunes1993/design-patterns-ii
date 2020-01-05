<?php

class ConnectionFactory {

	public function getConnection() {
		$host = "localhost";
		$user = "";
		$password = "";
		$database = "";

		$con = mysqli_connect($host,$user,$password,$database);
		return $con;
	}

}

?>