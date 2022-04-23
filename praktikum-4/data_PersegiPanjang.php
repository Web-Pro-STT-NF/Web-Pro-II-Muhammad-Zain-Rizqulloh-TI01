<link rel="stylesheet" href="gaya.css">

<div class="perpan">
<?php
require_once "class_PersegiPanjang.php";



$Perpan1 = new PersegiPanjang( 2, 4 );
$Perpan2 = new PersegiPanjang( 4, 3 );

echo "Luas Persegi Panjang I= ".$Perpan1->getLuas();
echo "<br/>Luas Persegi Panjang II= ".$Perpan2->getLuas();
echo "<br><br>Keliling Persegi Panjang I= ".$Perpan1->getKeliling();
echo "<br>Keliling Persegi Panjang II= ".$Perpan2->getKeliling();
?>
</div>

