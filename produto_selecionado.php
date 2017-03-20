<html>
<head>
	<title>Produtos Selecionados no Carrinho</title>
</head>
<body bgcolor="#00cc66">
<?php
$codped=$_COOKIE["codped"];

include("conexao.php");

$codprod=$_GET["codprod"];
$sql="select * from produto where codprod ='$codprod'";
$resultado=mysql_query($sql) or die ("Produto não encontrado");
$linha=mysql_fetch_array($resultado);

$codprod=$linha["codprod"];
$nomeprod=$linha["nomeprod"];
$valorprod=$linha["valorprod"];
$qtdprod=$linha["qtdprod"];
$fotoprod=$linha["fotoprod"];

?>

<h1><font color="#CCCCCC"><center></center></font></h1>

<form method="post" action="carrinho.php">
	<table width="329" border="0" align="center">
		<tr align="center">
			<td colspan="2"><strong><font color="#999933" size="2">Produtos Selecionados no Carrinho:</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Codigo:</td>
			<td><input type="text" name="codprod" value="<?php echo $codprod;?>"/></td>
		</tr>		
		<tr>
			<td width="122">Name:</td>
			<td><input type="text" name="nomeprod" value="<?php echo $nomeprod;?>"/></td>
		</tr>
		<tr>
			<td width="122">Valor:</td>
			<td><input type="text" name="valorprod" value="<?php echo $valorprod;?>"/></td>
		</tr>
		<tr>
			<td width="122">Quantidade:</td>
			<td><input type="text" name="qtdprod" value="<?php echo $qtdprod;?>"/></td>
		</tr>		
		<tr>
			<td width="122">Quantidade de Itens:</td>
			<td><input type="text" name="qtditem" value="<?php echo $nomeprod;?>"/></td>
		</tr>		
		<tr align="center">
			<td colspan="2"><input type="submit" value="adicionar no carrinho"/></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
</body>
</html>
	
	
	
	
