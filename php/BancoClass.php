<?php
	class Banco {
	
		protected $host = "localhost";
		protected $bd = "mat_construcao";
		protected $user = "root";
		protected $pass = "gian";
		
		protected $conexao, $selecao, $sql, $linha, $total;
		
		public function conectar(){
			$this->conexao = mysqli_connect($this->host, $this->user, $this->pass, $this->bd) or die("erro na conexao: ".mysql_error());
		}
	}
?>