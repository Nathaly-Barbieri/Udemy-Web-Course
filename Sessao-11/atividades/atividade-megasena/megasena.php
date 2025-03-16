<?php
// array com 6 num aleatorios de 1 a 60
// n pode repetir numeros
function Sorteio(int $qtd_de_num)
{
    $resultado_sorteio = array([$qtd_de_num]);

    $validador = 0;

    for($idx=0;$idx<$qtd_de_num;$idx++)
    {
        $num_sorteado = rand(1, 60);

        if(!in_array($num_sorteado, $resultado_sorteio))
        {
            $resultado_sorteio[$idx] = $num_sorteado;
        }

    }
    print_r($resultado_sorteio);
}

Sorteio(6);

?>