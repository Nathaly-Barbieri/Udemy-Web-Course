<html>

    <head>

    <meta charset="UTF-8"/>
    <title> Anotações da aula 308</title>

    </head>


    <body>

        <?php
        
            $idade = 18;

            echo 'VARIAVEIS CONSTANTES <br>';
          

            define('BD_URL', 'endereco_bd_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');

            // NÃO PRECISA USAR CIFRÃO PRA CONSTANTE

            // PELO FATO DO VALOR SER CONSTANTE, O VALOR NÃO PODE SER MODIFICADO
            // EX: define('BD_URL', 'GGGGGGGGG'); <-------- vai dar erro  

            echo BD_URL . '</br>';
            echo BD_USUARIO . '</br>';
            echo BD_SENHA . '</br>';

        ?>

    </body>

</html>