<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contato com o Suporte</title>
	<link rel="stylesheet" href="CSS/suporte.css" type="text/css" media="screen">
</head>
<body>
<div name="Contatar suporte" class="Suporte">
	<h1>Contato com o suporte</h1>
	<h2>Preencha os campos abaixo para realizar o contato com nossos atendentes</h2>
	<form method="POST" action="../Store/suporte-store.php">
		<label>
			Nome:
			<input type="text" name="nome" required>
			<br>
			Email:
			<input type="email" name="email" required placeholder="coldwar@hotmail.com">
			<br>
			Assunto:
			<input type="text" name="assunto" required placeholder="troca de produto">
			<br>
			Mensagem:
			<br>
			<textarea name="mensagem" cols="50" rows="10" required></textarea>
		</label>
			<br>
			<button type="submit">Enviar</button>
	</form>
</div>
</body>
</html>