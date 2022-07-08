   <!-- Content Wrapper. Contains page content -->
   <?php if ($this->session->userdata("ROLE") == "public") {
        redirect(base_url() . ''); ?>
   <?php } ?>

   <?php if ($this->session->userdata("ROLE") == "public") { ?>
    
   <?php } ?>

   <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1>Blank Page</h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Blank Page</li>
                       </ol>
                   </div>
               </div>
           </div><!-- /.container-fluid -->
       </section>

       <!-- Main content -->
       <section class="content">

           <!-- Default box -->
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title"></h3>

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
                   <div class="col-md-12">
                       <h3>
                           Data Mobil
                       </h3>
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>id</th>
                                   <!-- <th>Nomor Polisi</th> -->
                                   <th>Warna</th>
                                   <th>Biaya Sewa</th>
                                   <!-- <th>Deskripsi</th> -->
                                   <!-- <th>cc</th> -->
                                   <th>tahun</th>
                                   <th>merk_id</th>
                                   <!-- <th>foto</th> -->
                               

                               </tr>
                           </thead>
                           <tbody>
                               <?php
                                foreach ($list_mobil as $row) {
                                ?>
                                   <tr>
                                       <td><?= $row->id ?></td>

                                       <td><?= $row->warna ?></td>
                                       <td><?= $row->biaya_sewa ?></td>

                                       <td><?= $row->tahun ?></td>
                                       <td><?= $row->merk_id ?></td>

                                       <td>
                                           <a href="<?php echo base_url('index.php/mobil/lihat?id='); ?><?= $row->id ?>">
                                        
                                           </a>
                                       </td>
                                       <td>
                                           <a class="btn btn-success" href="<?php echo base_url('index.php/mobil/lihat?id='); ?><?= $row->id ?>">View</a>
                                           <a class="btn btn-info" href="<?php echo base_url('index.php/mobil/edit?id='); ?><?= $row->id ?>">Update</a>
                                           <a class="btn btn-danger" href="<?php echo base_url('index.php/mobil/delete?id='); ?><?= $row->id ?>" onclick="if(!confirm('Anda Yakinnn hapus data jenisperawatan id <?= $row->id ?>?')){return false}">Delete</a>
                                       </td>
                                   </tr>
                               <?php
                                }
                                ?>
                           </tbody>
                       </table>
                       <a class="btn btn-primary" href="<?php echo base_url('index.php/mobil/create') ?>" role="button">Tambah Data Mobil</a>

                       <table class="table">
                           <thead>
                           </thead>
                           <tbody>
                           </tbody>
                       </table>
                   </div>
               </div>
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