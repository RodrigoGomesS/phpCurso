<div class="titulo">Interface PHP</div>

<?php

interface Animal {
    function respirar();
}

interface Canino extends Animal {
    function latir(): string;
}

class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!<br>";
    }

    function latir(): string{
        return 'Au Au';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar();
echo $animal1->latir();