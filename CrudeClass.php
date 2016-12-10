<?php
	require_once 'BancoClass.php';
	class Crude extends Banco{
		
		public function __construct(){
			
		}
		
		public function Atualizar($codigo){
			$query = sprintf($format);
			$this->dados = mysqli_query($this->con, $query);
			$this->linha = mysqli_fetch_array($this->dados);
			$this->total = mysqli_num_rows($this->dados);
		}
		public function Excluir($codigo){
			$query = sprintf($format);
			$this->dados = mysqli_query($this->con, $query);
			$this->linha = mysqli_fetch_array($this->dados);
			$this->total = mysqli_num_rows($this->dados);
		}
		public function Inserir($codigo){
			$query = sprintf($format);
			$this->dados = mysqli_query($this->con, $query);
			$this->linha = mysqli_fetch_array($this->dados);
			$this->total = mysqli_num_rows($this->dados);
		}
		public function Listar($codigo){
			$query = sprintf($format);
			$this->dados = mysqli_query();
			$this->linha = mysqli_fetch_array();
			$this->total = mysqli_num_rows();
		}
		public function Pesquisar($codigo){
			$query = sprintf($format);
			$this->dados = mysqli_query();
			$this->linha = mysqli_fetch_array();
			$this->total = mysqli_num_rows();
		}
	}
?>