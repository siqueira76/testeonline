<html>
	<head>
		<title>Cadastamento de Usuario</title>
	</head>
	<body>
		<?php
		
include("conexao.php");
			
				$nomecli = $_POST["nome"];  //valores que vem da camada visual (html)
				$endcli = $_POST["end"];
				$telcli = $_POST["tel"];
				$celcli = $_POST["cel"];
				$cpfcli = $_POST["cpf"];
				$usucli = $_POST["usuario"];
				$senhacli = $_POST["senha"];
				
				
			if ($nomecli == "") {  //condicao para verificar se o campo nome está vazio
				echo "Campo obrigatório, <br> ";  //mensagem que posso utilizar com a linguagem HTML
				echo "<a href=cadcli.html> voltar para cadastro </a>";
				exit; // sai da rotina
			}
			
			
			$sql = "insert into cliente (nomecli,endcli,telcli,celcli,cpfcli,usucli,senhacli) values ('$nomecli','$endcli','$telcli','$celcli','$cpfcli','$usucli','$senhacli')";
	//sql que vai inserir no banco de dados na tabela cliente
			mysqli_query($conexao, $sql) or die ("Problema no cadastro de dados" .$sql);  //executa o sql no banco de dados
			echo "Dados cadastrados com sucesso";  //mensagem
		
		?>
		<br>
		<br/>
		
		<a href="sistema_cadastro.php">Inicio</a>
		<br>
		<br/>
		
		<a href="cadcli.html">Continuar Cadastrando</a>
	
	</body>
</html>