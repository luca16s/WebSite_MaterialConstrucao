<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar cliente - GET CONSTRUÇÕES</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/cadastro.css" rel="stylesheet" type="text/css" />
<link href="css/adm.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header">
  	<table>
    	<tr>
        	<td>
            	<a href="indexcliente.php">
                	<img src="content/logo.png" alt="Insert Logo Here" name="Insert_logo" width="142" height="128" id="Insert_logo" style="background: #fdfdd3; display:block;" />
                </a>
            </td>
            <td id="alinhamento">
            	<img src="content/banner.png"/>
            </td>
        </tr>
        <tr>
        	<td></td>
            <td align="right">
            <p id="alinhamento">Olá, <?php session_start(); $nome = $_SESSION["nome"]; print($nome);?> <input type="submit" value="Sair" onclick="location.href='logout.php'" class="logout"></p>
            <!-- codigo para carregar o nome do adm -->
            </td>
            </td>
        </tr>
    </table>
    <!-- end .header --></div>
<div class="sidebar1">
  <p>Cadastros</p>
  <ul class="nav">
  <li> <a href="cadclienteadm.php">Clientes</a></li>
  <li> <a href="cadprodutoa.php">Produtos</a></li>
  <li> <a href="cadfornecedora.php">Fornecedor</a></li></ul>
  <p>Listar</p>
  <ul class="nav">
  <li> <a href="listarcliente.php">Clientes</a></li>
  <li> <a href="listarproduto.php">Produtos</a></li>
  <li> <a href="listarfornecedor.php">Fornecedor</a></li>
  <li> <a href="listarfornecedor.php">Fornecedor</a></li>
  <li> <a href="listar_Produtos_fornecedor.php">Produtos por Fornecedor</a></li></ul>
  <p>Pesquisar</p>
  <ul class="nav">
  <li> <a href="pesquisarclientea.php">Clientes</a></li>
  <li> <a href="pesquisarprodutoa.php">Produtos</a></li>
  <li> <a href="pesquisarfornecedora.php">Fornecedor</a></li><br /></ul>
</div>

  <div class="content">
   <div id='cssmenu'>
		<ul>
   			<li><a href='indexcliente.php'>Home</a></li>
   			<li class='active has-sub'><a href='#'>Produtos</a>
      			<ul>
         			<li><a href='basicosc.php'>Materiais básicos</a></li>
         			<li><a href='eletricosc.php'>Materiais elétricos</a></li>
         			<li><a href='ferramentasc.php'>Ferramentas</a></li>
        		</ul>
   			</li>
   			<li><a href='#'>Sobre nós</a></li>
   			<li><a href='#'>Contato</a></li>
		</ul>
	</div>
    <p align="center"><b>	ALTERAR CLIENTE</b> </p>
    <?php
		require_once("PessoaClass.php");
		$cpf = $_POST['cpf'];
		$nome = $_POST['nome'];
		$endereco = $_POST['endereco'];
		$cidade = $_POST['cidade'];
		$bairro = $_POST['bairro'];
		$cep = $_POST['cep'];
		$telefone = $_POST['telefone'];
		$identidade = $_POST['identidade'];
		$nascimento = $_POST['nascimento'];
		$email = $_POST['email'];


		$pessoa = new Pessoa();
		$pessoa->conectar();
		$pessoa->setCpf($cpf);
		$pessoa -> setNome($nome);
		$pessoa -> setEndereco($endereco);
		$pessoa -> setCidade($cidade);
		$pessoa->setBairro($bairro);
		$pessoa->setCep($cep);
		$pessoa->setTelefone($telefone);
		$pessoa->setIdentidade($identidade);
		$pessoa->setNascimento($nascimento);
		$pessoa->setEmail($email);

		if ($pessoa->Atualizar($pessoa->getCpf(), $pessoa->getNome(), $pessoa->getEndereco(), $pessoa->getCidade(), $pessoa->getBairro(), $pessoa->getCep(), $pessoa->getTelefone(), $pessoa->getIdentidade(), $pessoa->getNascimento(), $pessoa->getEmail())) {
			$pessoa->Listar();
		}


	?>

    </div>




  <div class="footer">
    <img src="content/footer.png" />
    <!-- end .footer --></div>
  <!-- end .container --></div></div>
</body>
</html>
