   <!-- Content Wrapper. Contains page content -->
   <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>administratorLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">
</head>

   <style>
       a:hover {
           color: darkblue;
       }
       <?php if ($this->session->userdata("ROLE") == "public") { ?>
       .card {
        margin: 0 180px 0 0;
       }

       #itam{
        float: right;
        margin: 70px 37px 0 0px;
       }
     
       <?php }?>
   </style>

   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <?php if ($this->session->userdata("ROLE") == "administrator") { ?>
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Data Spesifikasi Mobil</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="<?= base_url('index.php/merk') ?>">Home</a></li>
                           <li class="breadcrumb-item active">Detail Mobil</li>
                       </ol>
                   </div>
               </div>
           </div><!-- /.container-fluid -->
       </section>
       <?php }?>

       <!-- Main content -->
       <section class="content">

           <!-- Default box -->
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Detail Mobil</h3>


               </div>
               <div class="card-body">
                   <div class="row mb-2">
                       <div class="col-sm-12">
                           <table class="table table-bordered table-striped table-dark">
                               <tbody>
                                   <tr>
                                       <td>Atas Nama</td>
                                       <td><?= $usersberhasil->username ?></td>
                                   </tr>
                                   <tr>
                                       <td>Tanggal Mulai</td>
                                       <td><?= $sewaberhasil->tanggal_mulai ?></td>
                                   </tr>
                                   <tr>
                                       <td>Tanggal Akhir</td>
                                       <td><?= $sewaberhasil->tanggal_akhir ?></td>
                                   </tr>
                                   <tr>
                                       <td>Biaya Sewa</td>
                                       <td><?= $mobilberhasil->biaya_sewa ?></td>
                                   </tr>
                                   <tr>
                                       <td>Total</td>
                                       <td></td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>

            
                       <!-- <div class="col-sm-4">
                       INI FOTO
                   </div> -->

                       <!-- /.card-body -->
                     
                       <!-- /.card-footer-->
                   </div>
                   <!-- /.card -->

       </section>
       <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

   <script>
       var element = document.getElementById('back-link');

       // Provide a standard href to facilitate standard browser features such as 
       //  - Hover to see link
       //  - Right click and copy link
       //  - Right click and open in new tab
       element.setAttribute('href', document.referrer);

       // We can't let the browser use the above href for navigation. If it does, 
       // the browser will think that it is a regular link, and place the current 
       // page on the browser history, so that if the user clicks "back" again,
       // it'll actually return to this page. We need to perform a native back to
       // integrate properly into the browser's history behavior
       element.onclick = function() {
           history.back();
           return false;
       }
   </script>