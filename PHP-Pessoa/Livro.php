<?php

require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPagina;
    private $pagAtual;
    private $aberto;
    private $leitor;

    /**
     * @param $titulo
     * @param $autor
     * @param $totPagina
     * @param $pagAtual
     * @param $aberto
     * @param $leitor
     */
    public function __construct($titulo, $autor, $totPagina, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPagina = $totPagina;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "<hr>Livro {$this->getTitulo()}, escrito por {$this->getAutor()}";
        echo "<br> Páginas: {$this->totPagina} atual {$this->pagAtual}";
        echo "<br> Sendo lido por {$this->leitor->getNome()}";
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTotPagina()
    {
        return $this->totPagina;
    }

    /**
     * @param mixed $totPagina
     */
    public function setTotPagina($totPagina)
    {
        $this->totPagina = $totPagina;
    }

    /**
     * @return mixed
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @param mixed $pagAtual
     */
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    /**
     * @return mixed
     */
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * @param mixed $aberto
     */
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    /**
     * @return mixed
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * @param mixed $leitor
     */
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }


    public function abrir()
    {
        // TODO: Implement abrir() method.
        $this->aberto = true;
    }

    public function fechar()
    {
        // TODO: Implement fechar() method.
        $this->aberto = false;
    }

    public function folhear($p)
    {
        // TODO: Implement folhear() method.
        if($p>$this->totPagina){
            $this->pagAtual = 0;
        }else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPag()
    {
        // TODO: Implement avancarPag() method.
        $this->pagAtual  ++;
    }

    public function voltarPag()
    {
        // TODO: Implement volttarPag() method.
        $this->pagAtual --;
    }
}