<?php
class pasien {
    public $nama_pasien;
    public $tmp_lahir;
    public $tgl_periksa;
    public $email;
    public $jk;
    public $status;

    function __construct($nama_pasien ,$tmp_lahir, $tgl_periksa, $email, $jk, $status){
        $this -> namapasien = $nama_pasien ;
        $this -> tmplahir = $tmp_lahir;
        $this -> tglperiksa = $tgl_periksa;
        $this -> email = $email;
        $this -> jk = $jk;
        $this -> status = $status;
    }
}


?>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
