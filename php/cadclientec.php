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
    <p align="center"><b>	CADASTRO DE CLIENTES</b> </p>
    <form name="frmcliente" action="cadcliente.php" method="post" id="frmcadastro" enctype="multipart/form-data">
    	<label>CPF: </label> <input type="text" name="cpf"><br />
        <label>Nome: </label> <input type="text" name="nome" /><br />
        <label>Endereço: </label><input type="text" name="endereco" /><br />
        <label>Cidade: </label> <input type="text" name="cidade" /> <label>Bairro:</label> <input type="text" name="bairro" /><br />
        <label>CEP: </label><input type="text" name="cep" /> <label>Telefone:</label> <input type="text" name="telefone" /><br />
        <label>Identidade: </label><input type="text" name="identidade" /> <label>Data de Nascimento:</label> <input type="text" name="nascimento" /><br />
        <label>Email: </label> <input type="text" name="email" />
        <br />
        <label>Login:</label><input type="text" name="login2" /> <label>Senha:</label> <input type="password" name="senha2" /> <br /><br />
        <center><input type="submit" name="enviar" value="Enviar" class="botaoForm2" />
        <form action="indexcliente.php" name="frmindex" method="post" >
        	<input type="submit" name="alterar" value="Cancelar" class="botaoForm2"/>
        </form></form></center>

 </div>


  <div class="footer">
    <img src="content/footer.png" />
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
