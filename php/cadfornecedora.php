<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de clientes - GET CONSTRUÇÕES</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link href="cadastro.css" rel="stylesheet" type="text/css" />
<link href="adm.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header">
  	<table>
    	<tr>
        	<td>
            	<a href="indexadm.html">
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
   			<li><a href='indexadm.php'>Home</a></li>
   			<li class='active has-sub'><a href='#'>Produtos</a>
      			<ul>
         			<li><a href='basicosa.php'>Materiais básicos</a></li>
         			<li><a href='eletricosa.php'>Materiais elétricos</a></li>
         			<li><a href='ferramentasa.php'>Ferramentas</a></li>
        		</ul>
   			</li>
   			<li><a href='#'>Sobre nós</a></li>
   			<li><a href='#'>Contato</a></li>
		</ul>
	</div>
    <p align="center"><b>	CADASTRO DE FORNECEDOR</b> </p>
<form name="frmfornecedor" action="cadfornecedoradm.php" method="post" id="frmcadastro" enctype="multipart/form-data">
    	<label>CNPJ: </label> <input type="text" name="cnpj"><br />
        <label>Nome fantasia: </label> <input type="text" name="nome_fantasia" /><br />
        <label>Endereço: </label><input type="text" name="endereco" /><br />
        <label>Cidade: </label> <input type="text" name="cidade" /> <label>Bairro:</label> <input type="text" name="bairro" /><br />
        <label>CEP: </label><input type="text" name="cep" /> <label>Telefone:</label> <input type="text" name="telefone" /><br />
        <label>Email: </label> <input type="text" name="email" />
        <br />
        <center><input type="submit" name="enviar" value="Enviar" class="botaoForm2" />
        <form action="indexadm.php" name="frmindex" method="post" >
        	<input type="submit" name="cancelar" value="Cancelar" class="botaoForm2"/>
        </form></form></center>
</div>
  <div class="footer">
    <img src="content/footer.png" />
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
