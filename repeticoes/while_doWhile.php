<div class="titulo">While/ Do While</div>

<?php

const valorLimite = 5;
$contador =0;

while ($contador < valorLimite) {
    echo "while $contador <br>";
    $contador++;
}

echo "<hr>";

do {
    echo "do-while $contador <br>";
    $contador++;
} while ($contador < valorLimite);