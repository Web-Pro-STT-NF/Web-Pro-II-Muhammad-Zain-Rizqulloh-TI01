<?php

    //definisikan konstanta
    define('PHI' ,3.14);
    define('DBNAME', 'inventory');
    define('DBSERVER', 'localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $keliling = 2 * PHI * $jari;

    echo 'Luas lingkaran dengan Jari-jari ' .$jari.  ': ' .$luas;
    echo '<br>Kelilingnya: ' .$keliling;


?>


<hr/>
<?php

echo 'Nama databasenya: ' .DBNAME;
echo '<br/>Lokasi databasenya ada di ' .DBSERVER;

?>