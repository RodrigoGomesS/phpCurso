<div class="titulo">Recursividade</div>

<?php
function somaRecursiva($numero)
{
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaRecursiva(10) . '<br>';

function novaSomaRecursiva($numero)
{
    //condição de Parada!!!!
    if ($numero === 1) {
        return 1;
    } else {
        return $numero + novaSomaRecursiva($numero - 1);
    }
}

echo novaSomaRecursiva(10) . '<br>';

function somaRecursivaEconomica($numero){
    return $numero ===1 ? 1 : $numero += somaRecursivaEconomica($numero -1);
}

echo somaRecursivaEconomica(10) . '<br>';

var_dump(is_dir('funcoes'));

echo "<br>";

function lerPasta($pasta){
    if(is_dir($pasta)){
        $diretorio = dir($pasta);
        while (false !== ($entrada = $diretorio->read())) {
            echo $entrada . " ";
        }
    }else {
        echo 'Não é um diretório';
    }
}

lerPasta('/home/');


