<div class="titulo">Foreach</div>

<?php

$semana = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sextra',
    'Sábado'
];

foreach ($semana as $dia) {
    echo "$dia <br>";
}

echo "<hr>";

foreach ($semana as $indice => $dia) {
    echo "$indice => $dia <br>";
}

echo "<hr>";

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matriz as $linha) {
    foreach ($linha as $letras) {
        echo "$letras ";
    }
    echo "<br>";
}

echo "<hr>";

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar; ";
}

echo "<br>";
print_r($numeros);
