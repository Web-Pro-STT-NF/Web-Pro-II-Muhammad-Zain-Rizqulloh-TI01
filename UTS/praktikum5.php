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
            <h1>Praktikum 5</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 5</li>
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
                <h3 class="card-title">Dispenser</h3>

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
              <div class="text-center">
              <div class="card mt-3 ms-4" style="width: 50rem;">
              <h3 class="card-header">Data Dispenser </h3>
              <div class="card-body">
                <?php
                include_once "ClassPraktikum5/class_dispenser.php";


                $pelanggan1 = new dispenser("Zain", "coklat panas", 10000);
                $pelanggan2 = new dispenser("Wa Ragip", "coklat panas", 10000);



                $pelanggan1->setVolume(5000);
                $pelanggan2->setVolume(4625);
                echo "Volume Galon : " . $pelanggan1->getVolume() . "<br>";





                echo $pelanggan1->coklatPanas() . "<br>";
                echo $pelanggan1->nambah_coklatPanas() . "<br>";
                echo $pelanggan2->coklatPanas() . "<br><hr>";

                ?>

              </div>
          </div>
          </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               Praktikum 5
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bank</h3>

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
              <div class="text-center">
              <div class="card mt-3 ms-4" style="width: 50rem;">
              <h3 class="card-header">Akun Bank </h3>
              <div class="card-body">
                <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">No.Account</th>
                    <th scope="col">Pemilik</th>
                    <th scope="col">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'ClassPraktikum5/class_AccountBank.php'
                    
                    ?>
                </tbody>
                </table>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
               Praktikum 5
              </div>
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