<div class="titulo">Primeira Classe</div>

<?php

class Cliente{
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade} <br>";
    }
}

$cliente1 = new Cliente();

$cliente1->apresentar();

$cliente2 = new Cliente;
$cliente2->nome = 'Leonidas';
$cliente2->idade = '33';
$cliente2->apresentar();