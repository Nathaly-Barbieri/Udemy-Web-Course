<html>

    <head>

    <meta charset="UTF-8"/>
    <title> Anotações da aula 309</title>

    </head>

    <body>

        <?php

           $usuario_possui_cartao_loja = true;
           $valor_compra = 225;
           $recebeu_desconto_frete = false;

           $valor_frete = 50;


           if($usuario_possui_cartao_loja == true && $valor_compra >= 100)
           {
            
                $valor_frete = 0;
                $recebeu_desconto_frete = true;

           }
        ?>

        <h1>DETALHES DO PEDIDO</h1>
        <p>Possui cartão da loja? 
        <?php

           if($usuario_possui_cartao_loja == true)
           {
            echo 'SIM!';
           }
           else
           {
            echo 'NÃO!';
           }

        ?>
    </p>

    <p>Ganhou frete grátis?
        <?php

           if($recebeu_desconto_frete == true)
           {
            echo 'SIM!';
           }
           else
           {
            echo 'NÃO!';
           }

        ?>
    </p>

    <P>SUBTOTAL DA COMPRA: R$ <?= $valor_compra ?></P>

    <P>VALOR TOTAL DO FRETE: R$ <?= $valor_frete ?></P>

    <P>TOTAL: R$ <?= $total = $valor_compra + $valor_frete?></P>
           
    </body>

</html> 