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
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 1</li>
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
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Variable Sistem</h3>

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
              echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
              echo '<br/>Nama File '.$_SERVER["PHP_SELF"];
              ?>
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Variable User</h3>

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
                  //definisikan variables
                  $nama = 'Rosalie Naurah';
                  $umur = 13;
                  $berat = 22.4;

                  echo 'Nama: '. $nama;
                  echo '</br>Umur: '. $umur. ' Tahun';
                  echo '<br/>Hello '. $nama. ' Apakabar';
                ?>
             
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Variable Constant</h3>

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
              </div>
              <!-- /.card-body -->
              

              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Array Mahasiswa</h3>

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

                $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
                $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
                $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
                $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

                $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

                
                ?>

                  <h3>Daftar Nilai Siswa</h3>
                  <table class="table table-success">
                  <thead>
                  <tr>
                  <th>No</th><th>NIM</th><th>UTS</th>
                  <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php

                      $nomor = 1;

                      foreach($ar_nilai as $ns){
                      echo '<tr><td>'.$nomor.'</td>';

                      echo '<td>'.$ns['nim'].'</td>';
                      echo '<td>'.$ns['uts'].'</td>';
                      echo '<td>'.$ns['uas'].'</td>';
                      echo '<td>'.$ns['tugas'].'</td>';

                      $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;

                      echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                      echo '<tr/>';

                      $nomor++;
                  }
                  ?>
            </tbody>
            </table>
              </div>
          </div>
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