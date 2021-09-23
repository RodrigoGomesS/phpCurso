<div class="titulo">Construtor & Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu!';
    }

    public function apresentar(){
        echo"Nome: {$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoa = new Pessoa('Mestre dos Magos', 2000);
$pessoa->apresentar();
unset($pessoa);

echo "<hr>";

$pessoa = new Pessoa('Gandalf', '9000');
$pessoa->apresentar();
$pessoa = null;