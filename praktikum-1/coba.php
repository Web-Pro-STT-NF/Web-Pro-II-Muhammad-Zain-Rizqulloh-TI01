<?php

  echo 'hellow Zain<br>';
  //membuat variabel
  $nama = 'Muhammad Zain Rizqulloh';
  $umur = 18;
  $berat = 45.2;
	
	
  // menampilkan variable
  echo 'nama : ' . $nama;
  echo '<br>umur : ' . $umur;
  echo '<br>berat: ' . $berat;
  
  //membuat variable sistem
  echo '<br>Dokumen root: '. $_SERVER['DOCUMENT_ROOT'];
  echo '<br>Nama File: '.$_SERVER['PHP_SELF'];
  
  //membuat variable Constant 
  //defined($namavariabel, isi variabel)
  define('anjai', 3.14);
  define('SURNAME', 'zen');
  
  $luas = anjai * 8 * 8;
  echo '<br>luas lingkaran: '. $luas;
  