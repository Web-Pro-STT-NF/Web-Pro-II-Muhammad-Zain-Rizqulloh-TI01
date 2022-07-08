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
                           <li class="breadcrumb-item"><a href="<?= base_url('index.php/users')?>">Home</a></li>
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
                    $hidden = ['idedit' => $usersedit->id];
                    ?>
                   <?php echo form_open('users/save', '', $hidden) ?>
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
                                   <input id="id" name="id" value="<?= $usersedit->id ?>" type="number class="form-control">
                               </div>
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Username</label>
                           <div class="col-8">
                               <input id="usernamei" name="usernamei" value="<?= $usersedit->username ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Password</label>
                           <div class="col-8">
                               <input id="password" name="password" value="<?= $usersedit->password ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Email</label>
                           <div class="col-8">
                               <input id="email" name="email" value="<?= $usersedit->email ?>" type="text" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Create AT</label>
                           <div class="col-8">
                               <input id="created_at" name="created_at" value="<?= $usersedit->created_at ?>" type="date" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Last Login</label>
                           <div class="col-8">
                               <input id="last_login" name="last_login" value="<?= $usersedit->last_login ?>" type="date" class="form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="nama" class="col-4 col-form-label">Role</label>
                           <div class="col-8">
                               <input id="role" name="role" value="<?= $usersedit->role ?>" type="text" class="form-control">
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