<?php
require('../Store/pedido-store.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/pagamento.css" type="text/css" media="screen">
    <title>Pagamento Finalizado</title>
</head>
<body>
    <div class="Pagamento">
    <h1>Pagamento realizado<h1>
       <h2>Resumo do pedido:</h2>
       <h2> -Usuario:<?php echo ($_SESSION['usuario']);?></h2>
       <h2> -Pedido:<?php echo ($_POST['produto']);?></h2>
       <h2> -Endereço:<?php echo ($_POST['rua']);?></h2>
       <h2> -Cidade:<?php echo ($_POST['cidade']);?></h2>
       <h2> -Complemento:<?php echo ($_POST['complemento']);?></h2>
       <br>
</div>  

<a href="paginadousuario.php"><button>Voltar as compras</button></a>

       
</body>
</html>