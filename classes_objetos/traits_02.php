<div class="titulo">Traits #02</div>

<?php

use Usuario as GlobalUsuario;
use validacaoMelhorada as GlobalValidacaoMelhorada;

trait validacao {
    public function validarString($string) {
        return isset($string) && $string !== '';
    }
}

trait validacaoMelhorada{
    public function validarString($string){
        return isset($string) && trim($string);
    }
}

class Validar {
    use validacao, validacaoMelhorada {
        validacaoMelhorada::validarString insteadOf validacao;
        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Validar();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));