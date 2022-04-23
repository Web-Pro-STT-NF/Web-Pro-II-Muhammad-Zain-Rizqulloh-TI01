<?php
require_once 'class_account.php';

class AccountBank extends Account{
    public $customer;
    static $biaya_admin = 6500;

    function __construct($nomor,$customer,$saldo){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }

    public function transfer($ab_tujuan,$uang){
        $ab_tujuan->deposit($uang);//account bank tujuan bertambah
        $this->withdraw(self::$biaya_admin);//saldo akun ini berkurang
        $this->withdraw($uang);
    }

    public function cetak(){
        parent::cetak();//panggil function milik parent
        echo '<br>Customer: ' . $this->customer;
        echo '<br>';
    }

    public function deposit($uang){
        parent::deposit($uang);
    }




}
    $customer1 = new AccountBank('C001','Ahmad', 5000000);
    $customer2 = new AccountBank('C002','Budi', 5000000);
    $customer3 = new AccountBank('C003','Kurniawan', 5000000);

    // panggil attribut dari class Pasien
    $dataCustomer = [$customer1, $customer2, $customer3];
    $customer1->deposit(1000000);
    $customer1->transfer($customer3,1500000);
    $customer1->transfer($customer2,500000);
    $customer2->withdraw(2500000);
    
    $dataCustomer = [$customer1, $customer2, $customer3];
    $nomor = 1;
    foreach ($dataCustomer as $csm) {
    echo '<tr><td>' . $nomor . '</td>';
    echo '<td>' . $csm->nomor . '</td>';
    echo '<td>' . $csm->customer . '</td>';
    echo '<td>' . $csm->saldo . '</td>';
    $nomor++;
    
    }

    echo 'Masing-masing <i>Customer</i> Memiliki Saldo Awal Rp. 5.000.000';

    

    


    