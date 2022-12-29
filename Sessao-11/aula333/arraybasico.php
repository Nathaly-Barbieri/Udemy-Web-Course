<?php

# Arrays sao listas ordenadas

# Podemos criar arrays sequenciais (númericos):

$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');

# O var_dump e o print_r servem para imprimir arrays:
 
var_dump($lista_frutas);

echo '<br><hr><br>';

print_r($lista_frutas);

# Para indicarmos um novo indice de um array que já tem valores e posições definidas é só:

# indicar a array, a posição nova e o valor.

$lista_frutas[5] =  'Amora';

# ambém podemos criar arrays assim:

$lista_nomes = ['Valentina', 'Miguel', 'Valeria'];

# ou associativos:

# Os itens dos arrays não são sequenciais, nem infinitos. Ou seja, ficaria assim:

$lista_idades = ['Valentina' => 13, 'Miguel' => 21, 'Valeria' => 3];

# criamos uma posição, dizemos que a chave é 'x' e seu valor correspondente é 'x'


# Para imprimir o valor:

echo '<br><br>A idade da Valentina é ' . $lista_idades['Valentina'];

$lista_idades['Mateus'] = 16;

echo '<br><br>A idade do Mateus é ' . $lista_idades['Mateus'];


?>