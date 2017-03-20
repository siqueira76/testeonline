<?php


$sql = "select * from funcionario where usufunc = '$usuario' and senhafunc = '$senha' and cpffunc = '$cpf'";
$rs = mysqli_query($conexao, $sql) or die ("Usuario ou senha incorretos");

$linha = mysqli_fetch_array($rs);
$codfunc = $linha["codfunc"];
$nomefunc = $linha["nomefunc"];

if ($codfunc == ""){
	header("location:f_candidato.html");
	
}else{
	
		setcookie("nomefunc",$nomefunc);
		header("location:sistema_cadastro.php");
		
}

?>
