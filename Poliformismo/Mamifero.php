<?php

require_once "Anamial.php";

class Mamifero extends Anamial{
    private $corPelo;
    public function locomover()
    {
        // TODO: Implement locomover() method.
        echo "<p>Correndo</p>";
    }

    public function alimentar()
    {
        // TODO: Implement alimentar() method.
        echo "<p>Mamando</p>";
    }

    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
        echo "<p>Som de mamifero</p>";
    }

    /**
     * @return mixed
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * @param mixed $corPelo
     */
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }

}