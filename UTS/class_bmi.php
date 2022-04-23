<?php 
trait bmi {
    public $bb;
    public $tb;
    
    public function __construct($bb, $tb){
        $this -> bb = $bb;
        $this -> tb = $tb;
    }

    public function nilai(){
        $tinggi_meter = $this->tb/100;
        $this->bmi = ($this->bb / pow($tinggi_meter,2));
        return number_format($this->bmi,2);
    }

    public function status(){

        if($this->bmi < 18.5){
            return "Kekurangan Berat Badan";
        }elseif($this->bmi < 24.9){
            return "Normal (Ideal)  ";
        }elseif($this->bmi < 29.9){
            return "Kelebihan Berat Badan";
        }else{
            return "Kegemukan (Obesitas)";
        }
    }
}


?>