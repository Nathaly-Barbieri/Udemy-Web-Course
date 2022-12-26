<html>
<head>
    <meta charset="UTF-8">
    <title>Usando o switch na prática</title>
</head>
<body>

<?php

    $parametro = 'abc';

    switch($parametro)
    {
        case 1:
            echo 'Entrou no case 1';
            break;
        
        case 2:
            echo 'Entrou no case 2';
            break;

        default:
            echo 'Nenhuma opção é correspondente!';
            break;
    }

    /*$opcao = 2;

    switch($opcao)
    {
        case 1:
            // Condição 1
            break;
        case 2:
            // Condição 2
            break;
        case 3:
            // Condição 3
            break;
        default:
            // Condição que é executada por padrão. Não chega a ser um else mas é parecida.
            break;

            // Se você não indicar o "break" a próxima opção vai ser executada também.
    }*/

?>

</body>
</html>
