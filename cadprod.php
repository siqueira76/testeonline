<html>
<head>
<title>Cadastro de Produto</title>
</head>
<body>
<?php
	include ("conexao.php");
		$tipoprod = $_POST["tipoprod"];
		$nomeprod = $_POST["nomeprod"];
		$valorprod = $_POST["valorprod"];
		$qtoprod = $_POST["qtoprod"];
	

$sql = "insert into produto (tipoprod, nomeprod, valorprod, qtoprod) values
('$tipoprod', '$nomeprod', '$valorprod', '$qtoprod')";
//echo $sql;
mysqli_query($conexao, $sql) or die ("Problema no cadastro de dados" .$sql);
echo "Dados cadstrados com sucesso";
?>
<br>
</br>
<a href="sistema_cadastro.php">Inicio</a>
<br>
</br>
<a href="cadprod.html">Continuar Cadastrando</a>
</body>
</html>