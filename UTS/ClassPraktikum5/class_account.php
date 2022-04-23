<?php
class Account{
    public $nomor;
    public $saldo;

    function __construct($nomor, $saldo){
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang){
        $this->saldo = $this->saldo + $uang;
    }

    public function withdraw($uang){
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak(){
        echo '<br>Nomor Account: ' . $this->nomor;
        echo '<br>Memiliki Saldo: ' . $this->saldo ;

    }
}
?>