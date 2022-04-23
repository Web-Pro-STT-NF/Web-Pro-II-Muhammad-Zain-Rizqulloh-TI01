<!-- transfer -->
<h2>Transfer</h2>
<?php
    require_once 'class_accountBank.php';

    $ab1= new AccountBank('010',5000000,'rooney');
    $ab2= new AccountBank('070',15000000,'ronaldo');
    
    $ab1->cetak();
    echo '<hr>';
    $ab2->cetak();

    echo '<b>ronaldo transfer uang ke rooney</b><br>';

    echo '<br/><b>Uang rooney sekarang</b>:';
    $ab2->transfer($ab1,1250000);
    $ab1->cetak();
    echo '<br>';

    echo '<b>sisa uang ronaldo</b>: ';
    $ab2->cetak();


?>
