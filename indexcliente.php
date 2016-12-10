<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Get construções</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link href="css/home.css" rel="stylesheet" type="text/css" />
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
            <!-- codigo para carregar o nome do cliente -->
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


    <?php
		require_once 'ProdutoClass.php';
		$produto = new Produto();
		$produto->conectar();
		$produto->Banner();
    ?>
 </div>


  <div class="footer">
    <img src="content/footer.png" />
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
