<?php

    $valor = $_POST['rendendimentos_valor'];
 
 function Calcula_Imposto_De_Renda($renda)
 {

    if($renda <= 1903.98)
    {
        echo 'Você está isento!';
    }

    if($renda > 1903.98 && $renda <= 2826.65)
    {
        $porcentagem = ($renda *  7.5) / 100;
        echo 'Você têm que pagar: R$ ' . $porcentagem;
    }

    if($renda > 2826.65 && $renda <= 3751.05)
    {
        $porcentagem = ($renda *  15) / 100;
        echo 'Você têm que pagar: R$ ' . $porcentagem;
    }

    if($renda > 3751.06 && $renda <= 4664.68)
    {
        $porcentagem = ($renda *  22.5) / 100;
        echo 'Você têm que pagar: R$ ' . $porcentagem;
    }

    if($renda > 4664.68)
    {
        $porcentagem = ($renda *  27.5) / 100;
        echo 'Você têm que pagar: R$ ' . $porcentagem;
    }
  

 }

?>

<htmL>
    <head>
        <title>Atividade 1</title>
        <meta charset="UTF-8">
    </head>
    <body>

    <h2>Você informou a renda R$ <?php echo $valor;?>!</h2>

    <h3> <?php Calcula_Imposto_De_Renda($valor); ?> </h3>

    <a href="apresentacao.html">Voltar</a>

    </body>
</html>