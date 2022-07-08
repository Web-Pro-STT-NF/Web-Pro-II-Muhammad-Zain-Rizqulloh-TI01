   <!-- Content Wrapper. Contains page content -->


   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>AdminLTE 3 | Blank Page</title>

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

       section .content{
        margin-right: 180px;
       }
   </style>

   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
     

       <!-- Main content -->
       <section class="content">

           <!-- Default box -->
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Detail Mobil</h3>

                   
               </div>
               <div class="card-body">
                   <div class="row mb-2">
                       <div class="col-sm-8">
                           <table class="table table-striped table-white">
                               <tbody>
                                   <tr>
                                       <td>Id Detail</td>
                                       <td><?= $mobilliat->id ?></td>
                                   </tr>
                                   <tr>
                                       <td>Merk</td>
                                       <td><?= $merkliat->produk ?></td>
                                   </tr>
                                   <tr>
                                       <td>Nomor Polisi</td>
                                       <td><?= $mobilliat->nopol ?></td>
                                   </tr>
                                   <tr>
                                       <td>Warna Mobil</td>
                                       <td><?= $mobilliat->warna ?></td>
                                   </tr>
                                   <tr>
                                       <td>Biaya Sewa</td>
                                       <td><?= $mobilliat->biaya_sewa ?></td>
                                   </tr>
                                   <tr>
                                       <td>Deskripsi</td>
                                       <td><?= $mobilliat->deskripsi ?></td>
                                   </tr>
                                   <tr>
                                       <td>CC</td>
                                       <td><?= $mobilliat->cc ?></td>
                                   </tr>
                                   <tr>
                                       <td>Tahun</td>
                                       <td><?= $mobilliat->tahun ?></td>
                                   </tr>
                               </tbody>
                           </table>
                       </div>

                       <div class="col-sm-4">
                           <?php echo form_open_multipart('mobil/upload') ?>

                           <input type="hidden" name="id" value="<?= $mobilliat->id ?>">

                           <?php
                            $img = base_url('/uploads/' . $mobilliat->foto);
                            // $array = get_headers($img);
                            // $string = $array[0];

                            // if (strpos($string, "200")) {
                            //    echo '<img src="' . $img . '" alt="foto" width="100%"/>';
                            // } else {
                            //    echo '<img src="' . base_url("/uploads/no-img.jpg") . '" alt="foto" width="100%"/>';
                            // }
                            if ($mobilliat->foto == null) {
                                echo '<img src="' . base_url("/uploads/noimage.jpg") . '" alt="foto" width="100%"/>';
                                echo '';
                                echo '';
                            } else {
                                echo '<img src="' . $img . '" alt="foto" width="100%"/>';
                            }
                            ?>

                           <!-- <br> -->
                           <!-- Nama File <?= $mobilliat->foto ?> -->
                           <!-- <br> -->
                           <!-- <input type="file" name="fotomobil" class="btn btn-info"> -->
                           <!-- <button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button> -->

                           <?php echo form_close() ?>
                           
                           <br>
                           <button>Pesan</button>
                       </div>
                       <!-- <div class="col-sm-4">
                       INI FOTO
                   </div> -->

                       <!-- /.card-body -->
                       <div class="card-footer">
                           Footer
                       </div>
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