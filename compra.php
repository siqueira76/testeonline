<html>
<head>
	<title>Compra</title>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	body {
		background-color:#00F;
	}	
</style>
</head>
<body>
<?php

include ("conexao.php");

$codcli = $_COOKIE["codcli"];
$codped = $_COOKIE["codped"];
$valortotal = $_POST["valortotal"];
$data = date("Y-m-d");   //                           2016-03-10
                                                        //codcompra,datacompra     
$sql = "insert into compra  values (null, '$codped', '$data', '$valortotal', '$codcli')";
mysql_query($sql) or die ("Erro na inserção de dados"); //Cadastro na tabela compra

$sql = "update pedido set pedido_fechado =1 where codped = '$codped'";
mysql_query($sql) or die ("Compra não atualizada");

$sql="select * from item, produto, pedido where codproditem=codprod and codpeditem=codped and codped= '$codped'";
$resultado=mysql_query($sql) or die ("ERRO");

while ($linha=mysql_fetch_array($resultado)){
	$qtditem=$linha["qtditem"];
	$codprod=$linha["codproditem"];
	$sqldiminuir="update produto set qtdprod=(qtdprod - $qtditem) where codprod='$codprod'";
	
	mysql_query($sqldiminuir) or die ("$sqldiminuir");

}
header("location:index.php");
exit;
?>
</body>
</html>

