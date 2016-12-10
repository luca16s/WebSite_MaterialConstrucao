<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de clientes - GET CONSTRUÇÕES</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link href="cadastro.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header">
  	<table>
    	<tr>
        	<td>
            	<a href="index.php">
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
            <form action="login.php" name="frmlogin" id="frmlogin" method="post">
            	<label>Login:</label><input type="text" name="login"/>
                <label>Senha:</label><input type="password" name="senha"/>
                <input type="submit" value="Enviar" class="botaoForm"/>
            </form>
            </td>
        </tr>
    </table>
    <!-- end .header --></div>


  <div class="content">
    <div id='cssmenu'>
		<ul>
   			<li><a href='index.php'>Home</a></li>
   			<li class='active has-sub'><a href='#'>Produtos</a>
      			<ul>
         			<li><a href='basicos.php'>Materiais básicos</a></li>
         			<li><a href='eletricos.php'>Materiais elétricos</a></li>
         			<li><a href='ferramentas.php'>Ferramentas</a></li>
        		</ul>
   			</li>
   			<li><a href='#'>Sobre nós</a></li>
   			<li><a href='#'>Contato</a></li>
		</ul>
	</div>
    <p align="center"><b>	CADASTRO DE CLIENTES</b> </p>
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
$login = $_POST['login2'];
$senha = $_POST['senha2'];
$permissao = 1;

$pessoa = new Pessoa();
$pessoa->conectar();

if ($pessoa->verificaLogin($login)){
$pessoa -> setCpf($cpf);
$pessoa -> setNome($nome);
$pessoa -> setEndereco($endereco);
$pessoa -> setCidade($cidade);
$pessoa->setBairro($bairro);
$pessoa->setCep($cep);
$pessoa->setTelefone($telefone);
$pessoa->setIdentidade($identidade);
$pessoa->setNascimento($nascimento);
$pessoa->setEmail($email);
$pessoa->setLogin($login);
$pessoa->setSenha($senha);
$pessoa->setPermissao($permissao);

$pessoa->Inserir($pessoa->getCpf(), $pessoa->getNome(), $pessoa->getEndereco(), $pessoa->getCidade(), $pessoa->getBairro(), $pessoa->getCep(), $pessoa->getTelefone(), $pessoa->getIdentidade(), $pessoa->getNascimento(), $pessoa->getEmail(), $pessoa->getLogin(), $pessoa->getSenha(), $pessoa->getPermissao());
} else { echo"<form name='frmproduto' action='cadcliente.php' method='post' id='frmcadastro' enctype='multipart/form-data'>
    	<label>CPF: </label> <input type='text' name='cpf' value='$cpf'><br />
        <label>Nome: </label> <input type='text' name='nome' value='$nome' /><br />
        <label>Endereço: </label><input type='text' name='endereco' value='$endereco' /><br />
        <label>Cidade: </label> <input type='text' name='cidade' value='$cidade'/> <label>Bairro:</label> <input type='text' name='bairro' value='$bairro' /><br />
        <label>CEP: </label><input type='text' name='cep' value= '$cep'/> <label>Telefone:</label> <input type='text' name='telefone' value='$telefone'/><br />
        <label>Identidade: </label><input type='text' name='identidade' value='$identidade'/> <label>Data de Nascimento:</label> <input type='text' name='nascimento' value='$nascimento'/><br />
        <label>Email: </label> <input type='text' name='email' value='$email' />
        <br />
        <label>Login:</label><input type='text' name='login2' autofocus /> <label>Senha:</label> <input type='password' name='senha2' /> <br /><br />
        <center><input type='submit' name='enviar' value='Enviar' class='botaoForm2' />
        <form action='index.php' name='frmalterarcliente' method='post' >
		<input type='submit' name='cancelar' value='Cancelar' class='botaoForm2' />
        </form></form></center><br>

	<p>* Login já ocupado!</p>";
}

?>
  <div class="footer">
    <img src="content/footer.png" />
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
