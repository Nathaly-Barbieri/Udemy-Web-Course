<?php

    $lista_de_frutas = array('Maçã', 'Banana', 'Melancia', 'Goiaba', 'Melão');

    print_r($lista_de_frutas);

    // in_array() -> retorna true ou false sobre o que está sendo procurado em determinada posição
    
    //echo in_array('Pitaya', $lista_de_frutas);
    //echo in_array('Maçã', $lista_de_frutas);

    $fruta = 'uva';
    
    $existe_essa_fruta = in_array($fruta, $lista_de_frutas);

        if($existe_essa_fruta)
        {
            echo '<br><br>a fruta ' . $fruta . ' existe no array.';
        }
        
        else{
            echo '<br><br>a fruta ' . $fruta . ' não existe no array.';
        }

    // array_search retorna a posição no array do item buscado

    //echo array_search('Abacaxi', $lista_de_frutas);
    //echo array_search('Goiaba', $lista_de_frutas);

    $existe_essa_fruta = array_search('Goiaba', $lista_de_frutas);

    if($existe_essa_fruta != null)
    {
        echo '<br><br>Sim, o valor pesquisado existe no array';
    }else{
        echo '<br><br>Não, o valor pesquisado não existe no array';
    }

    //quando negativo, o in array retorna false ou zero, enquanto que o search retorna null

    // pesquisando em um array multidimensional

    $lista_coisas = [
        'frutas' => $lista_de_frutas,
        'pessoas' => ['João', 'Maria', 'José']
    ];

    // echo in_array('Uva', $lista_coisas['frutas']);

    $existe_essa_fruta = in_array('Uva', $lista_coisas['frutas']);

    if($existe_essa_fruta)
    {
        echo '<br><br>a fruta ' . $fruta . ' existe no array.';
    }
    
    else{
        echo '<br><br>a fruta ' . $fruta . ' não existe no array.';
    }

?>