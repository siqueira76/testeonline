<html>
	<head>
		<title>Cadastamento de Funcionário</title>
	</head>
	<body>
		<?php
		
			include("conexao.php");
				$nomefunc = $_POST["nome"];
				$endfunc = $_POST["end"];
				$telfunc = $_POST["tel"];
				$celfunc = $_POST["cel"];
				$cpffunc = $_POST["cpf"];
				$usufunc = $_POST["usuario"];
				$senhafunc = $_POST["senha"];
				
				
			if ($nomefunc == "") {
				echo "Campo obrigatório, <br> ";
				echo "<a href=cadfunc.html> voltar para cadastro </a>";
				exit;
			}
			
			
			$sql = "insert into funcionario (nomefunc,endfunc,telfunc,celfunc,cpffunc,usufunc,senhafunc) values ('$nomefunc','$endfunc','$telfunc','$celfunc','$cpffunc','$usufunc','$senhafunc')";
			//echo $sql;
			mysqli_query($conexao, $sql) or die ("Problema no cadastro de dados" .$sql);
			echo "Dados cadastrados com sucesso";
		
		?>
		<br>
		<br/>
		
		<a href="sistema_cadastro.php">Inicio</a>
		<br>
		<br/>
		
		<a href="cadfunc.html">Continuar Cadastrando</a>
	
	</body>
</html>