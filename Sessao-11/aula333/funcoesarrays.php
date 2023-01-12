<?php

# Usando a função is_array

$array = 'aaaa';
$retorno = is_array($array);

if($retorno)
{
    echo 'Sim, é um array';
}
else{
    echo 'Não, não é um array';
}

echo '<br>';

# Usando a função array_keys que retorna as chaves de um array

$lista_coisas['Pessoas'] = array (1 => 'Aline', 2 => 'Maria Clara', 'Pessoa_mais_alta' => 'José', 'Pessoa_mais_nova' => 'João');

$chaves_array = array_keys($lista_coisas);

echo $chaves_array;
?>