<html>

<head>
	<title>Lista de Clientes</title>
</head>
<body>	
<form action="lista_cliente_espelho.php" method="post">
	Nome: <input type="text" name="nome">
	<input type="submit" value="Pesquisar">
	
</form>

<?php
include ("conexao.php");

$nome=$_POST["nome"];

echo "<table border='5' bgcolor='#00ccf'>";


if (isset($nome)){
	$sql = "select * from cliente where nomecli like '%$nome%' ";
	$rs = mysql_query($sql) or die ("erro ao selecionar" .$sql);
	while ($linha=mysql_fetch_array($rs)) {
		
		$codcli = $linha["codcli"];
		$nomecli = $linha["nomecli"];
		$endcli = $linha["endcli"];
		$telcli = $linha["telcli"];
		$celcli = $linha["celcli"];
		$cpfcli = $linha["cpfcli"];
		$usucli = $linha["usucli"];
		$senhacli = $linha["senhacli"];

		echo "
		<tr>
			<td>Codigo:</td><td>$codcli</td><td>Nome:</td><td>$nomecli</td>
		</tr>
		
		<tr>
			<td>Endereco:</td><td>$endcli</td><td>Telefone:</td><td>$telcli</td>
		</tr>

		<tr>
			<td>Celular:</td><td>$celcli</td><td>CPF:</td><td>$cpfcli</td>
		</tr>

		<tr>
			<td>Usuario:</td><td>$usucli</td><td>Senha:</td><td>$senhacli</td>


		</tr>
		
		
		";
		
	}
	
}

?>

</table>

<a href="sistema_cadastro.php">Sistema de Cadastro </a>
</body>
</html>
