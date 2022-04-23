<h2 syle="padding: 20px;">Dispenser</h2>
<?php
include_once "class_dispenser.php";


$pelanggan1 = new dispenser("Zain", "coklat panas", 10000);
$pelanggan2 = new dispenser("Wa Ragip", "coklat panas", 10000);



$pelanggan1->setVolume(5000);
$pelanggan2->setVolume(4625);
echo "Volume Galon : " . $pelanggan1->getVolume() . "<br>";





echo $pelanggan1->coklatPanas() . "<br>";
echo $pelanggan1->nambah_coklatPanas() . "<br>";
echo $pelanggan2->coklatPanas() . "<br><hr>";

?>



