<?php

//Funções para manipulação de strings no php:

$lista_de_frutas = array('Maçã', 'Banana', 'Melancia', 'Goiaba', 'Melão');

//is_array - verifica se determinado valor é um array

$retorno = is_array($lista_de_frutas);

if($retorno)
{
    echo 'é um array<br><br>';
}else{
    echo 'não é array<br><br>';
}

// array_keys - retorna todas as chaves de um array

//array com indices associativos:

$lista_de_frutas_2 = array(1 => 'Maçã', 20 => 'Banana', 18 =>'Melancia', 2 => 'Goiaba', 9=> 'Melão');

$chaves = array_keys($lista_de_frutas_2);

print_r($chaves);

// sort ordena um array, reajusta os indices e retorna true ou false se conseguir ordenar

$retorno = sort($lista_de_frutas_2);

if($retorno)
{
    echo '<br><br>conseguiu ordenar<br><br>';
}else{
    echo '<br><br>não conseguiu ordenar<br><br>';
}
print_r($lista_de_frutas_2);

// sort ordena um array, preserva os indices e retorna true ou false se conseguir ordenar

$lista_de_frutas_2 = array(1 => 'Maçã', 20 => 'Banana', 18 =>'Melancia', 2 => 'Goiaba', 9=> 'Melão');

$retorno = asort($lista_de_frutas_2);

if($retorno)
{
    echo '<br><br>conseguiu ordenar<br><br>';
}else{
    echo '<br><br>não conseguiu ordenar<br><br>';
}

print_r($lista_de_frutas_2);

// count - conta quantos elementos tem dentro de um array
echo('<br><br>Qtd de itens no array: ');
echo count($lista_de_frutas_2);
echo '<br><br>';
// array_merge funde arrays

$lista_de_verduras = array('chuchu', 'abobrinha', 'Beterraba');
$lista_de_frutas = array('Morango', 'Banana', 'Abacate');

$lista_de_compra_da_feira = array_merge($lista_de_frutas, $lista_de_verduras);

print_r($lista_de_compra_da_feira);

echo '<br><br>';

// explode - divide uma string baseado em um delimitador

$string = '14/12/2025';
$retorno_da_divoisão = explode('/', $string);
echo $string;
echo '<br><br>';
print_r($retorno_da_divoisão);
echo '<br><br>';

echo 'A data no formato americano: ' . $retorno_da_divoisão[2] . '-' . $retorno_da_divoisão[1] . '-' . $retorno_da_divoisão[0]; 

// imnplode - junta elementos de um array em uma string

$array_teste = ['a', 'b', 'x', 'y'];
$ret_implode = implode(",", $array_teste);

echo '<br><br>';
echo $ret_implode;

?>