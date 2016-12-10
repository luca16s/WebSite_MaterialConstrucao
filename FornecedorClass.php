<html>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<?php
require_once("BancoClass.php");

	class Fornecedor extends Banco{
		private $cnpj ;
		private $nome ;
		private $endereco;
		private $cidade ;
		private $bairro ;
		private $cep ;
		private $telefone;
		private $email;
		
		public function __construct(){
		$cnpj ;
		$nome ;
		$endereco;
		$cidade ;
		$bairro ;
		$cep ;
		$telefone;
		$email;
		}
		
		#region Set's e Get's
			public  function setCnpj($Novo_Cnpj){
				$this->cnpj = $Novo_Cnpj;
			}
			public function getCnpj(){
				return $this->cnpj;
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
			public function setEmail($Novo_Email){
				$this->email = $Novo_Email;
			}
			public function getEmail(){
				return $this->email;
			}
			
		#endregion
		
		#region Crude
		public function Atualizar($cnpj, $nome, $endereco, $cidade, $bairro, $cep, $telefone, $email){
			$this->dados = mysqli_query($this->conexao, "update fornecedor set nome_fantasia = '$nome', endereco = '$endereco', cidade = '$cidade', bairro = '$bairro', cep = '$cep', telefone = '$telefone', email = '$email' where cnpj = $cnpj");
			if ($this->dados) {
				return true;
				}else{
					echo "<p>Alteração não realizada</p>";
					return false;
				}
		}
		public function Excluir($cnpj){
			$this->dados = mysqli_query($this->conexao, "DELETE FROM fornecedor WHERE cnpj = $cnpj");
			if ($this->dados) {
				return true;
				}else{
					echo "<p>Exclusão não realizada</p>";
					return false;
				}
		}
		public function Inserir($cnpj, $nome, $endereco, $cidade, $bairro, $cep, $telefone, $email){
			$this->dados = mysqli_query($this->conexao, "insert into fornecedor (cnpj, nome_fantasia, endereco, cidade, bairro, cep, telefone, email) values('$cnpj', '$nome', '$endereco', '$cidade', '$bairro', '$cep', '$telefone', '$email')");
			
		if ($this->dados){
           echo "<p>Inserido com sucesso!</p>";
			
        }else{
            echo "<p>Erro ao inserir</p>";
        }
			
		}
		public function Listar(){
			$this->dados = mysqli_query($this->conexao, "Select * from fornecedor");
			$this->linha = mysqli_fetch_array($this->dados);
			$this->total = mysqli_num_rows($this->dados);
			$cont = 0;
			echo "<link href='listar.css' rel='stylesheet' type='text/css'/><div class='tabela'><table><tr class='titulo'><td>CNPJ</td><td>Nome fantasia</td><td>Endereço</td><td>Cidade</td><td>Bairro</td><td>CEP</td><td>Telefone</td><td>Email</td></tr>";
			while ($cont < $this->total){
				echo "<tr class='corpo'><td>" . $this->linha['cnpj'] . "</td>";		
				echo "<td>" . $this->linha['nome_fantasia'] . "</td>";		
				echo "<td>" . $this->linha['endereco'] . "</td>";
				echo "<td>" . $this->linha['cidade'] . "</td>";
				echo "<td>" . $this->linha['bairro'] . "</td>";
				echo "<td>" . $this->linha['cep'] . "</td>";
				echo "<td>" . $this->linha['telefone'] . "</td>";
				echo "<td>" . $this->linha['email'] . "</td>";
				$this->linha = mysqli_fetch_assoc($this->dados);
				$cont++;
			}
			echo "</tr></table></div>";
		}
		public function Pesquisar($cnpj){
			$this->sql = mysqli_query($this->conexao, "Select * from fornecedor where cnpj = $cnpj");
			$this->linha = mysqli_fetch_array($this->sql);
			$this->total = mysqli_num_rows($this->sql);
			
			if ($this->total == 0) {
				echo "<p>Nenhum fornecedor encontrado</p>";
				return false;
				}else{
					echo "<form name='frmfornecedor' action='alterarfornecedor.php' method='post' id='frmcadastro' enctype='multipart/form-data'>
    	<label>CNPJ: </label> <input type='text' name='cnpj' value='".$this->linha['cnpj'] ."'><br />
        <label>Nome fantasia: </label> <input type='text' name='nome_fantasia' value='".$this->linha['nome_fantasia'] ."' /><br />
        <label>Endereço: </label><input type='text' name='endereco' value='".$this->linha['endereco'] ."' /><br />
        <label>Cidade: </label> <input type='text' name='cidade' value='".$this->linha['cidade'] ."'/> <label>Bairro:</label> <input type='text' name='bairro' value='".$this->linha['bairro'] ."'/><br />
        <label>CEP: </label><input type='text' name='cep' value='".$this->linha['cep'] ."' /> <label>Telefone:</label> <input type='text' name='telefone' value='".$this->linha['telefone'] ."' /><br />
        <label>Email: </label> <input type='text' name='email' value='".$this->linha['email'] ."'/>
        <br />
        <br />
        <center><table><tr><td><input type='submit' name='alterar' value='Alterar' class='botaoForm2' /> </form></td><td>
        <form action='Excluir_Confirmar_Fornecedor.php' name='frmindex' method='post'>
		<input type='hidden' value='".$this->linha['cnpj'] ."' name='fake'>
        	<input type='submit' name='alterar' value='Excluir' class='botaoForm2'/>
			</form></td><td>
			<form action='indexadm.php' name='frmindex' method='post' >
        	<input type='submit' name='alterar' value='Cancelar' class='botaoForm2'/><form></td></tr></table>
        </center>";
		}
				return true;
			}
		public function fornecedor_produto($cnpj){
			$this->dados = mysqli_query($this->conexao, "select produto.codigo, produto.nome_produto, produto.quantidade, produto.preco, produto.validade, fornecedor.cnpj FROM produto INNER JOIN fornecedor ON produto.cnpj_fornecedor=fornecedor.cnpj where produto.cnpj_fornecedor = $cnpj");
			$this->linha = mysqli_fetch_array($this->dados);
			$this->total = mysqli_num_rows($this->dados);
			$cont = 0;
	
			echo "<link href='listar.css' rel='stylesheet' type='text/css'/><div class='tabela'><table><tr class='titulo'><td>Código</td><td>Nome</td><td>Quantidade</td><td>Preço</td><td>Validade</td></tr>";
			while ($cont < $this->total){
				echo "<tr class='corpo'><td>" . $this->linha['codigo'] . "</td>";		
				echo "<td>" . $this->linha['nome_produto'] . "</td>";		
				echo "<td>" . $this->linha['quantidade'] . "</td>";
				echo "<td>" . $this->linha['preco'] . "</td>";
				echo "<td>" . $this->linha['validade'] . "</td>";
				$this->linha = mysqli_fetch_assoc($this->dados);
				$cont++;
			}
			echo "</tr></table></div>";
		}
		public function pesquisa_forn_prod($cnpj){
			$this->sql = mysqli_query($this->conexao, "Select * from fornecedor where cnpj = $cnpj");
			$this->linha = mysqli_fetch_array($this->sql);
			$this->total = mysqli_num_rows($this->sql);
			
			if ($this->total == 0){
				echo "<p>Nenhum fornecedor encontrado</p>";
				return false;
				}else{
					echo "<form name='frmfornecedor' action='' method='' id='frmcadastro' enctype='multipart/form-data'>";
					echo "<label>CNPJ: </label>".$this->linha['cnpj']."<br/>";
					echo "<label>Nome Fantasia: </label>".$this->linha['nome_fantasia']."<br/>";
					echo "<label>Telefone: </label>".$this->linha['telefone']."<br/>";
					echo "<hr/>";
					echo "</form>";
				}
		}
		public function excluir_alterar($cnpj){
			return $cnpj;
		}
		#endregion
	}