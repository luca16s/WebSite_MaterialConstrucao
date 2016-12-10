<?php
require_once 'BancoClass.php';
	class Login extends Banco{
		public function Logar($login, $senha){
		//echo $login."-";
		//echo $senha."-";
		$query = sprintf("select * from pessoa where login = '$login' and senha = '$senha'") or die("erro ao selecionar");
		$this->dados = mysqli_query($this->conexao, $query);
		$this->linha = mysqli_fetch_array($this->dados);
		$this->total = mysqli_num_rows($this->dados);
		$teste = $this->linha['permissao'];
		if ($this->total <= 0)
				{
					echo $this->linha['nome'];
					echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
                    die();
					return false;
				}else{
					if($teste == "adm"){
						header("Location:indexadm.php");
						return true;
					}else{
						setcookie("login", $login);
						header("Location:indexcliente.php");
						return true;
					}
					
				}
		}
	}
		
	$login = new Login();
	$login->conectar();
	$login->Logar($_POST['login'], $_POST['senha']);
	$nome = $_POST['login'];
	$sen = $_POST['senha'];
	session_start();
	$_SESSION["nome"] = $_POST['login'];
?>