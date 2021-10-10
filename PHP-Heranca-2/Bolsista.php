<?php

require_once "Aluno.php";

class Bolsista extends Aluno{

    private $bolsa;
    public function renovarBolsa(){
       echo "<p>Bolsa Renovada</p>";
    }

    public function pagarMensalidade(){
        echo "<p>$this->nome é bolsista! Então paga com desconto!!</p>";
    }

    /**
     * @return mixed
     */
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * @param mixed $bolsa
     */
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }

}