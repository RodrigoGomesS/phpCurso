<div class="titulo">Membro Estático</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        //Tentativa 1
        // echo "Estática = {$this->static}<br>";
        //Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStatic() {
        // echo "Não estática = {$this->naoStatic}<br>";
        // echo "Estática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

// $objetoA = new A();
// $objetoA->mostrarA();
// $objetoA->mostrarStatic();
echo A::$static . "<br>";
A::mostrarStatic();
