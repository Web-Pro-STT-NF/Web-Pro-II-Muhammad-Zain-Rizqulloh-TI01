 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1><?= $judul ?></h1>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="">Home</a></li>
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
                   <?php echo form_open('sewa/save') ?>
                   <form>
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="id">Id</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                      
                                   </div>
                                   <input id="id" name="id" type="number" class="form-control">
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
                           <label for="users_id" class="col-4 col-form-label">Id User</label>
                           <div class="col-8">
                               <input id="users_id" name="users_id" type="hidden" value="2"class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="mobil_id" class="col-4 col-form-label">Id Mobil</label>
                           <div class="col-8">
                               <input id="mobil_id" name="mobil_id" type="hidden" value="2" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="offset-4 col-8">
                               <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
