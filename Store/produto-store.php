<?php

require ('../Classes/AdesivosClasse.php');
require ('../Classes/CanecasClasse.php');
require ('../Classes/MoletonsClasse.php');
require ('../Classes/CapinhasClasse.php');
require ('../Classes/CamisetasClasse.php');
require ('../Classes/PostersClasse.php');

$nome=$_POST['nome'] ?? '';
$tipo=$_POST['tipo'] ?? '';
$valor=$_POST['valor']?? '';
$descricao=$_POST['descricao']?? '';
$quantidade=$_POST['quantidade']?? '';

if(empty($_POST['nome'])==false &&   empty($_POST['tipo'])==false  && empty($_POST['valor'])==false  && empty($_POST['descricao'])==false  && empty($_POST['quantidade'])==false){
    if($tipo=='adesivo'){
        $produto=new Adesivo();
        $produto->cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade);
    }else if($tipo=='camiseta'){
        $produto=new Camiseta();
        $produto->cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade);
    }else if($tipo=='caneca'){
        $produto=new Caneca();
        $produto->cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade);
    }else if($tipo=='capa'){
        $produto=new Capa();
        $produto->cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade);
    }else if($tipo=='moletom'){
        $produto=new Moletom();
        $produto->cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade);
    }else if($tipo=='poster'){
        $produto=new Poster();
        $produto->cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade);
    }
}

?>