<html>

    <head>

    <meta charset="UTF-8"/>
    <title> Anotações da aula 313</title>

    </head>

    <body>

        <?php

            $sla = 15;
            $sla2 = 12;
        
            if($sla == 15 && $sla2 == 12)
            {
                echo '<br> 1';
            }


            if($sla == 15 AND  $sla2 == 12)
            {
                echo '<br> 2';
            }


            // OR OU II VERIFICA SE UMA OU MAIS EXPRESSÕES SÃO VERDADEIRA. OU SEJA, PODE SER SÓ UMA, OU PODEM SER TODAS

            if($sla == 15 OR $sla2 == 12)
            {
                echo '<br> 3';
            }


            if($sla == 15 || $sla2 == 12)
            {
                echo '<br> 4';
            }

            // XOR VERIFICA SE SÓ UMA É VERDADEIRA, NÃO AS DUAS. OU SEJA, UMA PRECISA SER VERDADEIRA E A OUTRA FALSA.

            if($sla == 15 XOR $sla2 == 15)
            {
                echo '<br> 5';
            }

            // O ! INVERTE O RESULTADO DA EXPRESSÃO, OU SEJA A CONDIÇÃO SERÁ VERDADEIRA

            if(!($sla == 15 OR $sla2 == 15))
            {
                echo '<br> 6';
            }

        ?>

    </body>

</html>