<?php

$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];


# O in_array(); retorna "true" ou "false" informando se um determinado item existe em um array

$existe =  in_array('Maçã', $lista_frutas);

if($existe)
{
    echo 'Existe!';
}
else{
    echo 'Não existe!';
}

# O array_search(); retorna o indice do valor pesquisado caso ele exista

$existe =  in_array('Maçã', $lista_frutas);

if($existe)
{
    echo 'Existe na posição ' . array_search('Maçã', $lista_frutas) .  ' do array!';
}
else{
    echo 'Não existe!';
}

?>