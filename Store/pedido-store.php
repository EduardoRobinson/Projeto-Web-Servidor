<?php
session_start();
require ('../Classes/PedidoClasse.php');
$erro=false;
if(empty($_POST['numerocartao'])==false && empty($_POST['nomecartao'])==false && empty($_POST['validadecartao'])==false && empty($_POST['codigocartao'])==false && empty($_POST['rua'])==false && empty($_POST['bairro'])==false && empty($_POST['numero'])==false && empty($_POST['cidade'])==false && empty($_POST['cep'])==false && empty($_POST['complemento'])==false){
$comprador=$_SESSION['usuario'];
$produto=$_POST['produto'] ;
$numerocartao=$_POST['numerocartao'];
$nomecartao=$_POST['nomecartao'];
$validade=$_POST['validadecartao'];
$codigocartao=$_POST['codigocartao'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$numero=$_POST['numero'];
$complemento=$_POST['complemento'];
$pedido=new Pedido();
$pedido->cadastrarpedido($comprador,$produto,$numerocartao,$nomecartao,$validade,$codigocartao,$rua,$bairro,$cidade,$numero,$complemento);
}

 
 ?>