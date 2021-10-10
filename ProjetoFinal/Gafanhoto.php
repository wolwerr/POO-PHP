<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa
{
    private $login;
    private $totAssistido;

    /**
     * @param $login
     */
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;


    }


    public function assistirMaisUm(){
        $this->totAssistido ++;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return int
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * @param int $totAssistido
     */
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;
    }


}