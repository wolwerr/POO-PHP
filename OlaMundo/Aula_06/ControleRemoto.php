<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
    //Atributo
    private $volume;
    private $ligado;
    private $tocando;
    //Metodos Especiais
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     */
    public function setVolume(int $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return false
     */
    public function getLigado(): bool
    {
        return $this->ligado;
    }

    /**
     * @param false $ligado
     */
    public function setLigado(bool $ligado): void
    {
        $this->ligado = $ligado;
    }


    public function getTocando(): bool
    {
        return $this->tocando;
    }

    /**
     * @param false $tocando
     */
    public function setTocando(bool $tocando): void
    {
        $this->tocando = $tocando;
    }

    public function ligar()
    {
        // TODO: Implement ligar() method.
        $this->setLigado(true);
    }

    public function desligar()
    {
        // TODO: Implement desligar() method.
        $this->setLigado(false);
    }

    public function abrirMenu()
    {

        echo "<br>Está ligado?: ". ($this->getLigado()?"Sim":"Não");
        echo "<br>Está tocando?: ". ($this->getTocando()?"Sim":"Não");
        for($i=0; $i <= $this->getVolume(); $i + 10){
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu()
    {
        // TODO: Implement fecharMenu() method.
        echo "<br>Fechando Menu...";
    }

    public function maisVolume()
    {
        // TODO: Implement maisVolume() method.
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5 );
        }else{
            echo "Erro, nao posso aumentar o volume";
        }
    }

    public function menosVolume()
    {
        // TODO: Implement menosVolume() method.
        if($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo()
    {
        // TODO: Implement ligarMudo() method.
        if($this->getLigado() && $this->getVolume()> 0 ) {
            $this->getVolume(0);
        }
    }

    public function desligarMudo()
    {
        // TODO: Implement desligarMudo() method.
        if($this->getLigado() && $this->getVolume()== 0 ) {
            $this->getVolume(50);
        }
    }

    public function play()
    {
        // TODO: Implement play() method.
        if ($this->getLigado() && !($this->getTocando())) {
        $this->setTocando(true);
    }
    }

    public function pause()
    {
        // TODO: Implement pause() method.
        if ($this->getLigado() && ($this->getTocando())) {
            $this->setTocando(false);
        }
    }
}