<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?= base_url() ?>assets/images/crent.png">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>C RENT</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="icon" type="image/png" href="/path/image.png"/>

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.css') ?>">

</head>

<style>
  <?php if ($this->session->userdata("ROLE") == "public") { ?>.lojin {
    visibility: hidden;
  }

  <?php } ?>
</style>

<body>

  <!-- ***** Preloader Start ***** -->

  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="<?= base_url() ?>assets/images/crent.png" width="25%" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">


            <li class="nav-item active"><a class="nav-link" href="fleet.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="offers.html">Offers</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog.html">Blog</a>
                <a class="dropdown-item" href="team.html">Team</a>
                <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                <a class="dropdown-item" href="terms.html">Terms</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>

            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/login') ?>" style="color:aqua">login</a></li>
            <li class="nav-item"><a class="nav-link" style="color:red" href="<?php echo base_url("index.php/login/logout") ?>">logout</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(<?= base_url() ?>assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4 style="color:aqua">Hanya dalam beberapa klik<br></h4>
            <h2>Rental mobil Tidak pernah semudah ini</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
<br>
  <div ><h5>Berbekal tenaga-tenaga profesional yang ahli dalam bidangnya, <br>
    kami terus mengembangkan diri untuk memberikan pelayanan rental mobil terbaik bagi pelanggan kami. </h5></div>
  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="product-item">
            <img src="<?= base_url() ?>assets/images/agya.jpg" alt="">

            <div class="down-content">
              <h4>Toyota Agya</h4>

              <h6><small>dari</small> RP.350.000 <small>per hari</small></h6>

              

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>


              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="<?php echo base_url('index.php/mobil/lihat?id=1'); ?>">Book Now</a>
                <?php } ?>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <img src="<?= base_url() ?>assets/images/xpander.jpg" alt="">

            <div class="down-content">
              <h4>Mitsubishi Xpander</h4>

              <h6><small>dari</small> Rp.370.000 <small>per hari</small></h6>

              

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>

              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="<?php echo base_url('index.php/mobil/lihat?id=2'); ?>">Book Now</a>
                <?php } ?>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <img src="<?= base_url() ?>assets/images/product-3-370x270.jpg" alt="">

            <div class="down-content">
              <h4>Mobil Panjang</h4>

              <h6><small>dari</small> Rp.320.000 <small>per hari</small></h6>

              

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>

              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="<?php echo base_url('index.php/mobil/lihat?id=3'); ?>">Book Now</a>
                <?php } ?>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <img src="<?= base_url() ?>assets/images/product-4-370x270.jpg" alt="">

            <div class="down-content">
              <h4>Mobil Balap</h4>

              <h6><small>dari</small> Rp.380.000 <small>per hari</small></h6>

              

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>

              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="#">Book Now</a>
                <?php } ?>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <img src="<?= base_url() ?>assets/images/r3.jpg" alt="">

            <div class="down-content">


              <h4>Toyota Ertiga</h4>

              <h6><small>dari</small> Rp.320.000 <small>per hari</small></h6>

              

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>

              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="<?php echo base_url('index.php/mobil/lihat?id=3'); ?>">Book Now</ahref=>
                  <?php } ?>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <img src="<?= base_url() ?>assets/images/product-6-370x270.jpg" alt="">

            <div class="down-content">
              <h4>It's a Car</h4>

              <h6><small>dari</small> Rp.299.000 <small>per hari</small></h6>

              

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>

              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="<?php echo base_url('index.php/hasil/lihat?id='); ?>">Book Now</a>
                <?php } ?>
              </span>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <ul class="pages">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="contact-form">
            <form action="#" id="contact">
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Pick-up location" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Return location" required="">
                  </fieldset>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Return date/time" required="">
                  </fieldset>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Enter full name" required="">

              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Enter email address" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Enter phone" required="">
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>


        <div class="card-body">
          <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped table-white">
                <tbody>
                  <tr>
                    <td>Id Detail</td>
                    <td><?= $hasilliat->id ?></td>
                  </tr>
                  <tr>
                    <td>Merk</td>
                    <td><?= $merkliat->produk ?></td>
                  </tr>
                  <tr>
                    <td>Nomor Polisi</td>
                    <td><?= $hasilliat->nopol ?></td>
                  </tr>
                  <tr>
                    <td>Warna hasil</td>
                    <td><?= $hasilliat->warna ?></td>
                  </tr>
                  <tr>
                    <td>Biaya Sewa</td>
                    <td><?= $hasilliat->biaya_sewa ?></td>
                  </tr>
                  <tr>
                    <td>Deskripsi</td>
                    <td><?= $hasilliat->deskripsi ?></td>
                  </tr>
                  <tr>
                    <td>CC</td>
                    <td><?= $hasilliat->cc ?></td>
                  </tr>
                  <tr>
                    <td>Tahun</td>
                    <td><?= $hasilliat->tahun ?></td>
                  </tr>
                </tbody>
              </table>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Book Now</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Bootstrap core JavaScript -->
      <script src="<?= base_url() ?>vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      <!-- Additional Scripts -->
      <script src="<?= base_url() ?>assets/js/custom.js"></script>
      <script src="<?= base_url() ?>assets/js/owl.js"></script>
</body>

</html>