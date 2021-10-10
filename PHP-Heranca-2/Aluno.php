<?php
require_once "Pessoa.php";
class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno <strong>$this->nome</p>";
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
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