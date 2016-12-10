<html>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<link href="css/imagem.css" rel="stylesheet" type="text/css"/>

<?php
require_once 'CrudeClass.php';
require_once 'BancoClass.php';
class Produto extends Banco{
	private $codigo;
	private $descricao;
	private $fabricante;
	private $nome;
	private $preco;
	private $quantidade;
	private $tipo;
	private $validade;
	private $imagem;

	public function __construct(){
		$codigo;
		$descricao;
		$fabricante ;
		$nome ;
		$preco ;
		$quantidade ;
		$tipo ;
		$validade ;
		$imagem;
	}

	#region "Métodos Set's e Get's"
	public function setCodigo($novo_Codigo){
		$this->codigo = $novo_Codigo;
	}
	public function setDescricao($novo_Descricao){
		$this->descricao = $novo_Descricao;
	}
	public function setFabricante($novo_Fabricante){
		$this->fabricante = $novo_Fabricante;
	}
	public function setNome($novo_Nome){
		$this->nome = $novo_Nome;
	}
	public function setPreco($novo_Preco){
		$this->preco = $novo_Preco;
	}
	public function setQuantidade($novo_Quantidade){
		$this->quantidade = $novo_Quantidade;
	}
	public function setTipo($novo_Tipo){
		$this->tipo = $novo_Tipo;
	}
	public function setValidade($novo_Validade){
		$this->validade = $novo_Validade;
	}
	public function setImagem($novo_Imagem){
		$this->imagem = $novo_Imagem;
	}
	public function setCnpj($novo_Cnpj){
		$this->cnpj = $novo_Cnpj;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getFabricante(){
		return $this->fabricante;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getPreco(){
		return $this->preco;
	}
	public function getQuantidade(){
		return $this->quantidade;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function getValidade(){
		return $this->validade;
	}
	public function getImagem(){
		return $this->imagem;
	}
	public function getCnpj(){
		return $this->cnpj;
    }


	#endregion

	public function Basico(){
		$this->dados = mysqli_query($this->conexao, "Select * from produto where tipo = 'basicos'");
		$this->linha = mysqli_fetch_array($this->dados);
		$this->total = mysqli_num_rows($this->dados);
		if ($this->total == 0)
		{
			return false;
		}else{
			$cont = 0;
			$imagem = null;
			echo "<center><table><tr>";
			for ($i = 1; $i <= 8; $i++){
				$this->dados = mysqli_query($this->conexao, "SELECT * FROM produto where tipo = 'basicos' ORDER BY rand()");
				$this->linha = mysqli_fetch_array($this->dados);
				if ($cont < 4){
				echo "<td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
				$cont ++;
				} else {
					echo "<tr><td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
					$cont =1;
				}
			}
			echo "</tr></table></center>";
			return true;
		}
	}
	public function Eletricos(){
		$this->dados = mysqli_query($this->conexao, "Select * from produto where tipo = 'eletricos'");
		$this->linha = mysqli_fetch_array($this->dados);
		$this->total = mysqli_num_rows($this->dados);
		if ($this->total == 0)
		{
			return false;
		}else{
			$cont = 0;
			$imagem = null;
			echo "<center><table><tr>";
			for ($i = 1; $i <= 8; $i++){
				$this->dados = mysqli_query($this->conexao, "SELECT * FROM produto where tipo = 'eletricos' ORDER BY rand()");
				$this->linha = mysqli_fetch_array($this->dados);
				if ($cont < 4){
				echo "<td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
				$cont ++;
				} else {
					echo "<tr><td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
					$cont =1;
				}
			}
			echo "</tr></table></center>";
			return true;
		}
	}
	public function Ferramentas(){
		$this->dados = mysqli_query($this->conexao, "Select * from produto where tipo = 'ferramentas'");
		$this->linha = mysqli_fetch_array($this->dados);
		$this->total = mysqli_num_rows($this->dados);
		if ($this->total == 0)
		{
			return false;
		}else{
			$cont = 0;
			$imagem = null;
			echo "<center><table><tr>";
			for ($i = 1; $i <= 8; $i++){
				$this->dados = mysqli_query($this->conexao, "SELECT * FROM produto where tipo = 'ferramentas' ORDER BY rand()");
				$this->linha = mysqli_fetch_array($this->dados);
				if ($cont < 4){
				echo "<td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
				$cont ++;
				} else {
					echo "<tr><td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
					$cont =1;
				}
			}
			echo "</tr></table></center>";
			return true;
		}
	}
	public function Banner(){

		$this->dados = mysqli_query($this->conexao, "Select * from produto");
		$this->linha = mysqli_fetch_array($this->dados);
		$this->total = mysqli_num_rows($this->dados);
		if ($this->total == 0)
		{
			return false;
		}else{
			$cont = 0;
			$imagem = null;
			echo "<center><table><tr>";
			for ($i = 1; $i <= 8; $i++){
				$this->dados = mysqli_query($this->conexao, "SELECT * FROM produto ORDER BY rand()");
				$this->linha = mysqli_fetch_array($this->dados);
				if ($cont < 4){
				echo "<td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
				$cont ++;
				} else {
					echo "<tr><td> <img class='loadimagem' src='".$this->linha['imagem']."'><br>".$this->linha['nome_produto']."<br>".$this->linha['preco']."</td>";
					$cont =1;
				}
			}
			echo "</tr></table></center>";
			return true;
		}
	}
	public function Atualizar($codigo, $nome, $tipo, $fabricante, $validade, $quantidade, $preco, $imagem, $descricao, $cnpj){
		$this->dados = mysqli_query($this->conexao, "update produto set nome_produto = '$nome', tipo = '$tipo', fabricante = '$fabricante', validade = '$validade', quantidade = '$quantidade', preco = '$preco', imagem = '$imagem', descricao = '$descricao', cnpj_fornecedor = '$cnpj' where codigo = $codigo ");
		if ($this->dados) {
				return true;
				}else{
					echo "<p>Alteração não realizada</p>";
					return false;
				}
	}
	public function Excluir($codigo){
		$this->dados = mysqli_query($this->conexao, "delete from produto where codigo = $codigo");
		if ($this->dados) {
				return true;
				}else{
					echo "<p>Exclusão não realizada</p>";
					return false;
				}
	}

	public function Inserir($codigo, $nome, $tipo, $fabricante, $validade, $quantidade, $preco, $imagem, $descricao, $cnpj){
		$this->dados = mysqli_query($this->conexao, "insert into produto(codigo, nome_produto, tipo, fabricante, validade, quantidade, preco, imagem, descricao, cnpj_fornecedor) values ('$codigo','$nome', '$tipo', '$fabricante', '$validade', '$quantidade', '$preco', '$imagem', '$descricao', '$cnpj')");

		if ($this->dados){
           echo "<p>Inserido com sucesso!</p></div>";


        }else{
            echo "<p>Erro ao inserir</p>";
        }
	}
	public function Listar(){
		$this->dados = mysqli_query($this->conexao, "Select * from produto");
		$this->linha = mysqli_fetch_array($this->dados);
		$this->total = mysqli_num_rows($this->dados);
		$cont = 0;
			echo "<center><link href='listar.css' rel='stylesheet' type='text/css'/><div class='tabela'><table><tr class='titulo'><td>Código</td><td>Nome</td><td>Tipo</td><td>Fabricante</td><td>Validade</td><td>Quantidade</td><td>Preço</td></tr>";
			while ($cont < $this->total){
				echo "<tr class='corpo'><td>" . $this->linha['codigo'] . "</td>";
				echo "<td>" . $this->linha['nome_produto'] . "</td>";
				echo "<td>" . $this->linha['tipo'] . "</td>";
				echo "<td>" . $this->linha['fabricante'] . "</td>";
				echo "<td>" . $this->linha['validade'] . "</td>";
				echo "<td>" . $this->linha['quantidade'] . "</td>";
				echo "<td>R$ " . $this->linha['preco'] . "</td>";
				$this->linha = mysqli_fetch_assoc($this->dados);
				$cont++;
			}
			echo "</tr></table></div></center>";
	}
	public function ExcluirImagem($imagem){
		if (unlink($imagem)){
			return true;
		}
		return false;
	}
	public function Pesquisar($codigo){
		$this->dados = mysqli_query($this->conexao, "Select * from produto where codigo = $codigo");
		$this->linha = mysqli_fetch_array($this->dados);
		$this->total = mysqli_num_rows($this->dados);

		if($this->total == 0){
			echo "<p>Nenhum produto encontrado</p>";
				return false;
		}else{
			echo "<form name='frmproduto' action='alterarproduto.php' method='post' id='frmcadastro' enctype='multipart/form-data'>
    	<label>Código: </label> <input type='text' name='cod' value='".$this->linha['codigo'] ."'><br />
        <label>Nome: </label> <input type='text' name='nome' value='".$this->linha['nome_produto'] ."' /><br />
        <label>Tipo: </label>
        <select name='tipo' class='select-style' value='".$this->linha['tipo'] ."' >
  			<option value='basicos'>Materiais básicos</option>
  			<option value='eletricos'>Materiais elétricos</option>
  			<option value='ferramentas'>Ferramentas</option>
		</select><br />
        <label>Fabricante: </label> <input type='text' name='fabricante' value='".$this->linha['fabricante'] ."'/> <label>Validade:</label> <input type='text' name='validade' value='".$this->linha['validade'] ."'/><br />
        <label>Quantidade: </label><input type='text' name='quantidade' value='".$this->linha['quantidade'] ."'/> <label>Fornecedor: </label><input type='text' name='fornecedor' value='".$this->linha['cnpj_fornecedor'] ."'/> <label>Preço:</label> <input type='text' name='preco' value='".$this->linha['preco'] ."' /><br />
        <table><tr><td><label>Imagem:</label></td><td>
		<input type='hidden' name='imagem' value='".$this->linha['imagem'] ."'>
        <img src='".$this->linha['imagem'] ."'><input type='file' name='imagemalterada'><label>*Caso queira alterar imagem</label>
    	</td></tr>
        <tr><td><label>Descrição:</label></td><td><textarea name='descricao'>".$this->linha['descricao']."</textarea></td></tr></table> <br>
        <center><table><tr><td><input type='submit' name='alterar' value='Alterar' class='botaoForm2' /> </form></td><td>
        <form action='Excluir_Confirmar_Produto.php' name='frmexcluir' method='post' >
		<input type='hidden' name='fake' value='".$this->linha['codigo'] ."'>
		<input type='hidden' name='fake2' value='".$this->linha['imagem'] ."'>
        	<input type='submit' name='alterar' value='Excluir' class='botaoForm2'/></form></td><td>
			<form action='indexadm.php' name='frmindex' method='post' >
        	<input type='submit' name='alterar' value='Cancelar' class='botaoForm2'/></form></td></tr></table>
        </center>";

			return true;
		}
	}

}


?>
</html>
