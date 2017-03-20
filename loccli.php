<?php
include ("conexao.php"); //inclui arquivo externo trazendo o seu conteúdo
$cpf= $_POST["cpf"]; // a variavel recebe o valor da camada visual
$sql = "select * from cliente where cpfcli = '$cpf'"; // seleciona todos os campos da tabela
//echo $sql;
$resultado = mysql_query($sql) or die("erro no sql"); // o comando mysql_query dispara no banco de dados a consulta

$linha = mysql_fetch_array($resultado); //trabalha trazendo o resultado da consulta
//as variaveis abaixo receberão os valores do banco de dados -consulta

$codcli =$linha["codcli"];
$nomecli =$linha["nomecli"];
$endcli =$linha["endcli"];
$telcli =$linha["telcli"];
$celcli =$linha["celcli"];
$cpfcli =$linha["cpfcli"];
$usucli =$linha["usucli"];
$senhacli =$linha["senhacli"];

?>

<form action="movcli.php" method="post">
	<input type="hidden" name="codcli" value="<?php echo $codcli;?>">
	Nome: <input type="text" name="nomecli" value="<?php echo $nomecli;?>">
	<br>
	Endereço: <input type="text" name="endcli" value="<?php echo $endcli;?>">
	<br>
	Telefone: <input type="text" name="telcli" value="<?php echo $telcli;?>">
	<br>
	Celular: <input type="text" name="celcli" value="<?php echo $celcli;?>">
	<br>
	CPF: <input type="text" name="cpfcli" value="<?php echo $cpfcli;?>">
	<br>
	Usuario: <input type="text" name="usucli" value="<?php echo $usucli;?>">
	<bt>
	Senha: <input type="text" name="senhacli" value="<?php echo $senhacli;?>">
	
	<br>
	
	<input type="submit" value="atualizar" name="botao">
	<input type="submit" value="excluir" name="botao">	
	<a href="sistema_cadastro.php">voltar para o inicio</a><br>
	
</form>
