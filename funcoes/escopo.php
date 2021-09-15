<div class="titulo">Funçã0 & Escopo</div>

<?php
function imprimirMensagens(){
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel =1;

function trocaValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes : $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorTrue(){
    global $variavel;
    $variavel = 3;
    echo "durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorTrue();
echo "Depois : $variavel <br>";

var_dump(trocaValorTrue());