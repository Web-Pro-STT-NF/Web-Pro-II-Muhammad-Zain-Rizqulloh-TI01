<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<div class="bungkus">
<header>Sistem Penilaian</header><br>

<h3>Form Nilai Siswa</h3><hr><br>
<form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nama Lengkap</label> 
    <div class="col-4">
      <input id="text1" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-4">
      <select id="select" name="matkul" class="custom-select">
        <option value="Pemrograman web">Pemrograman web</option>
        <option value="Basis data">Basis data</option>
        <option value="Kkomunikasi Efektif">Komunikasi Efektif</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Nilai UTS</label> 
    <div class="col-2">
      <input id="text" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Nilai UAS</label> 
    <div class="col-2">
      <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-2">
      <input id="text3" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-2">
      <button name="proses" type="submit" class="btn btn-secondary">Submit</button>
    </div>
  </div>
</form>
</div>
<footer>Develop by @zainrizqulloh. Copyright 2022</footer>

<div class="container">
<?php
error_reporting(0);
  $proses = $_GET['proses'];
  $nama_siswa = $_GET['nama'];
  $mata_kuliah = $_GET['matkul'];
  $nilai_uts = $_GET['nilai_uts'];
  $nilai_uas = $_GET['nilai_uas'];
  $nilai_tugas = $_GET['nilai_tugas'];

  echo '<b>Hasil Pengisian Form</b> <br/> ' .$proses;
  echo '<br/>Nama: ' .$nama_siswa;
  echo '<br/>Mata Kuliah: ' .$mata_kuliah;
  echo '<br/>Nilai UTS: ' .$nilai_uts;
  echo '<br/>Nilai UAS: ' .$nilai_uas;
  echo '<br/>Nilai Tugas: ' .$nilai_tugas;
?>
</div>
