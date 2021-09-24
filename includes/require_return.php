<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('returnUsado.php');
echo $valorRetorno . '<br>';
echo $variavelRetornada . '<br>';

echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/returnNaoUsado.php');
// var_dump($valorRetorno2);
echo $valorRetorno2 . '<br>';
echo $variavelDeclarada . '<br>';   