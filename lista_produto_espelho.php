<html>

<head>
	<title>Lista de Funcionarios</title>
</head>
	
<form action="lista_funcionario_espelho.php" method="post">
	Nome: <input type="text" name="nome">
	<input type="submit" value="Pesquisar">
	
</form>

<?php
include ("conexao.php");

$nome=$_POST["nome"];

echo "<table border='5' bgcolor='#00ccf'>";


if (isset($nome)){
	$sql = "select * from funcionario where nomefunc like '%$nome%'";
	$rs = mysql_query($sql) or die ("erro ao selecionar" .$sql);
	while ($linha=mysql_fetch_array($rs)) {
		
		$codfunc = $linha["codfunc"];
		$nomefunc = $linha["nomefunc"];
		$endfunc = $linha["endfunc"];
		$telfunc = $linha["telfunc"];
		$celfunc = $linha["celfunc"];
		$cpffunc = $linha["cpffunc"];
		$usufunc = $linha["usufunc"];
		$senhafunc = $linha["senhafunc"];

		echo "
		<tr>
			<td>Codigo:</td><td>$codfunc</td><td>Nome:</td><td>$nomefunc</td>
		</tr>
		
		<tr>
			<td>Endereco:</td><td>$endfunc</td><td>Telefone:</td><td>$telfunc</td>
		</tr>

		<tr>
			<td>Celular:</td><td>$celfunc</td><td>CPF:</td><td>$cpffunc</td>
		</tr>

		<tr>
			<td>Usuario:</td><td>$usufunc</td><td>Senha:</td><td>$senhafunc</td>
		</tr>
		
		
		";
		
	}
	
}

?>

</table>

<a href="sistema_cadastro.php">Sistema de Cadastro </a>
<body>
</html>
