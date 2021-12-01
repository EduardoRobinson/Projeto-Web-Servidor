<?php
abstract class Produto{
    private $nome;
    private $valor;
    private $descricao;
    private $quantidade;
    abstract public function cadastrarproduto($nome,$tipo,$valor,$descricao,$quantidade);

}
?>