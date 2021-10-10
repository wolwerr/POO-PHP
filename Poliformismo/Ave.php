<?php

require_once "Anamial.php";

class Ave extends Anamial{

    private $corPena;

    /**
     * @return mixed
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * @param mixed $corPena
     */
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }

    public function fazerNinho(){
        echo "<p>Construiu um ninho!</p>";
    }

    public function locomover()
    {
        // TODO: Implement locomover() method.
        echo "<p>Voando</p>";
    }

    public function alimentar()
    {
        // TODO: Implement alimentar() method.
    }

    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
    }
}