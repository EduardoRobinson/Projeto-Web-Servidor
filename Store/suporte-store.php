<?php
require ('../Classes/SuporteClasse.php');
if(empty($_POST['nome'])==false && empty($_POST['email'])==false && empty($_POST['assunto'])==false && empty($_POST['mensagem'])==false){
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
$suporte=new Suporte();
$suporte->mensagemAoSuporte($nome,$email,$assunto,$mensagem);

}else{
    echo("Dados incompletos");
}




?>

