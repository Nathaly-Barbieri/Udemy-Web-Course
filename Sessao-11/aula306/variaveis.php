<html>

    <head>

    <meta charset="UTF-8"/>
    <title> Anotações da aula 306</title>

    </head>


    <body>

        <?php
        
            echo 'AS VARIAVEIS NO PHP SEMPRE TEM O $ <br>';

            $nome = 'Nathaly';

            $idade = 18;

            $peso = 61.2;

            $fumante_sn = false;

            if($fumante_sn == false)
            {
                $fumante_sn = 'não';
            }
            else
            {
                $fumante_sn =  'sim';
            }


          //  echo($nome . " " . $idade . " " . $sgestado);
          
        ?>

        <h1>FICHA DE CADASTRO</h1> <br>

        <p> Nome: <?= $nome ?>  </p>
        <p> Idade: <?= $idade?> anos</p>
        <p> Peso: <?= $peso ?>kgs</p>
        <p> É fumante? <?= $fumante_sn ?> </p>



    </body>

</html>