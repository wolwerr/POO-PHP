<?php

class Caneta
{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    /**
     * @param $modelo
     * @param $cor
     * @param $ponta
     * @param $tampada;
     */
    public function __construct($modelo, $cor, $ponta)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->setTampada(true);
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }
    /**
     * @param mixed $modelo
     */
    public function setTampada($tampada): void
    {
        $this->tampada = $tampada;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor): void
    {
        $this->cor = $cor;
    }

    /**
     * @return mixed
     */
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * @param mixed $ponta
     */
    public function setPonta($ponta): void
    {
        $this->ponta = $ponta;
    }



}