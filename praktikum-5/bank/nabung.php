<h2 syle="padding: 20px;">Account Bank</h2>
<?php
require_once 'class_account.php';

$ac1 = new Account('0321',5000000);
$ac2 = new Account('0010',4500000);

$ac1->cetak();
$ac1->deposit(75000);
echo '<br>nabung 75000<br>';
$ac1->cetak();
