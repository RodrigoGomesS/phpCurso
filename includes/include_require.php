<div class="titulo">Include X Require</div>

<?php
echo 'Usando include com arquivo inexistente...<br>';
ini_set('display_errors', 1);
include('arquivo_inexistente.php');

echo 'Usando require com arquivo inexistente...<br>';
ini_set('display_errors', 1);
require('arquivo_inexistente.php');