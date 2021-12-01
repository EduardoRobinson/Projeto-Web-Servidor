<?php
require('../Banco/conexao.php');
class Suporte{
    public function mensagemAoSuporte($nome,$email,$assunto,$mensagem){
        $bd=Conexao::get();
        $query=$bd->prepare("INSERT INTO suporte (nome,email,assunto,mensagem) VALUES (:nome,:email,:assunto,:mensagem)");
        $query->bindParam(':nome',$nome);
        $query->bindParam(':email',$email);
        $query->bindParam(':assunto',$assunto);
        $query->bindParam(':mensagem',$mensagem);
        $query->execute();
        header('Location:../Servicos/MensagemEnviada.php');

    }
}






?>