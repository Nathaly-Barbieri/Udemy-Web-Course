<?php

    // Com as funções nós conseguimos evitar a redundancia de códigos.

    /*function nome_da_funcao($parametro){
        ação;
    }
    */

    function Calcular_Area_Terreno($largura, $comprimento)
    {
        $area = $largura * $comprimento;
        echo $area;
    }


?>

<htmL>
    <head>
        <title>teste de função</title>
        <meta charset="UTF-8">
    </head>
    <body>

    <h3>O tamanho da area é: <?php Calcular_Area_Terreno(5,  6); ?> </h3>

    </body>
</html>


