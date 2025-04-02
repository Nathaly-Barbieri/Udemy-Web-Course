<?php

class Funcionario{

    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    function setNome($nome){
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    function getNome(){
       return $this->nome;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filhos e seu numero de telefone é $this->telefone";
    }

    function modificarNumFilhos($numFilhos){
         $this->numFilhos = $numFilhos;
    }

}

$y = new Funcionario();
$y->setNome('José');
$y->setNumFilhos('2');
$y->setTelefone('11 8888888888');

echo 'O nome é ' . $y->getNome() . ' e elx tem ' . $y->getNumFilhos() . ' e seu numero de telefone é ' . $y->getTelefone() . '<br>';

$x = new Funcionario();


$y->setNome('Maria');
$y->setNumFilhos('5');
$y->setTelefone('11 999999999');

echo 'O nome é ' . $y->getNome() . ' e elx tem ' . $y->getNumFilhos() . ' e seu numero de telefone é ' . $y->getTelefone() . '<br>';

?>

