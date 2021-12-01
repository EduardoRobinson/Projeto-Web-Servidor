<?php
require_once('../Controllers/controller.php');
class Canecas extends Produto{

public function cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade){
    $bd=Conexao::get();
    $query=$bd->prepare("INSERT INTO produto (nome,tipo,valor,descricao,quantidade) VALUES (:nome,:tipo,:valor,:descricao,:quantidade)");
    $query->bindParam(':nome',$_POST['nome']);
    $query->bindParam(':tipo',$_POST['tipo']);
    $query->bindParam(':valor',$_POST['valor']);
    $query->bindParam(':descricao',$_POST['descricao']);
    $query->bindParam(':quantidade',$_POST['quantidade']);
    $query->execute();
    header('Location:../Serviços/ProdutosCadastrados.php');


}
}





?>