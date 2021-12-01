<?php
$erro=false;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de cliente</title>
	<link rel="stylesheet" href="CSS/cadastro.css" type="text/css" media="screen">
</head>
<body>
<div name="Cadastrar" class="Cadastro">
	<h1>Cadastro de novos clientes</h1>
	<h3>Todos os campos abaixo são obrigatorios</h3>
	<form method="POST">
	<label>
	Nome:
	<input type="text" name="nome" required>
	<br>
	<br>
	Email:
	<input type="email" name="email" required>
	<br>
	<br>
	CEP:
	<input type="text" name="cep" required>
	<br>
	<br>
	Rua:
	<input type="text" name="rua" required>
	<br>
	<br>
	Bairro:
	<input type="text" name="bairro" required>
	<br>
	<br>
	Cidade:
	<input type="text" name="cidade" required>
	<br>
	<br>
	Numero:
	<input type="text" name="numero" required>
	<br>
	<br>
	CPF: 
	<input type="text" name="cpf" required>
	<br>
	<br>
	Usuario:
	<input type="text" name="usuario" required>
	<br>
	<br>
    Senha: 
	<input type="password" name="senha" required>
	<br>
	<br>
	</label>
	<button type="submit">Enviar</button>
	</form>
	<?php
	require('../Store/cadastro-store.php');
	?>
</div>
<br>
</body>
</html>