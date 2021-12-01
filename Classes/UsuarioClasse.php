<?php
require('../Banco/conexao.php');
class Usuario{
  public function login($usuario,$senha){
    $bd=Conexao::get();
    $query=$bd->prepare("SELECT * FROM usuarios WHERE usuario=:usuario AND senha=:senha");
    $query->bindValue(":usuario",$usuario);
    $query->bindValue(":senha",$senha);
    $query->execute();
    if($query->rowCount()>0){
    $_SESSION['logado']=true;
    $_SESSION['usuario']=$usuario;
    header('Location:../Servicos/paginadousuario.php');
    return true;
    }else{
      return false;
    }
  }

  public function cadastro($usuario,$nome,$email,$cep,$rua,$bairro,$cidade,$numero,$cpf,$senha){
    $bd=Conexao::get();
    $query=$bd->prepare("INSERT INTO usuarios (usuario,nome,email,cep,rua,bairro,cidade,numero,cpf,senha)VALUES(:usuario,:nome,:email,:cep,:rua,:bairro,:cidade,:numero,:cpf,:senha)");
    $query->bindParam(':usuario',$_POST['usuario']);
    $query->bindParam(':nome',$_POST['nome'] );
    $query->bindParam(':email',$_POST['email']);
    $query->bindParam(':cep',$_POST['cep']);
    $query->bindParam(':rua',$_POST['rua']);
    $query->bindParam(':bairro',$_POST['bairro']);
    $query->bindParam(':cidade',$_POST['cidade']);
    $query->bindParam(':numero',$_POST['numero']);
    $query->bindParam(':cpf',$_POST['cpf']);
    $query->bindParam(':senha',$_POST['senha']);
    $query->execute();
    header('Location:../Servicos/Login.php');


  }


}

?>