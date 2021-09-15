<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'seja bem vindo(a)!';
}

obterMensagem();
$mensagem = obterMensagem();
echo $mensagem;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Rodrigo');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;

echo '<br>', soma($x, $y);
echo '<br>', soma(48, 12);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 22);
echo '<br>', $variavel;

function trocaValorTrue(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorTrue($variavel, 22);
echo '<br>', $variavel;