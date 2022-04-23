<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 2</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


      


    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

              <!-- Main content -->
    <section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Nilai Siswa</h3>
                
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form method="POST" action="">
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
                    <button name="proses" type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
                

        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Siswa</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
      
                    <?php
                  error_reporting(0);
                  $proses= $_POST['proses'];
                  $nama_siswa = $_POST['nama'];
                  $mata_kuliah = $_POST['matkul'];
                  $nilai_uts = $_POST['nilai_uts'];
                  $nilai_uas = $_POST['nilai_uas'];
                  $nilai_tugas = $_POST['nilai_tugas'];


              
                      echo 'Hasil Form: ' .$proses;
                      echo '<br/>Nama: ' .$nama_siswa;
                      echo '<br/>Nmata kuliah: ' .$mata_kuliah;
                      echo '<br/>Nilai UTS: ' .$nilai_uts;
                      echo '<br/>Nilai UAS: ' .$nilai_uas;
                      echo '<br/>Nilai Tugas Praktikum: ' .$nilai_tugas; 


                      if (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100) > 55 ) {
                          $ket = 'Lulus';
                      }

                          else {
                              $ket = 'Tidak Lulus';
                          }

                      echo '<br/>Keterangan: ' .$ket;

                      if (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 35 ) {
                          $grade = 'E';
                      }
                          elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 55 ) {
                              $grade = 'D';
                          }
                          elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 69 ) {
                              $grade = 'C';
                          }
                          elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 84 ) {
                              $grade = 'B';
                          }
                          elseif (($nilai_uts*30/100 + $nilai_uas*35/100 + $nilai_tugas*35/100)  <= 100 ) {
                              $grade = 'A';
                          }
                          else {
                              $grade = 'I';
                          }
                      echo '<br/>Grade Nilai: ' .$grade;

                      switch ($grade) {
                          case "I":
                              echo ", Tidak ada";
                              break;
                          case "A":
                          echo ", Sangat memuaskan";
                          break;
                          case "B":
                          echo ", Memuaskan";
                          break;
                          case "C":
                          echo ", Cukup";
                          break;
                          case "D":
                          echo ", Kurang";
                          break;
                          case "E":
                          echo ", Sangat kurang";
                          break;
                          default:
                          echo ", Status Nilai = Belum terinput";
                      }


                  ?>
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            </div>
            <!-- /.card -->

            <!-- Main content -->
    <section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Belanja</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form method="POST" action="praktikum2.php">
 
        <div class="container mt-5">
          <div class="row">
        <div class="col-8">
          <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
              <input id="name" name="name" placeholder="Customer Name" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
              <input id="jumlah" name="jumlah" placeholder="Jumlah Item" type="text" class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
            <input type="submit" value="simpan" name="proses"/>
            </div>
          </div>
          </div>
        
          <div class="col-3" style="margin-left: 3em;">
          <table class="table  table-bordered border-primary table-striped">
            <thead>
              <tr>
                <th scope="col">Harga Barang</th>
                </tr>
                <tbody>
                  <tr>
                    <th scope="row">TV 4.200.000</th>
                  </tr>
                    <tr>
                      <th scope="row">Kulkas 3.100.000</th>
                    </tr> 
                    <tr>
                      <th scope="row">Mesin Cuci 3.100.000</th>
                    </tr> 
                    </div>
                  </div>
                </form>
                
        
          <?php
          error_reporting(0);
          if(isset($_POST['proses'])){
          $name= $_POST['name'];
          $produk = $_POST['produk'];
          $jumlah = $_POST['jumlah'];
            
          echo 'Nama Produk : '.$name;
          echo '<br/>Produk : '.$produk;
          echo '<br/>Jumlah : '.$jumlah;
          $TV = 4200000 * intval($jumlah);
          $kulkas = 3100000 * intval($jumlah);
          $mesincuci = 3800000 * intval($jumlah);
                                  
              switch($produk){
              case 'TV':
              echo "<br>" . "Total Belanja : " . number_format($TV,0,',','.');
              break;
              
              case 'KULKAS':
              echo "<br>" . "Total Belanja : " . number_format($kulkas,0,',','.');
              break;
            
              default:
              echo "<br>" . "Total Belanja : " . number_format($mesincuci,0,',','.');
              break;
              }                                
              }
        
          ?>
        </div>
            </table>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
    include_once 'footer.php';
?>