<div class="titulo">Desafio Sorteio</div>

<?php

$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderala"];
$sorteio = array_rand($nomes);
echo "<h1><center>$nomes[$sorteio]<center></h1>";

