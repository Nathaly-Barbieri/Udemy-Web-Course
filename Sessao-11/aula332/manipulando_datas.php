<?php

//------------- ALGUMAS FUNÇÕES DE DATAS:--------------------

echo 'Hoje é dia ' . date('d/m/Y');

echo '<br> Estamos na semana '. date('W') .'° de ' . date('Y');

echo '<br> Esse mês tem '. date('t') .' dias<br>';

echo '<BR>' . date_default_timezone_get();

date_default_timezone_set('America/Sao_Paulo');

echo '<BR>'.date_default_timezone_get();

echo '<br> Agora são '. date('H:i') .' horas<br><br>';

$datainicial = '2003-12-14';

$datafinal = '2022-12-14';

$time_inicial = strtotime($datainicial);
$time_final = strtotime($datafinal);

echo $datainicial . ' - ' . $time_inicial . '<br>';
echo $datafinal . ' - ' . $time_final . '<br>';

$dif_times = $time_final - $time_inicial;

echo $dif_times;

$segundos_existem_dia = 24 * 60 * 60;

$diferenca_dias_entre_datas = round($dif_times / $segundos_existem_dia);

echo '<br><br>Existem ' . $diferenca_dias_entre_datas . ' dias de diferença entre as datas ' . $datainicial . ' e ' . $datafinal;

?>