<?php

// membuat class kucing
class dispenser {
    // atribut
    // visibility : public, private, protected
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;
    public $pembeli;



    public function isi($vol){
        $this->volume = $vol;
    }

    // oonstructor
    public function __construct($pembeli, $namaMinuman, $volumeGelas)
    {
        $this->pembeli = $pembeli;
        $this->minumnya = $namaMinuman;
        $this->volGel = $volumeGelas;
    }



    public function coklatPanas(){
        $this->harga = 10000;
        $this->vol -= 250;
        return "<br>{$this->pembeli} membeli {$this->minumnya} seharga {$this->harga}, volume galon tersisa 
        {$this->vol}ml";
    }

    public function nambah_coklatPanas(){
        $this->harga = 5000;
        $this->vol -= 125;
        return "<br>{$this->pembeli} nambah {$this->minumnya}, sehingga membayar lagi {$this->harga}, 
        volume galon tersisa {$this->vol}ml";
    }

    public function esTeh(){
        $this->harga = 6000;
        $this->vol -= 250;
        return "<br>{$this->pembeli} membeli {$this->minumnya} seharga {$this->harga}, volume galon tersisa 
        {$this->vol}ml";
    }

    // method getter : untuk mendapatkan akses nilai dari properti yg private
    public function getNama(){
        return $this->pembeli;
    }

    public function getMinum(){
        return $this->minumnya;
    }

    public function getVolume(){
        return $this->vol;
    }


    // method setter : untuk memberi nilai ulang pada properti private
    public function setVolume($volume){
        $this->vol = $volume;
    }

}