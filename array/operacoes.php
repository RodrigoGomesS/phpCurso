<div class="titulo">Operações</div>

<?php

$dados1 =[
    "nome" => "José",
    "idade" => 29
];

$dados2 =[
    "naturalidade " => "Bahia"
];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // saber se é mesmo um array
echo '<br>' . count($dadosCompletos);// retorna valoir total de elemntos dentro do array

echo '<br>';
$indice = array_rand($dadosCompletos);//tras um valor aleatório do array
echo "$indice = $dadosCompletos[$indice]";//forma de mostrar esse array
echo '<br>';

echo "{$dadosCompletos['idade']}";
echo '<br>';

unset($dadosCompletos['nome']);
print_r($dadosCompletos);
echo '<br>';

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = array_merge($impares, $pares);//unifica os dois arrays
print_r($decimais);
echo '<br>';

sort($decimais);
print_r($decimais);




