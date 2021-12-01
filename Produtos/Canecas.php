<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Canecas ColdWar</title>
	<link rel="stylesheet" href="CSS/produtos.css" type="text/css" media="screen">
</head>
<body>


	<div name="canecas" class="produtos">
			<header>
		<h1>Canecas:</h1>
		</header>
		<img src="../Images/ColdWar.jpg" width="300" height="200">
		<br>

		<form method=POST name="Comprar" action="../Servicos/Carrinho.php">
		<h2>Caneca CCCP</h2>
		<img src="https://rlv.zcache.com.br/caneca_de_cafe_cccp_estrela-r5e9045f36d99413ebf8584abcfbff772_x7jg5_8byvr_1024.jpg?max_dim=325" alt="Caneca De Café CCCP - Estrela" style="border:0;" />
		<h2>Valor:R$50,00</h2>
		<input type="hidden" name="produto" value="Caneca CCCP"><button type="submit">Comprar</button>
		</form>

		<form method=POST name="Comprar" action="../Servicos/Carrinho.php">
		<h2>Caneca Martelo e Foice</h2>
		<img src="https://rlv.zcache.com.br/caneca_martelo_e_foice-r60791d239db14fae8f058350f97a113d_kfpx1_1024.jpg?rlvnet=1&max_dim=325" alt="Caneca Martelo e foice" style="border:0;" />
		<h2>Valor:R$50,00</h2>
		<input type="hidden" name="produto" value="Caneca Martelo e Foice"><button type="submit">Comprar</button>
		</form>
		
		<form method=POST name="Comprar" action="../Servicos/Carrinho.php">
		<h2>Caneca Emblema do Estado URSS</h2>
		<img src="https://rlv.zcache.com.br/caneca_de_cafe_emblema_sovietico-r2a48e080a19d4af0bc0b4938ad667626_x7jg9_8byvr_1024.jpg?max_dim=325" alt="Caneca De Café Emblema soviético" style="border:0;" />
		<h2>Valor:R$60,00</h2>
		<input type="hidden" name="produto" value="Caneca Emblema do Estado URSS"><button type="submit">Comprar</button>
		</form>
		

	</div>


	<br>
	<br>
	
</body>
</html>