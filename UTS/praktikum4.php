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
            <h1>Praktikum 4</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 4</li>
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
                <h3 class="card-title">Lingkaran</h3>

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
                require_once "ClassPraktikum4/class_lingkaran.php";


                echo "NILAI PHI " . Lingkaran::PHI;
                $lingkar1 = new Lingkaran( 10 );
                $lingkar2 = new Lingkaran( 4 );
                echo "<br/><br>Luas Lingkaran I= ".$lingkar1->getLuas();
                echo "<br/>Luas Lingkaran II= ".$lingkar2->getLuas();
                echo "<br><br>Keliling Lingkaran I= ".$lingkar1->getKeliling();
                echo "<br>Keliling Lingkaran II= ".$lingkar2->getKeliling();
                ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Persegi Panjang</h3>

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
                  require_once "ClassPraktikum4/class_PersegiPanjang.php";



                  $Perpan1 = new PersegiPanjang( 2, 4 );
                  $Perpan2 = new PersegiPanjang( 4, 3 );

                  echo "Luas Persegi Panjang I= ".$Perpan1->getLuas();
                  echo "<br/>Luas Persegi Panjang II= ".$Perpan2->getLuas();
                  echo "<br><br>Keliling Persegi Panjang I= ".$Perpan1->getKeliling();
                  echo "<br>Keliling Persegi Panjang II= ".$Perpan2->getKeliling();
                  ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>

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
                <div class="container">
                  <table class="table table-striped mt-4">
                <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">PRODI</th>
                    <th scope="col">TAHUN ANGKATAN</th>
                    <th scope="col">IPK</th>
                    <th scope="col">PREDIKAT</th>
                    <th scope="col">CHANGE</th>
                  </tr>
                </thead>

                <tbody>
                <?php
                  include_once "ClassPraktikum4/class_mahasiswa.php";
                ?>
                </tbody>
          </table>
                  <!-- Optional JavaScript; choose one of the two! -->

                  <!-- Option 1: Bootstrap Bundle with Popper -->
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                  <!-- Option 2: Separate Popper and Bootstrap JS -->
                  <!--
                  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                  -->
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