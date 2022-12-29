<?php

$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

// FALSE - É UM TIPO DE VARIAVÉL BOOLEANA
// NULL E EMPTY SÃO VALORES ESPECIAIS

$funcionario1 = null;
$funcionario2 = '';

if(is_null($funcionario1))
{
    echo 'Sim, a variavél é nula!';
}else{
    'Não, a variavél não é nula!';
}


// Valores vazios?
if(empty($funcionario1))
{
    echo 'Sim, a variavél é nula!';
}else{
    'Não, a variavél não é nula!';
}

// null é vazio
// mas vazio não é null


?>