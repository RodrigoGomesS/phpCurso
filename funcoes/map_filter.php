<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<hr>';
$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

echo '<hr>';

function apenasAprovados($nota){
    return $nota >= 7;
}

$aprovados = array_filter($notas, 'apenasAprovados');

print_r($aprovados);
