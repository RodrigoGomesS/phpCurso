<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.1, 2.3) . '<br>';
echo somar1(1, '4dois') . '<br>';

function somar2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.1, 2.3) . '<br>';
echo somar2(1, '4dois') . '<br>';