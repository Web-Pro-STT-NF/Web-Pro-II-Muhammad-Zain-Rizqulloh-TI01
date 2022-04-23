<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="gaya.css">



<h3 style="background: rgba(73, 185, 138, 0.233); padding: 10px">Form Nilai Siswa</h3><br>
<div class="bungkus">
<form method="GET" action="class_nilaimahasiswa.php">

  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-3">
      <select id="select" name="matkul" class="custom-select">
        <option value="Pemrograman web">Pemrograman web</option>
        <option value="Basis data">Basis data</option>
        <option value="Kkomunikasi Efektif">Komunikasi Efektif</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Nilai</label> 
    <div class="col-2">
      <input id="text" name="nilai" placeholder="Nilai" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Nim</label> 
    <div class="col-4">
      <input id="text1" name="nim" placeholder="Nomor Induk Siswa" type="text" class="form-control">
    </div>
  </div>
    <div style="margin-left: 12rem" class="offset-2 col-2">
      <button  name="proses" type="submit" class="btn btn-info">Submit</button>
    </div>

</form>
</div>
<footer>Develop by @zainrizqulloh. Copyright 2022</footer>

<div class="container">
<?php
error_reporting(0);
  $proses = $_GET['proses'];
  $mata_kuliah = $_GET['matkul'];
  $nilai = $_GET['nilai'];
  $nim = $_GET['nim'];
  
  echo '<b>Hasil Pengisian Form</b> <br/> ' .$proses;
  echo '<br/>Mata Kuliah: ' .$mata_kuliah;
  echo '<br/>Nilai: ' .$nilai;
  echo '<br/>Nomor Induk Siswa: ' .$nim;


    if ($nilai  <= 35 ) {
        $grade = 'E';
    }
        elseif ($nilai  <= 55 ) {
            $grade = 'D';
        }
        elseif ($nilai  <= 69 ) {
            $grade = 'C';
        }
        elseif ($nilai  <= 84 ) {
            $grade = 'B';
        }
        elseif ($nilai  <= 100 ) {
            $grade = 'A';
        }
        else {
            $grade = 'I';
        }
    
  
  echo '<br/>Predikat: ' .$grade;

  if (($nilai) > 55 ) {
    $ket = 'Lulus';
  }

    else {
        $ket = 'Tidak Lulus';
    }
    echo '<br/>Keterangan: ' .$ket;
?>
</div>

