<div class="titulo">Include/Require Once</div>

<?php
ini_set('display_errors', 1);

include('include_once.php');
// require('include_once.php');

echo "Variavel = {$variavel} <br>";
$variavel = 'Variavel Alterada';
echo "Variavel = {$variavel} <br>";

include_once('include_once.php');
require_once('include_once.php');
echo "Variavel = {$variavel} <br>";
