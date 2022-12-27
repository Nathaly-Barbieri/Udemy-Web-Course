<?php

    // MANIPULANDO STRINGS

    $nome = 'Nathaly Barbieri';

    echo strtolower($nome) . '<br>';

    // TEXTO EM CAIXA BAIXA

    echo strtoupper($nome). '<br>';

    // TEXTO EM CAIXA ALTA

    echo ucfirst($nome). '<br>';

    // PRIMEIRA LETRA EM CAIXA ALTA

    echo strlen($nome). '<br>';

    // CONTA A QUANTIDADE DE CARACTERES QUE TÊM A STRING

    echo str_replace('Nathaly', 'Srta', $nome) . '<br>';

    // SUBSTITUI UMA CADEIRA DE CARACTERES POR OUTRA

    // o que você quer que saia fora, o que você quer que entre, string de ref.

    echo substr($nome, 2, 7);

    // MOSTRA OS CARACTERES NA POSISÃO QUE VOCÊ INFORMAR

    // [string, posição da array de inicio, posição de final]

?>