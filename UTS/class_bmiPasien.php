<?php
include_once 'class_pasien.php';
include_once 'class_bmi.php';
class bmiPasien extends pasien  {
    use bmi;
    public $bmi;
    function __construct ($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, $status){
        parent :: __construct ($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, $status);
        $this -> bb = $bb;
        $this -> tb = $tb;
        $this -> bmi = $this -> nilai();
    }
}

?>
