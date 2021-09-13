<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Ana', 'idade'=> 35];
$arr2 = ['nome' => 'Ana', 'idade'=> 35];
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 35, 'nome' => 'Ana'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo '<br>';
$arr4 = ['idade' => '35', 'nome' => 'Ana'];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);
