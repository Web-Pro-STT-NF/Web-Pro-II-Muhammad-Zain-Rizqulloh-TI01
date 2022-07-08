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
                           <li class="breadcrumb-item"><a href="<?= base_url('index.php/mobil')?>">Home</a></li>
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
                   <h3 class="card-title"><?= $judul ?></h3>

                   <div class="card-tools">
                       <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                           <i class="fas fa-minus"></i>
                       </button>
                       <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                           <i class="fas fa-times"></i>
                       </button> -->
                   </div>
               </div>
               <div class="card-body">
                   <?php
                    $hidden = ['idedit' => $mobiledit->id];
                    ?>
                   <?php echo form_open('mobil/save', '', $hidden) ?>
                   <form>
                       <div class="form-group row">
                           <label class="col-4 col-form-label" for="id">id</label>
                           <div class="col-8">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <div class="input-group-text">
                                           <i class="fa fa-address-book-o"></i>
                                       </div>
                                   </div>
                                   <input id="id" name="id" value="<?= $mobiledit->id ?>" type="text" class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Nopol</label>
                           <div class="col-8">
                               <input id="nopol" name="nopol" value="<?= $mobiledit->nopol ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Warna</label>
                           <div class="col-8">
                               <input id="warna" name="warna" value="<?= $mobiledit->warna ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Biaya Sewa</label>
                           <div class="col-8">
                               <input id="biaya_sewa" name="biaya_sewa" value="<?= $mobiledit->biaya_sewa ?>" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Deskripsi</label>
                           <div class="col-8">
                               <input id="deskripsi" name="deskripsi" value="<?= $mobiledit->deskripsi ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">cc</label>
                           <div class="col-8">
                               <input id="cc" name="cc" value="<?= $mobiledit->cc ?>" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">tahun</label>
                           <div class="col-8">
                               <input id="tahun" name="tahun" value="<?= $mobiledit->tahun ?>" type="number" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Merk id</label>
                           <div class="col-8">
                               <input id="merk_id" name="merk_id" value="<?= $mobiledit->merk_id ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Foto</label>
                           <div class="col-8">
                               <input id="foto" name="foto" value="<?= $mobiledit->foto ?>" type="text" class="form-control">
                           </div>
                       </div>
                       
                       
                      
                       <div class="form-group row">
                           <div class="offset-4 col-8">
                               <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                           </div>
                       </div>
                   </form>
                   <?php echo form_close() ?>
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