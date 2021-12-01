<?php
    session_start();
    if(empty($_SESSION['logado']) || $_SESSION['logado']==false ){
        header('Location:../Servicos/Login.php');

    }


$pedido=$_POST['produto'] ?? '';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/carinho.css" type="text/css" media="screen">
    <title>Carrinho</title>
</head>
<body>
<h1>Resumo do pedido do usuario <?php echo($_SESSION['usuario']);?>: </h1>
<h1>-<?php echo($_POST['produto']);?> <h1>
<br>
<h1>Pagamento:</h1>
<form method="POST" action="../Servicos/Pagamento.php" class="carrinho">
<input type="hidden" name="produto" value="<?php echo($_POST['produto'])?>" />
<label>
Numero do cartão:
</label>
<input type="text" name="numerocartao" required>
<br>
<br>
<label>
Nome no cartão:
</label>
<input type="text" name="nomecartao" required>
<br>
<br>
<label>
Validade:
</label>
<input type="text" name="validadecartao" required>
<br>
<br>
<label>
Codigo de segurança:
</label>
<input type="text" name="codigocartao" required>
<br>
<br>
<h2>Endereço de entrega:</h2>
<label>
Rua:
</label>
<input type="text" name="rua" required>
<br>
<br>
<label>
Bairro:
</label>
<input type="text" name="bairro" required>
<br>
<br>
<label>
Numero:
</label>
<input type="text" name="numero" required>
<br>
<br>
<label>
Cidade:
</label>
<input type="text" name="cidade" required>
<br>
<br>
<label>
CEP:
</label>
<input type="text" name="cep" required>
<br>
<br>
<label>
Complemento:
</label>
<input type="text" name="complemento" required>
<br>
<br>
<button type="submit">Finalizar Compra</button>
</form>


    
</body>
</html>
