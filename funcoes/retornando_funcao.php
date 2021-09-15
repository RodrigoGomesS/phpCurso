<div class="titulo">Retornando Função</div>

<?php
function soma($a) {
    return function ($b) use ($a) {
        return $a + $b;
    };
}

echo soma(3)(3);

$somaDois = soma(2);
echo '<br>', $somaDois(11);
echo '<br>', $somaDois(16);