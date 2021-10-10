<?php

require_once "Pessoa.php";

class Aluno extends Pessoa
{
    private $matr;
    private $curso;

    public function cancelarMatr(){
        echo "<p>Matrícula será cancelada</p>";
    }

    /**
     * @return mixed
     */
    public function getMatr()
    {
        return $this->matr;
    }

    /**
     * @param mixed $matr
     */
    public function setMatr($matr)
    {
        $this->matr = $matr;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

}