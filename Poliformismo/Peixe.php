<?php

require_once "Anamial.php";

class Peixe extends Anamial{
    private $corEscama;

    /**
     * @return mixed
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * @param mixed $corEscama
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }

    public function soltarBolha()
    {
    echo "<p>Soltou uma bolha</p>";
    }

    public function locomover()
    {
        // TODO: Implement locomover() method.
        echo "<p>Nadando</p>";
    }

    public function alimentar()
    {
        // TODO: Implement alimentar() method.
        echo "<p>Comendo Substancias</p>";
    }

    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
        echo "<p>Peixe nao faz som/p>";
    }
}