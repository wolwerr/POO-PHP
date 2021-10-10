<?php

require_once "Animal.php";

class Mamifero extends Animal
{
    protected $corPelo;
    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
        echo "<p>Som de Mamifero</p>";
    }
}