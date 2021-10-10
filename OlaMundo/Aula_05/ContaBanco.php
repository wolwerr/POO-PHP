<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    /**
     * @param $numConta
     * @param $tipo
     * @param $dono
     * @param $saldo
     * @param $status
     */
    public function __construct(){
        $this->setSaldo(0);
        $this->getStatus(false);
        echo "<p>Conta criada com sucesso!!</p>";
    }

    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP"){
        $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Conta ainda tem dinheiro, não posso fecha-lá</p>";
        }elseif ($this->getSaldo() < 0 ){
            echo "<p>Conta está em débito, Impossivel encerrar</p>";
        }else{
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso!!</p>";
        }
    }
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            //$this->saldo = $this->saldo + $v;
            echo "<p>Deposito de R$ {$v} na conta de {$this->getDono()} realizado com sucesso!!</p>";
        }else{
            echo "<p>Conta Fechada. Não consigo depositar.</p>";
        }
    }
    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo() >= $v) {
                //$this->saldo = $this->saldo - $v;
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ {$v} autorizado na conta de {$this->getDono()}</p>";
            } else{
                echo "<p>Saldo insuficiente na conta de {$this->getDono()} para saque.</p>";
            }
        }else{
            echo "<p>Não posso sacar de uma conta fechada</p>";
            }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        }else if($this->getTipo() == "CP"){
            $v = 20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ {$v} foi debitado na conta de {$this->getDono()}</p>";
        }else {
            echo "<p>Problemas com a conta, não posso cobrar. </p>";
        }
    }

    /**
     * @return mixed
     */
    public function getNumConta()
    {
        return $this->numConta;
    }

    /**
     * @param mixed $numConta
     */
    public function setNumConta($numConta): void
    {
        $this->numConta = $numConta;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * @param mixed $dono
     */
    public function setDono($dono): void
    {
        $this->dono = $dono;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }



}