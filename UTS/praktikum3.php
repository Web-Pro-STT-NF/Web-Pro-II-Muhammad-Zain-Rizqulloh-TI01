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
            <h1>Praktikum 3</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 3</li>
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

                          <div class="row" style="text-align:center">
                        <div class="col-12 bg-light pt-3">
                            <h4>Sistem Penilaian Siswa</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p><b>Form Nilai siswa</b></p>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form method="POST">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-5">
                                        <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                                    <div class="col-5">
                                        <select id="matkul" name="matkul" class="custom-select">
                                            <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
                                            <option value="Pemrograman Web">Pemrograman Web</option>
                                            <option value="Basis Data">Basis Data</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                                    <div class="col-3">
                                        <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai uts" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                                    <div class="col-3">
                                        <input id="nilai_uas" name="nilai_uas" placeholder="masukan nilai uas" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                                    <div class="col-3">
                                        <input id="nilai_tugas" name="nilai_tugas" placeholder="masukan nilai tugas" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                                    </div>
                                </div>
                            </form>
                            <?php

                            include_once 'ClassPraktikum3/libfungsi.php';
                            $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                            $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                            $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                            $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                            $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                            echo "Nama : $nama";
                            echo "<br/>Mata kuliah : $mata_kuliah";
                            echo "<br/>Nilai UTS : $nilai_uts";
                            echo "<br/>Nilai UAS : $nilai_uas";
                            echo "<br/>Nilai Tugas : $nilai_tugas";

                            $nilai_akhir = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
                            $grade_nilai = grade_nilai($nilai_akhir);

                            echo "<br/>Nilai Akhir : $nilai_akhir";
                            echo "<br/>Status : ", kelulusan($nilai_akhir);
                            echo "<br/>Grade Nilai : ", $grade_nilai;
                            echo "<br/>Predikat Nilia : ", predikat_nilai($grade_nilai);
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 bg-light pt-3">
                            <p>Develop by Mahasiswa STT NF</p>
                        </div>
                    </div>
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