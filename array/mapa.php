<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "peso" => 71.2,
    "genero" => "masculino"
);

print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["peso"];
echo '<br>' . $dados["genero"];

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo '<br>';
print_r($lista);

$lista[] = "i";
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);