   <!-- Content Wrapper. Contains page content -->

   <style>

a:hover{
    color:darkblue;
}
</style>

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1>Data Spesifikasi users</h1>
               </div>
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="<?= base_url('index.php/merk')?>">Home</a></li>
                       <li class="breadcrumb-item active">Data Spesifikasi users</li>
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
               <h3 class="card-title">Data Spesifikasi users</h3>

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
               <div class="row mb-2">
                   <div class="col-sm-12">
                       <table class="table table-secondary">
                           <tbody>
                               <tr>
                                   <td>Id Username</td>
                                   <td><?= $users->id ?></td>
                               </tr>
                               <tr>
                                   <td>Username</td>
                                   <td><?= $users->username ?></td>
                               </tr>
                               <tr>
                                   <td>Password</td>
                                   <td><?= $users->password ?></td>
                               </tr>
                               <tr>
                                   <td>Email</td>
                                   <td><?= $users->email ?></td>
                               </tr>
                               <tr>
                                   <td>Created at</td>
                                   <td><?= $users->created_at ?></td>
                               </tr>
                               <tr>
                                   <td>Last login</td>
                                   <td><?= $users->last_login ?></td>
                               </tr>
                               <tr>
                                   <td>Status</td>
                                   <td><?= $users->status ?></td>
                               </tr>
                               <tr>
                                   <td>Role</td>
                                   <td><?= $users->role ?></td>
                               </tr>
                               
                           </tbody>
                       </table>
                   </div>

                   
                   <!-- <div class="col-sm-4">
                       INI FOTO
                   </div> -->
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