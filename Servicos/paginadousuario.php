<?php
    session_start();
    if(empty($_SESSION['logado']) || $_SESSION['logado']==false){
        header('Location:Login.php');

    }
    $opcao=1;
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cold War</title>
	<link rel="stylesheet" href="../CSS/usuario.css" type="text/css" media="screen">
</head>
<body>
	<div class="PaginaPrincipal">
	<header>
		<img src="../Images/ColdWar.jpg" width="400" height="300">
        <h1>Bem vindo a pagina Inicial <h1><?php echo $_SESSION['usuario'];?></h1></h1>
	</header>
	<br>
	
	<div class="Serviços">
	<h3>Serviços:</h3>
	<br>
	<a href="../Servicos/Suporte.php"><button>Contatar nosso suporte</button></a>
	<br>
	<a href="../Servicos/CadastroProduto.php"><button>Anunciar um produto</button></a>
	</div>

	<div name="Produtos em destaque" class="produtos_destaque">
	<h2>Produtos em destaque:</h2>
	<details>
		<summary>Camisetas</summary>

		<h3>Camiseta União Sovietica com emblema do estado</h3>
		<img src="https://rlv.zcache.com.br/camiseta_cccp_urss_uniao_sovietica_com_emblema_do_estado-rb250972ec0a542c9b732d2d0ff183bae_jy599_1024.jpg?max_dim=325" alt="Camiseta CCCP URSS União Soviética com emblema do estado" style="border:0;" />
		<br>
		<button>Comprar</button>

		<h3>Camiseta KGB</h3>
		<img src="https://rlv.zcache.com.br/camiseta_kgb_servico_de_seguranca_da_uniao_sovietica_urss-r1529c6e102694685afbda7738d85126b_jyr6t_1024.jpg?max_dim=325" alt="Camiseta KGB, serviço de segurança da União Soviética, URSS" style="border:0;" />
		<br>
		<button>Comprar</button>

		<h3>Camiseta Coldwar</h3>
		<img src="https://rlv.zcache.com.br/camiseta_o_t_shirt_da_guerra_fria_de_divisao_blindada-rf5c0fa85797e4bc8ab40c4c221e69f61_k2160_1024.jpg?max_dim=325" alt="Camiseta ó T-SHIRT da GUERRA FRIA de DIVISÃO BLINDADA" style="border:0;" />
		<br>
		<button>Comprar</button>

		<h3>Camiseta URSS resistida</h3>
		<img src="https://rlv.zcache.com.br/camisa_sovietica_resistida_velha_escola_de_cccp-r803ed036538341f5975966ef84abf72c_k2g9m_1024.jpg?max_dim=325" alt="Camisa soviética resistida velha escola de CCCP" style="border:0;" />
		<br>
		<button>Comprar</button>

		<h3>Camiseta ColdWar 2</h3>
		<img src="https://rlv.zcache.com.br/camiseta_guerra_fria_reenactor-rccc62142066240c081133043a36bb5e7_k2gm8_1024.jpg?max_dim=325" alt="Camiseta Guerra fria Reenactor"style="borde:0;" />
		<br>
		<button>Comprar</button>

	</details>
	<br>
	<details>
		<summary>Acessorios</summary>
		<h3>Caneca União Sovietica</h3>
		<img src="https://rlv.zcache.com.br/caneca_de_cafe_cccp_estrela-r5e9045f36d99413ebf8584abcfbff772_x7jg5_8byvr_1024.jpg?max_dim=325" alt="Caneca De Café CCCP - Estrela" />
		<br>
		<button>Comprar</button>

		<h3>Capa para iphone URSS</h3>
		<img src="https://rlv.zcache.com.br/capa_para_iphone_da_case_mate_iphone_comunista_5_5s_da_bandeira_da_guerra_fria-ra9c996175e874dd097b2128ea22f1fea_09h4k_1024.jpg?rlvnet=1&max_dim=325" alt="Capa Para iPhone Da Case-Mate iPhone comunista 5/5S da bandeira da guerra fria -" style="border:0;" />
		<br>
		<button>Comprar</button>

		<h3>Adesivo Estrela Vermelha</h3>
		<img src="https://rlv.zcache.com.br/adesivo_redondo_estrela_vermelha-r2a83f6c4f851487db1cfc1a2c4ff6759_0ugmp_8byvr_1024.jpg?max_dim=325" alt="Adesivo Redondo Estrela vermelha" style="border:0;" />
		<br>
		<button>Comprar</button>
	</details>
	</div>
	
	<div name="Nossos Produtos"    class=Produtos>
		<h2>Nossos produtos:</h2>
		<a href="../Produtos/Camisetas.php"><button>Camisetas</button></a>
		<br>
		<a href="../Produtos/Canecas.php"><button>Canecas</button></a>
		<br>
		<a href="../Produtos/Posters.php"><button>Posters</button></a>	
		<br>
		<a href="../Produtos/Moletons.php"><button>Moletons</button></a>
		<br>
		<a href="../Produtos/Adesivos.php"><button>Adesivos</button></a>
		<br>
		<a href="../Produtos/Capas.php"><button>Capas</button></a>
	</div>
    <div name="Sair" class=Logout>
            <h3>Pressione o botão abaixo para encerrar sua sessão</h3>
            <a href="../Validation/logout.php">
            <button>Sair</button>
            </a>
            
    </div>
<br>
<footer>CNPJ:83.398.925/0001-60, Todos os direitos reservados, Telefone:(15)3259-3498 Celular:(15)99630-1098, Email:equipecoldwar@hotmail.com</footer>
</div>
</body>
</html>