<?php

$funcionarios = array(
                    array('nome' => 'João', 'salario' => 2500),
                    array('nome' => 'Maria', 'salario' => 3200),
                    array('nome' => 'Luana', 'salario' => 1600),
                    array('nome' => 'Julia', 'salario' => 4000),
                    );

foreach($funcionarios as $idx => $funcionario)
{
    foreach($funcionario as $idx2 => $dados_do_func)
    {
        echo 'ID: ' . $idx .' | Dados: ' . $dados_do_func . '<br>';
    }
}

?>