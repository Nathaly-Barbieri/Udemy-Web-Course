<?php

$itens = array('Sofa', 'mesa', 'cadeira', 'fogão', 'geladeira');

print_r($itens);

foreach($itens as $item)
{
    echo $item . '<br>';

    if($item == 'mesa')
    {
        echo 'Compre uma mesa e ganeh 25% de desconto na compra de 5 cadeiras! <br>';
    }
}

$funcionarios = array('João, Maria, Luana, Julia');

foreach($funcionarios as $idx => $nome_funcionario)
{
    echo '<br> O nome do funcionário é: ' . $nome_funcionario;
}

?>