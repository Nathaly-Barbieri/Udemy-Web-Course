<?php
$num = 1;
// Usando o While:
echo '--Inicio do loop-- <br><br>';

while($num < 10)
{
    echo $num . '<br>';
    $num++;
}
echo '<br><br>--Fim do loop-- ';

// break interrompe a execução do comando

// o continue descarta um pedaço de uma execuçaõ do laço
$num = 0; 
do{
    echo '<br>O do while deu certo ' . ($num + 1) . ' vezes!';
    $num++;
}while($num < 5);

for($num=0; $num<=10; $num++)
{
    echo '<br><br>for n°' . $num . '!';
}

?>