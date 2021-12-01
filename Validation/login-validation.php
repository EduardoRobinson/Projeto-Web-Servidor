<?php 
session_start();
$_SESSION['logado']=false;
if(empty($_POST['usuario'])==false && empty($_POST['senha'])==false){
$usuario=$_POST['usuario'] ?? '';
$senha=$_POST['senha'] ?? '';
require('../Classes/UsuarioClasse.php');
$user= new Usuario();
$user->login($usuario,$senha);
if($user->login($usuario,$senha)==false){
    echo("Dados incorretos");
}
}



?>