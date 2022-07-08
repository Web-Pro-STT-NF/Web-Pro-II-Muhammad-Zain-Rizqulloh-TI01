   <!-- Main Sidebar Container -->
   
   <?php if ($this->session->userdata("ROLE") == "administrator") { ?>
       <aside class="main-sidebar sidebar-dark-primary elevation-4">
           <!-- Brand Logo -->
           <a href="<?php echo base_url() ?>index3.html" class="brand-link">
               <img src="<?php echo base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
               <span class="brand-text font-weight-light">CRent Backend</span>
           </a>



           <!-- Sidebar -->
           <div class="sidebar">
               <!-- Sidebar user (optional) -->
               <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                   <div class="image">
                       <img src="<?php echo base_url() ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                   </div>
                   <div class="info">
                       <a href="#" class="d-block">Admin Apip</a>
                   </div>
               </div>

               <!-- SidebarSearch Form -->
               <div class="form-inline">
                   <div class="input-group" data-widget="sidebar-search">
                       <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                       <div class="input-group-append">
                           <button class="btn btn-sidebar">
                               <i class="fas fa-search fa-fw"></i>
                           </button>
                       </div>
                   </div>
               </div>

               <!-- Sidebar Menu -->
               <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-tachometer-alt"></i>
                               <p>
                                   Kelola Rental
                                   <i class="right fas fa-angle-left"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="<?php echo base_url() ?>index.php/merk/index" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Merk</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="<?php echo base_url() ?>index.php/jenisperawatan/index" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Jenis Perawatan</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="<?php echo base_url() ?>index.php/mobil/index" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Mobil</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="<?php echo base_url() ?>index.php/sewa/index" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Daftar Sewa</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="<?php echo base_url() ?>index.php/perawatan/index" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Detail Perawatan</p>
                                   </a>
                               </li>
                               <li class="nav-item">
                                   <a href="<?php echo base_url() ?>index.php/users/index" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Data Users</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </nav>
               <!-- /.sidebar-menu -->
           </div>
           <!-- /.sidebar -->
       </aside>
   <?php } ?>