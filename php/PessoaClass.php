<html>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
require_once("BancoClass.php");

	class Pessoa extends Banco{
		private $cpf ;
		private $nome ;
		private $endereco;
		private $cidade ;
		private $bairro ;
		private $cep ;
		private $telefone;
		private $identidade ; 
		private $nascimento ;
		private $email;
		private $login;
		private $senha ;
		private $permissao;
		
		public function __construct(){
		$cpf ;
		$nome ;
		$endereco;
		$cidade ;
		$bairro ;
		$cep ;
		$telefone;
		$identidade ; 
		$nascimento ;
		$email;
		$login;
		$senha ;
		$permissao;
		}
		
		#region Set's e Get's
			public  function setCpf($Novo_Cpf){
				$this->cpf = $Novo_Cpf;
			}
			public function getCpf(){
				return $this->cpf;
			}
			public  function setNome($Novo_Nome){
				$this->nome = $Novo_Nome;
			}
			public function getNome(){
				return  $this->nome;
			}
			public  function setEndereco($Novo_Endereco){
				$this->endereco = $Novo_Endereco;
			}
			public function getEndereco(){
				return  $this->endereco;
			}
			public  function setCidade($Novo_Cidade){
				$this->cidade = $Novo_Cidade;
			}
			public function getCidade(){
				return  $this->cidade;
			}
			public  function setBairro($Novo_Bairro){
				$this->bairro = $Novo_Bairro;
			}
			public function getBairro(){
				return  $this->bairro;
			}
			public  function setCep($Novo_Cep){
				$this->cep = $Novo_Cep;
			}
			public function getCep(){
				return  $this->cep;
			}
			public  function setTelefone($Novo_Telefone){
				$this->telefone = $Novo_Telefone;
			}
			public function getTelefone(){
				return  $this->telefone;
			}
			public  function setIdentidade($Novo_Identidade){
				$this->identidade = $Novo_Identidade;
			}
			public function getIdentidade(){
				return  $this->identidade;
			}
			public  function setNascimento($Novo_Nascimento){
				$this->nascimento = $Novo_Nascimento;
			}
			public function getNascimento(){
				return  $this->nascimento;
			}
			public  function setEmail($Novo_Email){
				$this->email = $Novo_Email;
			}
			public function getEmail(){
				return  $this->email;
			}
			public  function setLogin($Novo_Login){
				$this->login = $Novo_Login;
			}
			public function getLogin(){
				return  $this->login;
			}
			public  function setSenha($Novo_Senha){
				$this->senha = $Novo_Senha;
			}
			public function getSenha(){
				return  $this->senha;
			}
			public  function setPermissao($Novo_permissao){
				$this->permissao = $Novo_permissao;
			}
			public function getPermissao(){
				return  $this->permissao;
			}
			
		#endregion
			
			#region Crude
	public function Atualizar($cpf, $nome, $endereco, $cidade, $bairro, $cep, $telefone, $identidade, $nascimento, $email){
			$this->dados = mysqli_query($this->conexao, "update pessoa set nome = '$nome', endereco = '$endereco', cidade = '$cidade', bairro = '$bairro', cep = '$cep', telefone = '$telefone', identidade = '$identidade', nascimento = '$nascimento', email = '$email' where cpf = $cpf");
			if ($this->dados) {
				return true;
				}else{
					echo "<p>Alteração não realizada</p>";
					return false;
				}
		}
		public function Excluir($cpf){
			$this->dados = mysqli_query($this->conexao, "DELETE FROM pessoa WHERE cpf = $cpf");
			if ($this->dados) {
				return true;
				}else{
					echo "<p>Exclusão não realizada</p>";
					return false;
				}
		}
		public function verificaLogin($login){
			$this->dados = mysqli_query($this->conexao, "Select * from pessoa where login = $login");
			if ($this->dados){
				return false;
			} else {
				return true;
			}
		}
		public function Inserir($cpf, $nome, $endereco, $cidade, $bairro, $cep, $telefone, $identidade, $nascimento, $email, $login, $senha, $permissao){
			$this->dados = mysqli_query($this->conexao, "insert into pessoa (cpf, nome, endereco, cidade, bairro, cep, telefone, identidade, nascimento, email, login, senha, permissao) values('$this->cpf', '$this->nome', '$this->endereco', '$this->cidade', '$this->bairro', '$this->cep', '$this->telefone', '$this->identidade', '$this->nascimento', '$this->email', '$this->login', '$this->senha','$this->permissao')");
			
		if ($this->dados){
           echo "<p>Inserido com sucesso!</p>";
			
        }else{
            echo "<p>Erro ao inserir</p>";
        }
			
		}
		public function Listar(){
			$this->dados = mysqli_query($this->conexao, "Select * from pessoa");
			$this->linha = mysqli_fetch_array($this->dados);
			$this->total = mysqli_num_rows($this->dados);
			$cont = 0;
			echo "<link href='listar.css' rel='stylesheet' type='text/css'/><div class='tabela'><table><tr class='titulo'><td>CPF</td><td>Nome</td><td>Endereço</td><td>Cidade</td><td>Bairro</td><td>CEP</td><td>Telefone</td><td>Identidade</td><td>Nascimento</td><td>Email</td></tr>";
			while ($cont < $this->total){
				echo "<tr class='corpo'><td>" . $this->linha['cpf'] . "</td>";		
				echo "<td>" . $this->linha['nome'] . "</td>";		
				echo "<td>" . $this->linha['endereco'] . "</td>";
				echo "<td>" . $this->linha['cidade'] . "</td>";
				echo "<td>" . $this->linha['bairro'] . "</td>";
				echo "<td>" . $this->linha['cep'] . "</td>";
				echo "<td>" . $this->linha['telefone'] . "</td>";
				echo "<td>" . $this->linha['identidade'] . "</td>";
				echo "<td>" . $this->linha['nascimento'] . "</td>";
				echo "<td>" . $this->linha['email'] . "</td>";
				$this->linha = mysqli_fetch_assoc($this->dados);
				$cont++;
			}
			echo "</tr></table></div>";
		}
		public function Pesquisar($cpf){
			$this->sql = mysqli_query($this->conexao, "Select * from pessoa where cpf = $cpf");
			$this->linha = mysqli_fetch_array($this->sql);
			$this->total = mysqli_num_rows($this->sql);
			
			if ($this->total == 0) {
				echo "<p>Nenhum cliente encontrado</p>";
				return false;
				}else{
					echo "<form name='frmcliente' action='alterarcliente.php' method='post' id='frmcadastro' enctype='multipart/form-data'>
    	<label>CPF: </label> <input type='text' name='cpf' value='".$this->linha['cpf'] ."'><br />
        <label>Nome: </label> <input type='text' name='nome' value='".$this->linha['nome'] ."' /><br />
        <label>Endereço: </label><input type='text' name='endereco' value='".$this->linha['endereco'] ."' /><br />
        <label>Cidade: </label> <input type='text' name='cidade' value='".$this->linha['cidade'] ."'/> <label>Bairro:</label> <input type='text' name='bairro' value='".$this->linha['bairro'] ."'/><br />
        <label>CEP: </label><input type='text' name='cep' value='".$this->linha['cep'] ."' /> <label>Telefone:</label> <input type='text' name='telefone' value='".$this->linha['telefone'] ."' /><br />
        <label>Identidade: </label><input type='text' name='identidade' value='".$this->linha['identidade'] ."' /> <label>Data de Nascimento:</label> <input type='text' name='nascimento' value='".$this->linha['nascimento'] ."' /><br />
        <label>Email: </label> <input type='text' name='email' value='".$this->linha['email'] ."'/>
        <br />
        <br />
        <center><table><tr><td><input type='submit' name='alterar' value='Alterar' class='botaoForm2' /> </form></td><td>
        <form action='Excluir_Confirmar_Pessoa.php' name='frmindex' method='post'>
		<input type='hidden' value='".$this->linha['cpf'] ."' name='fake'>
        	<input type='submit' name='alterar' value='Excluir' class='botaoForm2'/>
			</form></td><td>
			<form action='indexadm.php' name='frmindex' method='post' >
        	<input type='submit' name='alterar' value='Cancelar' class='botaoForm2'/><form></td></tr></table>
        </center>";
		}
				return true;
			}
			
		#endregion
	}
?></html>