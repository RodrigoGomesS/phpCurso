<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(4, 5) . '<br>';
echo soma(4, 6, 7) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Denpendentes: $dep ";
        }
    }
}

echo "<br>";
membros('Rick', 'Ana', 'Teo', 'Davi');
echo "<hr>";
membros('Rodrigo', 'Valentina');