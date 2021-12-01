<?php
$pedido=$_POST['produto'] ?? '';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adesivos ColdWar</title>
	<link rel="stylesheet" href="CSS/produtos.css" type="text/css" media="screen">
</head>
<body>
	
	
	<div name=adesivos class="produtos">
	<header>
	<h1>Adesivos:</h1>
	</header>
	<img src="../Images/ColdWar.jpg" width="300" height="200">
	<br>
	
	<form method=POST name="Comprar" action="../Servicos/Carrinho.php">
	<h2>Adesivo Redonda Estrela Vermelha</h2>
	<img src="https://rlv.zcache.com.br/adesivo_redondo_estrela_vermelha-r2a83f6c4f851487db1cfc1a2c4ff6759_0ugmp_8byvr_1024.jpg?max_dim=325" alt="Adesivo Redondo Estrela vermelha" style="border:0;" />
	<h2>Valor:R$30,00</h2>
	<input type="hidden" name="produto" value="Adesivo Redonda Estrela Vermelha"><button type="submit" name="opcao" >Comprar</button>
	</form>
	
	<form method=POST name="Comprar" action="../Servicos/Carrinho.php">
	<h2>Adesivo Martelo e foice</h2>
	<img src="https://rlv.zcache.com.br/adesivo_redondo_martelo_e_foice_sovieticos_do_russo-r2d1ca13179c645aea0ca756994e4f56d_0ugmp_8byvr_1024.jpg?max_dim=325" alt="Adesivo Redondo Martelo e foice soviéticos do russo" style="border:0;" />
	<h2>Valor:R$20,00</h2>
	<input type="hidden" name="produto" value="Adesivo Martelo e foice"><button type="submit" name="opcao" >Comprar</button>
	</form>

	<form method=POST name="Comprar" action="../Servicos/Carrinho.php">
	<h2>Adesivo Guerra fria</h2>
	<img src="https://rlv.zcache.com.br/adesivo_redondo_veterano_de_guerra_frio-rab46f2c5c3374473922e71f51f192dfb_0ugmp_8byvr_1024.jpg?max_dim=325" alt="Adesivo Redondo Veterano de guerra frio" style="border:0;" />
	<h2>Valor:R$25,00</h2>
	<input type="hidden" name="produto" value="Adesivo Guerra fria"><button type="submit" name="opcao" >Comprar</button>
	</form>

	<form method=POST name="Comprar" action="../Servicos/Carrinho.php">
	<h2>Adesivo Bandeira Sovietica Dourada</h2>
	<img src="https://rlv.zcache.com.br/adesivo_redondo_bandeira_da_guerra_fria_de_communiste-r2b00fb3888934316918f91224dff1e08_0ugmp_8byvr_1024.jpg?max_dim=325" alt="Adesivo Redondo Bandeira da guerra fria de Communiste" style="border:0;" />
	<h2>Valor:R$30,00</h2>
	<input type="hidden" name="produto" value="Adesivo Bandeira Sovietica Dourada"><button type="submit" name="opcao" >Comprar</button>
	</form>

	</div>
	
</body>
</html>