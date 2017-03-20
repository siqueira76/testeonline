
<?php 

$sql = "select * from pedido where codcliped = '$codcli' and pedido_fechado=0";
$rs=mysqli_query($conexao, $sql) or die ($sql);
$linha=mysqli_fetch_array($rs);

$codped = $linha["codped"];

if ($codped==""){
	$date = date("d-m-y");
	$sql = "insert into pedido (codcliped, dataped) values ('$codcli','$date')";
	mysqli_query($conexao, $sql) or die ("Problema no cadastro do pedido");
	$sql = "select * from pedido where codcliped = '$codcli' and pedido_fechado=0";
	$rs=mysqli_query($conexao, $sql) or die ("Não conseguimos localizar nenhum pedido, referente a este cliente");
	$linha = mysqli_fetch_array($rs);
	$codped=$linha["codped"];
}

setcookie("codped", $codped);

?>
