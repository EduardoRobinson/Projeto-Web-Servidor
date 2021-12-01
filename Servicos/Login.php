

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Suporte.css" type="text/css" media="screen">
    <title>Login</title>
</head>
<body>
<header>

<h2>Entre em sua conta</h2>

</header>

<main>
    <div class="Login">
    <form method="POST" action="login.php">  
        <label>Usuario:</label>
        <br>
        <input type="text" name="usuario" required>
        <br>
        <label>Senha:</label>
        <br>
        <input type="password" name="senha" required>
        <br>
        <button>Entrar</button>
    </form>
    <?php
    require('../Validation/login-validation.php');
    ?>
    </div>
</main>




</body>
</html>