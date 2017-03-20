<html>
<head>
	<title>Carrinho</title>
	
	<script>
		<!--
		function aumenta(obj){
			obj.height=obj.height*5;
			obj.width=obj.width*5;
		}
		
		function diminui(obj){
			obj.height=obj.height/5;
			obj.width=obj.width/5;
		}
		-->
	</script>
	
</head>

<body background=".jpg" cellpadding="0">
	<table border="3" cellspacing="0" cellpadding="0">
		<tr align="center">
			<td>Produto:</td>
			<td>Cliente:</td>
			<td>Valor:</td>
			<td>Quantidade:</td>
			<td>Atualizar:</td>
			<td>Excluir:</td>
		</tr>

<?php
include ("conexao.php");

$codcli=$_COOKIE["codcli"];
$codped=$_COOKIE["codped"];
$codprod=$_POST["codprod"];
$qtditem=$_POST["qtditem"];
$inserir_carrinho="insert into item (codpeditem,codproditem,qtditem) values ('$codped','$codprod','$qtditem')";

mysql_query($inserir_carrinho) or die ("Problema ao cadastrar itens");
$sql = "select * from pedido, item, produto p, cliente where codcli = codcliped and p.codprod = codproditem and codped=codpeditem and pedido_fechado=0 and codcli = '$codcli'";

$resultado = mysql_query($sql) or die ("Problema no Carrinho" .mysql_error().$sql);
$valortotal=0.00;
$contador=0;

while ($linha=mysql_fetch_array($resultado)){

	$contador++;
	if ($contador%2 == 0){
		$cor = "#0066cc";
	}else{
		$cor = "#ffcc00";
	}
	
	$nomeprod=$linha["nomeprod"];
	$nomecli = $linha["nomecli"];
	$unitario=$linha["valorprod"];
	$qtditem=$linha["qtditem"];
	$coditem=$linha["coditem"];
	$codcli=$linha["codcli"];
	//fotoprod=$linha["fotoprod"];
	
	$valoritem=$unitario* $qtditem;
	$valortotal = $valortotal + $valoritem;
	
	echo "
		<tr>
			<td bgcolor='$cor'>$nomeprod</td>
			<td bgcolor='$cor'>$nomecli</td>
			<td bgcolor='$cor'>$unitario</td>
			<td bgcolor='$cor'>$qtditem</td>
			<td bgcolor='$cor'><a href='produto_selecionado2.php?coditem=$coditem&qtditem=$qtditem&nomeprod=$nomeprod'>Atualizar Item</a></td>
			<td bgcolor='$cor'><a href='excluir_item.php?coditem'>Excluir Item</a></td>
		</tr>
		";
}

?>

</table>


<form method="post" action="compra.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>Codigo do Cliente:</td>
			<td><input type="text" name="codcli" value="<?php echo $codcli;?>"></td>
		</tr>
		
		<tr>
			<td>Nome do Cliente:</td>
			<td><input type="text" name="nomecli" value="<?php echo $nomecli;?>"></td>
		</tr>
		
		<tr>
			<td>Valor da Compra:</td>
			<td><input type="text" name="valortotal" value="<?php echo $valortotal;?>"></td>
		</tr>
		
		<tr>
			<td>Codigo do Pedido:</td>
			<td><input type="text" name="codped" value="<?php echo $codped;?>"></td>
		</tr>
		
		<tr>
			<td colspan="2"><input type="submit" value="fechar compras"></td>
			<td>&nbsp;</td>
		</tr>
		
	</table>
</form>

	<p><a href="lista_produto2.php">Adicionar mais produto</a></p>
	
</body>

</html>
		