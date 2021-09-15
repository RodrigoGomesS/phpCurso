<div class="titulo">Closure e Callable</div>

<?php
$soma1 = function ($a, $b){
    return $a + $b;
};

echo $soma1(2, 2) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

$soma1 = 1;
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';