<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Pendaftaran</title>

   <!-- Icon Title -->
   <link rel="icon" href="<?= base_url() ?>public/dist/img/rafii-user.jpg" type="image/icon type">
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="<?= base_url() ?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.min.css">
   <!-- Icon Fontawesome -->
   <script src="https://kit.fontawesome.com/a388e38538.js" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <!-- Hover.css -->
   <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/Hover.css">
   <!-- Magic.css -->
   <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/magic.css">

</head>

<body class="hold-transition login-page">
   <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary bg-transparant">
         <div class="card-header text-center ">
            <h1><b>Pendaftaran</b></h1>
         </div>
      </div>
      <div class="card">
         <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Masukkan Data Anda</p>

            <?= form_open('register/save') ?>
            <input type="hidden" name="id" value="">
            <label for="nama" class="form-label mb-1">Username</label>
            <div class="input-group mb-2">
               <input type="text" class="form-control" placeholder="Username" name="username" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span><i class="fa-solid fa-user"></i></span>
                  </div>
               </div>
            </div>
            <label for="email" class="form-label mb-1">Email</label>
            <div class="input-group mb-2">
               <input type="email" class="form-control" placeholder="Email" name="email" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fa-solid fa-at"></span>
                  </div>
               </div>
            </div>
            <label for="password" class="form-label mb-1">Password</label>
            <div class="input-group mb-2">
               <input type="password" class="form-control" placeholder="Password" name="password" required>
               <div class="input-group-append">
                  <div class="input-group-text">
                     <span class="fas fa-lock"></span>
                  </div>
               </div>
            </div>
            <div class="form-group mb-0">
               <label>ROLE</label>
               <div class="radio-group">
                  <input type="radio" class="form_radio" value="MAHASISWA" name="role" id="mahasiswa" required>
                  <label for="mahasiswa" class="mb-0">
                     <div class="col-auto mx-1 card-block py-0 text-center radio">
                        <div class="flex-row">
                           <div class="col">
                              <p class="mb-1">MAHASISWA</p>
                           </div>
                        </div>
                     </div>
                  </label>
                  <input type="radio" class="form_radio" value="ADMIN" name="role" id="admin" required>
                  <label for="admin" class="mb-0">
                     <div class="col-auto card-block py-0 text-center radio ">
                        <div class="flex-row">
                           <div class="col">
                              <p class="mb-1">ADMIN</p>
                           </div>
                        </div>
                     </div>
                  </label>
               </div>
            </div>
            <div class="row mb-0">
               <div class="col-8">
               </div>
               <!-- /.col -->
               <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block mb-1 hvr-float-shadow">Daftar</button>
               </div>
               <!-- /.col -->
            </div>
            <?= form_close() ?>
            <b>
               <p class="mb-0 text-right" style="color: red;">
                  sudah memiliki akun? <a href="<?= base_url() ?>index.php/login" class="text-right  hvr-underline-from-center mb-1">Login Disini</a>
               </p>
            </b>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="<?= base_url() ?>public/plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url() ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="<?= base_url() ?>public/dist/js/adminlte.min.js"></script>
</body>

</html>