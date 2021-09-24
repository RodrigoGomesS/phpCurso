<div class="titulo">Include Função</div>

<?php
echo "Carregando: include_funcao.php<br>";

function carregarArquivo(){
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2,5) . '<br>';
}

echo 'Novamenteno arquivo include_funcao.php <br>';
carregarArquivo(); 