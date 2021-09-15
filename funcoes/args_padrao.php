<div class="titulo">Argumentos Padrões</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Mestre', 'dos Magos');

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

echo '<hr>';

anotarPedido('Pão com Manteiga');
anotarPedido('Prato Comercial', 'Café');

