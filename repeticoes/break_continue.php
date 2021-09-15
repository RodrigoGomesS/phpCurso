<div class="titulo">Break/Continue</div>

<?php

$cont = 10;
for (;;) { 
    echo "$cont ";
    $cont++;
    if ($cont > 20) {
        break;
    }
}

echo "Fim!";
echo "<hr>";

for (;;) { 
    $cont++;
    if ($cont % 2 === 1) {
        continue;
    }
    echo "$cont ";
    if($cont >= 30) {
        break;
    }
}

echo "Fim!";
echo "<hr>";

$numeros = [1, 2, 3, 4, 5, 6];

foreach ($numeros as $valor) {
    if($valor ===5) break;
    if($valor % 2 === 0) continue;
    echo "$valor ";
}

echo "Fim!";