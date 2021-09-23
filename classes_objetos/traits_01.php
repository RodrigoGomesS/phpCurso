<div class="titulo">Traits #01</div>

<?php
trait validacao {
    public $a = 'Valor A';
    public function validarString($string) {
        return isset($string) && $string !== '';
    }
}

trait validacaoMelhorada {
    public $b = 'Valor B';
    private $c = 'Valor C(privado)';
    public function validarStringMelhor($string) {
        return isset($string) && trim($string);
    }
}

class ValidacaoString {
    use validacao, validacaoMelhorada;
    
    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

$usuario = new ValidacaoString();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
echo $usuario->imprimirValorC();