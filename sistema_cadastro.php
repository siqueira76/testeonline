<html>

<head>
	<title>Sistema de Cadastro</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<meta http_equiv="Content-Type" content="text/html"; charset="utf-8"><style type="text/css"> 
	
	<!--
		a:link {
			text-decoration: none;
		}
		
		a:visited{
			text-decoration: none;
		}

		a:hover{
			text-decoration: underline;
		}
	
		a:active{
			text-decoration: none;
		}
		
	-->
	
	</style></head>
	<body>
	
	<?php
	
		ini_set('display_erros','0');
		$nome=$_COOKIE["nomefunc"];
		
	?>
	
	Oi
	
	<?php
	
		echo "$nome";
		
		if ($nome=="") {
			echo "funcionario nao cadastrado";
			exit;
		}
	
	?>
	
	<div id="box_sistema_cadastro">
		<h3 class="txt-titulo">Cadastro</h3>
		<a href="cadcli.html">Cadastro de Cliente</a><br>
		<a href="cadprod.html">Cadastro de Produtos</a><br>
		<br>
		<br>
		
		
		<h3 class="txt-titulo">Atualizacao/ Exclusao</h3>
		<a href="locprod.html">Localizacao de produtos </a><br>
		<br>
		<br>
		
		<h3 class="txt-titulo">Meus Produtos</h3>
        <a href="lista_produto.php">Produtos</a><br>
		<hr><center>
		<a href="index.php"><h4>SAIR</h4></a>
		</center>
			
	</body>
</html>