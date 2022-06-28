<!DOCTYPE html>
	<html lang="en">
	
	<head>
	    <title>Data Mahasiswa</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSS only -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	    <!-- JavaScript Bundle with Popper -->
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</head>
	
	<body>
	    <div class="container mt-5">
	        <div class="card">
	            <div class="card-header bg-primary text-white"><h1>Data Mahasiswa</h1></div>
	            <div class="card-body">
	                <a href="" class="btn btn-primary mb-3">Tambah</a>
	                <table class="table">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>NIM</th>
	                            <th>Nama</th>
	                            <th>Jenis Kelamin</th>
	                            <th>Tanggal Lahir</th>
	                            <th>Tempat Lahir</th>
	                            <th>Program Study</th>
	                            <th>IPK</th>
	                            <th>Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <?php
	                        $no = 1;
	                        foreach ($mahasiswa as $row):
	                        ?>
	                        <tr>
	                            <th><?= $no; ?></th>
	                            <td><?= $row->nim ?></td>
	                            <td><?= $row->nama; ?></td>
	                            <td><?= $row->jenis_kelamin; ?></td>
	                            <td><?= $row->tgl_lahir; ?></td>
	                            <td><?= $row->tempat_lahir; ?></td>
	                            <td><?= $row->program_study; ?></td>
	                            <td><?= $row->ipk; ?></td>
	                            <td>
	                            <a title="Edit" href="<?= base_url("mahasiswa/edit/$row->id"); ?>" class="btn btn-info">Edit</a>
	                            <a title="Delete" href="<?= base_url("mahasiswa/delete/$row->id") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
	                            </td>
	                        </tr>
	
	                        <?php
	                        $no++;
	                        endforeach;
	                        
	                        ?>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</body>
	
	</html>