<div class="titulo">Desafio Classe Data</div>

<?php

class Data {
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function apresentar(){
        echo "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data = new Data();

$data->apresentar();

echo '<hr>';

$aniversario = new Data();
$aniversario->dia = 22;
$aniversario->mes = 03;
$aniversario->ano = 1992;
$aniversario-> apresentar();