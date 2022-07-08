   <!-- Content Wrapper. Contains page content -->

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
                       <div class="col-sm-8">
                           <table class="table table-bordered table-striped table-dark">
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

                        <?php if ($this->session->userdata("ROLE") == "public") { ?>
                            <a href="<?php echo base_url('index.php/sewa1/create'); ?>" id="itam" type="button" class="btn btn-dark">Pesan Sekarang Juga!</a>
                        <?php }?>

        
                        <?php if ($this->session->userdata("ROLE") == "administrator") { ?>
                           <input type="file" name="fotomobil" class="btn btn-info mt-2">
                           <button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button>
                           <!-- <br> -->
                           <!-- Nama File <?= $mobilliat->foto ?> -->
                           <!-- <br> -->
                           <!-- <input type="file" name="fotomobil" class="btn btn-info"> -->
                           <!-- <button class="btn btn-info mt-2" type="submit"><i class="fa-solid fa-image mr-2"></i>Upload Foto</button> -->
                        <?php }?> 
                           <?php echo form_close() ?>
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