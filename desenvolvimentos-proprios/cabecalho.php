<html>

<head>
    <title>Cabecalho usando php</title>
</head>

<body>

<?php

$meses = array(1 => " de janeiro de ", 2 => " de fevereiro de ", 3 => " de março de ", 4 => " de abril de ", 5 => " de maio de ", 6 => " de junho de ", 7 => " de julho de ", 8 => " de agosto de ", 9 => " de setembro de ", 10 => " de outubro de ", 11 => " de novembro de ", 12 => " de dezembro de ");

   
    switch(date('m'))
    {
        
    case 1:
        $cabecalho = date('d') . $meses[1] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 2:
        $cabecalho = date('d') . $meses[2] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 3:
        $cabecalho = date('d') . $meses[3] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 4:
        $cabecalho = date('d') . $meses[4] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 5:
        $cabecalho = date('d') . $meses[5] . date('Y');
        echo $cabecalho;
        break;    



   
    case 6:
        $cabecalho = date('d') . $meses[6] . date('Y');
        echo $cabecalho;
        break;    
    
    case 7:
        $cabecalho = date('d') . $meses[7] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 8:
        $cabecalho = date('d') . $meses[8] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 9:
        $cabecalho = date('d') . $meses[9] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 10:
        $cabecalho = date('d') . $meses[10] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 11:
        $cabecalho = date('d') . $meses[11] . date('Y');
        echo $cabecalho;
        break;    
    
    
    case 12:
        $cabecalho = date('d') . $meses[12] . date('Y');
        echo $cabecalho;
        break;    
    }

    ?>

</body>


</html>