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
    .card {
        margin: 0 180px 0 0;
       }


</style>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
        
       </section>

       <!-- Main content --> 
       <section class="content">

           <!-- Default box -->
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Create daftar Sewa</h3>

                   <div class="card-tools">
                       <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i> -->
                       </button>
                   </div>
               </div>
               <div class="card-body">
                   <?php echo form_open('sewa1/save') ?>
                   <form>
                       <div class="form-group row">
                          
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                      
                                   </div>
                                   <input id="id" name="id" type="hidden" value="1" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tanggal_mulai" class="col-4 col-form-label">Tanggal Mulai</label>
                           <div class="col-8">
                               <input id="tanggal_mulai" name="tanggal_mulai" type="date" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label>
                           <div class="col-8">
                               <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="tujuan" class="col-4 col-form-label">Tujuan</label>
                           <div class="col-8">
                               <input id="tujuan" name="tujuan" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="noktp" class="col-4 col-form-label">Nomor KTP</label>
                           <div class="col-8">
                               <input id="noktp" name="noktp" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                        
                           <div class="col-8">
                               <input id="users_id" name="users_id" type="hidden" value="25"class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                         
                           <div class="col-8">
                               <input id="mobil_id" name="mobil_id" type="hidden" value="3" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="offset-4 col-8">
                               <button name="submit" type="submit" class="btn btn-dark">Lihat Status Pesanan</button>
                           </div>
                       </div>
                   </form>
                   <!-- /.card-body -->
                   <?php echo form_close()?>
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
