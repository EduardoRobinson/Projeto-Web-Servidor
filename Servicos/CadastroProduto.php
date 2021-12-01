<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Produto</title>
	<link rel="stylesheet" href="CSS/suporte.css" type="text/css" media="screen">
</head>
<body>
<div name="Cadastrar Produto" class="CadastrarProduto">
	<h1>Cadastrar produto</h1>
	<h2>Preencha os campos abaixo para realizar o contato com nossos atendentes</h2>
	<form method="POST" action="../Store/produto-store.php">
		<label>
			Nome:
			<input type="text" name="nome" required>
			<br>
            Tipo de produto:
            <div>
			<select name="tipo" required>
                <option value=''></option>
                <option value="adesivo">Adesivo</option>
                <option value="camiseta">Camiseta</option>
                <option value="caneca">Caneca</option>
                <option value="capa">Capinha</option>
                <option value="moletom">Moletom</option>
                <option value="poster">Poster</option>
            </select>
            </div>
			Valor:
			<input type="number" name="valor" required>
			<br>
			Quantidade disponivel:
			<input type="number" name="quantidade" required>
			<br>
			Descrição:
			<br>
			<textarea name="descricao" cols="50" rows="10" required></textarea>
		</label>
			<br>
			<button type="submit">Enviar</button>
	</form>
</div>
</body>
</html>