<?php
require_once('../Controllers/controller.php');
class Pedido{

    public function cadastrarpedido($comprador,$produto,$numerocartao,$nomecartao,$validade,$codigocartao,$rua,$bairro,$cidade,$numero,$complemento){
$bd=Conexao::get();       
$query=$bd->prepare("INSERT INTO pedido (comprador,produto,numerocartao,nomecartao,validade,codigocartao,rua,bairro,cidade,numero,complemento)
VALUES(:comprador,:produto,:numerocartao,:nomecartao,:validade,:codigocartao,:rua,:bairro,:cidade,:numero,:complemento)");
$query->bindParam(':comprador',$comprador);
$query->bindParam(':produto',$produto );
$query->bindParam(':numerocartao',$numerocartao);
$query->bindParam(':nomecartao',$nomecartao);
$query->bindParam(':validade',$validade);
$query->bindParam(':codigocartao',$codigocartao);
$query->bindParam(':rua',$rua);
$query->bindParam(':bairro',$bairro);
$query->bindParam(':cidade',$cidade);
$query->bindParam(':numero',$numero);
$query->bindParam(':complemento',$complemento);
$query->execute();
    }
}





?>