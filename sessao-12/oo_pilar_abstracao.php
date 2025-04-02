<?php

// modelo - sempre a primeira letra maiscula
class Funcionario{

    // atributos

    public $nome = 'José';
    public $telefone = '11 999999999';
    public $numFilhos = 2;

    // métodos

    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filhos";
    }

    function modificarNumFilhos($numFilhos){
         $this->numFilhos = $numFilhos;
    }

}

// criamos um objt pra mostrar ou interagir com metodos ou atributos

$y = new Funcionario();

$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();

$x = new Funcionario();

// a classe é a mesma, mas os objts são diferentes
?>