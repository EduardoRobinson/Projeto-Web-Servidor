<?php

require ('../Classes/UsuarioClasse.php');
$erro=false;
if(empty($_POST['usuario'])==false && empty($_POST['nome'])==false && empty($_POST['email'])==false && empty($_POST['cep'])==false && empty($_POST['rua'])==false && empty($_POST['bairro'])==false && empty($_POST['cidade'])==false && empty($_POST['numero'])==false && empty($_POST['cpf'])==false && empty($_POST['senha'])==false){
	$usuario=$_POST['usuario'];
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$cep=$_POST['cep'];
	$rua=$_POST['rua'];
	$bairro=$_POST['bairro'];
	$cidade=$_POST['cidade'];
	$numero=$_POST['numero'];
	$cpf=$_POST['cpf'];
	$senha=$_POST['senha'];
	$user= new Usuario();
	$user->cadastro($usuario,$nome,$email,$cep,$rua,$bairro,$cidade,$numero,$cpf,$senha);
	
}else{
	$erro=true;

}


 ?>
