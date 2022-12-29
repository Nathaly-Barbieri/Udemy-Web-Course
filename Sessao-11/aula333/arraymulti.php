<?php

$lista_coisas = [];

$lista_coisas['frutas'] = array (1 => 'Banana', 2 => 'Maçã', 'Fruta_vermelha' => 'Morango', 'Fruta_roxa' => 'Uva');

$lista_coisas['Pessoas'] = array (1 => 'Aline', 2 => 'Maria Clara', 'Pessoa_mais_alta' => 'José', 'Pessoa_mais_nova' => 'João');

echo '<pre>';

print_r($lista_coisas);

echo '</pre><br><br>';

echo '<pre>';

echo $lista_coisas['Pessoas'][2];

echo '</pre><br><br>';




?>