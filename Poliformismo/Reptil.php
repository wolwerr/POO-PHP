<?php
require_once "Anamial.php";

class Reptil extends Anamial{
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


    public function locomover()
    {
        // TODO: Implement locomover() method.
        echo "<p>Rastejando</p>";
    }

    public function alimentar()
    {
        // TODO: Implement alimentar() method.
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
        echo "<p>Som de Reptil</p>";
    }
}