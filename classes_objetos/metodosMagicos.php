<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'Destruido!';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar(){
        echo $this . '<br>';
    }

    public function __get($atributo)
    {
        echo "Lendo atributo não declarado: {$atributo}<br>";
    }

    public function __set($atributo, $valor)
    {
        echo "Alterando atribuito não declarado: {$atributo}/{$valor}<br>";
    }

    public function __call($metodo, $parametro)
    {
        echo "Tentando executar método ${metodo}.";
        echo "<br> com os parâmetros: ";
        print_r($parametro);
    }
}

$pessoa = new Pessoa('Gandalf', 2000);
// echo $pessoa . '<br>';
// $pessoa->apresentar();
// $pessoa->nome = 'Mestre dos Magos';
// $pessoa->apresentar();

// $pessoa->nomeCompleto = 'Muito Legal';
// $pessoa->nomeCompleto;

$pessoa->exec();
