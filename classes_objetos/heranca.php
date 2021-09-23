<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa Criada! <br>";
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!!!';
    }

    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo 'Usuario Criado! <br>';
    }

    function __destruct() {
        echo 'Usuário saindo...';
    }

    function apresentar() {
        echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>";
    }
}

$usuario = new Usuario('Tyrael', 2000, 'Arcanjo');
$usuario->apresentar();