<?php

require_once "Lutador.php";

class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() === $l2->getCategoria()
            && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
            }else{
             $this->aprovada = false;
             $this->desafiado = null;
             $this->desafiante = null;
        }

    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0:    //Empate
                    echo "<p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:    //Desafiado vence
                    echo "<p>{$this->desafiado->getNome()} venceu a luta</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:     //Desafiante vence
                    echo "<p>{$this->desafiante->getNome()} venceu a luta</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }else{
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    /**
     * @return mixed
     */
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * @param mixed $desafiado
     */
    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;
    }

    /**
     * @return mixed
     */
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * @param mixed $desafiante
     */
    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }

    /**
     * @return mixed
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * @param mixed $rounds
     */
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

    /**
     * @return mixed
     */
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * @param mixed $aprovada
     */
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }


}