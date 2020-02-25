<?php
	class ConnectionFactory {
		public function getConnection() {

            $conexao = false;

            $tipoBanco = parse_ini_file('config.php');
                        $tipoBanco = $tipoBanco['tipoBanco'];

                        if($tipoBanco == "mysql") {
                                $conexao = mysqli_connect("meuHost","meuUsuario","minhaSenha","meuBanco");
                        }else if($tipoBanco == "postgree") {
                                $conexao = pg_connect("host=meuHost port=5432 dbname=meuBanco user=meuUsuario password=meuBanco");
                        }
                        
            return $conexao;
    }
}