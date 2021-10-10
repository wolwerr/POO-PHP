<?php

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    /**
     * @param $nome
     * @param $nacionalidade
     * @param $idade
     * @param $altura
     * @param $peso
     * @param $categoria
     * @param $vitorias
     * @param $derrotas
     * @param $empates
     */
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function apresentar(){
        echo "<p>-----------------------------------------</p>";
        echo "<p>Chegou a Hora!! O Lutador {$this->getNome()}</p>";
        echo "<p>Veio diretamente do {$this->getNacionalidade()}</p>";
        echo "<p>Tem {$this->getIdade()} anos, pesa {$this->getPeso()} quilos e tem {$this->getAltura()} metros</p>";
        echo "<br>Ele tem {$this->getVitorias()} vitórias!!";
        echo "<br> {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates";
    }
    public function status(){
        echo "<p>---------------------------------------------------</p>";
        echo "{$this->getNome()} é um peso {$this->getCategoria()},";
        echo " já ganhou {$this->getVitorias()} vez(es), ";
        echo "perdeu {$this->getDerrotas()} vez(es) e empatou {$this->getEmpates()} vez(es)";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * @param mixed $nacionalidade
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    private function setCategoria()
    {
        if($this->peso< 52.2){
            $this->categoria = "Inválido";
        }elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    /**
     * @return mixed
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * @param mixed $vitorias
     */
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    /**
     * @return mixed
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * @param mixed $derrotas
     */
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    /**
     * @return mixed
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * @param mixed $empates
     */
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }



}