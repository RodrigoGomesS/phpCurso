<div class="titulo">Laço FOR</div>

<?php
for ($cont = 1; $cont <= 5; $cont++) {
    echo "{$cont} ";
}

echo '<hr>';

for (; $cont <= 10; $cont++) {
    echo "{$cont} ";
}

echo '<hr>';

for (; $cont <= 15;) {
    echo "{$cont} ";
    $cont++;
}
echo '<hr>';

$semana = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

print_r($semana);
echo '<hr>';
for ($i = 1; $i <= count($semana); $i++) {
    echo "{$semana[$i]} ";
}

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo "<hr>";

for ($i = 0; $i <= count($matriz); $i++) {
    for ($j = 0; $j <= count($matriz[$i]); $j++) {
        echo "{$matriz[$i][$j]} ";
    }
    echo "<br>";
}
