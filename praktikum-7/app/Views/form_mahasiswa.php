<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Tambah Data Mahasiswa</div>
            <div class="card-body">
                <form action="<?= base_url('mahasiswa/save'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="jenis_kelamin">Jenis kelamin</label>
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="program_study">Program Study</label>
                        <input type="text" id="program_study" name="program_study" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="ipk">IPK</label>
                        <input type="text" id="ipk" name="ipk" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>