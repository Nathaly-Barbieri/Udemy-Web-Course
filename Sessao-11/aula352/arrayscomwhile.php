<?php

echo 'Testando com While:<br><br>';

$registros = array(
    array('titulo' => 'Título da notícia 1', 'conteudo' => 'Teste de conteúdo'),
    array('titulo' => 'Título da notícia 2', 'conteudo' => 'Teste de conteúdo'),
    array('titulo' => 'Título da notícia 3', 'conteudo' => 'Teste de conteúdo'),
    array('titulo' => 'Título da notícia 4', 'conteudo' => 'Teste de conteúdo'),
    array('titulo' => 'Título da notícia 5', 'conteudo' => 'Teste de conteúdo'),
                );

$indice = 0;

while($indice < count($registros))
{
    echo '<h3>' . $registros[$indice]['titulo'] .'</h3><br>' . '<p>' . $registros[$indice]['conteudo'] . '</p>';
    echo '<hr>';
    $indice++;
}

echo '<br><br>Testando com Do While:<br><br>';

$indice = 0;
do{
    echo '<h3>' . $registros[$indice]['titulo'] .'</h3><br>' . '<p>' . $registros[$indice]['conteudo'] . '</p>';
    echo '<hr>';
    $indice++;
}
while($indice < count($registros));

echo '<br><br>Testando com For:<br><br>';

for($indice=0;$indice < count($registros); $indice++)
{
    echo '<h3>' . $registros[$indice]['titulo'] .'</h3><br>' . '<p>' . $registros[$indice]['conteudo'] . '</p>';
    echo '<hr>';
}
?>